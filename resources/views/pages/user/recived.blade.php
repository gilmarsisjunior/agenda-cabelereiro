<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    
<table>
    <tr>
        <td>Nome</td>
        <td>Hórario</td>
        <td>Data</td>
        <td>Valor</td>
    </tr>
    @if ($recived -> count())

    @foreach ($recived as $recive)
    
    <tr>
        <td>{{$recive->nome}}</td>
        <td>{{$recive->horario}}</td>
        <td>{{$recive->data}}</td>
        <td>{{$recive->valor}}</td>
    </tr>
    @endforeach

   @else
    <p>Não possui cliente cadastrado</p> 

    @endif
        
</table>
<a href="{{route('home')}}"><h2>Início</h2></a>

</body>
</html>