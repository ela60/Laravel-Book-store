@extends('layout') 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
</head>
<body>
    <h1>BookStore</h1>
    <table width="50%",border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach($books as book)
       
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->price}}</td>
            <td><a href="{{ route('books.show',$book->id) }}">View</a></td>
        </tr> 
        @endforeach
    </table>
    


    <!-- <p>Here is my BookStore all values.If you can delete,update or insert any books here.This is update version now.So you can do this easily.The most favourite place to all user.Buy or sell are easily here.</p> -->
</body>
</html>