@extends('header')

@section('show_content')

<head>
    <meta charset="UTF-8">
    <title>Автомобили</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>
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
<body>
<div class="container my-5">
    <div class="row">
        <!-- Car Image and Details -->
        <div class="col-md-8">
            <h2 class="car-title">Аренда {{ $car->name }}</h2>
            <img src="{{ $car->image }}" class="img-fluid car-detail-image" alt="{{ $car->name }}">

            <div class="car-features mt-4">
                <h5><strong>Характеристики автомобиля</strong></h5>
                <p><strong>Общая информация:</strong> {{ $car->description }}</p>
                <p><strong>Трансмиссия:</strong> {{ $car->transmission }}</p>
                <p><strong>Привод:</strong> {{ $car->drive_type }}</p>
                <p><strong>Класс:</strong> {{ $car->class }}</p>
                <p><strong>Кондиционер:</strong> {{ $car->air_conditioning ? 'Есть' : 'Нет' }}</p>
            </div>
        </div>

        <!-- Booking Form -->
        <div class="col-md-4">
            <div class="booking-box p-4">
                <h5><strong>Параметры аренды</strong></h5>
                <form id="bookingForm">
                    @csrf
                    <input type="hidden" name="car_id" value="{{ $car->id }}">

                    <div class="form-group">
                        <label for="pickupLocation">Место получения автомобиля</label>
                        <input type="text" id="pickupLocation" name="pickup_location" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="returnLocation">Место возврата автомобиля</label>
                        <input type="text" id="returnLocation" name="return_location" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Дата аренды</label>
                        <input type="date" id="pickupDate" name="pickup_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Дата возврата</label>
                        <input type="date" id="returnDate" name="return_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="userEmail">Электронная почта</label>
                        <input type="email" id="userEmail" name="user_email" class="form-control" required>
                    </div>

                    <div class="price mt-3">
                        <p>{{ $car->price }} ₽ в сутки</p>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Забронировать</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Уведомление -->
<div id="confirmationMessage" class="alert text-center" 
     style="display: none; position: fixed; top: 20px; left: 50%; transform: translateX(-50%); 
            background-color: #04DBC0; color: black; border: 2px solid black; 
            border-radius: 8px; padding: 15px; z-index: 1060;">
    Сообщение с дальнейшими деталями отправлено на вашу почту.
</div>

<!-- Скрипт -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('bookingForm');
        const confirmationMessage = document.getElementById('confirmationMessage');

        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Предотвращаем стандартное поведение

            const formData = new FormData(form);

            fetch("{{ route('bookings.store') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Показываем уведомление
                    confirmationMessage.style.display = 'block';

                    // Убираем уведомление через 3 секунды
                    setTimeout(() => {
                        confirmationMessage.style.display = 'none';
                    }, 3000);

                    // Сбрасываем форму
                    form.reset();
                }
            })
            .catch(error => {
                alert('Ошибка! Проверьте введённые данные.');
                console.error(error);
            });
        });
    });
</script>

</body>

@endsection