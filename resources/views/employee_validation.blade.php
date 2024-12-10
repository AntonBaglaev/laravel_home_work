<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .invalid {color : red}
    </style>
    <title>Document</title>
</head>
<body>
    <form name="validation_test" method="post" action="{{Route('post_validation_form')}}">
        @csrf
        <label @error('fullname') class="invalid" @enderror>Name @error('fullname') <b>{{$message}}</b> @enderror</label><input type="text" name="fullname"><br>
        <label @error('password') class="invalid" @enderror>Password</label><input type="password" name="password"><br>
        <label>Confirm password</label><input type="password" name="confirm_password"><br>
        <input type="submit" value="Добавить пользователя">
    </form>
{{--    @foreach($errors->all() as $error)--}}
{{--        {{$error}} <br>--}}
{{--    @endforeach--}}
</body>
</html>
