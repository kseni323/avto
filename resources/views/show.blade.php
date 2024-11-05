<div class="container my-5">
    <h2>Бронирование {{ $car->title }}</h2>
    <form action="/confirm-reservation" method="POST">
        @csrf
        <input type="hidden" name="car_id" value="{{ $car->id }}">
        <input type="hidden" name="reservation_id" value="{{ $reservation->id }}">

        <div class="form-group">
            <label for="pickup_location">Место получения</label>
            <input type="text" name="pickup_location" class="form-control" value="{{ $reservation->pickup_location }}" readonly>
        </div>

        <div class="form-group">
            <label for="return_location">Место возврата</label>
            <input type="text" name="return_location" class="form-control" value="{{ $reservation->return_location }}" readonly>
        </div>

        <div class="form-group">
            <label for="pickup_date">Дата аренды</label>
            <input type="text" name="pickup_date" class="form-control" value="{{ $reservation->pickup_date }}" readonly>
        </div>

        <div class="form-group">
            <label for="return_date">Дата возврата</label>
            <input type="text" name="return_date" class="form-control" value="{{ $reservation->return_date }}" readonly>
        </div>

        <div class="form-group">
            <label for="name">ФИО</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Подтвердить бронирование</button>
    </form>
</div>