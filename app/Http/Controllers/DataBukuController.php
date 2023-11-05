<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class DataBukuController extends Controller
{
    public function index()
    {
        return view('databuku',[
            'title' => 'Databuku',
            'books'=> Book::all()
        ]);
    }
}
