<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller{

    public static function index(){

        $books = [
            ['book_title' => 'Anna Karenina', 'author' => 'leo tolstoy', 'book_price' => 30000],
            ['book_title' => 'This is the true', 'author' => 'leo galeleo', 'book_price' => 40000]
        ];
        
            return view('book', ['title' => 'Book', 'books' => $books]);
    }

}