<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form id="contactForm" action="{{ route('imgee.submit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">name</label>
        <input type="text" name="name"><br>
        <label for="">body</label>
        <input type="text" name="body"><br>
        <label for="">تحميل الصورة</label><br>
        <input type="file" name="imge">
        <br>
        <input type="submit" id="">
    </form>
</body>
</html>
