<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Pendaftaran</h1>
    <form action="/welcome" method="POST">
        @csrf
        <label >Fullname</label> <br>
        <input type="text" name="fullname" > <br> <br>
        <label >Address</label> <br>
        <textarea name="address" cols="30" rows="10"></textarea> <br> <br>

        <input type="submit" value="Daftar">
    </form>
    <a href="/">Kembali</a>
</body>
</html>