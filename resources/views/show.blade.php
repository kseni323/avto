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
                    <form method="POST" action="{{ route('booking.store') }}">
    @csrf
    <div class="form-group">
        <label for="pickup_location">Место получения</label>
        <input type="text" id="pickup_location" name="pickup_location" placeholder="Кольцовская, 54" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="return_location">Место возврата</label>
        <input type="text" id="return_location" name="return_location" placeholder="Кольцовская, 54" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="pickup_date">Дата аренды</label>
        <input type="date" id="pickup_date" min="{{ now()->toDateString() }}" name="pickup_date" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="return_date">Дата возврата</label>
        <input type="date" id="return_date" min="{{ now()->addDay()->toDateString() }}" name="return_date" class="form-control" required>
    </div>
    <div id="time_fields" style="display: none;">
                        <div class="form-group">
    <label for="pickup_time">Время получения</label>
    <select id="pickup_time" name="pickup_time" class="form-control" required>
        <option value="">Выберите время</option>
        @for ($hour = 0; $hour < 24; $hour++)
            <option value="{{ str_pad($hour, 2, '0', STR_PAD_LEFT) }}:00">
                {{ str_pad($hour, 2, '0', STR_PAD_LEFT) }}:00
            </option>
        @endfor
    </select>
</div>

<div class="form-group">
    <label for="return_time">Время возврата</label>
    <select id="return_time" name="return_time" class="form-control" required>
        <option value="">Выберите время</option>
        @for ($hour = 0; $hour < 24; $hour++)
            <option value="{{ str_pad($hour, 2, '0', STR_PAD_LEFT) }}:00">
                {{ str_pad($hour, 2, '0', STR_PAD_LEFT) }}:00
            </option>
        @endfor
    </select>
</div>
</div>
    <div class="form-group">
        <label for="car_model">Модель автомобиля</label>
        <input type="text" id="car_model" name="car_model" value="{{ $car->name }}" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label for="user_email">Электронная почта</label>
        <input type="email" id="user_email" name="user_email" placeholder="your@mail.com" class="form-control" required>
    </div>
    <div class="price mt-3">
        <p>Цена: {{ $car->price }} ₽ в сутки</p>
    </div>
    <button type="submit" class="btn btn-primary">Забронировать</button>
</form>
<div id="confirmationMessage" class="alert text-center" 
                    style="display: none; position: fixed; top: 20px; left: 50%; transform: translateX(-50%); 
                            background-color: #04DBC0; color: black; border: 2px solid black; 
                            border-radius: 8px; padding: 15px; z-index: 1060;">
                    Сообщение с дальнейшими деталями отправлено на вашу почту.
                </div>
                <div id="errorMessage" class="alert text-center" 
                    style="display: none; position: fixed; top: 70px; left: 50%; transform: translateX(-50%); 
                            background-color: #FF5C5C; color: white; border: 2px solid black; 
                            border-radius: 8px; padding: 15px; z-index: 1060;">
                    Автомобиль уже забронирован на выбранные даты.
                </div>
            </div>
            </div>

<section>
<div class="services mt-5">
        <h2>Дополнительные услуги</h2>
        <div class="row_e">
            @foreach ($services as $service)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->title }}</h5>
                            <p class="card-text">{{ Str::limit($service->description, 100) }}</p>
                            <a href="{{ route('services.show', $service->slug) }}" class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</section>


<section>
  <style>
    h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }
    .accordion {
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-bottom: 10px;
      overflow: hidden;
    }
    .accordion summary {
      cursor: pointer;
      padding: 15px;
      background: #f8f8f8;
      border-bottom: 1px solid #ddd;
      font-weight: bold;
    }
    .accordion summary:hover {
      background: #e8e8e8;
    }
    .accordion p {
      padding: 15px;
      margin: 0;
      background: #fff;
    }
  </style>
<body>
  <h2>Правила и условия аренды</h2>

  <details class="accordion">
    <summary>Требования к арендаторам</summary>
    <p>К аренде допускаются водители старше 21 лет. Минимальный стаж вождения арендатора — 2 года...</p>
  </details>
  
  <details class="accordion">
    <summary>Оплата аренды и допустимые формы оплаты</summary>
    <p>Информация о формах оплаты...</p>
  </details>
  
  <details class="accordion">
    <summary>Ответственность арендатора</summary>
    <p>Описание ответственности...</p>
  </details>

  <details class="accordion">
    <summary>Снижение ответственности арендатора в случае повреждения автомобиля</summary>
    <p>Информация о снижении ответственности...</p>
  </details>

  <details class="accordion">
    <summary>Территориальные ограничения и ограничения по пробегу</summary>
    <p>Информация об ограничениях...</p>
  </details>
  
  <details class="accordion">
    <summary>Запреты и ограничения при использовании ТС</summary>
    <p>Описание запретов...</p>
  </details>
  
  <details class="accordion">
    <summary>Возврат автомобиля на другой станции аренды / в другом городе</summary>
    <p>Информация о возврате...</p>
  </details>
</section>


<section class="widget_section" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget section-padding">
                    <a class="navbar-brand" href=""><ya-tr-span data-index="123-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="drive" data-translation="drive" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">drive</ya-tr-span><span style="color:#04DBC0"><ya-tr-span data-index="123-1" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Go" data-translation="Вперед" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Go</ya-tr-span></span><ya-tr-span data-index="123-2" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="" data-translation="" data-ch="0" data-type="trSpan" style="visibility: inherit !important;"> </ya-tr-span></a>
                    <p>Путешествие с хорошими друзьями подарит<br>вам незабываемые впечатления.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
    <div class="footer_widget">
        <h3>Контактная информация</h3>
        <ul class="contact_info section-padding">
            <li>
                <i class="fas fa-map-marker-alt"></i> Воронеж, ул.Колесниченко, 15
            </li>
            <li>
                <i class="far fa-envelope"></i> contact@carrental.com
            </li>
            <li>
                <i class="fas fa-phone-alt"></i> +7 (654) 128-09-87
            </li>
        </ul>
    </div>
</div>

            <div class="col-lg-4 col-md-6">

  <div class="footer_widget section-padding">
    <h3>Рассылка</h3>
    <p style="margin-bottom:0px">Ничего не пропустите! Подпишитесь, чтобы получать ежедневные предложения</p>
    
    <div class="subscribe_form">
      <!-- Форма с полем для email и кнопкой -->
      <form id="subscribeForm" class="subscribe_form" novalidate>
        <input type="email" name="EMAIL" id="subs-email" class="form_input" placeholder="Почта..." required>
        <button type="button" id="subscribeButton" class="btn btn-primaary">ПОДПИСАТЬСЯ</button>
        <div class="clearfix"></div>
      </form>
    </div>
  </div>
</div>

<!-- Уведомление о подписке -->
<div id="subscribeConfirmation" class="alert text-center" 
     style="display: none; position: fixed; top: 20px; left: 50%; transform: translateX(-50%); z-index: 1060; background-color: #28a745; color: #fff; border-radius: 8px; padding: 15px 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: none; max-width: 500px; width: 90%;">
  Спасибо за подписку! Подтверждение отправлено на вашу почту.
</div>

<script>
  // Функция для показа уведомления
  function subscribeUser() {
    const emailField = document.getElementById("subs-email");
    const confirmationMessage = document.getElementById("subscribeConfirmation");

    // Проверяем, заполнен ли email
    if (emailField.checkValidity()) {
      // Показываем уведомление
      confirmationMessage.style.display = "block";

      // Скрываем уведомление через 3 секунды
      setTimeout(() => {
        confirmationMessage.style.display = "none";
      }, 3000);

      // Очищаем поле ввода
      emailField.value = "";
    } else {
      // Показываем сообщение об ошибке, если email некорректен
      emailField.reportValidity();
    }
  }

  // Добавляем обработчик события для кнопки
  document.getElementById("subscribeButton").addEventListener("click", subscribeUser);
</script>
</section>

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


<script>
    document.querySelectorAll('.accordion').forEach(details => {
  details.addEventListener('toggle', () => {
    if (details.open) {
      document.querySelectorAll('.accordion').forEach(other => {
        if (other !== details) {
          other.removeAttribute('open');
        }
      });
    }
  });
});
</script>
            <script>
    document.addEventListener('DOMContentLoaded', function () {
        const pickupDateInput = document.getElementById('pickup_date');
        const returnDateInput = document.getElementById('return_date');
        const timeFields = document.getElementById('time_fields');

        function toggleTimeFields() {
            if (pickupDateInput.value && returnDateInput.value) {
                if (pickupDateInput.value === returnDateInput.value) {
                    timeFields.style.display = 'block';
                } else {
                    timeFields.style.display = 'none';
                    // Очистка значений времени, если даты разные
                    document.getElementById('pickup_time').value = '';
                    document.getElementById('return_time').value = '';
                }
            }
        }

        pickupDateInput.addEventListener('change', toggleTimeFields);
        returnDateInput.addEventListener('change', toggleTimeFields);
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const carModelSelect = document.getElementById('car_model');
    const pickupDateInput = document.getElementById('pickup_date');
    const returnDateInput = document.getElementById('return_date');
    const pickupTimeInput = document.getElementById('pickup_time');
    const returnTimeInput = document.getElementById('return_time');
    const rentalDetailsElement = document.getElementById('rental_details');

    function calculateRentalPrice() {
        const selectedCar = carModelSelect.options[carModelSelect.selectedIndex];
        const pricePerDay = parseFloat(selectedCar.getAttribute('data-price')) || 0;
        const pricePerHour = parseFloat(selectedCar.getAttribute('data-hourly-price')) || 0;

        if (!selectedCar.value) {
            rentalDetailsElement.textContent = 'Выберите автомобиль';
            return;
        }

        const pickupDate = new Date(pickupDateInput.value);
        const returnDate = new Date(returnDateInput.value);
        const pickupTime = pickupTimeInput.value ? pickupTimeInput.value.split(':') : [0, 0];
        const returnTime = returnTimeInput.value ? returnTimeInput.value.split(':') : [0, 0];

        pickupDate.setHours(pickupTime[0], pickupTime[1]);
        returnDate.setHours(returnTime[0], returnTime[1]);

        if (pickupDate && returnDate && returnDate > pickupDate) {
            const diffInMs = returnDate - pickupDate;
            const totalHours = diffInMs / (1000 * 60 * 60);

            let totalPrice;
            if (totalHours >= 24) {
                const totalDays = Math.ceil(totalHours / 24); // Округляем дни вверх
                totalPrice = totalDays * pricePerDay;
                rentalDetailsElement.textContent = `Аренда ${totalDays} суток: ${totalPrice.toFixed(2)} ₽`;
            } else {
                totalPrice = totalHours * pricePerHour;
                rentalDetailsElement.textContent = `Аренда ${totalHours.toFixed()} часов: ${totalPrice.toFixed(2)} ₽`;
            }
        } else {
            rentalDetailsElement.textContent = `Цена: ${pricePerDay} ₽ в сутки`;
        }
    }

    carModelSelect.addEventListener('change', calculateRentalPrice);
    pickupDateInput.addEventListener('change', calculateRentalPrice);
    returnDateInput.addEventListener('change', calculateRentalPrice);
    pickupTimeInput.addEventListener('change', calculateRentalPrice);
    returnTimeInput.addEventListener('change', calculateRentalPrice);
});
</script>   

    <script>
        // Устанавливаем минимальную дату возврата на основе даты аренды
        document.getElementById('pickup_date').addEventListener('change', function () {
            const pickupDate = this.value;
            document.getElementById('return_date').setAttribute('min', pickupDate);
        });

        // Обработка формы бронирования
        document.getElementById('reservation_form').addEventListener('submit', function(event) {
            event.preventDefault(); // Останавливаем стандартное поведение формы
            
            const form = this;

            // Отправка данных через AJAX
            fetch(form.action, {
               method: 'POST',
               body: new FormData(form),
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                },
        })
            .then(response => {
               if (response.ok) {
                // Уведомление об успешной отправке
                const confirmationMessage = document.getElementById('confirmationMessage');
                confirmationMessage.style.display = 'block';

                // Скрыть уведомление через 3 секунды
            setTimeout(() => {
              confirmationMessage.style.display = 'none';
        }, 3000);

        // Очистить форму
        form.reset();
    } else if (response.status === 409) {
        // Уведомление о конфликте (авто занято)
        response.json().then(data => {
            const errorMessage = document.getElementById('errorMessage');
            errorMessage.textContent = data.message;
            errorMessage.style.display = 'block';

            // Скрыть уведомление через 5 секунд
            setTimeout(() => {
                errorMessage.style.display = 'none';
            }, 5000);
        });
    } else {
        alert('Произошла ошибка, попробуйте снова.');
    }
})
.catch(error => console.error('Ошибка:', error));
        });
    </script>

</body>

@endsection