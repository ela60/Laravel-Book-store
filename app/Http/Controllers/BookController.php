<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function welcome(){
        return view(view:'welcome');
    }
    public function index(){
        //fetch books data from books table
        $books =Book ::limit(30)->get();

        //dd($books);


        //pass books data to view
        return view(view:'books.index')
        ->with('books',$books)
        ;
    }

   
    
}
