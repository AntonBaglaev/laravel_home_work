<!doctype html>
<head>
    <title>Список пользователей</title>
</head>
<body>
<h2>Список пользователей</h2>
<table border="2">
    @foreach($users as $user)
        <tr>
            <td>{{$user->first_name}}</td>
            <td>{{$user->email}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
