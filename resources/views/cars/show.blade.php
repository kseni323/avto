@extends('header')

@section('cars_content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Автомобиль</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
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

    <button type="submit" class="btn btn-primary">Подтвердить бронирование</button>
</form>


@endsection