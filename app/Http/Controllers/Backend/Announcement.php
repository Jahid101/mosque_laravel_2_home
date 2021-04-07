<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Announcement extends Controller
{
    public function announcement()
    {
        return view('backend.contents.announcement');
    }
}
