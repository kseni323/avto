@extends('header')

@section('show_content')

<head>
    <meta charset="UTF-8">
    <title>Автомобили</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <!-- Car Image and Details -->
            <div class="col-md-8">
                <h2 class="car-title">Аренда {{ $car->name }}</h2>
                <img src="{{ $car->image }}" class="img-fluid car-detail-image" alt="{{ $car->name}}">

                <div class="car-features mt-4">
                    <h5><strong>Характеристики автомобиля</strong></h5>
                    <p><strong>Общая информация:</strong> {{ $car->description }}</p>
                    <p><strong>Трансмиссия:</strong> {{ $car->transmission }}</p>
                    <p><strong>Привод:</strong> {{ $car->drive_type }}</p>
                    <p><strong>Класс:</strong> {{ $car->class }}</p>
                    <p><strong>Кондиционер:</strong> {{ $car->air_conditioning ? 'Есть' : 'Нет' }}</p>
                </div>
            </div>

            <!-- Booking Parameters -->
            <div class="col-md-4">
                <div class="booking-box p-4">
                    <h5><strong>Параметры аренды</strong></h5>
                    <form action="/confirm-reservation" method="POST">
    @csrf
    <input type="hidden" name="car_id" value="{{ $car->id }}">
    
    <div class="form-group">
        <label for="pickup_location">Место получения</label>
        <input type="text" name="pickup_location" class="form-control" value="{{ $reservationData['pickup_location'] ?? '' }}" readonly>
    </div>

    <div class="form-group">
        <label for="return_location">Место возврата</label>
        <input type="text" name="return_location" class="form-control" value="{{ $reservationData['return_location'] ?? '' }}" readonly>
    </div>

    <div class="form-group">
        <label for="pickup_date">Дата аренды</label>
        <input type="text" name="pickup_date" class="form-control" value="{{ $reservationData['pickup_date'] ?? '' }}" readonly>
    </div>

    <div class="form-group">
        <label for="return_date">Дата возврата</label>
        <input type="text" name="return_date" class="form-control" value="{{ $reservationData['return_date'] ?? '' }}" readonly>
    </div>
    <div class="price mt-3">
                            <p>{{ $car->price }} ₽ в сутки</p>
                            <p><small>депозит {{ $car->deposit }}₽</small></p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Забронировать</button>
</form>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection