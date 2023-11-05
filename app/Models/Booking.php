<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        "user_id",
        "book_id",
        "borrow_date",
        "return_date",
        "returned",
        'status', 
    ];
    use HasFactory;
}

