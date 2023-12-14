<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function welcome(){
        return view(view:'welcome');
    }
    public function index(){
        //fetch books data from books table
        


        //pass books data to view
    }

    public function index(){
        return view(view:'books. index');
    }
}
