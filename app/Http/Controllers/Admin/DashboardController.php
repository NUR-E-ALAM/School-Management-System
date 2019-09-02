<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Calendar;
use App\Event;
class DashboardController extends Controller
{
    public function index()

    {
         $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
	                [
	                    'background-color' => '#f05050',
	                    'url' => url('admin/addstudent'),
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        // dd($calendar);exit;
        return view('admin.dashboard', compact('calendar'));
  
    }
}

