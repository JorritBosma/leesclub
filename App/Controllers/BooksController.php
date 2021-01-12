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
        if (isset($_GET['book_id']) && (int)$_GET['book_id'] > 0 && !is_null(BookModel::get($_GET['book_id']))) {
            $book = BookModel::get($_GET['book_id']);
            // dd($book);
            View::render(
                'book-show',
                [
                    'book' => $book
                ]
            );
        }
    }

    public function add()
    {
        return View::render('add-book');
    }

    public function store()
    {

        $book = new BookModel;
        $book = [
            'author_first_name'   => $_POST['author_first_name'],
            'author_prefix'       => $_POST['author_prefix'],
            'author_last_name'    => $_POST['author_last_name'],
            'title'               => $_POST['title'],
            'length'              => $_POST['length'],
            'published_in'        => $_POST['published_in'],
            'finished_reading'    => isset($_POST['finished_reading']) ? true : false,
            'finished_date'       => $_POST['finished_date'],
            'created'             => $_POST['created'] = date('Y-m-d H:i:s'),
        ];

        BookModel::store($book);
        return View::redirect('books');
        // App::get('leesclub')->insert('books', [
        //     'name' => $_POST['name']
        // ]);
        // return View::redirect('books');
    }

    public function renderEditForm()
    {
        // first we have to render the editForm and fill values with existing data
    }

    public function update()
    {
        // second we have to store the data in the existing record, updating it.
        $book = new BookModel;
        $book = [
            'author_first_name'   => $_POST['author_first_name'],
            'author_prefix'       => $_POST['author_prefix'],
            'author_last_name'    => $_POST['author_last_name'],
            'title'               => $_POST['title'],
            'length'              => $_POST['length'],
            'published_in'        => $_POST['published_in'],
            'finished_reading'    => isset($_POST['finished_reading']) ? true : false,
            'finished_date'       => $_POST['finished_date'],
            'created'             => $_POST['created'] = date('Y-m-d H:i:s'),
        ];

        $id = $_POST['book-id'];
        Bookmodel::update($book, $id);

        // Finally we want to redirect to the updated showpage of this book, how?
        return View::redirect('books-show?book_id=$id');
    }

    public function destroy()
    {
        Bookmodel::destroy($_POST['book_id']);
        return View::redirect('books');
    }
}
