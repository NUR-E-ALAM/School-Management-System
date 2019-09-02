<?php

namespace App\Http\Controllers\Academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Session;
use App\Classrutine;
use App\Minute;
use App\Hour;
use App\Classroom;
use App\Shift;
use App\Subject;
use App\Teacherinfo;
use App\Active;
use App\Day;
class ClassRoutinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $day = Day::pluck('day_name', 'id');
        $minute = Minute::pluck('minute_name', 'id');
        $hour = Hour::pluck('hour_name', 'id');


        $teacher = Teacherinfo::pluck('first_name', 'id');

        $classname = Classroom::pluck('class_name','id');
        $session = Session::pluck('session_name','id');
        $shift = Shift::pluck('shift_name','id');
        $sub_name = Subject::pluck('subject_name', 'id');
        $active = Active::pluck('active_name','id');
       // dd($session);
        // return view('admin.user.addstudent')->with('genders',$gender)->with('blood_groups',$blood_groups)->with('religions',$religion)->with('nationalities',$nationality);
        return view('admin.academic.classroutine', compact('day','teacher','sub_name', 'minute','hour', 'classname','session','shift','active'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $list = new Classrutine();

        $list->session_id = $request->session_id;
        $list->class_id = $request->class_id;
        $list->shift_id = $request->shift_id;
        $list->subject_id = $request->subject_id;
        $list->professor_id = $request->professor_id;
        $list->day_id = $request->day_id;
        $list->s_hour_id = $request->s_hour_id;
        $list->s_minute_id = $request->s_minute_id;
        $list->e_hour_id = $request->e_hour_id;
        $list->e_minute_id = $request->e_minute_id;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
