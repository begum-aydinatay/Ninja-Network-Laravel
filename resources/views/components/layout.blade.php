<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>

    @vite('resources/css/app.css')
</head>
<body>
    @if(@session('success'))
    {{-- In the session temporarily --}}
        <div id="flash" class="text-center bg-green-50 text-green-500 p-4 font-bold">
            {{ session('success') }}
        </div>

    @endif
    <header>
        <nav>
            <h1>Ninja Network</h1>
                <a href="{{route('ninjas.index')}}">All Ninjas</a>
                <a href="{{route('ninjas.create')}}">Create New Ninja</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>
