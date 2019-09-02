<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Active;
use App\Gender;
use App\Subject;
use App\Language;
use App\Religion;
use App\BloodGroup;
use App\Nationality;
use App\Teacherinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $show_teacher = Teacherinfo::with(['gender','blood_groups','religion','nationality'])->orderBy('created_at','desc')->paginate(5);

        // return view('Admin.user.show_teacher')->with('show_teacher',$show_teacher);

         // For DropDown Value

         $show_teachers= User::with('teacherinfo')->where('role_id',3)->Paginate(5);
         //dd($show_teachers);
         return view('admin.user.show_teacher')->with('show_teacher',$show_teachers);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $language=Language::pluck('languagename','id');

        $gender = Gender::pluck('gender_name','id');
        $blood_groups = BloodGroup::pluck('blood_name', 'id');
        $religion = Religion::pluck('religion_name', 'id');
        $nationality = Nationality::pluck('nation_name', 'id');
        $active_name = Active::pluck('active_name','id');
        $subject_name = Subject::pluck('subject_name', 'id');

        return view('admin.user.add_teacher', compact('gender','language', 'blood_groups','religion', 'nationality','active_name','subject_name'));

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
            'date_of_birth' => 'required|date',
            'gender_id' => 'required',
            'contact_no' => 'required|max:198',
            'subject_id' => 'required',
            'present_address' => 'required|min:20|max:500',
            'permanent_address' => 'required|min:20|max:500',
            'religion_id' => 'required|max:198',
            'national_idcard' => 'required|max:198',
            'blood_id' => 'required|max:198',
            'nationaliti_id' => 'required|max:198',
            'language_id' => 'required|max:198',
            'joining_date' => 'required|max:198',
            'active_id' => 'required|max:198',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:198',
            'image' => 'required | mimes:jpeg,jpg,png',
        ]);

       // dd( $request);
        $imageName = time() ."_".rand(1000,5000). '.' .

        $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(
        base_path() . '/adminasset/images/teacherimages/', $imageName
        );
        $teacherAcc = User::create([
            'name' => $request->first_name,
            'image' =>$imageName,
            'role_id' =>3,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $teacher = new Teacherinfo(array(
            //dd( $request),
            'user_id' => $teacherAcc->id,
     'picture' =>$imageName,
    'first_name' => $request->first_name,
    'last_name'=> $request->last_name,
    'date_of_birth' =>$request->date_of_birth,
    'gender_id'=> $request->gender_id,
    'contact_no' => $request->contact_no,
    'subject_id'=> $request->subject_id,
    'present_address' =>$request->present_address,
    'permanent_address' => $request->permanent_address,
    'religion_id' => $request->religion_id,
    'national_idcard' => $request->national_idcard,
    'blood_id' => $request->blood_id,
    'nationaliti_id' => $request->nationaliti_id,
    'language_id' => $request->language_id,
    'joining_date' => $request->joining_date,
    'active_id' => $request->active_id

    ));
    //dd( $teacher );

    //dd( $teacher );
    if($teacher->save()){
        return \Redirect::route('admin.professor.index')->with('message', 'Your teacher add successful');
    }
    else{ return \Redirect::route('admin.professor.index')->with('message', 'Error');
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


        $teachers = Teacherinfo::with(['user','gender','language','nation','subject','religion','bloodgroup','active'])->where('user_id',$id)->get();
        //dd($teachers );
        return view("admin.user.single_teacher_info")->with("teachers",$teachers);


    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $language=Language::pluck('languagename','id');

        $gender = Gender::pluck('gender_name','id');
        $blood_groups = BloodGroup::pluck('blood_name', 'id');
        $religion = Religion::pluck('religion_name', 'id');
        $nationality = Nationality::pluck('nation_name', 'id');
        $active_name = Active::pluck('active_name','id');
        $subject_name = Subject::pluck('subject_name', 'id');
        //$teacher_edit=user::with(['teacherinfo'])->find($id);

    $teacher_edit = DB::table('users')->join('teacherinfos', 'teacherinfos.user_id', '=', 'users.id')->where('user_id',$id)->first();

        return view('admin.user.edit_teacher',compact('teacher_edit','gender','language', 'blood_groups','religion', 'nationality','active_name','subject_name'));




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

        $request->validate([
            'first_name' => 'required|max:198',
            'last_name' => 'required|max:198',
            'date_of_birth' => 'required|date',
            'gender_id' => 'required',
            'contact_no' => 'required|max:198',
            'subject_id' => 'required',
            'present_address' => 'required|min:20|max:500',
            'permanent_address' => 'required|min:20|max:500',
            'religion_id' => 'required|max:198',
            'national_idcard' => 'required|max:198',
            'blood_id' => 'required|max:198',
            'nationaliti_id' => 'required|max:198',
            'language_id' => 'required|max:198',
            'joining_date' => 'required|max:198',
            'active_id' => 'required|max:198',
            'image' => 'required | mimes:jpeg,jpg,png',
        ]);


         $imageName = time() ."_".rand(1000,5000). '.' .

       $request->file('image')->getClientOriginalExtension();

       $request->file('image')->move(
       base_path() . '/adminasset/images/teacherimages/', $imageName
       );
        $user = User::find($id);
$user ->name = $request->first_name;
$user ->image = $imageName;
$user ->role_id = 3;
$user->save();

        $teacher = Teacherinfo::where('user_id',$id)->first();
        // dd($teacher);
        $teacher->picture = $imageName;
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->date_of_birth = $request->date_of_birth;
        $teacher->gender_id = $request->gender_id;
        $teacher->contact_no = $request->contact_no;
        $teacher->subject_id = $request->subject_id;
        $teacher->present_address = $request->present_address;
        $teacher->permanent_address = $request->permanent_address;
        $teacher->religion_id = $request->religion_id;
        $teacher->blood_id = $request->blood_id;
        $teacher->nationaliti_id = $request->nationaliti_id;
        $teacher->national_idcard = $request->national_idcard;
        $teacher->language_id = $request->language_id;
        $teacher->joining_date = $request->joining_date;
        $teacher->active_id = $request->active_id;

        if($teacher->save()){
            return \Redirect::route('admin.professor.index')->with('message', 'Your teacher Update successful');
        }
            else{
                return \Redirect::route('admin.professor.index')->with('message', 'Error');
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
         $image=User::where('id',$id)->first();
         $imagepath=public_path('\adminasset\images\teacherimages\\').$image->image;
        if(file_exists( $imagepath)){
            unlink($imagepath);

        }
    $forcedele=  User::where('id', $id)->forcedelete();
        if($forcedele == true) {
            return \Redirect::route('admin.professor.index')
                ->with('message', 'Professor Deleted!');
        }
        else{
            return \Redirect::route('admin.professor.index')
                ->with('message', 'Error!');
        }
    }


}
