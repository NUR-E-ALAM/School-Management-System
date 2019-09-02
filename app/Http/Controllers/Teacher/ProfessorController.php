<?php

namespace App\Http\Controllers\Users;

use App\Teacherinfo;
use App\Gender;
use App\Blood_group;
use App\Religion;
use App\Nationality;
use App\Active;
use App\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
$gender = Gender::pluck('gender_name', 'id');
$blood_groups = Blood_group::pluck('blood_name', 'id');
$religion = Religion::pluck('religion_name', 'id');
$nationality = Nationality::pluck('nation_name', 'id');
$active_name = Active::pluck('active_name', 'id');

return view('admin.user.add_teacher', compact('gender', 'blood_groups','religion', 'nationality','active_name'));


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
        $teacherAcc = User::create([
            'name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $imageName = time() ."_".rand(1000,5000). '.' .
   
        $request->file('image')->getClientOriginalExtension();
        
        $request->file('image')->move(
        base_path() . '/public/adminasset/images/teacherimages/', $imageName
        );
        $teacher = new Teacherinfo(array(
            'user_id' => $teacherAcc->id,
     'picture' =>$imageName,
    'first_name' => $request->first_name,
    'last_name' => $request->last_name,
    'date_of_birth' => $request->date_of_birth,
    'gender' => $request->gender,
    'contact_no' => $request->contact_no,
    'email' => $request->email,
    'password' => Hash::make($request->password),
    'present_address' => $request->present_address,
    'permanent_address' => $request->permanent_address,
    'religion' => $request->religion,
    'nationality' => $request->nationality,
    'blood_group' => $request->blood_group,
    'national_idcard' => $request->national_idcard,
    'language' => $request->language,
    'joining_date' => $request->joining_date,
    'active' => $request->active
  
    ));
    //dd( $teacher );
    
    //dd( $teacher );
    if($teacher->save()){
        return \Redirect::route('professor')->with('message', 'Teacher add successful');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
        $show_teachers=Teacherinfo::Paginate(5);
        return view('Admin.user.show_teacher')->with('show_teacher',$show_teachers,'gender');
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
        $teacher = Teacherinfo::find($id);
        //dd($list);
        $imageName = time() ."_".rand(1000,5000). '.' .
   
$request->file('image')->getClientOriginalExtension();

$request->file('image')->move(
base_path() . '/public/adminasset/images/teacherimages/', $imageName
);
$teacher->update([
    'picture' =>$imageName,
    'first_name' => $request->first_name,
    'last_name' => $request->last_name,
    'date_of_birth' => $request->dob,
    'gender' => $request->gender_name,
    'contact_no' => $request->phone_no,
    'email' => $request->email,
    'password' => Hash::make($request->password),
    'present_address' => $request->present_address,
    'permanent_address' => $request->permanent_address,
    'religion' => $request->religion_name,
    'nationality' => $request->nation_name,
    'blood_group' => $request->blood_name,
    'national_idcard' => $request->national_idcard,
    'language' => $request->language,
    'joining_date' => $request->joining_date,
    'active' => $request->active
]);






//return \Redirect::route('lists.edit', array($list->slug))
//    ->with('message', 'Your list has been updated!');
return \Redirect::route('professor')
            ->with('message', 'Your Professor has been updated!');

           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Teacherinfo::destroy($id)) {
            return \Redirect::route('professor')
                ->with('message', 'Professor Deleted!');
        }
        else{
            return \Redirect::route('professor')
                ->with('message', 'Error!');
        }
    }
}
