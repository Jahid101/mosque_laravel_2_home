<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event()
    {
        $eventList = Event::all();
        return view('backend.contents.event', compact('eventList'));
    }

    public function eventList(Request $request){
        // dd($request->all());
        Event::create([
            'name' => $request -> name,
            'eventDetails' => $request -> eventDetails,
            'eventDate' => $request -> eventDate,
            'eventTime' => $request -> eventTime,
            'eventBudget' => $request -> eventBudget,
            'venue' => $request -> venue
        ]);
        return redirect()->back();
    }
}
