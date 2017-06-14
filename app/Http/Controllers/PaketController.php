<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paket;

class PaketController extends Controller
{
    public function index()
    {
        $paket = Paket::all();

        return view('frontend.paket.index', [
            'paket' => $paket
        ]);
    }

    // public function detail($id)
    // {
    //     $paket = Paket::findOrFail($id);

    //     return view('frontend.paket.detail', [
    //         'paket' => $paket
    //     ]);
    // }
}
