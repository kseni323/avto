@extends('header')

@section('book_content')
<div class="container">
    <h1>Моё бронирование</h1>
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <form action="{{ route('booking.find') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Введите Ваш Email" required>
        </div>
        <button type="submit" class="btn btn-primary">Найти бронирование</button>
    </form>
</div>
@endsection