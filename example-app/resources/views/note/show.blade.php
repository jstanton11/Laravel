<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('note.index')}}">Atras</a>
    <h1>{{$note->title}}</h1>
    <p>{{$note->description}}</p>
</body>
</html>