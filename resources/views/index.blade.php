<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Buku</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>
    <div class="container_field"> </div>
    <a class="btn btn-primary mt-2" href="{{route ('book.form')}}">Tambah Book</a>

<table class="table table-striped table-bordered-dark mt-3">
<tr>
    <th>title </th>
    <th>Description</th>
    <th>Page Count</th>
    <th>Author Name</th>
    <th>Author Email</th>
    <th>Published Date</th>
</tr>
@foreach ($book as $book)
<tr>
    <td>{{$book->title}}</td>
    <td>{{$book->description }}</td>
    <td>{{$book->page_count}}</td>
    <td>{{$book->name}}</td>
    <td>{{$book->author_email}}</td>
    <td>{{$book->published_date}}</td>
</tr>
@endforeach
</table>
@vite(['resources/js/app.js'])
</body>
</html>
