<?php

namespace App\Controllers;

use Core\App;

class BooksController
{
    public function index()
    {
        return view('books');
        // $books = App::get('leesclub')->selectAll('books') where read is true;
        // return view('books', compact('books'));
        // Alleen de gelezen boeken worden meegegeven naar de view.
    }
    public function add()
    {
        return view('add-book');
    }

    public function store()
    {
        App::get('leesclub')->insert('books', [
            'name' => $_POST['name']
        ]);
        return redirect('books');
    }

    public function update()
    {
    }

    public function destroy(int $id)
    {
    }
}
