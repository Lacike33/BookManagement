<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $booksCount = Book::all()->count();
        $usersCount = User::all()->count();

        return view('dashboard',compact(['booksCount','usersCount']));
    }
}
