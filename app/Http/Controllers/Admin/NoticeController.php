<?php

namespace App\Http\Controllers\Admin;

use App\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notice = Notice::orderBy('created_at', 'desc')->paginate(8);
        //dd($notice);
        return view('admin.notice.notice')->with('newnotice', $notice);
        //return view('notice');
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
        $list = new Notice();
        $list->title = $request->title;
        $list->description = $request->description;
        $list->save();
        if ($list->id) {
            return response()->json(['success' => true, 'message' => 'notice Created!!'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Error!!'], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Notice $notice
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Notice $notice
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = [
            // 'writer_id'=>Auth::id(),
            'id' => $id,
        ];
        $info = Notice::where($where)->get()->first();
        //$info = Notice::find($id);
        return response()->json($info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Notice              $notice
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $noticeupdate = Notice::find($id);
        $noticeupdate->title = $request->title;
        $noticeupdate->description = $request->description;

        // $manueupdate->manue_name = $request->manue_name;

        $noticeupdate->save();
        if ($noticeupdate->save()) {
            return response()->json(['success' => true, 'message' => 'Notice Updated']);
        } else {
            return response()->json(['success' => false, 'message' => 'Notice Failed']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Notice $notice
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Notice::destroy($id)) {
            return response()->json(['success' => true, 'message' => 'Notice Deleted']);
        } else {
            return response()->json(['success' => false, 'message' => 'Notice Failed']);
        }
    }
}
