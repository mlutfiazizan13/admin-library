@extends('layouts.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create Book</h1>
    <a href="{{ route('books.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Create Book</a>
</div>
    <div class="card shadow mb-4">
        <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success">
                <p>{{ session('success') }}</p>
            </div>
            @endif

            @if ($errors->any())
                <div class="alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>Kode Buku</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        <th>ISBN</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($book as $bk )
                    <tr>
                        <th>{{ $bk->kode_buku }}</th>
                        <th>{{ $bk->judul }}</th>
                        <th>{{ $bk->pengarang }}</th>
                        <th>{{ $bk->penerbit }}</th>
                        <th>{{ $bk->tahun }}</th>
                        <th>{{ $bk->isbn }}</th>
                        <th>
                            <a href="{{ route('books.show', $bk->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('books.edit', $bk->id) }}" class="btn btn-success"><i class="fas fa-pen"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></a>
                        </th>
                    </tr>
                    @include('modal.delete')
                    @endforeach
                </tbody>
            </table>
            {{ $book->links('pagination::bootstrap-4') }}

        </div>
    </div>
@endsection
