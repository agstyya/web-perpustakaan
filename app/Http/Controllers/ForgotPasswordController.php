<?php

namespace App\Http\Controllers;



class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('forgotpassword',[
            'title' => 'Forgotpassword',
        
        ]);
        
    }
    
}
