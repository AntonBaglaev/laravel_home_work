<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('store-form')}}" method="post" name="employee-form">
    @csrf
    <div class="form-group">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="soname">Soname: </label>
        <input type="text" name="soname" id="soname" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="address">Address: </label>
        <input type="text" name="address" id="address" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="position">Position: </label>
        <input type="text" name="position" id="position" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="workData">Work Data: </label>
        <textarea name="workData" class="form-control" required></textarea>
    </div>
    <button type="submit">Submit</button>
</form>
</body>
</html>
