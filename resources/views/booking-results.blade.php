@extends('header')

@section('res_content')
<div class="container">
    <h1>Ваши бронирования</h1>
    @foreach($bookings as $booking)
        <div class="card mb-3">
            <div class="card-body">
                <p class="card-text">Место получения: {{ $booking->pickup_location	}}</p>
                <p class="card-text">Место возврата: {{ $booking->return_location}}</p>
                <p class="card-text">Дата получения: {{ $booking->pickup_date}}</p>
                <p class="card-text">Дата возврата: {{ $booking->return_date}}</p>
                <p class="card-text">Статус: {{ $booking->status }}</p>
                <a href="{{ route('booking.edit', $booking->id) }}" class="btn btn-warning">Изменить</a>
                <form action="{{ route('booking.cancel', $booking->id) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">Отменить</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection