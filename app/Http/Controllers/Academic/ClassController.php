<?php

namespace App\Http\Controllers\Academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classroom;
use App\Session;
use App\Active;


class ClassController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


       $session=Session::pluck('session_name','id');
       $active=Active::pluck('active_name','id');

           $classname=Classroom::orderBy('created_at','desc')->paginate(4);
        //    foreach($classname as $all){
        //     dd($all->session);
        // }
           return view('admin.classroom.create')->with('classname',$classname)->with('session',$session)->with('active',$active);


          //form info #endregion


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.classroom.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $list = new Classroom();
        $list->class_name = $request->class_name;
        $list->session_id = $request->session_id;
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
         $info = Classroom::find($id);

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

        $list = Classroom::find($id);
        $list->class_name = $request->class_name;
        $list->session_id = $request->session_id;
      $list->active_id = $request->active_id;
        $list->save();
        if ($list->save()) {
            return response()->json(['success' => true, 'message' => 'Class Upadate!!'], 200);
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
      if (Classroom::destroy($id)) {
            return response()->json(['success' => true, 'message' => 'Exam Deleted']);
        } else {
            return response()->json(['success' => false, 'message' => 'Deleted Failed']);
        }

    }


}
