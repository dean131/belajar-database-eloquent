<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman update</title>
</head>
<body>
    <h1>INI HALMAN UPDATE</h1>

    <form method="post" action="/todos/{{ $todo->id }}/update">
        @csrf
        <input type="text" name="judul" value="{{ $todo->judul }}">
        <input type="text" name="deskripsi" value="{{ $todo->deskripsi }}">
        <button type="submit">Ubah</button>
    </form>
</body>
</html>