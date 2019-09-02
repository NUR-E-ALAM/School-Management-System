<?php

namespace App\Http\Controllers\Settings;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Day;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $day=Day::orderBy('created_at','desc')->paginate(6);
          return view('admin.settings.day')->with('days', $day);
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
        $list = new Day();
        $list->day_name = $request->day_name;

        $list->save();

        if ($list->id) {
            return response()->json(['success' => true, 'message' => 'Day Created!!'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Error!!'], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Day::find($id);

        return response()->json($info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $list = Day::find($id);
        $list->day_name = $request->day_name;

        $list->save();

        if ($list->id) {
            return response()->json(['success' => true, 'message' => 'Day Update!!'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Error!!'], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Day::destroy($id)) {
            return response()->json(['success' => true, 'message' => 'Day Deleted']);
        } else {
            return response()->json(['success' => false, 'message' => 'Deleted Failed']);
        }
    }

}
