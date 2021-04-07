<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommiteeMemberController extends Controller
{
    public function commiteeMember()
    {
        return view('backend.contents.commiteeMember');
    }
}
