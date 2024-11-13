@if ($cars->isEmpty())
    <div class="col-12 text-center mt-4">
        <p>По выбранным фильтрам ничего не найдено.</p>
    </div>
@else
    @foreach ($cars as $car)
        <div class="col-md-4" id="carResults">
            <div class="card">
                <h5 class="card-name text-center">{{ $car->name }}</h5>
                <img src="{{ $car->image }}" class="card-img-top" alt="{{ $car->name }}">
                <div class="card-body">
                    <p class="card-text">{{ $car->description }}</p>
                    <p class="card-text"><strong>{{ $car->price }} ₽</strong></p>
                    <a href="{{ route('cars.show', $car->id) }}" class="btn btn-outline-primary">Подробнее</a>
                </div>
            </div>
        </div>
    @endforeach
@endif




