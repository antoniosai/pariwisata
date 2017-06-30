<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paket;

use App\ImagePacket as Gallery;

class PaketController extends Controller
{
    public function index()
    {
        $paket = Paket::all();

        return view('backend.paket.index', [
            'paket' => $paket
        ]);
    }

    public function detail($id)
    {
        $paket = Paket::findOrFail($id);

        return view('frontend.backend.detail', [
            'paket' => $paket
        ]);
    }

    public function getAdd()
    {
        return view('backend.paket.add');
    }

    public function postAdd(Request $request)
    {
        // return $request->all();

        $paket = Paket::all();

        $paket->title = $request->input('title');
        $paket->capacity = $request->input('capacity');
        $paket->price = $request->input('price');
        $paket->content = $request->input('content');
        
        if ($paket->save()) {
            $inputs = $request->input('gambar');

            $count = count($inputs);

            for ($i=0; $i < $count; $i++) { 
                $gallery = new Gallery;
                $gallery->url = $inputs[$i];
                $gallery->paket_id = $paket->id;
                

                if ($gallery->save()) {

                    $request->session()->flash('alert-success', 'Berhasil menambahkan paket '. $request->input('title'));
                    return redirect()->back();
                }
            }
        
        }
    }

    public function getEdit($id)
    {
        return view('backend.paket.edit');
    }

    public function postEdit(Request $request)
    {
        $paket = Paket::find($request->input('id'));

        $paket->name = $request->input('name');
        
        if ($paket->save()) {
            $request->session()->flash('alert-success', 'Berhasil mengedit paket '. $paket->name);
        }
    }

    public function delete($id)
    {
        
        $paket = Paket::findOrFail($id);

        if ($paket->delete()) {
            return redirect()->back()->with('successMessage', 'Paket berhasil dihapus');
        }
    }
}
