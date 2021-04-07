<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\Announcement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function announcement()
    {
        $announcementList = Announcement::all();
        return view('backend.contents.announcement', compact('announcementList'));
    }

    public function announcementList(request $request){
        // dd($request->all());
        Announcement::create([
            'title' => $request -> title,
            'announcementDetails' => $request -> announcementDetails
        ]);
        return redirect()->back();
    }
}
