<h1>Editar Livro</h1>

<form action="{{ route('livros.update', $livro) }}" method="POST">

    @csrf

    @method('PUT')

    <div>

        <label>Título</label>

        <input
            type="text"
            name="titulo"
            value="{{ old('titulo', $livro->titulo) }}">

        @error('titulo')
            <span>{{ $message }}</span>
        @enderror

    </div>

    <br>

    <div>

        <label>Autor</label>

        <input
            type="text"
            name="autor"
            value="{{ old('autor', $livro->autor) }}">

        @error('autor')
            <span>{{ $message }}</span>
        @enderror

    </div>

    <br>

    <div>

        <label>Ano</label>

        <input
            type="number"
            name="ano"
            value="{{ old('ano', $livro->ano) }}">

        @error('ano')
            <span>{{ $message }}</span>
        @enderror

    </div>

    <br>

    <button>

        Atualizar

    </button>

</form>
