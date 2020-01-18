<?php

namespace App\Http\Controllers;

use App\Book;
use App\Genre;
use App\Http\Requests\BookRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Book $model)
    {
        $books = $model->paginate(env('BOOKS_PER_PAGE'));
        $genres = Genre::all();

        return view('books.index', compact(['books', 'genres']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();

        return view('books.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Book $book)
    {
//        TODO: dorobit validaciu

//        $validator = Validator::make($request->all(), [
//            'name' => ['required'],
//            'descriotion' => ['required', 'min:6'],
//            'pages' => ['required', 'integer', 'digits_between:2,4'],
//            'year' => ['required', 'digits:4', 'integer', 'min:1900', 'max:' . (date('Y'))]
//        ]);
//
//        if ($validator->fails()) {
//            return redirect()
//                ->back()
//                ->withErrors($validator)
//                ->withInput();
//        }

//        dd($request->all());
        $book->create($request->all());

        return redirect()->route('book.index')->withStatus(__('Book successfully created.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $genres = Genre::all();

        return view('books.edit', compact('book', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());

        return redirect()->route('book.index')->withStatus(__('Book successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('book.index')->withStatus(__('Book successfully deleted.'));
    }
}
