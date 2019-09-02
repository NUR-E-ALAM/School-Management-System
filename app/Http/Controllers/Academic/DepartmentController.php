<?php

namespace App\Http\Controllers\Academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use App\Active;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
       
        $active = Active::pluck('active_name','id');
         $department = Department::orderBy('created_at', 'desc')->paginate(4);

        return view('admin.academic.department')->with('departmental',$department)->with('active',$active);
         
       
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
         $list = new Department();
        $list->department = $request->department;
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
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $info = Department::find($id);

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
        $list =  Department::find($id);
        $list->department = $request->department;
        $list->active_id = $request->active_id;
        $list->save();
        if ($list->save()) {
            return response()->json(['success' => true, 'message' => 'Department Updated']);
        } else {
            return response()->json(['success' => false, 'message' => 'Update Failed']);
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
      if (Department::destroy($id)) {
            return response()->json(['success' => true, 'message' => 'Department Deleted']);
        } else {
            return response()->json(['success' => false, 'message' => 'Deleted Failed']);
        }
    }
}
