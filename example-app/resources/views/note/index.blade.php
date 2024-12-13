<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>NOTAS</h1>
    <a href="{{route('note.formulario')}}">CREAR</a>
    <ul>
    @foreach ($notes as $note)
        <li><a href="{{route('note.show', $note->id)}}">{{$note->title}} -- {{$note->description}}</a> | 
        <a href="{{route('note.edit', $note->id)}}">EDITAR</a> | 
        <form method="POST" action="{{route('note.destroy', $note->id)}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="BORRAR" />
        </form>   
    </li>
    @endforeach
    </ul>
</body>
</html>