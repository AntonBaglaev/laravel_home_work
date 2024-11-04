<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о сотрудниках</title>
</head>

<body>
<h1>Информация о сотрудниках из БД</h1>

@foreach($employees as $emp)
    <p>{{ $emp->name }} {{ $emp->surname }}, {{ $emp->email }}</p>
@endforeach

</body>

</html>
