<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\BookModel;

class BooksController
{
    // Index goes to the book page, which is an overview of READ books.
    // The method readlist only fetches books where finished_reading is true.
    public function index()
    {
        $books = BookModel::readlist();

        View::render('books', [
            'books' => $books,
            'h1'    => 'Gelezen boeken'
        ]);
    }

    public function wishlist()
    {
        $books = BookModel::wishlist();

        View::render('books', [
            'books' => $books,
            'h1'    => 'Verlanglijst'
        ]);
    }

    public function show()
    {
    }

    public function add()
    {
        return View::render('add-book');
    }

    public function store()
    {
        // App::get('leesclub')->insert('books', [
        //     'name' => $_POST['name']
        // ]);
        // return View::redirect('books');
    }

    public function update()
    {
    }

    public function destroy(int $id)
    {
    }
}
