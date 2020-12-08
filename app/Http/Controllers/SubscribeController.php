<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribe;
use App\Http\Requests\SubscribeRequest;
use RealRashid\SweetAlert\Facades\Alert;

class SubscribeController extends Controller
{

    public function index()
    {
        $subscribes = Subscribe::orderBy('created_at', 'desc')->get();
        return view('Admin.pages.subscribe.index')->with([
            'subscribes' => $subscribes
        ]);
    }

    public function store(SubscribeRequest $request)
    {
        $data = $request->all();
        $data = Subscribe::create($data);

        Alert::success('Berhasil', 'Terimakasih Karena Telah Mensubcribe :)');
        return redirect()->route('home')->with('success', 'Login Successfully!');;
    }
}
