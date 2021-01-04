<?php

namespace App\Controllers;

use App\Libraries\View;

class WishlistController extends BooksController
{
    public function index()
    {
        return View::render('books');
        // $books = App::get('leesclub')->selectAll('books') where read is false;
        // return view('books', compact('books'));
        // Dus dezelfde view wordt gebruikt, maar alleen de nog te lezen boeken worden meegegeven.
    }
}
