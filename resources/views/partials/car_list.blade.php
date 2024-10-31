@foreach ($cars as $car)
    <div class="col-md-4">
        <div class="card">
            <img src="{{ $car->image }}" class="card-img-top" alt="{{ $car->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $car->title }}</h5>
                <p class="card-text">{{ $car->description }}</p>
                <p class="card-text"><strong>{{ $car->price }} ₽</strong></p>
                <a href="/" class="btn btn-outline-primary">Подробнее</a>
            </div>
        </div>
    </div>
@endforeach