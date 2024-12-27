@extends('header')

@section('res_content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    /* Обнуляем отступы и размеры */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body, html {
    height: 100%;
    font-family: 'Montserrat', sans-serif;
}

.hero-section {
    background-image: url('../images/sa.jpg'); /* Задаем фон */
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
    height: 500px;
    padding: 150px 0px;
}

.content {
    position: relative;
    z-index: 1; 
    text-align: left;
    color: #fff; 
    font-family: "Montserrat";
    padding-left: 152px;
}

.content h1 {
    font-size: 3em;
    margin-bottom: 10px;
}

.content p {
    font-size: 2em;
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background: #04DBC0;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1.1em;
}

.btn:hover {
    background-color: #357fce;
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}

[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
    cursor: pointer;
}

@media (min-width: 992px) {
    .navbar-expand-lg {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }
}

.navbar {
    background-color: #000000;
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: .5rem 1rem;

}

.navbar-brand {
    padding-top: var(--bs-navbar-brand-padding-y);
    padding-bottom: var(--bs-navbar-brand-padding-y);
    margin-right: var(--bs-navbar-brand-margin-end);
    font-size: var(--bs-navbar-brand-font-size);
    color: #fff;
    text-decoration: none;
    white-space: nowrap;
    font-weight: bold;
    font-family: "Montserrat";
    font-size: 25px;
}

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
    display: block;
}

*, ::after, ::before {
    box-sizing: border-box;
}

user agent stylesheet
nav {
    display: block;
    unicode-bidi: isolate;
}

a {
    background-color: transparent;
}

.nav-link {
    display: block;
    padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
    font-weight: var(--bs-nav-link-font-weight);
    color: #fff;
    text-decoration: none;
    background: 0 0;
    border: 0;
    font-size: 17px;
    font-family: "Montserrat";
    font-weight: bold;
}

.section-title {
    padding-top: 55px;
    font-size: 40px;
    line-height: 48px;
    font-weight: 400;
    letter-spacing: 0;
    font-family: "Montserrat";
    margin-bottom: 10px;
    text-transform: uppercase;
    text-align: center;
    padding-bottom: 36px;
}

.col-lg-4{
    position: relative;
    padding-top: 25px;
    font-weight: 200;
    font-family: "Montserrat";
    padding-bottom: 25px;
    padding: 100px 0px;
    color:#a2aab1;
}


.reservation_section .car-reservation-form {
    box-shadow: 0 5px 40px rgb(0 0 0 / 10%);
    padding: 10px 40px 40px;
    background-color: white;
}

*, ::after, ::before {
    box-sizing: border-box;
}

.form-control {
    background-color: #fff;
    border-radius: 0;
    padding: 17px 10px;
    box-shadow: none;
    border: 2px solid #eee;
    
}

.car-reservation-form label {
    font-weight: bold;
}
label {
    display: inline-block;
    margin-bottom: .1rem;
}


user agent stylesheet
form {
    display: block;
    margin-top: 0em;
    unicode-bidi: isolate;
    padding-top: 55px;
}

body {
    font-family: "Work Sans", Helvetica, Arial, sans-serif;
}

body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    color: #212529;
    text-align: left;

}

element.style {
    padding: 50px 0px;
}

</style>
<div class="container mt-5">
    <h1 class="mb-4">Редактировать бронирование</h1>
    <form action="{{ route('booking.update', $booking->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Для HTTP-метода PUT -->

        <!-- Выбор модели автомобиля -->
        <div class="form-group">
            <label for="car_id">Модель машины</label>
            <select name="car_id" id="car_id" class="form-control" required>
                <!-- Текущая забронированная машина -->
                <option value="{{ $booking->car->id }}" selected>
                    {{ $booking->car->name }} (текущая модель)
                </option>
                <!-- Другие доступные машины -->
                @foreach($cars as $car)
                    @if($car->id !== $booking->car->id)
                        <option value="{{ $car->id }}">{{ $car->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <!-- Место получения -->
        <div class="form-group">
            <label for="pickup_location">Место получения</label>
            <input 
                type="text" 
                name="pickup_location" 
                id="pickup_location" 
                class="form-control" 
                value="{{ $booking->pickup_location }}" 
                required
            >
        </div>

        <!-- Место возврата -->
        <div class="form-group">
            <label for="return_location">Место возврата</label>
            <input 
                type="text" 
                name="return_location" 
                id="return_location" 
                class="form-control" 
                value="{{ $booking->return_location }}" 
                required
            >
        </div>

        <!-- Дата получения -->
        <div class="form-group">
            <label for="pickup_date">Дата получения</label>
            <input 
                type="date" 
                name="pickup_date" 
                id="pickup_date" 
                class="form-control" 
                value="{{ $booking->pickup_date }}" 
                required
            >
        </div>

        <!-- Дата возврата -->
        <div class="form-group">
            <label for="return_date">Дата возврата</label>
            <input 
                type="date" 
                name="return_date" 
                id="return_date" 
                class="form-control" 
                value="{{ $booking->return_date }}" 
                required
            >
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="user_email">Почта пользователя</label>
            <input 
                type="email" 
                name="user_email" 
                id="user_email" 
                class="form-control" 
                value="{{ $booking->user_email }}" 
                required
            >
        </div>

        <button type="submit" class="btn btn-primary mt-3">Сохранить изменения</button>
    </form>
</div>
@endsection