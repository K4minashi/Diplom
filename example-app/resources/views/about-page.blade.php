<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
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
                <li class="nav-item"><a href="/about" class="nav-link active">Обо мне</a></li>
                <li class="nav-item"><a href="/portfolio" class="nav-link">Портфолио</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Контакты</a></li>
            </ul>
        </header>
    </div>


    <!-- Блок о себе -->
    <div class="profile">
        <img src="static/images/photo.jpg" alt="Photo">
        <p><span>Искусство как дыхание</span>
            С детства я увлекалась рисованием, но и подумать не могла что займусь этим всерьез, ведь достаточно поздно
            поняла что хочу стать художником. Не смотря на это решила не отступать и идти до конца. Так когда поступила
            в НГУАДИ, начала детальнее изучать искусство, стремиться получить все необходимые знания для того чтобы
            стать профессионалом своего дела. Благодаря многим часам практики, в моем багаже скопились разообразные
            работы. С выполнением каждой из них я расту как художник и набира</p>
    </div>


    <!-- Блок с достижениями -->
    <div class="container1">
        <h2>Награды и достижения</h2>
        <ul>
            <li>Участие в выставке "Слияние искусств, воплощение мечты: изобразительное искусство Китая и России".
                Программа обмена" в Педагогическом университете Муданьцзяна.</li>
            <li>Участие в выставке "Дом Ленина. На стыке эпох" в камерном зале филармонии.</li>
            <li>Участие в выставке "Многогранность монументального искусства" в НГУАДИ.</li>
            <li>Участие в выездных пленерах, таких как осенний и весенний пленер "по следам Николая Шагаева".</li>
            <li>Участие в межвузовской научно-просветительской студенческой конференции "Духовно-нравственные основы
                Великой победы".</li>
            <li>Участие в благоукрашении храма в честь иконы Божией Матери "Знамение-Абалацкая".</li>
            <li>Обучение дополнительной профессиональной программе повышения квалификации "Экскурсионная деятельность по
                объектам монументально-декоративного искусства".</li>
        </ul>
    </div>


    <!-- Блок отзывов -->
    <div class="container_white">
        <h2>Отзывы</h2>
        <h2>ФИО</h2>
        <p>Эта картина завораживает с первого взгляда! Гармоничное сочетание цветов, игра света и тени, а также глубина
            сюжета создают неповторимую атмосферу. Художник мастерски передал эмоции, и кажется, будто картина "оживает"
            при взгляде на нее. Очень вдохновляющая и душевная работа, которая надолго остается в памяти. Рекомендую
            всем ценителям искусства!</p>
    </div>

    
</body>

</html>