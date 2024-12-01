<html>
<body>
<form name="file-upload" enctype="multipart/form-data" method="post" action="{{Route('uploadFile')}}">
    <!-- загрузка нескольких файлов файла -->
    <input type="file" name="upload_photo[]"> <br>
    <br>
    <input type="file" name="upload_photo[]"> <br>
    <br>
    <input type="file" name="upload_photo[]">
    <!-- загрузка одного файла -->
    <!-- <input type="file" name="upload-photo">-->
    <input type="submit" value="Send">
    @csrf
</form>
</body>
</html>
