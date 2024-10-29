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
<body>
    <div class="container my-5">
        <div class="row">
            <!-- Car Image and Details -->
            <div class="col-md-8">
                <h2 class="car-title">Аренда Mercedes Benz E-class</h2>
                <img src="images/car4.jpg" class="img-fluid car-detail-image" alt="Hyundai Solaris">
                
                <div class="car-features mt-4">
                    <h5><strong>Характеристики автомобиля</strong></h5>
                    <p><strong>Общая информация</strong></p>
                    <p><strong>Трансмиссия</strong>.....................................автоматическая трансмиссия</p>
                    <p><strong>Привод</strong>.....................................Передний/задний привод</p>
                    <p><strong>Класс</strong>.....................................Эконом</p>
                    <p><strong>Кондиционер</strong>..............................есть</p>
                </div>
            </div>
            
            <!-- Booking Parameters -->
            <div class="col-md-4">
                <div class="booking-box p-4">
                    <h5><strong>Параметры аренды</strong></h5>
                    <form>
                        <div class="form-group">
                            <input type="checkbox" id="sameLocation">
                            <label for="sameLocation">Возврат в том же месте</label>
                        </div>
                        <div class="form-group">
                            <label for="pickupLocation">Место получения автомобиля</label>
                            <input type="text" id="pickupLocation" class="form-control" placeholder="Кольцовская, 54">
                        </div>
                        <div class="form-group">
                            <label for="rentalDates">Дата аренды/возврата</label>
                            <div class="d-flex">
                                <input type="text" class="form-control mr-2" placeholder="дд.мм.гггг">
                                <input type="text" class="form-control" placeholder="дд.мм.гггг">
                            </div>
                        </div>
                        <div class="price mt-3">
                            <p>1500 ₽ в сутки</p>
                            <p><small>депозит 0₽</small></p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Забронировать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection