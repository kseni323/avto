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
                    <form>
                        <div class="form-group">
                            <label for="pickupLocation">Место получения автомобиля</label>
                            <input type="text" id="pickupLocation" placeholder="Введите место получения" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="returnLocation">Место возврата автомобиля</label>
                            <input type="text" id="returnLocation" placeholder="Введите место возврата" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Дата аренды</label>
                            <input type="date"  name="pickup_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Дата возврата</label>
                            <input type="date" name="return_date" class="form-control" required>
                        </div>
                        <div class="price mt-3">
                            <p>{{ $car->price }} ₽ в сутки</p>
                            <p><small>депозит {{ $car->deposit }}₽</small></p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Забронировать</button>
                    </form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dailyPrice = {{ $car->price }};
        const pickupDateInput = document.getElementById('pickup_date');
        const returnDateInput = document.getElementById('return_date');
        const totalPriceDisplay = document.getElementById('total-price');

        function calculateTotalPrice() {
            const pickupDate = new Date(pickupDateInput.value);
            const returnDate = new Date(returnDateInput.value);

            if (pickupDate && returnDate && returnDate > pickupDate) {
                const timeDiff = returnDate - pickupDate;
                const days = Math.ceil(timeDiff / (1000 * 60 * 60 * 24));
                const totalPrice = days * dailyPrice;

                totalPriceDisplay.textContent = `Итоговая цена: ${totalPrice} ₽`;
            } else {
                totalPriceDisplay.textContent = '';
            }
        }

        pickupDateInput.addEventListener('change', calculateTotalPrice);
        returnDateInput.addEventListener('change', calculateTotalPrice);
    });
</script>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection