<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaktabController extends Controller
{
    public function maktab()
    {
        return view('backend.contents.maktab');
    }
}
