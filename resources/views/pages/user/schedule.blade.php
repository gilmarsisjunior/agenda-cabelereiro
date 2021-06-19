<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Essa é sua página de agendamento! {{$name}}</h1> <br/>
    <a href="{{route('customer')}}"><h2>Agendar Cliente</h2></a>
    <a href="{{route('listar')}}"><h2>Clientes Agendados</h2></a>
    <a href="{{route('home')}}"><h2>Início</h2></a>
</body>
</html>