<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function donate()
    {
        return view('backend.contents.donate');
    }
}
