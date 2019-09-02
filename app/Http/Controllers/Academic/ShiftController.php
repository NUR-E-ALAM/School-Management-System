<?php

namespace App\Http\Controllers\Academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Active;
use App\Shift;
use App\Classroom;
use App\Session;



class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active=Active::pluck('active_name','id');
        $class=Classroom::pluck('class_name','id');
        $session=Session::pluck('session_name','id');

      $shiftname=Shift::orderBy('created_at','desc')->paginate(6);
        return view('admin.academic.shift')->with('shiftname', $shiftname)->with('class',$class)->with('session',$session)->with('active', $active);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.academic.shift');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $list = new Shift();
        $list->shift_name = $request->shift_name;
        $list->class_id = $request->class_id;
        $list->session_id = $request->session_id;

        $list->active_id = $request->active_id;
        $list->save();

        if ($list->id) {
            return response()->json(['success' => true, 'message' => 'Session Created!!'], 200);
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
          $info = Shift::find($id);

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
         $shiftlist = Shift::find($id);

         $shiftlist->shift_name = $request->shift_name;
        $shiftlist->class_id = $request->class_id;
        $shiftlist->session_id = $request->session_id;

        $shiftlist->active_id = $request->active_id;

        $shiftlist->save();
        if ($shiftlist->save()) {
            return response()->json(['success' => true, 'message' => 'Shift Updated']);
        } else {
            return response()->json(['success' => false, 'message' => 'Update Failed']);
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
        if (Shift::destroy($id)) {
            return response()->json(['success' => true, 'message' => 'Shift Deleted']);
        } else {
            return response()->json(['success' => false, 'message' => 'Deleted Failed']);
        }
    }

}
