<?php

namespace App\Http\Controllers\Academic;

use App\Session;
use App\Classroom;
use App\AddStudent;
use App\StudentAttendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class DailyAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $classroom = Classroom::pluck('class_name','id');
        $session = session::pluck('session_name','id');
        
        return view('admin.academic.student_search',compact('classroom','session'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->has('date')){
             $date=$request->date;
        $session=$request->session;
        $class=$request->class;
        $shift=$request->shift;
        $section=$request->section;
      
        $attendace = DB::table('student_attendances')->join('add_students', 'add_students.id', '=', 'student_attendances.student_id')->where('date', $date)
        ->where('class_id', $class)
       ->where('shift_id', $shift)
       ->where('section_id', $section)
       ->get();

       

         return view('admin.academic.student_attendance_view',compact('attendace'));
        }
        else{
            
    $session=$request->session;
        $class=$request->class;
        $shift=$request->shift;
        $section=$request->section;
      
        $attendace = DB::table('academyinfos')->join('add_students', 'add_students.id', '=', 'academyinfos.student_id')->where('session_id', $session)
        ->where('class_id', $class)
       ->where('shift_id', $shift)
       ->where('section_id', $section)
       ->get();
   return view('admin.academic.student_attendance',compact('attendace'));

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
        //dd($request);
        $date = $request->date;
        $class = $request->class_id;
        $session = $request->session_id;
        $class = $request->class_id;
        $shift = $request->shift_id;
        $section= $request->section_id;
        $student = $request->student_id;
        $user_id =Auth::user()->id; 
        
        $pf = $request->status;
    
  //dd($session);
               foreach(array_keys($pf) as  $v){
                
                  $attendance = new StudentAttendance();
                     $attendance->status=$pf[$v];
                 $attendance->student_id=$student[$v];
                     $attendance->date=$date;
                     $attendance->session_id=$session[$v];    
                    $attendance->section_id=$section[$v];            $attendance->class_id=$class[$v];  
                     $attendance->shift_id=$shift[$v];  
                     $attendance->user_id=$user_id;  
                     $attendance->save();
                
             }
              

if($attendance->save()){
        return \Redirect::route('admin.daily_attendance.index')->with('message', 'Your Attendace add successful');
    }
    else{ return \Redirect::route('admin.daily_attendance.index')->with('message', 'Error');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
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
          $date = $request->date;
        $class = $request->class_id;
        $class = $request->class_id;
        $shift = $request->shift_id;
        $section= $request->section_id;
        $student = $request->student_id;
        $user_id =Auth::user()->id; 
        
        $pf = $request->input('status');
        $checkboxValue = $request->input('status');
       // $checkboxValue = isset($request->status[0]) ? 1 : 0;
        // $status = (@$request->status=="on")?0:1;
        
  //dd($student);
               foreach(array_keys($pf) as  $v){
                
                  $attendance = StudentAttendance();
                     $attendance->status=$pf[$v];
                     $attendance->student_id=$student[$v];
                     $attendance->date=$date;  
                     $attendance->section_id=$section[$v];  
                     $attendance->class_id=$class[$v];  
                     $attendance->shift_id=$shift[$v];  
                     $attendance->user_id=$user_id;  
                     $attendance->update();
                
             }
              

if($attendance->update()){
        return \Redirect::route('admin.daily_attendance.index')->with('message', 'Your Attendace add successful');
    }
    else{ return \Redirect::route('admin.daily_attendance.index')->with('message', 'Error');
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
        //
    }

     public function showattendance(Request $request)
    {
        $date=$request->date;
        $session=$request->session;
        $class=$request->class;
        $shift=$request->shift;
        $section=$request->section;
      
        $attendace = DB::table('academyinfos')->join('add_students', 'add_students.id', '=', 'academyinfos.student_id')->where('session_id', $session)
        ->where('date', $date)
        ->where('class_id', $class)
       ->where('shift_id', $shift)
       ->where('section_id', $section)
       ->get();
       dd($attendace); exit;

         return view('admin.academic.student_attendance',compact('attendace'));


        
    }
}
