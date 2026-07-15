@extends('layouts.app')

@section('content')

    <div class="flex justify-between items-center mb-6">

        <h2 class="text-3xl font-bold">

            Livros

        </h2>

        <a href="{{ route('livros.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">

            Novo Livro

        </a>

    </div>

    <table class="w-full bg-white rounded shadow">

        <thead class="bg-gray-100">

            <tr>

                <th class="text-left p-4">Título</th>

                <th class="text-left p-4">Autor</th>

                <th class="text-left p-4">Ano</th>

                <th class="text-center p-4">Ações</th>

            </tr>

        </thead>

        <tbody>

            @forelse($livros as $livro)

                <tr class="border-t">

                    <td class="p-4">

                        {{ $livro->titulo }}

                    </td>

                    <td class="p-4">

                        {{ $livro->autor }}

                    </td>

                    <td class="p-4">

                        {{ $livro->ano }}

                    </td>

                    <td class="p-4">

                        <div class="flex gap-2 justify-center">

                            <a href="{{ route('livros.edit', $livro) }}" class="bg-yellow-400 px-3 py-1 rounded">

                                Editar

                            </a>

                            <form action="{{ route('livros.destroy', $livro) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button class="bg-red-500 text-white px-3 py-1 rounded">

                                    Excluir

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="4" class="text-center p-8">

                        Nenhum livro cadastrado.

                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

@endsection
