<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MahfilController extends Controller
{
    public function mahfil()
    {
        return view('backend.contents.mahfil');
    }
}
