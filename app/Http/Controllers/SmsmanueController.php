<?php

namespace App\Http\Controllers;

use App\Smsmanue;
use Illuminate\Http\Request;

class SmsmanueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smsmanue = Smsmanue::orderBy('created_at', 'desc')->paginate(8);
        //dd($smsmanue);
        return view('smsmanucreate')->with('smsmanues', $smsmanue);

        //return view ('smsmanucreate');
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
        $list = new Smsmanue();
        $list->manue_name = $request->manue_name;
        $list->save();
        if ($list->id) {
            return response()->json(['success' => true, 'message' => 'Account Created!!'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Error!!'], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Smsmanue $smsmanue
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Smsmanue $smsmanue)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Smsmanue $smsmanue
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = [
            // 'writer_id'=>Auth::id(),
            'id'=>$id
        ];
        $info = Smsmanue::where($where)->get()->first();
        //$info = Smsmanue::find($id);
        return response()->json($info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Smsmanue            $smsmanue
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $manueupdate = Smsmanue::find($id);
        $manueupdate->manue_name = $request->manue_name;
       
        $manueupdate->save();
        if ($manueupdate->save()) {
            return response()->json(['success' => true, 'message' => 'Manue Updated']);
        } else {
            return response()->json(['success' => false, 'message' => 'Manue Failed']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Smsmanue $smsmanue
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Smsmanue::destroy($id)) {
            return response()->json(['success' => true, 'message' => 'manue Deleted']);
        } else {
            return response()->json(['success' => false, 'message' => 'manue Failed']);
        }
    }
}
