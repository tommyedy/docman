<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

</head>

<body>
    <form method="POST" action="/book/save">
        @csrf
        <label>Judul</label>
        <input type="text" name="title">
        <label>Name</label>
        <input type="text" name="name">
        <label>Halaman</label>
        <input type="number" name="page">
        <input type="submit" value="kirim">
    </form>
</body>

</html>