<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>
<form action="{{route('book_store')}}" method="post">
    @csrf
    <div class="form_section">
        <label for="title">Title </label>
        <input type="text" name="title" id="title" required>
    </div>
    <div class="form_section">
        <label for="author">Author </label>
        <input type="text" name="author" id="author" required>
    </div>
    <div class="form_section">
        <label for="genre">Choose Genre </label>
        <select name="genre" id="genre">
            <option value="fantasy">Fantasy</option>
            <option value="sci-fi">Sci-fi</option>
            <option value="mystery">Mystery</option>
            <option value="drama">Drama</option>
        </select>
    </div>
    <button type="submit">Submit</button>
</form>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li style="color: red">{{$error}}</li>
        @endforeach
    </ul>
@endif
</body>
</html>
