@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">

        <div class="bg-white shadow-lg rounded-lg p-8">

            <h2 class="text-3xl font-bold mb-6">
                ✏️ Editar Livro
            </h2>

            <form action="{{ route('livros.update', $livro) }}" method="POST">

                @method('PUT')
                @csrf

                <div class="mb-5">
                    <label class="block mb-2 font-semibold">
                        Título
                    </label>

                    <input type="text" name="titulo" value="{{ old('titulo', $livro->titulo) }}"
                        class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">

                    @error('titulo')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block mb-2 font-semibold">
                        Autor
                    </label>

                    <input type="text" name="autor" value="{{ old('autor',  $livro->autor) }}"
                        class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">

                    @error('autor')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 font-semibold">
                        Ano
                    </label>

                    <input type="number" name="ano" value="{{ old('ano', $livro->ano) }}"
                        class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">

                    @error('ano')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex gap-3">

                    <button class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg">

                        Atualizar

                    </button>

                    <a href="{{ route('livros.index') }}" class="bg-gray-300 hover:bg-gray-400 px-5 py-2 rounded-lg">

                        Cancelar

                    </a>

                </div>

            </form>

        </div>

    </div>

@endsection
