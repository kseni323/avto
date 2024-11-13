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
    <script src="js/forms.js" defer></script>
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

#subscribeConfirmation {
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #04DBC0;
    color: #000;
    border: 1px solid #000;
    padding: 15px;
    border-radius: 5px;
    font-size: 16px;
    z-index: 1060;
    display: none; /* Скрыто по умолчанию */
  }

  .btn-primaary{
    background-color: #04DBC0;
    font-family: "Work Sans", sans-serif;
    font-size: 15px;
    font-weight: 100;
    line-height: 50px;
    display: inline-block;
    padding: 0 10px;
    width: 100%;
    cursor: pointer;
    border: none;
    transition: all 0.5s ease-in-out;
}

.footer_container {
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    color: #e0e0e0; /* Цвет текста */
}

.footer_widget {
    margin-left: 20px;
}

.footer_widget h3 {
    margin-bottom: 15px;
    font-size: 1.5em;
    color: #fff; /* Цвет заголовка */
}

.contact_info {
    list-style: none;
    padding: 0;
}

.contact_info li {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    font-size: 1.1em;
}

.contact_info i {
    margin-right: 10px;
    color: #04DBC0; /* Цвет иконок */
}
.contact-form {
    background-color: #fff;
    padding: 50px 40px;
    -webkit-box-shadow: 0px 50px 100px 0px rgba(64, 1, 4, 0.1), 0px -6px 0px 0px rgba(248, 99, 107, 0.004);
    box-shadow: 0px 50px 100px 0px rgba(64, 1, 4, 0.1), 0px -6px 0px 0px rgba(248, 99, 107, 0.004);
    border-radius: 3px;
}
*, ::after, ::before {
    box-sizing: border-box;
}

user agent stylesheet
div {
    display: block;
    unicode-bidi: isolate;
}

[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
    cursor: pointer;
}

.contact_send_btn {
    background-color: #04DBC0;
    color: #fff;
    font-family: "Work Sans", sans-serif;
    font-size: 15px;
    font-weight: 100;
    line-height: 50px;
    display: inline-block;
    padding: 0 10px;
    width: 100%;
    cursor: pointer;
    border: none;
    transition: all 0.5s ease-in-out;
}

.contact-form {
    background-color: #fff;
    padding: 50px 40px;
    -webkit-box-shadow: 0px 50px 100px 0px rgba(64, 1, 4, 0.1), 0px -6px 0px 0px rgba(248, 99, 107, 0.004);
    box-shadow: 0px 50px 100px 0px rgba(64, 1, 4, 0.1), 0px -6px 0px 0px rgba(248, 99, 107, 0.004);
    border-radius: 3px;
    
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
    unicode-bidi: isolate;
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
                        <button type="button" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#bookingModal">Забронировать</button>
                    </form>

                    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Введите свои данные</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <form id="modalForm">
                    <div class="form-group mb-3">
                        <label for="user_name">Имя</label>
                        <input type="text" id="user_name" name="user_name" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="user_email">Электронная почта</label>
                        <input type="email" id="user_email" name="user_email" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Уведомление о подтверждении -->
<div id="confirmationMessage" class="alert text-center" 
     style="display: none; position: fixed; top: 20px; left: 50%; transform: translateX(-50%); 
            background-color: #04DBC0; color: black; border: 2px solid black; 
            border-radius: 8px; padding: 15px; z-index: 1060;">
    Сообщение с дальнейшими деталями отправлено на вашу почту.
</div>

<!-- JavaScript для показа и скрытия уведомления -->
<script>
    document.getElementById('modalForm').addEventListener('submit', function(event) {
        event.preventDefault(); // предотвращаем отправку формы
        
        // Закрываем модальное окно
        var bookingModal = new bootstrap.Modal(document.getElementById('bookingModal'));
        bookingModal.hide();

        // Показываем уведомление
        var confirmationMessage = document.getElementById('confirmationMessage');
        confirmationMessage.style.display = 'block';

        // Убираем уведомление через 3 секунды
        setTimeout(function() {
            confirmationMessage.style.display = 'none';
        }, 3000);
    });
</script>

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

</body>

@endsection