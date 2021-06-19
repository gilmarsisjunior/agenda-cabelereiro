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
            <td>Preço. C</td>
            <td>Hora</td>
        </tr>
        @if ($customers->count())
        @foreach ($customers as $customer)
        <tr>
            <td>{{$customer->nome}}</td>
            <td>{{$customer->valor}}</td>
            <td>{{$customer->horario}}</td>
            <td><a href="{{route('complete', $customer->id)}}">Complete</a></td>
            <td><a href="{{route('delete', $customer->id)}}">Delete</a></td>
        </tr>
    @endforeach

        @else
            <p>Nenhum cliente agendado</p>
        @endif
        
    </table>
    <a href="{{route('home')}}"><h2>Início</h2></a>
</body>
</html>