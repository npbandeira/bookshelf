<h1>📚 BookShelf</h1>

<a href="{{ route('livros.create') }}">
    Novo Livro
</a>

<hr>

@forelse($livros as $livro)

    <p>

        <strong>{{ $livro->titulo }}</strong>

        <br>

        {{ $livro->autor }}

        <br>

        {{ $livro->ano }}

    </p>

    <hr>

@empty

    <p>Nenhum livro cadastrado.</p>

@endforelse
