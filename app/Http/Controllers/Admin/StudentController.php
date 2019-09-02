<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\AddStudent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gender;
use App\BloodGroup;
use App\Religion;
use App\Nationality;
use App\Language;
use App\Classroom;
use App\Session;
use App\Subject;
use App\Shift;
use App\Section;
use App\Active;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Academyinfo;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $student= User::with('addstudent')->where('role_id',4)->latest()->Paginate(5);
       // dd($student);
        return view('admin.user.show_student')->with('studentall',$student);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gender = Gender::pluck('gender_name', 'id');
        $blood_groups = BloodGroup::pluck('blood_name', 'id');
        $religion = Religion::pluck('religion_name', 'id');
        $nationality = Nationality::pluck('nation_name', 'id');
        $language = Language::pluck('languagename', 'id');

        $classname = Classroom::pluck('class_name','id');
        $session = Session::pluck('session_name','id');
        $shift = Shift::pluck('shift_name','id');
        $section = Section::pluck('section_name','id');
        $active = Active::pluck('active_name','id');

        // return view('admin.user.addstudent')->with('genders',$gender)->with('blood_groups',$blood_groups)->with('religions',$religion)->with('nationalities',$nationality);
        return view('admin.user.addstudent', compact('gender','language', 'blood_groups','religion', 'nationality','classname','session','shift','section','active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:198',
            'last_name' => 'required|max:198',
            'father_name' => 'required|max:198',
            'mother_name' => 'required|max:198',
            'date_of_birth' => 'required|date',
            'gender_id' => 'required',
            'contact_no' => 'required|max:198',
            'facontact' => 'required',
            'present_address' => 'required|min:20|max:500',
            'permanent_address' => 'required|min:20|max:500',
            'religion_id' => 'required|max:198',
            'nationality_id' => 'required|max:198',
            'blood_id' => 'required|max:198',
             'reg_no' => 'required|max:198',
             'roll_no' => 'required|max:198|unique:add_students',
            'language_id' => 'required|max:198',
            'active_id' => 'required|max:198',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:198',
            'image' => 'required | mimes:jpeg,jpg,png',
        ]);


       //dd($request);
      $imageName = time() ."_".rand(1000,5000). '.' .

       $request->file('image')->getClientOriginalExtension();

       $request->file('image')->move(
       base_path() . '/adminasset/images/teacherimages/', $imageName
       );
       $studentAC = User::create([
        'name' => $request->first_name,
        'image' =>$imageName,
        'role_id' =>4,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);



    $student = AddStudent::create([
'user_id' =>$studentAC->id,
'first_name' => $request->first_name,
'last_name' => $request->last_name,
'father_name' => $request->father_name,
'mother_name' => $request->mother_name,
 'facontact' => $request->facontact,
'date_of_birth' => $request->date_of_birth,
'picture' =>$imageName,
'contact_no' => $request->contact_no,
'language_id' => $request->language_id,
'religion_id' => $request->religion_id,
'blood_id' => $request->blood_id,
'gender_id' => $request->gender_id,
'present_address' => $request->present_address,
'permanent_address' => $request->permanent_address,
'nationality_id' => $request->nationality_id,
'active_id' => $request->active_id

    ]);


       $academic = new Academyinfo(array(
        'student_id' =>$student->id,
        'user_id' =>$studentAC->id,
         'reg_no' =>$request->reg_no,
        'roll_no' =>$request->roll_no,
        'session_id' =>$request->session,
        'section_id' =>$request->section,
        'class_id' =>$request->class,
        'shift_id' =>$request->shift

));

if($academic->save()){
    return \Redirect::route('admin.addstudent.index')->with('message', 'Your Student add successful');
}
else{ return \Redirect::route('admin.addstudent.index')->with('message', 'Error');
}

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teachers = AddStudent::with(['user','gender','language','nation','subject','religion','bloodgroup','active'])->where('user_id',$id)->get();
        //dd($teachers );
        return view("admin.user.single_student_info")->with("teachers",$teachers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gender = Gender::pluck('gender_name', 'id');
        $blood_groups = BloodGroup::pluck('blood_name', 'id');
        $religion = Religion::pluck('religion_name', 'id');
        $nationality = Nationality::pluck('nation_name', 'id');
        $language = Language::pluck('languagename', 'id');

        $classname = Classroom::pluck('class_name','id');
        $session = Session::pluck('session_name','id');
        $shift = Shift::pluck('shift_name','id');
        $section = Section::pluck('section_name','id');
        $active = Active::pluck('active_name','id');

 $student = AddStudent::where('user_id',$id)->first();
 $academy = Academyinfo::where('user_id',$id)->first();

 //dd($academy);
       return view('admin.user.edit_student', compact('student','academy','gender','language', 'blood_groups','religion', 'nationality','classname','session','shift','section','active'));
//$student_edit = AddStudent ::with('academyinfo')->where('user_id',$id)->get()->first();
 //dd($student_edit);
return view('admin.user.edit_student');

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'first_name' => 'required|max:198',
            'last_name' => 'required|max:198',
            'father_name' => 'required|max:198',
            'mother_name' => 'required|max:198',
            'date_of_birth' => 'required|date',
            'gender_id' => 'required',
            'contact_no' => 'required|max:198',
            'facontact' => 'required',
            'present_address' => 'required|min:20|max:500',
            'permanent_address' => 'required|min:20|max:500',
            'religion_id' => 'required|max:198',
            'nationality_id' => 'required|max:198',
            'blood_id' => 'required|max:198',
             'reg_no' => 'required|max:198',
             'roll_no' => 'required|max:198',
            'language_id' => 'required|max:198',
            'active_id' => 'required|max:198',


        ]);


        $user = User::find($id);
        $user ->name = $request->first_name;
        $user->save();
          $student= AddStudent::where('user_id',$id)->first();
             $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->date_of_birth = $request->date_of_birth;
        $student->contact_no= $request->contact_no;
        $student->language_id = $request->language_id;
        $student->religion_id = $request->religion_id;
        $student->blood_id = $request->blood_id;
        $student->gender_id = $request->gender_id;
        $student->present_address = $request->present_address;
        $student->permanent_address = $request->permanent_address;
        $student->nationality_id = $request->nationality_id;
        $student->active_id = $request->active_id;
           $student->save();

            $academic = Academyinfo::where('user_id',$id)->first();
            //dd($request);

                  $academic->reg_no = $request->reg_no;
                $academic->roll_no = $request->roll_no;
                $academic->session_id = $request->session;
                $academic->section_id = $request->section;
                $academic->class_id = $request->class;
                $academic->shift_id = $request->shift;



if($academic->save()){
    return \Redirect::route('admin.addstudent.index')->with('message', 'Your Student add successful');
}
else{ return \Redirect::route('admin.addstudent.index')->with('message', 'Error');
}
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image=User::where('id',$id)->first();
        $imagepath=public_path('\adminasset\images\teacherimages\\').$image->image;
       if(file_exists( $imagepath)){
           unlink($imagepath);

       }

    $forcedele=  User::where('id', $id)->forcedelete();
        if($forcedele == true) {
            return \Redirect::route('admin.addstudent.index')
                ->with('message', 'Student Deleted!');
        }
        else{
            return \Redirect::route('admin.addstudent.index')
                ->with('message', 'Error!');
        }
    }
    // public function selectsession()
    // {
    //     $session = DB::table("sessions")->lists("session_name","id");
    //     return view('admin.user.addstudent',compact('session'));
    // }

    public function selectclass($id){
        $class = DB::table("classrooms")
                    ->where("session_id",$id)
                    ->get();

         return json_encode($class);

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
    public function selectsubject($id){
        $section = DB::table("subjects")
                    ->where("class_id",$id)
                    ->get();

         return json_encode($section);

    }


}
