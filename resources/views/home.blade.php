@extends('header')

@section('main_content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аренда автомобилей</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app1.css">
    <link rel="stylesheet" href="css/app3.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
            <p>Идеально подходит для тех, кто нуждается в автомобиле на несколько дней или недель.</p>
        </div>
        <div class="col-lg-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-bus-front" viewBox="0 0 16 16">
  <path d="M5 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0m8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-6-1a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2zm1-6c-1.876 0-3.426.109-4.552.226A.5.5 0 0 0 3 4.723v3.554a.5.5 0 0 0 .448.497C4.574 8.891 6.124 9 8 9s3.426-.109 4.552-.226A.5.5 0 0 0 13 8.277V4.723a.5.5 0 0 0-.448-.497A44 44 0 0 0 8 4m0-1c-1.837 0-3.353.107-4.448.22a.5.5 0 1 1-.104-.994A44 44 0 0 1 8 2c1.876 0 3.426.109 4.552.226a.5.5 0 1 1-.104.994A43 43 0 0 0 8 3"/>
  <path d="M15 8a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1V2.64c0-1.188-.845-2.232-2.064-2.372A44 44 0 0 0 8 0C5.9 0 4.208.136 3.064.268 1.845.408 1 1.452 1 2.64V4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v3.5c0 .818.393 1.544 1 2v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V14h6v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2c.607-.456 1-1.182 1-2zM8 1c2.056 0 3.71.134 4.822.261.676.078 1.178.66 1.178 1.379v8.86a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 11.5V2.64c0-.72.502-1.301 1.178-1.379A43 43 0 0 1 8 1"/>
</svg>
            <h2 class="fw-normal">Долгосрочная аренда</h2>
            <p>Отличный вариант для длительных путешествий или временной замены вашего автомобиля.</p>
        </div>
        <div class="col-lg-4">
           <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
  <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.5 4.5 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.5 3.5 0 0 1 8 11.5a3.5 3.5 0 0 1-3.032-1.75M7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A3 3 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.2 4.2 0 0 0 8 5c-.35 0-.69.04-1 .116"/>
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0"/>
</svg>
            <h2 class="fw-normal">Аренда автомобилей класса люкс</h2>
            <p>Для тех, кто предпочитает передвигаться с комфортом и стилем.</p>
        </div>
    </div>
</div>
</section>

<section class="cars_section" id="cars">
  <div class="container my-4">
        <h3 class="text-center">НАШИ АВТОМОБИЛИ</h3>
    <div id="carCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/car1.jpg" class="d-block w-100 car-image" alt="car 1">
                <div class="carousel-caption text-left">
                    <h8>MINI</h8>
                    <a href="/cars" class="btn btn-success">ПОСМОТРЕТЬ ВСЕ</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/car2.jpg" class="d-block w-100 car-image" alt="car 2">
                <div class="carousel-caption text-left">
                    <h8>Mercedes Benz</h8>
                    <a href="/cars" class="btn btn-success">ПОСМОТРЕТЬ ВСЕ</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/car3.jpg" class="d-block w-100 car-image" alt="car 3">
                <div class="carousel-caption text-left">
                    <h8>Porshe</h8>
                    <a href="/cars" class="btn btn-success">ПОСМОТРЕТЬ ВСЕ</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
</section>
       

<section class="reservation_section" style="padding:50px 0px" id="reserve">
    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <form method="POST" action="reserve.php" id="reservation_form" class="car-reservation-form">
                    <div class="text_header"><span>Найдите свой автомобиль</span></div>
                    <div>
                        <div class="form-group">
                            <label for="pickup_location">Место получения</label>
                            <input type="text" name="pickup_location" placeholder="Кольцовская, 54" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="return_location">Место возврата</label>
                            <input type="text" name="return_location" placeholder="Кольцовская, 54" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pickup_date">Дата аренды</label>
                            <input type="date" min="2024-10-02" name="pickup_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="return_date">Дата возврата</label>
                            <input type="date" min="2024-10-03" name="return_date" class="form-control">
                        </div>
                        <button type="button" class="btn sbmt-bttn" onclick="showUserForm()">Бронируйте мгновенно</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Модальное окно для имени и email -->
<div id="userModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <form id="userForm" method="POST" action="reserve.php">
            <h4>Введите свои данные</h4>
            <input type="text" name="name" placeholder="Ваше имя" required>
            <input type="email" name="email" placeholder="Ваш email" required>
            <button type="submit">Далее</button>
        </form>
    </div>
</div>


<section class="widget_section" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget">
                    <a class="navbar-brand" href=""><ya-tr-span data-index="123-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="drive" data-translation="drive" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">drive</ya-tr-span><span style="color:#04DBC0"><ya-tr-span data-index="123-1" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Go" data-translation="Вперед" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Go</ya-tr-span></span><ya-tr-span data-index="123-2" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="" data-translation="" data-ch="0" data-type="trSpan" style="visibility: inherit !important;"> </ya-tr-span></a>
                    <p><ya-tr-span data-index="113-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Путешествие с хорошими друзьями подарит вам незабываемые впечатления. " data-translation="Путешествие с хорошими друзьями подарит вам незабываемые впечатления. " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Путешествие с хорошими друзьями подарит вам незабываемые впечатления. </ya-tr-span></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget">
                    <h3><ya-tr-span data-index="102-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Контактная информация" data-translation="Контактная информация" data-ch="0" data-type="trSpan" style="visibility: inherit !important;" data-selected="false">Контактная информация</ya-tr-span></h3>
                    <ul class="contact_info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i><ya-tr-span data-index="103-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="962 Fifth Avenue, 3rd Floor New York, NY10022 " data-translation="962 Пятая авеню, 3 этаж, Нью-Йорк, NY10022 " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Воронеж, ул.Колесниченко,15</ya-tr-span></li>
                        <li>
                            <i class="far fa-envelope"></i><ya-tr-span data-index="104-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="contact@barbershop.com " data-translation="contact@barbershop.com " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">contact@carrental.com </ya-tr-span></li>
                        <li>
                            <i class="fas fa-mobile-alt"></i>+7 (654) 128-09-87
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget">
                    <h3><ya-tr-span data-index="105-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Расслыка" data-translation="Рассылка" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Расслыка</ya-tr-span></h3>
                    <p style="margin-bottom:0px"><ya-tr-span data-index="106-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Don't miss a thing! " data-translation="Не пропустите ни одной детали! " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Ничего не пропустите!</ya-tr-span><ya-tr-span data-index="106-1" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Sign up to receive daily deals" data-translation="Подпишитесь, чтобы получать ежедневные предложения" data-ch="0" data-type="trSpan" style="visibility: inherit !important;"> Подпишитесь, чтобы получать ежедневные предложения</ya-tr-span></p>
                    <div class="subscribe_form">
    <form method="POST" action="subscribe.php" class="subscribe_form" novalidate="true">
        <input type="email" name="EMAIL" id="subs-email" class="form_input" placeholder="Почта..." required>
        <button type="submit" class="submit">ПОДПИСАТЬСЯ</button>
        <div class="clearfix"></div>
    </form>
</div>
                </div>
            </div>
        </div>
    </div>
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