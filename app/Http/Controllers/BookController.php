<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::paginate(2);

        return view('book.index')->with(compact('book'));
    }

    public function create(){


        $kode_buku = IdGenerator::generate(['table' => 'books', 'field' => 'kode_buku', 'length' => 8, 'prefix' => 'BK']);
        return view('book.create')->with(compact('kode_buku'));
    }

    public function store(Request $request){
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'isbn' => 'required'
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Buku Berhasil Dibuat!');
    }

    public function edit(Request $request, $id)
    {
        $book = Book::find($id);

        return view('book.edit')->with(compact('book'));

    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);


        $book->update($request->all());

        return redirect()->route('books.index')
                        ->with(compact('book'))
                        ->with('success', 'Book updated successfully');

    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('book.show', compact('book'));
    }

    public function destroy($id)
    {
        $book = Book::find($id);

        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted');
    }
}
