<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Criar novo usuário</h1>

    <form action="{{route('create')}}" method="POST">
        @csrf
        <input type="text" placeholder="Cliente" name="name">
        <input type="number" placeholder="Preço do corte" name="price">
        <input type="time" placeholder="Horário" name="time">
        <button type="submit">Adicionar</button>
    </form>

</body>
</html>