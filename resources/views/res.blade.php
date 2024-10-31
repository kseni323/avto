@extends('header')

@section('res')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Б</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

	<body>
<!-- BANNER SECTION -->
<div class="reserve-banner-section">
	<h2><ya-tr-span data-index="10-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value=" Reserve your car " data-translation=" Зарезервируйте свой автомобиль " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">  Зарезервируйте свой автомобиль  </ya-tr-span></h2>
</div>

<!-- CAR RESERVATION SECTION -->
<section class="car_reservation_section">
	<div class="container">
							<form action="reserve.php" method="POST" id="reservation_second_form"><div class="row" style="margin-bottom: 20px;"><div class="col-md-3 reservation_cards"><p><i class="fas fa-calendar-alt"></i> <span><ya-tr-span data-index="11-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Pickup Date : " data-translation="Дата получения: " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Дата получения: </ya-tr-span></span><ya-tr-span data-index="11-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="2024-11-14 " data-translation="14 ноября 2024 г. " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">14 ноября 2024 г. </ya-tr-span></p></div> <div class="col-md-3 reservation_cards"><p><i class="fas fa-calendar-alt"></i> <span><ya-tr-span data-index="12-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Return Date : " data-translation="Дата возврата : " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Дата возврата : </ya-tr-span></span><ya-tr-span data-index="12-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="2024-11-08 " data-translation="2024-11-08 " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">2024-11-08 </ya-tr-span></p></div> <div class="col-md-3 reservation_cards"><p><i class="fas fa-map-marked-alt"></i> <span><ya-tr-span data-index="13-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Pickup Location : " data-translation="Pickup Location : " data-ch="0" data-type="trSpan" data-selected="false" style="visibility: inherit !important;">Pickup Location : </ya-tr-span></span><ya-tr-span data-index="13-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="впп пю, 54 " data-translation="впп пю, 54 " data-ch="0" data-type="trSpan" data-selected="false" style="visibility: inherit !important;">впп пю, 54 </ya-tr-span></p></div> <div class="col-md-3 reservation_cards"><p><i class="fas fa-map-marked-alt"></i> <span><ya-tr-span data-index="14-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Return Location : " data-translation="Return Location : " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Return Location : </ya-tr-span></span><ya-tr-span data-index="14-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="арара, 34 " data-translation="арара, 34 " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">арара, 34 </ya-tr-span></p></div></div> <div class="row"><div class="col-md-7"><div data-toggle="buttons" class="btn-group-toggle"><!----> <div class="items_tab"><div class="itemListElement"><div class="item_details"><div><ya-tr-span data-index="15-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Porsche Boxster" data-translation="Porsche Boxster" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Porsche Boxster</ya-tr-span></div><div class="item_select_part"><div class="select_item_bttn"><label class="item_label btn btn-secondary"><input type="radio" name="selected_car" value="1" class="radio_car_select"><ya-tr-span data-index="16-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Select " data-translation="Выбрать " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Выбрать  </ya-tr-span></label></div></div></div></div><div class="itemListElement"><div class="item_details"><div><ya-tr-span data-index="17-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Audi A5" data-translation="Audi A5" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Audi A5</ya-tr-span></div><div class="item_select_part"><div class="select_item_bttn"><label class="item_label btn btn-secondary"><input type="radio" name="selected_car" value="2" class="radio_car_select"><ya-tr-span data-index="18-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Select " data-translation="Выбрать " data-ch="1" data-type="trSpan" style="visibility: inherit !important;">Выбрать  </ya-tr-span></label></div></div></div></div><div class="itemListElement"><div class="item_details"><div><ya-tr-span data-index="19-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Mercedes-Benz CLS" data-translation="Mercedes-Benz CLS" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Mercedes-Benz CLS</ya-tr-span></div><div class="item_select_part"><div class="select_item_bttn"><label class="item_label btn btn-secondary"><input type="radio" name="selected_car" value="3" class="radio_car_select"><ya-tr-span data-index="20-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Select " data-translation="Выбрать " data-ch="1" data-type="trSpan" style="visibility: inherit !important;">Выбрать  </ya-tr-span></label></div></div></div></div><div class="itemListElement"><div class="item_details"><div><ya-tr-span data-index="21-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Audi A7" data-translation="Audi A7" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Audi A7</ya-tr-span></div><div class="item_select_part"><div class="select_item_bttn"><label class="item_label btn btn-secondary"><input type="radio" name="selected_car" value="4" class="radio_car_select"><ya-tr-span data-index="22-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Select " data-translation="Выбрать " data-ch="1" data-type="trSpan" style="visibility: inherit !important;">Выбрать  </ya-tr-span></label></div></div></div></div></div></div></div> <div class="col-md-5"><div class="client_details"><div class="form-group"><label for="full_name"><ya-tr-span data-index="23-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Full Name" data-translation="Полное имя" data-ch="0" data-type="trSpan" data-selected="false" style="visibility: inherit !important;">Полное имя</ya-tr-span></label> <input type="text" placeholder="Неизвестный" name="full_name" class="form-control"> <!----></div> <div class="form-group"><label for="client_email"><ya-tr-span data-index="24-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="E-mail" data-translation="Электронная почта" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Электронная почта</ya-tr-span></label> <input type="email" name="client_email" placeholder="abc@mail.xyz" class="form-control"> <!----></div> <div class="form-group"><label for="client_phonenumber"><ya-tr-span data-index="25-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Phone numbder" data-translation="Номер телефона" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Номер телефона</ya-tr-span></label> <input type="text" name="client_phonenumber" placeholder="0123456789" class="form-control"> <!----></div> <button type="submit" name="submit_reservation" class="btn sbmt-bttn"><ya-tr-span data-index="26-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Book Instantly" data-translation="Бронируйте Мгновенно" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Бронируйте Мгновенно</ya-tr-span></button></div></div></div></form>
					</div>
</section>



<!-- FOOTER BOTTOM -->

		<!-- Footer Bottom Section -->
		<footer class="footer_section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="copyright"><ya-tr-span data-index="27-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value=" YahYa © " data-translation=" Яхья © " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">  Яхья ©   </ya-tr-span><script type="text/javascript"> 
								document.write(new Date().getFullYear())
							</script><ya-tr-span data-index="28-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="2024 All rights reserved " data-translation="2024 Все права защищены " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">2024 Все права защищены   </ya-tr-span></div>
					</div>
					<div class="col-md-6">
						<ul class="footer_link">
							<li><a href="#"><ya-tr-span data-index="29-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Orders" data-translation="Заказы" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Заказы</ya-tr-span></a></li>
							<li><a href="#"><ya-tr-span data-index="30-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Terms" data-translation="Условия" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Условия</ya-tr-span></a></li>
							<li><a href="#"><ya-tr-span data-index="31-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Report Problem" data-translation="Сообщить о проблеме" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Сообщить о проблеме</ya-tr-span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<!-- INCLUDE JS SCRIPTS -->
		<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
		<script src="Design/js/jquery.min.js"></script>
		<script src="Design/js/bootstrap-js/bootstrap.min.js"></script>
		<script src="Design/js/bootstrap-js/bootstrap.bundle.min.js"></script>
		<script src="Design/js/main-script.js"></script>

	




<script>

new Vue({
    el: "#reservation_second_form",
    data: {
		selected_car : '',
        full_name: '',
        client_email: '',
        client_phonenumber: '',
    },
    methods:{
        checkForm: function(event){
            if( this.full_name && this.client_email && this.client_phonenumber)
            {
                return true;
            }
            
            if (!this.full_name)
            {
                this.full_name = null;
            }

            if (!this.client_email)
            {
                this.client_email = null;
            }

            if (!this.client_phonenumber)
            {
                this.client_phonenumber = null;
            }

			if (!this.selected_car)
            {
                this.selected_car = null;
            }
            
            event.preventDefault();
        },
    }
})


</script>
<div id="tr-popup" class="tr-popup" translate="no" data-hidden="true" data-invalid="true" data-disabled="false" lang="ru" data-expanded="false" data-menu="false" data-translation="Pickup Location : впп пю, 54" data-menu-position="right" data-submitted="false" style="top: 439px; left: 837.094px;"><div class="tr-popup__block"><span class="tr-popup__title_original">Оригинальный текст:</span> <span class="tr-popup__value">Pickup Location : впп пю, 54</span></div><div class="tr-popup__block tr-popup__block_a"><span class="tr-popup__link tr-popup__link_suggest" data-action="expand">Предложить перевод</span><a href="https://translate.yandex.ru" class="tr-popup__link tr-popup__link_service" target="_blank" data-action="navigate"><span class="tr-popup__logo tr-popup__logo_company"></span><span class="tr-popup__logo tr-popup__logo_service"></span></a></div><div class="tr-popup__block tr-popup__block_b"><textarea class="tr-popup__input" spellcheck="false" autocapitalize="off" autocorrect="off" autocomplete="off" maxlength="1000"></textarea><div class="tr-popup__block tr-popup__block_submit"><span role="button" class="tr-popup__button tr-popup__button_submit" data-action="send">Отправить</span></div><div class="tr-popup__overlay tr-popup__overlay_submitted">Спасибо, перевод отправлен</div></div><span role="button" class="tr-popup__button tr-popup__button_close" data-action="clickClose"></span><span role="button" class="tr-popup__button tr-popup__button_menu" data-action="clickMenu"><span class="tr-popup__menu" data-action="disablePopup">Отключить подсказку с оригинальным текстом</span></span><span class="tr-popup__arrow"></span></div></body><!-- END BODY TAG --></html>
@endsection