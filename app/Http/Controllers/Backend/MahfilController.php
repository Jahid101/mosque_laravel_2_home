<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Mah;
use App\Models\Backend\Mahfil;
use Illuminate\Http\Request;

class MahfilController extends Controller
{
    public function mahfil()
    {
        $mahfilList = Mah::all();
        return view('backend.contents.mahfil', compact('mahfilList'));
    }

    public function mahfilList(Request $request){
        // dd($request->all());
        Mah::create([
            'title' => $request -> title,
            'details' => $request -> details,
        ]);
        return redirect()->back();
    }

}
