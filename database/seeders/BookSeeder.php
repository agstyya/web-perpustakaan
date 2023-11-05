<?php

namespace Database\Seeders;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'judul'=>'Buku 1',
            'tipe' => 'Non Fiksi',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'penerbit' => 'Agung Wicaksono',
            'penulis' => 'Agastya Adrian',
            'image'=>'book/buku.jpg'

        ]);
        Book::create([
            'judul'=>'Buku 2',
            'tipe' => ' Fiksi',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'penerbit' => 'Agung Wicaksono',
            'penulis' => 'Agastya Adrian',
            'image'=>'book/buku.jpg'

        ]);
        Book::create([
            'judul'=>'Buku 3',
            'tipe' => 'Non Fiksi',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'penerbit' => 'Agung Wicaksono',
            'penulis' => 'Agastya Adrian',
            'image'=>'book/buku.jpg'

        ]);
        Book::create([
            'judul'=>'Buku 4',
            'tipe' => 'Non Fiksi',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'penerbit' => 'Agung Wicaksono',
            'penulis' => 'Agastya Adrian',
            'image'=>'book/buku.jpg'

        ]);
    }
}
