<?php

namespace Database\Seeders;
use App\Models\Booking;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Booking::create([
            'user_id' => 1,
            'book_id' => 1,
            'borrow_date' => now(),
            'return_date' => now()->addDays(14),
            'returned' => false,
            'status' => 'Dipinjam',
        ]);
    }
}
