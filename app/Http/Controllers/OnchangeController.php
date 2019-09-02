<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
use App\Shift;
use App\Section;
class OnchangeController extends Controller
{
     public function selectclass($id)
    {
        $classname = Classroom::where('session_id', $id)->get()->toArray();
        return response()->json($classname);

    }
	public function selectshift($id)
	{
		$shiftname=Shift::where('class_id', $id)->get()->toArray();
		return response()->json($shiftname);
	}

	public function selectsection($id)
	{
		$sectionname=Section::where('shift_id', $id)->get()->toArray();
		return response()->json($sectionname);
	}
}
