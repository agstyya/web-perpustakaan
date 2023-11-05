@extends('layouts.app')
@section('main')
<div class="col-lg-12 d-flex align-items-stretch">
  <div class="card w-100">
    <div class="card-body p-4">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Judul</label>
        <p>Tuliskan Judul Buku</p>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="judul">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tipe</label>
        <p>Tuliskan Tipe Buku</p>
        <input type="email" class="form-control" id="exampleFormControlInput1"name="tipe">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
        <p>Tuliskan Nama Penerbit Buku</p>
        <input type="email" class="form-control" id="exampleFormControlInput1"name="penerbit">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Penulis</label>
        <p>Tuliskan Penulis Buku</p>
        <input type="email" class="form-control" id="exampleFormControlInput1"name="penulis">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <p>Tuliskan Deskripsi Buku Secara Singkat</p>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="deskripsi"></textarea>
      </div>
      <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Foto</label>
        <p>Masukan Foto Sampul Depan Buku</p>
        <input class="form-control" type="file" id="formFileMultiple" multiple>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="margin-right: 1%">Batalkan</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection