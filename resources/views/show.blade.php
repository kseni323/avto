<form action="/confirm-reservation" method="POST">
    @csrf
    <input type="hidden" name="car_id" value="{{ $car->id }}">
    
    <div class="form-group">
        <label for="pickup_location">Место получения</label>
        <input type="text" name="pickup_location" class="form-control" value="{{ $reservationData['pickup_location'] ?? '' }}" readonly>
    </div>

    <div class="form-group">
        <label for="return_location">Место возврата</label>
        <input type="text" name="return_location" class="form-control" value="{{ $reservationData['return_location'] ?? '' }}" readonly>
    </div>

    <div class="form-group">
        <label for="pickup_date">Дата аренды</label>
        <input type="text" name="pickup_date" class="form-control" value="{{ $reservationData['pickup_date'] ?? '' }}" readonly>
    </div>

    <div class="form-group">
        <label for="return_date">Дата возврата</label>
        <input type="text" name="return_date" class="form-control" value="{{ $reservationData['return_date'] ?? '' }}" readonly>
    </div>

    <button type="submit" class="btn btn-primary">Подтвердить бронирование</button>
</form>
