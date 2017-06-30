<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::select(['url', 'id'])->get();

        return view('backend.gallery.index', [
            'gallery' => $gallery
        ]);
    }

    public function edit(Request $request)
    {
        $gambar = Gallery::findOrFail($request->input('id'));
        $gambar->url = $request->input('gambar');

        if ($gambar->save()) {
            $request->session()->flash('alert-success', 'Berhasil mengedit gambar');
            return redirect()->back();
        }

    }

    public function add(Request $request)
    {
        $inputs = $request->input('gambar');

        $count = count($inputs);

        for ($i=0; $i < $count; $i++) { 
            $gallery = new Gallery;
            $gallery->url = $inputs[$i];
            $gallery->save();

            # code...
        }

        $request->session()->flash('alert-success', 'Berhasil menambahkan '.count($inputs). ' gambar');
        return redirect()->back();

    }

    public function delete($id)
    {
        $gambar = Gallery::find($id);

        if ($gambar->delete()) {
            return redirect()->back()->with('successMessage', 'Berhasil menghapus gambar');
        }
    }
}
