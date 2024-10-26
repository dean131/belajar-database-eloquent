<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container my-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">INI HALAMAN TODOS INDEX</h5>
                <a href="/todos/create" class="btn btn-success btn-sm">Tambah todo</a>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($todos as $todo)
                            <tr>
                            <td>{{ $todo->judul }} </td>
                            <td>{{ $todo->deskripsi }} </td>
                            <td>        
                                <a href="/todos/{{ $todo->id }}/update" class="btn btn-info btn-sm">update</a>
                                <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm">hapus</a>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>