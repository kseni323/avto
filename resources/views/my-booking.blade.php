@extends('header')

@section('book_content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
<div class="container mt-5">
    <h1 class="mb-4">Моё бронирование</h1>
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <p>Пожалуйста, введите Email, чтобы посмотреть, изменить или отменить Ваше бронирование</p>
    <form action="{{ route('booking.find') }}" method="POST" class="mt-3">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control mb-3" placeholder="Введите Ваш Email" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-3">Найти бронирование</button>
    </form>
</div>

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
  <h2>Часто задаваемые вопросы</h2>
  <details class="accordion">
    <summary>Водительское Удостоверение</summary>
    <p>Арендатор/водитель должен предъявить действительное водительское удостоверение, сроком выдачи не менее 2 лет и банковскую карту на его/её имя, которая будет использована для оплаты бронирования.</p>
  </details>
  
  <details class="accordion">
    <summary>Способы оплаты и Депозит</summary>
    <p>Для оплаты договора аренды принимаются, как кредитные, так и дебетовые карты VISA/ MasterCard/МИР. Помимо оплаты стоимости аренды, для покрытия предполагаемых расходов, включая полный бак топлива, повреждения или штрафы за нарушения ПДД, на вашей банковской карте будет преавторизован депозит на срок в 15-30 дней. *Для постоянных клиентов компании предоставляется опция "привязка банковской карты", которая дает возможность получить автомобиль в аренду без авторизации депозита по договору.</p>
  </details>
  
  <details class="accordion">
    <summary>Возраст и стаж водителя</summary>
    <p>Арендатору должно быть не менее 21 года, чтобы арендовать выбранный автомобиль, а стаж вождения более 2 лет. (На автомобили премиум класса эти параметры 30 и 5 лет соответственно).</p>
  </details>

  <details class="accordion">
    <summary>Штрафы и компенсация ущерба</summary>
    <p>Арендатор предоставляет Компании право на безакцептное списание дополнительных денежных средств со своего счета для погашения административных штрафов, в том числе, но не ограничиваясь, штрафов ГИБДД., в т.ч. зафиксированных с помощью специальных технических средств (камер) с учетом скидки по КоАП (если скидка применима).</p>
  </details>

  <details class="accordion">
    <summary>Оплата сборов и услуг</summary>
    <p>Оплата стоимости заказа производится при получении автомобиля. Продление аренды и добавление услуг можно оплатить онлайн после внесения таких изменений в ваш договор аренды.</p>
  </details>
  
  <details class="accordion">
    <summary>Страхование и Франшиза</summary>
    <p>Все автомобили передаваемые в аренду застрахованы по риску ущерб и угон. В период аренды Арендатор несет риск случайного повреждения и гибели автомобиля, а также ответственность за вред, причиненный как источником повышенной опасности в пределах франшизы (сумма зависит от класса автомобиля). Ответственность Арендатора за повреждение (утрату) и/или хищение (угон) автомобиля может быть снижена до размера депозита, но только в том случае, если Арендатор предоставил полный комплект ключей и документов, подтверждающих наступление страхового события, в соответствии с законодательством РФ. Арендатор отдельно может быть освобожден от ответственности за повреждения стекол и колес ТС в случае оплаты услуги GT перед началом аренды. Такая услуга считается принятой только в том случае, если Арендатор произвел оплату этой услуги. Услуга GT не являются страховкой. Арендатор может быть полностью освобожден от ответственности за повреждения автомобиля или его частей (включая стекла и шины) в случае оплаты услуги SCDW перед началом аренды. Такая услуга считается принятой только в том случае, если Арендатор произвел оплату этой услуги и оформил в компетентных органах наступление страхового события в соответствии с законодательством РФ. Услуга SCDW не являются страховкой.</p>
  </details>
  
  <details class="accordion">
    <summary>Изменения, отмена брони и неявка</summary>
    <p>Вы можете отменить, отменить свой заказ в любой время без штрафа.</p>
  </details> 

  <details class="accordion">
    <summary>Дополнительные сборы и услуги</summary>
    <p>В случае если аренда начинается или завершается в аэропорту, в тариф может быть включен аэропортовый сбор. По желанию клиента и предварительном согласовании с представителем компании, автомобиль может быть доставлен/возвращен по адресу, тариф за услугу зависит от удаленности адреса от центра города. Автомобиль должен быть возвращен чистым и с тем же количеством топлива, что было зафиксировано при выдаче. Автомобиль может быть получен/возвращен в нерабочие часы станции аренды, требуется обязательное согласование с представителем компании.</p>
  </details>

  <details class="accordion">
    <summary>Дополнительное оборудование</summary>
    <p>Согласно закону РФ детские кресла обязательны для всех пассажиров младше 12 лет. DriveGo предлагает аренду детских кресел для детей всех возрастов в любой станции аренды. Помимо детских кресел DriveGo предлагает аренду навигаторы.</p>
  </details>
 
</section>

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
@endsection