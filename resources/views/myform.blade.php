<html>
<body>
    <form action="{{Route('post_form')}}" method="post" name="myname">
        <label>Name: </label><input type="text" name="my_name"><br>
        <label>Password: </label><input type="password" name="password"><br>
        <!--<label>Age: </label><input type="number" name="age">-->
        <input type="hidden" name="age" value="39">
        <!--<label>Male</label><input type="radio" name="gender" value="male">
        <label>Famale</label><input type="radio" name="gender" value="female">-->
        <label>Notebooks</label><input type="checkbox" name="category[]" value="notebooks">
        <label>Monitors</label><input type="checkbox" name="category[]" value="monitors">
        <label>Keyboards</label><input type="checkbox" name="category[]" value="keyboards">
        <br>
        <input type="submit" value="Отправить">
        @csrf
    </form>
</body>
</html>
