<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Month;
class MonthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $month=Month::orderBy('created_at','desc')->paginate(6);
        return view('admin.settings.month')->with('month', $month);

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
        $list = new Month();
        $list->month_name = $request->month_name;

        $list->save();

        if ($list->id) {
            return response()->json(['success' => true, 'message' => 'Month Created!!'], 200);
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
        $info = Month::find($id);

        return response()->json($info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Month::find($id);

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
        $list =Month::find($id);
        $list->month_name = $request->month_name;

        $list->save();

        if ($list->id) {
            return response()->json(['success' => true, 'message' => 'Month Upadate!!'], 200);
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
        if (Month::destroy($id)) {
            return response()->json(['success' => true, 'message' => 'Day Deleted']);
        } else {
            return response()->json(['success' => false, 'message' => 'Deleted Failed']);
        }
    }

}
