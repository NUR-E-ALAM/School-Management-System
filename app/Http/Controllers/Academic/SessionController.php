<?php

namespace App\Http\Controllers\Academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Active;
use App\Session;
class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $active=Active::pluck('active_name','id');
      $session=Session::orderBy('created_at','desc')->paginate(6);
        return view('admin.academic.session')->with('session', $session)->with('active', $active);
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
        $list = new Session();
        $list->session_name = $request->session_name;
        $list->active_id = $request->active_id;
        $list->save();

        if ($list->id) {
            return response()->json(['success' => true, 'message' => 'Session Update!!'], 200);
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
        $info = Session::find($id);

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

        $list =Session::find($id);
        $list->session_name = $request->session_name;
        $list->active_id = $request->active_id;
        $list->save();

        if ($list->id) {
            return response()->json(['success' => true, 'message' => 'Session Created!!'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Error!!'], 200);
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
        if (Session::destroy($id)) {
            return response()->json(['success' => true, 'message' => 'Session Deleted']);
        } else {
            return response()->json(['success' => false, 'message' => 'Deleted Failed']);
        }
    }
}
