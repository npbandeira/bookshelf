<!DOCTYPE html>
<html>

<head>
    <title>Novo Livro</title>
</head>

<body>

    <h1>Novo Livro</h1>

    <form action="{{ route('livros.store') }}" method="POST">

        @csrf

        <div>
            <label>Título</label>

            <input type="text" name="titulo">
        </div>

        <br>

        <div>
            <label>Autor</label>

            <input type="text" name="autor">
        </div>

        <br>

        <div>
            <label>Ano</label>

            <input type="number" name="ano">
        </div>

        <br>

        <button type="submit">
            Salvar
        </button>

    </form>

</body>

</html>
