<!DOCTYPE html>
<html>

<head>
    <title>BookShelf</title>
</head>

<body>

    <h1>📚 BookShelf</h1>

    <p>Lista de livros</p>

    <ul>
        @foreach($livros as $livro)
            <li>
                {{ $livro['titulo'] }}
                -
                {{ $livro['autor'] }}
            </li>
        @endforeach
    </ul>
</body>

</html>
