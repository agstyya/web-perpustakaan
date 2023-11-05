<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\File;

use function PHPUnit\Framework\returnSelf;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('books.index',[
            'title' => 'Buku',
            'books'=> Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create',[
            'title'=> 'Tambah Buku'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        $validatedData = $request ->validate([
            'judul' => ['min:1', 'required'],
            'deskripsi' => ['min:5', 'required'],
            'tipe' => [ 'required'],
            'penerbit' => [ 'required'],
            'penulis' => [ 'required'],
            'image'=>['file','image', 'nullable']
        ]);
        if ($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('book-image');
        }
        Book::create($validatedData);
       return redirect("/dashboard/books")->with('success','Buku Sudah Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show',[
            'book'=>$book,
            'title' => $book->judul
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit',[
            'book'=>$book,
            'title'=> 'Edit Buku'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $validatedData = $request ->validate([
            'judul' => ['min:1', 'required'],
            'deskripsi' => ['min:5', 'required'],
            'tipe' => [ 'required'],
            'penerbit' => [ 'required'],
            'penulis' => [ 'required'],
        ]);
    
        
        if (request()->hasFile( 'image') && request('image') != '') { 
                $imagePath = public_path('storage/'. $book->image);
                if (File::exists($imagePath)) {
                unlink($imagePath);
                }
                $image = request()->file('image')->store('book-image');
                $validatedData['image'] = $image;
        }

        $book = Book::where('id', $book->id)->update($validatedData);
        return redirect("/dashboard/books")->with('successEdit','Buku Telah Diupdate');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        if (!empty($book->image)) {
            $imagePath = public_path('storage/' . $book->image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
        }
        Book::destroy($book->id);
        return redirect('/dashboard/books')->with('successDelete', 'Buku Telah dihapus');
    }
}
