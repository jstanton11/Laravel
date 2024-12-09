<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <a href="{{route('note.index')}}">Atras</a>
            <h1>FORMULARIO</h1>
                <form action="{{ route('note.store') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="title" class="form-label">Titulo</label>
                        <input type="text" class="form-control" id="title" name="title">
                        <label for="description" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>