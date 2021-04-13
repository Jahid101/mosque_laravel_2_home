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


    public function announcementList(request $request)
    {
        // dd($request->all());
        Announcement::create([
            'title' => $request->title,
            'announcementDetails' => $request->announcementDetails
        ]);
        return redirect()->back();
    }


    public function announcementUpdate($id)
    {
        $announcementList = Announcement::find($id);
        return view('backend.contents.announcementUpdate', compact('announcementList'));
    }


    public function announcementSaveUpdate(Request $request)
    {
        $announcementList = Announcement::find($request->id);
        $announcementList->title = $request->title;
        $announcementList->announcementDetails = $request->announcementDetails;
        $announcementList->save();
        return redirect()->route('announcement');
    }


    public function announcementDelete($id)
    {
        $announcementList = Announcement::find($id);
        $announcementList->delete();
        return redirect()->back();
    }

}
