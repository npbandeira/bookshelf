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

            <input type="text" name="titulo" value="{{ old('titulo') }}">
        </div>
        @error('titulo')
            <span style="color:red">
                {{ $message }}
            </span>
        @enderror

        <br>

        <div>
            <label>Autor</label>

            <input type="text" name="autor" value="{{ old('autor')}}">
        </div>
        @error('autor')
            <span style="color:red">
                {{ $message }}
            </span>
        @enderror

        <br>

        <div>
            <label>Ano</label>

            <input type=" number" name="ano" value="{{ old(key: 'ano')}}">
            @error('ano')
                <span style="color:red">
                    {{ $message }}
                </span>
            @enderror

        </div>

        <br>

        <button type="submit">
            Salvar
        </button>

    </form>

</body>

</html>
