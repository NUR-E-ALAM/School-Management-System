<?php

namespace App\Http\Controllers\Exam;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Grade;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //for add value

        //for show exam info
        $grade=Grade::orderBy('created_at','desc')->paginate(8);
        return view('admin.exam.examgrade')->with('examgrade', $grade);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);

$validatedData = $request->validate([
            'gradename'=>'required|min:1',
            'gradep'=>'required',
            'markf'=>'required',
            'gradeu'=>'required'
        ]);
        $list = new Grade(array(
                'graden' => $request->gradename,
                'gradep' => $request->gradep,
                'markform' => $request->markf,
                'markupto' => $request->gradeu,
                 ));
       if($list->save()) {
            
            return \Redirect::route('admin.grade.index') ->with('message', 'Your Grade Mark  add successful');
       }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $grade=Grade::find($id);
        //dd($exam);
        return view('admin.exam.edit_grade')->with('examgrade',$grade);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        {
        $validatedData = $request->validate([
          'graden'=>'required|min:1',
            'gradep'=>'required',
            'markform'=>'required',
            'markupto'=>'required'
        ]);

        $grade = Grade::find($id);
        $grade->update([
             'graden' => $request->graden,
                'gradep' => $request->gradep,
                'markform' => $request->markform,
                'markupto' => $request->markupto,
        ]);
            if($grade->save()) {
                //return \Redirect::route('admin.examindex') ->with('message', 'Your Exam add successful');
                return \Redirect::route('admin.grade.index') ->with('message', 'Your Grade info   update successful');
           }
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Grade::destroy($id)) {
            return \Redirect::route('admin.grade.index')
                ->with('message', 'List Deleted!');
        }
        else{
            return \Redirect::route('admin.grade.index')
                ->with('message', 'Error!');
        }
    }
}
