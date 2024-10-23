@extends('master')

@section('CRUD')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>CRUD</h1>
    <p>{{ $name }}</p>

    @if ($name !="Oliver Eduardo")
        Tu no eres el operador de la Unidad 78 Oliver Eduardo Guera Espinoza
    @else
        Tu unidad es la 78 Oliver Eduardo 
    @endif

    <u>
    <p>
    @forelse ([78,256,56,96,100,45] as $item)
       <li> {{ $item }} </li>
    @empty
     
    </p>
    </u>

    @endforelse

</body>
</html>