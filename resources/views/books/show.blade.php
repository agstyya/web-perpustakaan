@extends('layouts.app')
@section('main')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2><a href="/dashboard/books"><i class="ti ti-arrow-left"></i></a> Detail Buku</h2>
        </div>
    </div>
    <div class="row">
        {{-- @if ($book->image)
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold m-3">Cover Buku</h5>
                    </div>
                    <div class="card-body">
                    <img src="{{ asset('storage/'. $book->image) }}" class="img-fluid" class="m-2">
                    </div>
                </div>
            </div>
        @endif --}}
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title fw-semibold m-3">Cover Buku</h5>
                </div>
                <div class="card-body">
                <img src="{{ asset('storage/'. $book->image) }}" class="img-fluid" class="m-2">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title fw-semibold m-1">Informasi Lanjutan</h5>
                </div>
                <div class="card-body p-3">
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <strong class="m-1">Penulis</strong>
                        </div>
                        <div class="col-lg-6">
                            <p class="m-1">{{ $book->penulis }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <strong class="m-1">Diupload pada</strong>
                        </div>
                        <div class="col-lg-6">
                            <p class="m-1">{{ $book->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6 col-sm-12">
                            <strong class="m-1">Tipe</strong>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="m-1">{{ $book->tipe }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6 col-sm-12">
                            <strong class="m-1">Penerbit</strong>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="m-1">{{ $book->penerbit }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6 col-sm-12">
                            <strong class="m-1">Deskripsi</strong>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="m-1">{{ $book->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection