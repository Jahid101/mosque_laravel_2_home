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


    public function mahfilUpdate($id)
    {
        $mahfilList = Mah::find($id);
        return view('backend.contents.mahfilUpdate', compact('mahfilList'));
    }


    public function mahfilSaveUpdate(Request $request)
    {
        $mahfilList = Mah::find($request->id);
        $mahfilList->title = $request->title;
        $mahfilList->details = $request->details;
        $mahfilList->save();
        return redirect()->route('mahfil');
    }

    public function mahfilDelete($id)
    {
        $mahfilList = Mah::find($id);
        $mahfilList->delete();
        return redirect()->back();
    }

}
