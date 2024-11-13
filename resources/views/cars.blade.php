@extends('header')

@section('avto_content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Автомобили - driveGo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/carFilter.js') }}"></script>
</head>

<body>
<section class="container my-4">
    <h2 class="text-center">АВТОМОБИЛИ</h2>
    <form id="filterForm" method="GET" action="{{ route('cars.filter') }}" class="row g-3">
        <div class="col-md-4">
            <label for="classFilter" class="form-label">Класс</label>
            <select id="classFilter" name="class" class="form-select">
                <option value="">Все классы</option>
                @foreach($classes as $class)
                    <option value="{{ $class }}">{{ $class }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label for="transmissionFilter" class="form-label">Трансмиссия</label>
            <select id="transmissionFilter" name="transmission" class="form-select">
                <option value="">Все трансмиссии</option>
                @foreach($transmissions as $transmission)
                    <option value="{{ $transmission }}">{{ $transmission }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label for="driveTypeFilter" class="form-label">Привод</label>
            <select id="driveTypeFilter" name="drive_type" class="form-select">
                <option value="">Все приводы</option>
                @foreach($driveTypes as $driveType)
                    <option value="{{ $driveType }}">{{ $driveType }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12 mt-3">
            <button type="submit" class="btn btn-primary">Фильтровать</button>
        </div>
    </form>

    <!-- Отображение автомобилей -->

    <div class="row mt-4" id="car-results">
        @foreach ($cars as $car)
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-name text-center">{{ $car->name }}</h5> <!-- Название автомобиля над картинкой -->
                    <img src="{{ $car->image }}" class="card-img-top" alt="{{ $car->name }}">
                    <div class="card-body">
                        <p class="card-text">{{ $car->description }}</p>
                        <p class="card-text"><strong>{{ $car->price }} ₽</strong></p>
                        <a href="{{ route('cars.show', $car->id) }}" class="btn btn-outline-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
document.getElementById('filterForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение формы

    // Собираем параметры фильтрации
    const formData = new FormData(this);
    const params = new URLSearchParams(formData).toString();

    fetch(/filter?${params}, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => {
        // Проверяем и вставляем полученный HTML
        document.getElementById('car-results').innerHTML = data.html;
    })
    .catch(error => console.error('Ошибка:', error));
});
    </script>

<footer class="footer_section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="copyright">
							driveGo© 
							<script type="text/javascript"> 
								document.write(new Date().getFullYear())
							</script>
							Все правы защищены
						</div>
					</div>
				</div>
			</div>
		</footer>

</body>

@endsection