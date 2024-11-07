@extends('header')

@section('avto_content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Автомобили - driveGo</title>
    <link rel="stylesheet" href="css/app1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/carFilter.js') }}"></script>
</head>
<body>
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

@endsection
