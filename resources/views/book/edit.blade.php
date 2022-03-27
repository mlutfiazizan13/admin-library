@extends('layouts.master')

@section('content')
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Book</h6>
            <div class="dropdown no-arrow">
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">

            @if ($errors->any())
                <div class="alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('books.update', $book->id) }}">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <label for="Kode Buku" class="font-weight-bold">Kode Buku</label>
                    <input name="kode_buku" type="text" class="form-control" value="{{ $book->kode_buku }}" readonly>
                </div>
                <div class="form-group">
                    <label for="judul" class="font-weight-bold">Judul</label>
                    <input name="judul" type="text" class="form-control" value="{{ $book->judul }}">
                </div>
                <div class="form-group">
                    <label for="pengarang" class="font-weight-bold">Pengarang</label>
                    <input name="pengarang" type="text" class="form-control" value="{{ $book->pengarang }}">
                </div>
                <div class="form-group">
                    <label for="penerbit" class="font-weight-bold">Penerbit</label>
                    <input name="penerbit" type="text" class="form-control" value="{{ $book->penerbit }}">
                </div>
                <div class="form-group">
                    <label for="tahun" class="font-weight-bold">Tahun</label>
                    <input name="tahun" type="year" class="form-control" value="{{ $book->tahun }}">
                </div>
                <div class="form-group">
                    <label for="isbn" class="font-weight-bold">ISBN</label>
                    <input name="isbn" type="text" class="form-control" value="{{ $book->isbn }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
