<?php

namespace App\Http\Controllers;

use App\Result;
use App\session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Classroom;
use App\AddStudent;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session = Session::pluck('session_name', 'id');
        $class = Classroom::pluck('class_name', 'id');
        return view('result_from')->with('session', $session)->with('class',$class);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(request $request)
    {
        //dd($request);
        $roll = $request->roll;
        $session = $request->session;
        $class = $request->class;
        $shift = $request->shift;
        $section = $request->section;
        $id = $request->stuend_id;

        $resultinfo = DB::table('results')
                ->join('add_students', 'add_students.id', '=', 'results.student_id')
                ->where('session_id', $session)
                ->where('class_id', $class)
                ->where('shift_id', $shift)
                ->where('section_id', $section)
                ->where('roll', $roll)
                ->get();
                $profile = DB::table('results')
                ->join('add_students', 'add_students.id', '=', 'results.student_id')
                ->where('session_id', $session)
                ->where('class_id', $class)
                ->where('shift_id', $shift)
                ->where('section_id', $section)
                ->where('roll', $roll)
                ->get()->first();
                //dd($profile);
        return view('student_result', compact('resultinfo','profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
