<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>BookShelf</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100">

    <nav class="bg-indigo-600 text-white shadow">

        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between">

            <h1 class="text-2xl font-bold">

                📚 BookShelf

            </h1>

        </div>

    </nav>

    <main class="max-w-6xl mx-auto p-8">

        @yield('content')

    </main>

</body>

</html>
