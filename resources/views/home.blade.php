@extends('header')

@section('main_content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аренда автомобилей</title>
    <link rel="stylesheet" href="css/app1.css">
    <link rel="stylesheet" href="css/app232.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/forms.js" defer></script>
</head>
</head>

<body>
    <div class="hero-section">
        <div class="content"> 
            <h1>Найдите лучший автомобиль</h1>
            <p>Ваши путешествия начинаются здесь</p>
            <a href="./login" class="btn">Вход в личный кабинет</a>
        </div>
    </div>

<section class="services_section" id="services">    
    <div class="container marketing"> 
    <div class="section-title"> Какие услуги мы предлагаем нашим клиентам</div>
    <div class="row text-center">
        <div class="col-lg-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-car-front" viewBox="0 0 16 16">
  <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276"/>
  <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z"/>
         </svg>
            <h2 class="fw-normal">Краткосрочная аренда</h2>
            <p>Идеально подходит для тех, кто нуждается в автомобиле на несколько дней или недель</p>
        </div>
        <div class="col-lg-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-bus-front" viewBox="0 0 16 16">
  <path d="M5 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0m8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-6-1a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2zm1-6c-1.876 0-3.426.109-4.552.226A.5.5 0 0 0 3 4.723v3.554a.5.5 0 0 0 .448.497C4.574 8.891 6.124 9 8 9s3.426-.109 4.552-.226A.5.5 0 0 0 13 8.277V4.723a.5.5 0 0 0-.448-.497A44 44 0 0 0 8 4m0-1c-1.837 0-3.353.107-4.448.22a.5.5 0 1 1-.104-.994A44 44 0 0 1 8 2c1.876 0 3.426.109 4.552.226a.5.5 0 1 1-.104.994A43 43 0 0 0 8 3"/>
  <path d="M15 8a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1V2.64c0-1.188-.845-2.232-2.064-2.372A44 44 0 0 0 8 0C5.9 0 4.208.136 3.064.268 1.845.408 1 1.452 1 2.64V4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v3.5c0 .818.393 1.544 1 2v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V14h6v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2c.607-.456 1-1.182 1-2zM8 1c2.056 0 3.71.134 4.822.261.676.078 1.178.66 1.178 1.379v8.86a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 11.5V2.64c0-.72.502-1.301 1.178-1.379A43 43 0 0 1 8 1"/>
</svg>
            <h2 class="fw-normal">Долгосрочная аренда</h2>
            <p>Отличный вариант для длительных путешествий или временной замены вашего автомобиля.</p>
        </div>
        <div class="col-lg-4 -">
           <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
  <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.5 4.5 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.5 3.5 0 0 1 8 11.5a3.5 3.5 0 0 1-3.032-1.75M7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A3 3 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.2 4.2 0 0 0 8 5c-.35 0-.69.04-1 .116"/>
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0"/>
</svg>
            <h2 class="fw-normal ">Аренда автомобилей класса люкс</h2>
            <p>Для тех, кто предпочитает передвигаться с комфортом и стилем.</p>
        </div>
    </div>
</div>
</section>




<div id="cars" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#cars" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#cars" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#cars" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <div class="overlay-darken"></div>
        <img src="images/porshe.jpg" class="d-block w-100 carousel-img" alt="First slide">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Porsche</h1> 
            <p><a class="btn btn-lg btn-primary" href="/cars">ПОСМОТРЕТЬ ВСЕ</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <div class="overlay-darken"></div>
        <img src="images/minicooper.jpg" class="d-block w-100 carousel-img" alt="Second slide">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>MINI</h1>
            <p><a class="btn btn-lg btn-primary" href="/cars">ПОСМОТРЕТЬ ВСЕ</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <div class="overlay-darken"></div>
        <img src="images/bmw.jpg" class="d-block w-100 carousel-img" alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>BMW</h1>
            <p><a class="btn btn-lg btn-primary" href="/cars">ПОСМОТРЕТЬ ВСЕ</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#cars" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#cars" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

       

<section class="reservation_section" style="padding:50px 0px" id="reserve">
@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <form method="POST" action="{{ route('booking.store') }}" id="reservation_form" class="car-reservation-form">
                    @csrf
                    <div class="text_header"><span>Найдите свой автомобиль</span></div>
                    <div>
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
                    </div>

                    <div class="form-group">
                        <label for="car_model">Модель автомобиля</label>
                        <select name="car_id" class="form-control" required>
                            <option value="">Выберите модель</option>
                            @foreach($cars as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="user_email">Электронная почта</label>
                        <input type="email" id="user_email" name="user_email" placeholder="your@mail.com" class="form-control" required>
                    </div>
                    <button type="submit" class="btn sbmt-bttn">Бронируйте мгновенно</button>
                </form>

                <!-- Уведомление о подтверждении -->
                <div id="confirmationMessage" class="alert text-center" 
                     style="display: none; position: fixed; top: 20px; left: 50%; transform: translateX(-50%); 
                            background-color: #04DBC0; color: black; border: 2px solid black; 
                            border-radius: 8px; padding: 15px; z-index: 1060;">
                    Сообщение с дальнейшими деталями отправлено на вашу почту.
                </div>
            </div>
        </div>
    </div>

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
                } else {
                    alert('Произошла ошибка, попробуйте снова.');
                }
            })
            .catch(error => console.error('Ошибка:', error));
        });
    </script>
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


</div>


<div id="static-form-container" data-url="https://cp.unisender.com/ru/v5/subscribe-form/view/6tknymemmmwrmy3kze1r97sqn5ywfdx9n1zzk5fe" data-settings="6gpgck38nyzfb56ipwqom1hsuahxcct3zkrxz1o7uri9hppdtmaho" style="display: none">
<form method="POST" action="https://cp.unisender.com/ru/subscribe?hash=6d4rrrmezwji386ipwqom1hsua6ruotoyyp7woaonige4a63pm15o" name="subscribtion_form" us_mode="embed">
<div class="container responsive"><table cellpadding="0" cellspacing="0" align="center" style="width: 100%; box-sizing: border-box; background-color: rgb(204, 204, 204); float: left;"><tbody><tr><td>
<!--[if (gte mso 9)|(IE)]><table cellpadding="0" cellspacing="0" border="0" width="400" align="center"><tr><td><![endif]--><table cellpadding="0" cellspacing="0" align="center" style="background-color: rgb(255, 255, 255); border-radius: 0px; max-width: 450px; width: 100%; border: none; margin: 0px auto; border-spacing: 0px; border-collapse: collapse;"><tbody><tr><td width="100%" style="vertical-align: top; max-width: 450px; font-size: 0px; padding: 25px;">
<!--[if (gte mso 9)|(IE)]><table cellpadding="0" cellspacing="0" border="0" width="400" align="center"><tr><td><![endif]-->                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="width: 100%; table-layout: fixed; height: auto; border-collapse: collapse; border-spacing: 0px; display: inline-table; vertical-align: top; font-size: medium;">                <tbody>
<tr>                    <td style="width: 100%; padding: 8px; height: 0px;" valign="top">                        <table border="0" cellspacing="0" cellpadding="0" style="height: 100%; width: 100%; table-layout: fixed; border-spacing: 0px; border-collapse: collapse; min-height: 0px;">                            <tbody>
<tr>                                <td style="width: 100%; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: rgb(34, 34, 34);">                                            <div style="display:inline-block; width:100%;font-size:0;">            <label style="font-size: 12px; padding: 0px 0px 5px; vertical-align: middle; box-sizing: border-box; width: 32%; display: inline-block; font-family: Arial, Helvetica, sans-serif; color: rgb(34, 34, 34);">                <span>E-mail</span>                <b style="font-size:14px;font-family:Georgia;line-height:10px;"> *</b>            </label>            <div style="display: inline-block; width: 66%;">                <input type="text" name="email" _validator="email" _required="1" style="border-radius: 3px; font: 13px / 1 Arial, Helvetica; padding: 0px 8px; width: 100%; box-sizing: border-box; border: 1px solid rgb(193, 201, 203); background-color: rgb(255, 255, 255); background-image: none; height: 30px;" _label="E-mail" placeholder="">                <div class="error-block" style="display:none;color:#ff592d;font:11px/18px Arial;"></div>            </div>        </div>                                    </td>                            </tr>                        </tbody>
</table>                    </td>                </tr>            </tbody>
</table>        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--><!--[if (gte mso 9)|(IE)]><table cellpadding="0" cellspacing="0" border="0" width="400" align="center"><tr><td><![endif]-->                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="width: 100%; table-layout: fixed; height: auto; border-collapse: collapse; border-spacing: 0px; display: inline-table; vertical-align: top; font-size: medium;">                <tbody>
<tr>                    <td style="width: 100%; background-image: none; min-height: 0px; height: 0px;" valign="top">                        <table border="0" cellspacing="0" cellpadding="0" style="height: 100%; width: 100%; table-layout: fixed; border-spacing: 0px; border-collapse: collapse; min-height: 0px;">                            <tbody>
<tr>                                <td style="width: 100%; text-align: right; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: rgb(34, 34, 34);">                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="display: inline-table; width: auto; border-spacing: 0px; border-collapse: collapse;">            <tbody>
<tr>                <td align="center" valign="middle" style="border: none; border-radius: 5px; padding: 15px 20px 17px; background-color: rgb(4, 219, 192); height: 18.7969px; width: 150px; min-height: 18.7969px;">                    <button href="javascript:" target="_blank" style="width: 100%; display: inline-block; text-decoration: none; word-break: break-all; font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 16.8px; color: rgb(255, 255, 255); background-color: rgb(4, 219, 192); border: 0px;">Подписаться</button>                </td>            </tr>        </tbody>
</table>                                    </td>                            </tr>                        </tbody>
</table>                    </td>                </tr>            </tbody>
</table>        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--><!--[if (gte mso 9)|(IE)]><table cellpadding="0" cellspacing="0" border="0" width="400" align="center"><tr><td><![endif]-->                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="width: 100%; table-layout: fixed; height: auto; border-collapse: collapse; border-spacing: 0px; display: inline-table; vertical-align: top; font-size: medium;">                <tbody>
<tr>                    <td style="width:100%;" valign="top">                        <table border="0" cellspacing="0" cellpadding="0" style="height: 100%; width: 100%; table-layout: fixed; border-spacing: 0px; border-collapse: collapse;">                            <tbody>
<tr>                                <td style="width: 100%; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: rgb(34, 34, 34);">                                            <div style="font-size:medium; word-break:break-word; word-wrap:break-word; line-height:18px; font-family: Times New Roman;">                    </div>                                    </td>                            </tr>                        </tbody>
</table>                    </td>                </tr>            </tbody>
</table>        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
</td></tr></tbody></table>
<!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
</td></tr></tbody></table></div>
<input type="hidden" name="charset" value="UTF-8">
<input type="hidden" name="default_list_id" value="1">
<input type="hidden" name="overwrite" value="2">
<input type="hidden" name="is_v5" value="1">
</form>
</div>
<script src="https://sf2df4j6wzf.s3.eu-central-1.amazonaws.com/popups/popup.js"></script>
<script>
  window.popupForSubscriptionsForm("https://apig.unisender.com");
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