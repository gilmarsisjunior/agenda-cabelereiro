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
        @foreach ($customers as $customer)
            <tr>
                <td>{{$customer->nome}}</td>
                <td>{{$customer->valor}}</td>
                <td>{{$customer->horario}}</td>
                <td><a href="">Check</a></td>
                <td><a href="">Edit</a></td>
                <td><a href="{{route('delete', $customer->id)}}">Del</a></td>
            </tr>
        @endforeach
    </table>

</body>
</html>