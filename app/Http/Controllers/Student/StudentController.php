<?php

namespace App\Http\Controllers\Users;

use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gender;
use App\Blood_group;
use App\Religion;
use App\Nationality;

use App\Classroom;
use App\Session;
use App\Shift;
use App\Section;
use App\Dormitorie;
use App\Transport;
use App\Gurdian;
use App\Classroom_student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

// return view('admin.user.addstudent');

        $gender = Gender::pluck('gender_name', 'id');
        $blood_groups = Blood_group::pluck('blood_name', 'id');
        $religion = Religion::pluck('religion_name', 'id');
        $nationality = Nationality::pluck('nation_name', 'id');

        $classname = Classroom::pluck('classname');
        $session = Session::pluck('sessionname');
        $shift = Shift::pluck('name');
        $section = Section::pluck('sectionname');
        $dormitorie = Dormitorie::pluck('dormitory_name','id');
        $dormitorie_room = Dormitorie::pluck('numberof_room');
        $transport = Transport::pluck('route_name');


        // return view('admin.user.addstudent')->with('genders',$gender)->with('blood_groups',$blood_groups)->with('religions',$religion)->with('nationalities',$nationality);
        return view('admin.user.addstudent', compact('gender', 'blood_groups','religion', 'nationality','classname','session','shift','section','dormitorie','dormitorie_room','transport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $gender = Gender::pluck('name', 'id');
        // $blood_groups = Blood_group::pluck('name', 'id');
        // $religion = Religion::pluck('name', 'id');
        // return view('admin.addstudent')->with('genders',$gender)->with('blood_groups',$blood_groups)->with('religions',$religion);
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

$studentAcc = User::create([
    'name' => $request->first_name,
    'email' => $request->email,
    'password' => Hash::make($request->password),
]);
$gurdian = Gurdian::create([
    'student_id' => $request->$studentAcc->id,
'father_name' => $request->father_name,
'mother_name' => $request->mother_name,
'phone' => $request->phone,
]);
$imageName = time() ."_".rand(1000,5000). '.' .

$request->file('image')->getClientOriginalExtension();

$request->file('image')->move(
base_path() . '/public/adminasset/images/student_images/', $imageName
);
$random = (str). str_random(10);

$student = new Student(array(
    'gurdian_id' =>$request->$gurdian->id,
    'registration_no' =>$request->$random,
    'email' => $request->email,
'password' => $request-> Hash::make($request->password),
'first_name' => $request->first_name,
'last_name' => $request->last_name,
'date_of_birth' => $request->dob,
'blood_group' => $request->blood_name,
'picture' => $request->$imageName,
'gender' => $request->gender_name,
'contact_no' => $request->phone_no,
'present_address' => $request->present_address,
'permanent_address' => $request->permanent_address,
'religion' => $request->religion_name,
'nationality' => $request->nation_name,
'dormitory_roomnumber' => $request->dormitory_name,
'dormitory_id' => $request->numberof_room,
'transport_id' => $request->route_name,
'language' => $request->language
));
//dd($student);

$class_room_student = Classroom_student::create([
    'classroom_id' => $request->$studentAcc->id,
'section_id' => $request->father_name,
'student_id' => $request->mother_name,
'rollnumber' => $request->phone,
]);
if($class_room_student->save()){
    return \Redirect::route('addstudent')->with('message','Student Add Successful !!');
}



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
