<?php

namespace App\Controllers;

use App\Libraries\View;

class BooksController
{
    public function index()
    {
        return View::render('books');
        // $books = App::get('leesclub')->selectAll('books') where read is true;
        // return view('books', compact('books'));
        // Alleen de gelezen boeken worden meegegeven naar de view.
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
