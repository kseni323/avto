@extends('header')

@section('show_content')
<body>
    <div class="container my-5">
        <div class="row">
            <!-- Car Image and Details -->
            <div class="col-md-8">
                <h2 class="car-title">Аренда {{ $car->title }}</h2>
                <img src="{{ $car->image_url }}" class="img-fluid car-detail-image" alt="{{ $car->title }}">

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
                            <input type="text" id="pickupLocation" class="form-control" placeholder="Введите место получения">
                        </div>
                        <div class="form-group">
                            <label for="returnLocation">Место возврата автомобиля</label>
                            <input type="text" id="returnLocation" class="form-control" placeholder="Введите место возврата">
                        </div>
                        <div class="form-group">
                            <label>Дата аренды</label>
                            <input type="date" class="form-control" name="pickup_date">
                        </div>
                        <div class="form-group">
                            <label>Дата возврата</label>
                            <input type="date" class="form-control" name="return_date">
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