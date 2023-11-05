<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login',[
            'title'=>'login'
        ]);
    }
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $credentials = $request ->validate([

        'email' => ['min:5', 'required','email',],
        'password' => [ 'min:1','required'],
            
        ]);
        
        if (Auth::attempt($credentials)) {

            return redirect('/dashboard');
        }
        return redirect('/')->with('errorLogin', 'Login gagal. Cek kembali email dan password Anda.');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('successLogout','Anda telah keluar');
    }
}
