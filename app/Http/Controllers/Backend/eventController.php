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


    public function eventUpdate($id)
    {
        $eventList = Event::find($id);
        return view('backend.contents.eventUpdate', compact('eventList'));
    }



    public function eventSaveUpdate(Request $request)
    {
        $eventList = Event::find($request->id);
        $eventList->name = $request->name;
        $eventList->eventDetails = $request->eventDetails;
        $eventList->eventDate = $request->eventDate;
        $eventList->eventTime = $request->eventTime;
        $eventList->eventBudget = $request->eventBudget;
        $eventList->venue = $request->venue;
        $eventList->save();
        return redirect()->route('event');
    }



    public function eventDelete($id)
    {
        $eventList = Event::find($id);
        $eventList->delete();
        return redirect()->back();
    }
}
