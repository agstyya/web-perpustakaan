<?php

namespace App\Http\Controllers;

use Database\Seeders\BookSeeder;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard',[
            'title' => 'Beranda',
        
        ]);
        
    }
}
