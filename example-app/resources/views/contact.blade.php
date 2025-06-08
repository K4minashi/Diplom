@extends('layouts.app') <!-- Эта строка должна быть в начале файла -->

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
                <li class="nav-item"><a href="/portfolio" class="nav-link">Портфолио</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link  active">Контакты</a></li>
            </ul>
        </header>
    </div>

    
    <!-- Форма -->



@section('content')
<div class="container">
    <h1>Обратная связь</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Ваше имя</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Сообщение</label>
            <textarea name="message" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
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
</body>

</html>
