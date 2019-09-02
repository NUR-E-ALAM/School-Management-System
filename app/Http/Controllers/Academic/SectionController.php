<?php

namespace App\Http\Controllers\Academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;
use App\Session;
use App\Classroom;
use App\Shift;
use App\Active;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $classroom = Classroom::pluck('class_name','id');
       $shift = Shift::pluck('shift_name','id');
        $active = Active::pluck('active_name','id');
        $session=Session::pluck('session_name','id');

        $section = Section::orderBy('created_at', 'desc')->paginate(8);

        return view('admin.academic.section')->with('section', $section)->with('classroom',$classroom)->with('shift',$shift)->with('session', $session)->with('active',$active);
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
        $list = new Section();

        $list->section_name = $request->section_name;
        $list->class_id = $request->class_id;
        $list->session_id = $request->session_id;
        $list->shift_id = $request->shift_id;
        $list->active_id = $request->active_id;
        $list->save();
        if ($list->id) {
            return response()->json(['success' => true, 'message' => 'Section Created!!'], 200);
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
         $info = Section::find($id);

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
         $list = Section::find($id);
        $list->class_id = $request->class_id;
        $list->section_name = $request->section_name;
        $list->active_id = $request->active_id;
        $list->save();
        if ($list->id) {
            return response()->json(['success' => true, 'message' => 'Section Update!!'], 200);
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
        if (Section::destroy($id)) {
            return response()->json(['success' => true, 'message' => 'Section Deleted']);
        } else {
            return response()->json(['success' => false, 'message' => 'Deleted Failed']);
        }
    }
    public function selectshift($id){
        $shift = DB::table("shifts")
                    ->where("class_id",$id)
                    ->get();

         return json_encode($shift);

    }
    public function selectsection($id){
        $section = DB::table("sections")
                    ->where("shift_id",$id)
                    ->get();

         return json_encode($section);

    }
}
