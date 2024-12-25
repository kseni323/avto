@extends('header')

@section('edit_content')
<div class="container">
    <h1>Редактировать бронирование</h1>
    <form action="{{ route('booking.update', $booking->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="car_model">Модель автомобиля</label>
            <input type="text" name="car_model" id="car_model" class="form-control" value="{{ $booking->car_model }}" required>
        </div>
        <div class="form-group">
            <label for="booking_date">Дата бронирования</label>
            <input type="date" name="booking_date" id="booking_date" class="form-control" value="{{ $booking->booking_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
    </form>
</div>
@endsection