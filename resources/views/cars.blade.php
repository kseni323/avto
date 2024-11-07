<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Автомобили - driveGo</title>
    <link rel="icon" href="{{asset ('images/ава.jpg')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cars123.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/a4b8bdf2119927647b8e8f0f8/a1f403e3da1fb14c1ea674d4b.js");</script>
    <script src="{{ asset('js/carFilter.js') }}"></script>
         <style>
        .nav-link:hover {
            color: #04DBC0 !important;
        }
        
         .drive-text:hover {
              color: #04DBC0 !important; 
              }
    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
        <span class="drive-text">drive</span><span style="color:#04DBC0">Go</span>&nbsp;
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobileNavbar" aria-controls="mobileNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="yahyaNavbar">
                <ul class="navbar-nav" style="margin-left: auto!important;">
                    <li class="nav-item active">
                        <a class="nav-link" href="./">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#services">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#cars">Автомобили</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#reserve">Бронирование</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#contact-us">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login">Вход</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./register">Регистрация</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Фильтры для поиска автомобилей -->
    <section class="container my-4">
    <h2 class="text-center">АВТОМОБИЛИ</h2>
    <form method="GET" action="{{ route('cars.index') }}" class="row g-3">
        <div class="col-md-4">
            <label for="classFilter" class="form-label">Класс</label>
            <select id="classFilter" name="class" class="form-select">
                <option value="">Все классы</option>
                <option value="Эконом">Эконом</option>
                <option value="Бизнес">Бизнес</option>
                <option value="Внедорожник">Внедорожник</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="transmissionFilter" class="form-label">Трансмиссия</label>
            <select id="transmissionFilter" name="transmission" class="form-select">
                <option value="">Все трансмиссии</option>
                <option value="Автоматическая">Автоматическая</option>
                <option value="Механическая">Механическая</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="driveTypeFilter" class="form-label">Привод</label>
            <select id="driveTypeFilter" name="drive_type" class="form-select">
                <option value="">Все приводы</option>
                <option value="Передний">Передний</option>
                <option value="Задний">Задний</option>
                <option value="Полный">Полный</option>
            </select>
        </div>
        <div class="col-md-12 mt-3">
            <button type="submit" class="btn btn-primary">Фильтровать</button>
        </div>
    </form>
    
    <div class="row mt-4" id="car-results">
        @foreach ($cars as $car)
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-name text-center">{{ $car->name }}</h5> <!-- Название автомобиля над картинкой -->
                    <img src="{{ $car->image }}" class="card-img-top" alt="{{ $car->name }}">
                    <div class="card-body">
                        <p class="card-text">{{ $car->description }}</p>
                        <p class="card-text"><strong>{{ $car->price }} ₽</strong></p>
                        <a href="{{ route('cars.show', $car->id) }}" class="btn btn-outline-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>