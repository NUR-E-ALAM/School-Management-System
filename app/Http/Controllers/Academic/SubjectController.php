<?php

namespace App\Http\Controllers\Academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subject;
use App\Classroom;
use App\Active;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classroom = Classroom::pluck('class_name','id');
        $active = Active::pluck('active_name','id');
         $subjects = Subject::orderBy('created_at', 'desc')->simplePaginate(8);
        //  foreach($subjects as $all){
        //     dd($all->classroom);
        // }

        return view('admin.academic.subject')->with('subjects', $subjects)->with('classroom',$classroom)->with('active',$active);
         
       
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
        
        $list = new Subject();
        $list->class_id = $request->class_id;
        $list->subject_name = $request->subject_name;
        $list->active_id = $request->active_id;
        $list->save();
        if ($list->id) {
            return response()->json(['success' => true, 'message' => 'Exam Created!!'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Error!!'], 200);
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
         $info = Subject::find($id);

        return response()->json($info);
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
        
          $list = Subject::find($id);
        $list->class_id = $request->class_id;
        $list->subject_name = $request->subject_name;
        $list->active_id = $request->active_id;
        $list->save();
        if ($list->id) {
            return response()->json(['success' => true, 'message' => 'Subject Update!!'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Error!!'], 200);
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
        if (Subject::destroy($id)) {
            return response()->json(['success' => true, 'message' => 'Subject Deleted']);
        } else {
            return response()->json(['success' => false, 'message' => 'Deleted Failed']);
        }
    }
}
