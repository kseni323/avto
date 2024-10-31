@foreach ($filteredCars as $car)
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('storage/' . $car->image_path) }}" class="card-img-top" alt="{{ $car->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $car->name }}</h5>
                <p class="card-text">{{ $car->description }}</p>
                <p class="card-text"><strong>{{ $car->price }} ₽</strong></p>
                <a href="/" class="btn btn-outline-primary">Подробнее</a>
            </div>
        </div>
    </div>
@endforeach