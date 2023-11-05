<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register',[
            'title'=>'Register'
        ]);
    }
    public function store(Request $request)
{
    $validatedData = $request ->validate([
        'name' => ['required', 'string'],
        'email' => [ 'required','email','unique:users'],
        'password' => [ 'min:1','required','string'],
    ]);
    $validatedData['password'] = Hash::make($validatedData['password']);
    User::create($validatedData);

    return redirect('/')->with('successCreateAcc', 'Akun berhasil dibuat! Silakan masuk untuk login.');
}

}

