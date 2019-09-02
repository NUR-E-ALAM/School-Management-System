<?php

namespace App\Http\Controllers\Exam;

use App\Exam;
use App\Session;
use App\Subject;
use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subject = Subject::pluck('subject_name', 'id');
        $session = session::pluck('session_name', 'id');
        $examname = Exam::pluck('classexamname', 'id');
        return view('admin.exam.managemarks')->with('examname', $examname)->with('session', $session)->with('subject', $subject);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->has('examname')) {
            $date = $request->date;
            $session = $request->session;
            $class = $request->class;
            $shift = $request->shift;
            $section = $request->section;
            //   my function
            $examname = $request->examname;
            $subjectname = $request->subject;
            $attendace = DB::table('academyinfos')
                ->join('add_students', 'add_students.id', '=', 'academyinfos.student_id')
                ->where('session_id', $session)
                ->where('class_id', $class)
                ->where('shift_id', $shift)
                ->where('section_id', $section)
                ->get();

            // dd($attendace);

            return view('admin.exam.manage_mark_from', compact('attendace', 'examname', 'subjectname'));
        } else {

            $session = $request->session;
            $class = $request->class;
            $shift = $request->shift;
            $section = $request->section;

            $attend1ace = DB::table('academyinfos')->join('add_students', 'add_students.id', '=', 'academyinfos.student_id')->where('session_id', $session)
                ->where('class_id', $class)
                ->where('shift_id', $shift)
                ->where('section_id', $section)
                ->get();
            return view('admin.exam.managemarks', compact('attendace1'));
        }
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
        $subjectname = $request->subject_id;
        $rollno = $request->roll;
        $exmaname = $request->examname_id;
        $class = $request->class_id;
        $session = $request->session_id;
        $class = $request->class_id;
        $shift = $request->shift_id;
        $section = $request->section_id;
        $student = $request->student_id;
        $user_id = Auth::user()->id;
        $pf = $request->mark;


        // dd($request);
        foreach (array_keys($pf) as  $v) {

            $attendance = new Result();
            $attendance->mark = $pf[$v];
            $attendance->roll = $rollno[$v];
            $attendance->student_id = $student[$v];
            $attendance->subject_id = $subjectname;
            $attendance->exam_id = $exmaname;
            $attendance->session_id = $session[$v];
            $attendance->section_id = $section[$v];
            $attendance->class_id = $class[$v];
            $attendance->shift_id = $shift[$v];
            $attendance->user_id = $user_id;
            $attendance->save();
        }


        if ($attendance->save()) {
            return \Redirect::route('admin.manage_marks.index')->with('message', 'Your Mark add add successful');
        } else {
            return \Redirect::route('admin.daily_attendance.index')->with('message', 'Error');
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
