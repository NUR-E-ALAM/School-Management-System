<?php

namespace App\Http\Controllers\Exam;
use App\Exam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exam=exam::orderBy('created_at','desc')->paginate(8);
        return view('admin.exam.exam')->with('examname', $exam);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.exam.exam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'exam_name'=>'required|min:10',
            'exam_start'=>'required',
            'exam_end'=>'required'
        ]);
        $list = new exam(array(
                'classexamname' => $request->exam_name,
                'examstart' => $request->exam_start,
                'examend' => $request->exam_end
                 ));
       if($list->save()) {
            
            return \Redirect::route('admin.myexam.index') ->with('message', 'Your Exam add successful');
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
        $exam=Exam::find($id);
        //dd($exam);
        return view('admin.exam.edit_exam')->with('examedit',$exam);
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
        $validatedData = $request->validate([
            'exam_name'=>'required|min:10',
            'exam_start'=>'required',
            'exam_end'=>'required'
        ]);

        $exam = Exam::find($id);
        $exam->update([
            'classexamname' => $request->exam_name,
                'examstart' => $request->exam_start,
                'examend' => $request->exam_end
            ]);
            if($exam->save()) {
                //return \Redirect::route('admin.examindex') ->with('message', 'Your Exam add successful');
                return \Redirect::route('admin.myexam.index') ->with('message', 'Your Exam update successful');
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
        if(Exam::destroy($id)) {
            return \Redirect::route('admin.myexam.index')
                ->with('message', 'List Deleted!');
        }
        else{
            return \Redirect::route('admin.myexam.index')
                ->with('message', 'Error!');
        }
    }
}
