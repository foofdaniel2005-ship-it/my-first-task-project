<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <div class="header">
            <div class="logo">
                <img src="{{ Vite::asset('resources/images/имя.расширение') }}" alt="Логотип">
            </div>
            <div class="list">
                <h2><a href="{{ route('home') }}">Главная</a></h2>
                <h2><a href="{{ route('array') }}">Массивы</a></h2>
            </div>
            <div class="idk">

            </div>
        </div>
    </header>
    <main>
        <div class="square-main">
            <!-- Ссылки из задания для самостоятельного выполнения -->
            <div class="array-controls">
                <a href="{{ route('array.shuffle') }}">Перемешать массив</a>
                <a href="{{ route('array.sort') }}">Сортировать массив (по цене)</a>
                <a href="{{ route('array.filter') }}">Отфильтровать массив (цена > 1000)</a>
            </div>

            <div class="cards">
                @foreach ($array as $item)
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/' . $item['path']) }}" alt="{{ $item['title'] }}">
                        <h3>{{ $item['title'] }}</h3>
                        <p>Задача организации, в особенности же консультация с широким активом влечёт за собой интересный
                            процесс внедрения модернизации соответствующих условий активизации.
                        </p>
                        <summary>{{ $item['price'] }}₿</summary>
                        <button>Buy</button>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    <footer>
        ©Sukhin Danil D, 2026
    </footer>
</body>

</html>
