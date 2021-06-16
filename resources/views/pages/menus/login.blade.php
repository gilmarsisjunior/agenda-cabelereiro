<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="POST">
        @csrf
        <input type="email" placeholder="Insira deu email" name="email">
        <input type="password" placeholder="Senha" name="password">
        <button>Login</button>

    </form>
</body>
</html>