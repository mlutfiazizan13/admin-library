@extends('layouts.master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ $book->judul }}</h1>
</div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table">
                <tr class="">
                    <th class=""><h5>Kode Buku</h5></th>
                    <th class=""><h5>: {{ $book->kode_buku }}</h5></th>
                </tr>
                <tr class="">
                    <th class=""><h5>Judul</h5></th>
                    <th class=""><h5>: {{ $book->judul }}</h5></th>
                </tr>
                <tr>
                    <th><h5>Pengarang</h5></th>
                    <th class=""><h5>: {{ $book->pengarang }}</h5></th>
                </tr>
                <tr>
                    <th><h5>Penerbit</h5></th>
                    <th class=""><h5>: {{ $book->penerbit }}</h5></th>
                </tr>
                <tr>
                    <th><h5>Tahun </h5></th>
                    <th class=""><h5>: {{ $book->tahun }}</h5></th>
                </tr>
                <tr>
                    <th><h5>ISBN</h5></th>
                    <th class=""><h5>: {{ $book->isbn }}</h5></th>
                </tr>
            </table>
            <div>
                <a href="{{ route('books.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
