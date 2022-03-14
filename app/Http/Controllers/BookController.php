<?php

namespace App\Http\Controllers;

use App\BookModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //

    protected String $book = "book";
    function index()
    {
        return view('book');
    }

    function do_save(Request $request)
    {
        print_r($request->all());
        $data = array("title" => $request->title, "description" => $request->name, "page" => $request->page);
        $book = new BookModel();
        $book->save_data($data);
    }
}
