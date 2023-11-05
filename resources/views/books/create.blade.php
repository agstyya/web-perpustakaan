@extends('layouts.app')
@section('main')
<div class="col-lg-12 d-flex align-items-stretch">
  <div class="card w-100">
    <form action="/dashboard/books" method="post" enctype="multipart/form-data">
        @csrf 
    <div class="card-body p-4">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Judul</label>
        <p>Tuliskan Judul Buku</p>
        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="exampleFormControlInput1" name="judul">
        @error('judul')
        <p style="color:red;">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tipe</label>
        <p>Tuliskan Tipe Buku</p>
        <input type="text" class="form-control @error('tipe') is-invalid @enderror" id="exampleFormControlInput1" name="tipe">
        @error('tipe')
        <p style="color:red;">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
        <p>Tuliskan Nama Penerbit Buku</p>
        <input type="text" class="form-control @error('penerbit') is-invalid @enderror" id="exampleFormControlInput1" name="penerbit">
        @error('penerbit')
        <p style="color:red;">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Penulis</label>
        <p>Tuliskan Penulis Buku</p>
        <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="exampleFormControlInput1" name="penulis">
        @error('penulis')
        <p style="color:red;">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <p>Tuliskan Deskripsi Buku Secara Singkat</p>
        <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="exampleFormControlTextarea1" rows="10" name="deskripsi"></textarea>
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
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
@endsection