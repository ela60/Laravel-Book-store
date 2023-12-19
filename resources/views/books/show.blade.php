@extends('layout')

@section('page-content')
<h1>BookStore</h1>
    <table class="table table-striped table-dark">
        <tr>
            <th>ID</th>
            <td>{{($book->id)}}</td>
            
        </tr>
        <tr>
            <th>Title</th>
            <td>{{($book->title)}}</td>
            
        </tr>
        <tr>
            <th>Author</th>
            <td>{{($book->author)}}</td>
            
        </tr>
        <tr>
            <th>Price</th>
            <td>{{($book->price)}}</td>
            
        </tr>
        <tr>
            <th>ISBN</th>
            <td>{{($book->isbn)}}</td>
            
        </tr>
        <tr>
            <th>Stock</th>
            <td>{{($book->stock)}}</td>
            
        </tr>
    </table>

    <p>
        <a class="btn btn-outline-warning" href="{{ route('books.index') }}"><i class="bi bi-arrow-left-circle-fill"></i>Go Back</a>
    </p>

@endsection


