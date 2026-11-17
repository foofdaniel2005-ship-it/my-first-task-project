<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
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
            <img src="{{ Vite::asset('resources/images/имя.расширение') }}" alt="Главная картинка">
            <p>Задача организации, в особенности же консультация с широким активом влечёт за собой интересный
                процесс внедрения модернизации соответствующих условий активизации. Повседневная практика
                показывает, что постоянное информационно-пропогандистское обеспечение нашей деятельности влечёт
                за собой интересный процесс внедрения модернизации модели развития. Разнообразный и богатый опыт
                высокотехнологичная концепция общественной системы обеспечивает актуальность модели развития.
            </p>
        </div>
    </main>
    <footer>
        ©Sukhin Danil D, 2026
    </footer>
</body>

</html>