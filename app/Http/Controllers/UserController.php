<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('backend.user.index', [
            'users' => $users
        ]);
    }

    public function detail($id)
    {
        $user = User::findOrFail($id);
        
        return view('backend.user.detail', [
            'user' => $user
        ]);
    }

    public function getAdd()
    {
        return view('backend.user.add');
    }

    public function postAdd(Request $request)
    {
        return $request->all();

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');        
    }

    public function getEdit($id)
    {
        $user = User::findOrFail($id);

        return view('backend.user.edit', [
            'user' => $user
        ]);
    }

    public function postEdit(Request $request)
    {
        return $request->all();
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        if ($user->delete()) {
            return redirect()->back()->with('successMessage', 'Berhasil menghapus User');
        }
    }

    public function keluar(Request $request)
    {
        Auth::logout();

        return redirect()->to('login')->with('successMessage', 'Anda berhasi logout');
    }
}
