<?php

namespace App\Http\Controllers;

use App\Models\Smedia;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class SmediaController extends Controller
{
    public function index()
    {
        //
    }

    public function edit()
    {
        $medias = Smedia::all()->first();
        return view('Admin.pages.smedia.index')->with([
            'medias' => $medias
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $smedia = Smedia::findOrfail($id);

        $smedia->update($data);

        Alert::success('Berhasil', 'Berhasil diubah');
        return redirect()->route('movie.edit');
    }
}
