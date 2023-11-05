@extends('layouts.app')
@section('main')
<div class="col-lg-12 d-flex align-items-stretch">
  <div class="card w-100">
    <form action="/dashboard/books/{{$book->id}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('put')
    <div class="card-body p-4">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Judul</label>
        <p>Edit Judul Buku</p>
        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="exampleFormControlInput1" name="judul" value="{{old('judul', $book->judul)}}">
        @error('judul')
        <p style="color:red;">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tipe</label>
        <p>Edit Tipe Buku</p>
        <input type="text" class="form-control @error('tipe') is-invalid @enderror" id="exampleFormControlInput1" name="tipe" value="{{old('tipe', $book->tipe)}}">
        @error('tipe')
        <p style="color:red;">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
        <p>Edit Nama Penerbit Buku</p>
        <input type="text" class="form-control @error('penerbit') is-invalid @enderror" id="exampleFormControlInput1" name="penerbit" value="{{old('penerbit', $book->penerbit)}}">
        @error('penerbit')
        <p style="color:red;">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Penulis</label>
        <p>Edit Penulis Buku</p>
        <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="exampleFormControlInput1" name="penulis" value="{{old('penulis', $book->penulis)}}">
        @error('penulis')
        <p style="color:red;">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <p>Edit Deskripsi Buku Secara Singkat</p>
        <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="exampleFormControlTextarea1" rows="10" name="deskripsi">{{old('deskripsi', $book->deskripsi)}}</textarea>
        @error('deskripsi')
        <p style="color:red;">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Foto</label>
        <p>Masukan Foto Sampul Depan Buku</p>
        <input class="form-control" type="file" id="formFileMultiple" name="image" multiple>
      </div>
      <div class="modal-footer">
        <a href="/dashboard/books"class="btn btn-secondary" style="margin-right: 1%">Batalkan</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
@endsection