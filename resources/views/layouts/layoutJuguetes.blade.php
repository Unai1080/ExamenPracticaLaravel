<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex w-full flex-col items-center justify-center">
    <header class="w-1/2 flex flex-col text-center items-center justify-center bg-zinc-400">
        <h1> Afede </h1>
        <form action="/añadirJuguete" method="get">
            @csrf
            <input type="submit" value="Añadir Juguete">
        </form>
        <form action="/borrar Juguete" method="get">
            @csrf
            <input type="submit" value="Borrar Juguete">
        </form>
        <form action="/catalogo" method="get">
            @csrf
            <input type="submit" value="Catalogo">
        </form>
    </header>

    @section('main')

    @show
    
</body>
</html>