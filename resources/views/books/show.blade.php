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
        <a href="{{ route('books.index) }}">Go Back</a>
    </p>
    
</body>
</html>