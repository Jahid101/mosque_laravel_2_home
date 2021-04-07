<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\Donate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function donate()
    {
        $donates = Donate::all();
        return view('backend.contents.donate', compact('donates'));
    }

    public function list(Request $request)
    {
        // dd($request->all());
        Donate::create([
            'name' => $request -> name,
            'donationAmount' => $request -> donationAmount
        ]);
        return redirect()->back();
    }
}

