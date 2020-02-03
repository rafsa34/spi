<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class AkunController extends Controller
{
    public function profil()
    {
    	// $user = User::all();
        $user = auth()->user();
        
    	return view('auth.profil',['user' => $user]);
    }

    public function edit($id)
    {
    	$user = User::find($id);
    	return view('auth.edit',['user' => $user]);
    }

    public function update(Request $request, $id)
    {
    	$user = User::find($id);
    	$user->update($request->all());
    	return redirect('/akun')->with('sukses','Data berhasil diperbarui');
    }

    public function login(Request $req)
    {
    	$email = $req->email;
    	$pwd  =$req->password;
    	if (Auth::attempt(['email' => $email, 'password' => $pwd])) {
            return view('/home'). Auth::user()->name;
        }else{
            return "Maaf email atau password yang anda masukan tidak sesuai.";
        }
    }
}
