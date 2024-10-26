<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create todo</title>
</head>
<body>
    <h1>Create todo</h1>

    <form method="post" action="/todos/create">
        @csrf
        <input type="text" name="judul">
        <input type="text" name="deskripsi">
        <button type="submit">Buat</button>
    </form>
</body>
</html>