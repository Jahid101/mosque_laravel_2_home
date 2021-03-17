<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TablighiController extends Controller
{
    public function tablighi()
    {
        return view('backend.contents.tablighi');
    }
}
