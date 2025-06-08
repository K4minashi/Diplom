<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>

    <!-- Шапка -->
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom"> <a href="index.html"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"> <svg
                    class="bi me-2" width="40" height="32" aria-hidden="true">
                    <use xlink:href="#bootstrap"></use>
                </svg> <span class="fs-4">Alexandra</span> </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link" aria-current="page">Главная</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">Обо мне</a></li>
                <li class="nav-item"><a href="/portfolio" class="nav-link  active">Портфолио</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Контакты</a></li>
            </ul>
        </header>
    </div>
    <!-- Картинки -->
    @extends('layouts.app')

    @section('content')
        <div class="container mx-auto px-4 py-8">
            @if($portfolioItems->isEmpty())
                <div class="text-center py-12">
                    <h2 class="text-xl text-gray-600">Галерея пока пуста</h2>
                    <p class="mt-4">Администратор еще не добавил работы</p>
                </div>
            @else
                <h1 class="text-3xl font-bold mb-8 text-center">Наши работы</h1>

                <div class="album py-5 bg-body-tertiary">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            @foreach($portfolioItems as $item)
                                @if($item->image)
                                    <div class="object">
                                        <img src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}">
                                        <p class="display-6">{{ $item->name }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <!-- Подвал -->
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="index.html" class="nav-link px-2 text-body-secondary">Главная</a></li>
                    <li class="nav-item"><a href="about-page.html" class="nav-link px-2 text-body-secondary">Обо мне</a>
                    </li>
                    <li class="nav-item"><a href="portfolio.html" class="nav-link px-2 text-body-secondary">Портфолио</a>
                    </li>
                    <li class="nav-item"><a href="contact.html" class="nav-link px-2 text-body-secondary">Контакты</a></li>
                </ul>
                <p class="text-center text-body-secondary">© 2025 Company, Inc</p>
            </footer>
        </div>
    @endsection
</body>

</html>