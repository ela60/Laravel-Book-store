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
        // fetch books data from the books table
        $books = Book::limit(30)->get();
        //  echo $books ->toJson();
        // return;
        
        // pass books data to the view
        return view('books.index')->with('books', $books);
    }
    public function show($book_id){
        $book = Book::find($book_id);
        
        return view(view:'books.show')->with('books',$book);
    }
    

   
    
}
