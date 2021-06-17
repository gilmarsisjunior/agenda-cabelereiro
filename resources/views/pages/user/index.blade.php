<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href=""><h1>Bem vindo, {{$name}}</h1></a>
    <a href="{{route('agendate')}}"><h3>Agendar</h3></a>
    <a href=""><h3>Recebidos</h3></a>
    
    @if ($isAdmin === 1)
    <a href=""><h3>Novo usuário</h3></a>
    @endif
    
</body>
</html>