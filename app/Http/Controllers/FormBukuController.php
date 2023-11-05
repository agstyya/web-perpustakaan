<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormBukuController extends Controller
{
    public function index()
    {
        return view('formbuku',[
            'title' => 'Formbuku',
        ]);
    }
}
