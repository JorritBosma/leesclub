<?php

namespace App\Controllers;

use App\Core\App;

class BooksController
{
    public function index()
    {
        return view('books');
        // $books = App::get('leesclub')->selectAll('books');
        // return view('books', compact('books'));
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
