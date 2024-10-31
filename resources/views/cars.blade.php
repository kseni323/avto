@extends('header')

@section('avto_content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Автомобили - driveGo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Фильтры для поиска автомобилей -->
    <section class="container my-4">
        <h12 class="text-center">АВТОМОБИЛИ</h12>
        <form class="row g-3">
            <div class="col-md-4">
                <label for="classFilter" class="form-label">Класс</label>
                <select id="classFilter" class="form-select">
                    <option>Эконом</option>
                    <option>Бизнес</option>
                    <option>Внедорожник</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="transmissionFilter" class="form-label">Трансмиссия</label>
                <select id="transmissionFilter" class="form-select">
                    <option>Автоматическая</option>
                    <option>Механическая</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="driveTypeFilter" class="form-label">Привод</label>
                <select id="driveTypeFilter" class="form-select">
                    <option>Передний</option>
                    <option>Задний</option>
                    <option>Полный</option>
                </select>
            </div>
        </form>
    </section>

    <!-- Секция с автомобилями -->
    <section class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/car5.png" class="card-img-top" alt="Hyundai Solaris">
                    <div class="card-body">
                        <h5 class="card-title">MINI Cooper</h5>
                        <p class="card-text">Эконом. Автоматическая трансмиссия, кондиционер</p>
                        <p class="card-text"><strong>2933 ₽</strong></p>
                        <a href="/" class="btn btn-outline-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/car4.jpg" class="card-img-top" alt="VW Polo 2022 liftback">
                    <div class="card-body">
                        <h5 class="card-title">Mercedes Benz E-class</h5>
                        <p class="card-text">Эконом. Автоматическая трансмиссия, кондиционер</p>
                        <p class="card-text"><strong>3048 ₽</strong></p>
                        <a href="/cars1" class="btn btn-outline-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/car6.png" class="card-img-top" alt="Hyundai Creta">
                    <div class="card-body">
                        <h5 class="card-title">Porsche Cayenne Hybrid</h5>
                        <p class="card-text">Внедорожник. Автоматическая трансмиссия, кондиционер</p>
                        <p class="card-text"><strong>2950 ₽</strong></p>
                        <a href="/" class="btn btn-outline-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

@endsection
