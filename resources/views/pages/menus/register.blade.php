<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/registro" method="POST">
        @csrf
        @if ($errors->any())
            <h4>{{$errors->first()}}</h4>
        @endif
        <input type="text" placeholder="Nome e Sobrenome" name="name">
        <input type="email" placeholder="Insira deu email" name="email">
        <input type="password" placeholder="Senha" name="password">
        <button>Login</button>
        
</body>
</html>