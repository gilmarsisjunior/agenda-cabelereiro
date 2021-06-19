<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bem vindo, {{$name}}</h1>
    <h2>Renda Hoje: {{$sumToday}}</h2>
    <h2>Renda total: {{$sumTotal}}</h2>
    <a href="{{route('agendate')}}"><h3>Agenda</h3></a>
    <a href="{{route('recived')}}"><h3>Histórico</h3></a>
    
    <a href="{{route('logout')}}"><h3>Logout</h3></a>
    
    @if ($isAdmin === 1)
    <a href=""><h3>Novo usuário</h3></a>
    @endif
    
</body>
</html>