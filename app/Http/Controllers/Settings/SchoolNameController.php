<?php

namespace App\Http\Controllers\Settings;

use App\SchoolName;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schoolname = SchoolName::orderBy('created_at', 'desc')->paginate(8);
        //dd($smsmanue);
        return view('admin.settings.schoolName')->with('supdate', $schoolname);
        //return view('schoolName');
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
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param \App\SchoolName $schoolName
     *
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolName $schoolName)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\SchoolName $schoolName
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = [
            'id' => $id,
        ];
        $info = SchoolName::where($where)->get()->first();

        return response()->json($info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\SchoolName          $schoolName
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $snupdate = SchoolName::find($id);
        $snupdate->school_name = $request->school_name;
        $snupdate->address = $request->address;
        $snupdate->logo_image = $request->logo_image;

        $snupdate->save();
        if ($snupdate->save()) {
            return response()->json(['success' => true, 'message' => 'Name Updated']);
        } else {
            return response()->json(['success' => false, 'message' => 'Name Failed']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\SchoolName $schoolName
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolName $schoolName)
    {
    }
}
