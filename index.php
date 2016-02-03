<!DOCTYPE html>
<html>
<head>
	<title>Жилой комплекс «CITYLAKE»</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=1024px, user-scalable=yes" />
	<link rel="stylesheet" type="text/css" href="http://citylake.kz/wp-content/themes/mytheme//css/style.css">
	<link rel="stylesheet" type="text/css" href="http://citylake.kz/wp-content/themes/mytheme//css/animate.css">
	<link rel="stylesheet" type="text/css" href="http://citylake.kz/wp-content/themes/mytheme//css/venobox.css">
	<link rel="stylesheet" type="text/css" href="http://citylake.kz/wp-content/themes/mytheme//css/bootstrap.css">
	<link href="http://citylake.kz/wp-content/themes/mytheme//libs/owl-carousel/owl.theme.css" rel='stylesheet' type='text/css' />
	<link href="http://citylake.kz/wp-content/themes/mytheme//libs/owl-carousel/owl.carousel.css" rel='stylesheet' type='text/css' />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="http://citylake.kz/wp-content/themes/mytheme/js/controller.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){


			$('input[placeholder="Ваш телефон"]').mask("+7 (999) 999-9999");

			$('#flat').parallax({imageSrc: 'http://citylake.kz/wp-content/themes/mytheme/images/flat-bg.png'});
			$('#material').parallax({imageSrc: 'http://citylake.kz/wp-content/themes/mytheme/images/material-bg.png'});

			$('.arrow-block').click(function(event){
				event.preventDefault();
				$('.list').slideToggle('fast');
			});

			$('.venobox-image').venobox({
				numeratio: true,
			});

			$('.venobox').venobox({
        		framewidth: '800px',        // default: ''
        		frameheight: '480px',       // default: ''
        	});

			$('body').niceScroll();

			$(".carousel").owlCarousel({
				navigation : true,
				slideSpeed : 300,
				paginationSpeed : 400,
				pagination: true,
				navigationText: false,
				singleItem: true
			});

			$('body').plusAnchor({
				easing: 'easeInOutExpo',
				offsetTop: -45,
				speed: 1200,
				onInit: function( base ) {

					if ( base.initHash != '' && $(base.initHash).length > 0 ) {
						window.location.hash = 'hash_' + base.initHash.substring(1);
						window.scrollTo(0, 0);

						$(window).load( function() {

							timer = setTimeout(function() {
								$(base.scrollEl).animate({
									scrollTop: $( base.initHash ).offset().top
								}, base.options.speed, base.options.easing);
							}, 2000); // setTimeout

						}); // window.load
					}; // if window.location.hash

				} // onInit
			});

			$('.list').on('click', 'p', function(){
				$('.list').slideToggle('fast');
				$('.place-select').text($(this).text());
			});

			$('.logo').click(function(){
				$('.auth-modal').show();
			});

			$('.buttn-close').click(function(){
				$('.auth-modal').hide();
			});

			$('.buttn').click(function(){
				if($('.auth-form').val() == 'citylakeadmin'){
					$('input[name="change-price"]').show();
					$('.subm').show();
					$(this).hide();
				} else {
					return false;
				}
			});

			$('.list p').click(function(){
				if($(this).hasClass('1plan')){
					$('.img1').show();
					$('.img2, .img3, .img4, .img5, .img6, .img7, .img8').hide();
				} else if($(this).hasClass('2plan')){
					$('.img2').show();
					$('.img1, .img3, .img4, .img5, .img6, .img7, .img8').hide();
				} else if($(this).hasClass('3plan')){
					$('.img3').show();
					$('.img1, .img2, .img4, .img5, .img6, .img7, .img8').hide();
				} else if($(this).hasClass('4plan')){
					$('.img4').show();
					$('.img1, .img2, .img3, .img5, .img6, .img7, .img8').hide();
				} else if($(this).hasClass('5plan')){
					$('.img5').show();
					$('.img1, .img2, .img3, .img4, .img6, .img7, .img8').hide();
				} else if($(this).hasClass('6plan')){
					$('.img6').show();
					$('.img1, .img2, .img3, .img4, .img5, .img7, .img8').hide();
				} else if($(this).hasClass('7plan')){
					$('.img7').show();
					$('.img1, .img2, .img3, .img4, .img5, .img6, .img8').hide();
				} else if($(this).hasClass('8plan')){
					$('.img8').show();
					$('.img1, .img2, .img3, .img4, .img5, .img7, .img6').hide();
				}
			});

			$(".print").printPage();

		});
</script>
	<script>
	$(document).ready(function(){
		$(".video-link").jqueryVideoLightning({
			autoplay: 1,
			backdrop_color: "#000",
			backdrop_opacity: 0.6,
			glow: 20,
			glow_color: "#000"
		});
	});
		
</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62248925-1', 'auto');
  ga('send', 'pageview');

</script>
	<script type="text/javascript">

var google_conversion_id = 962601798;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;

</script><script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/962601798/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</head>
<body ng-app="myApp" ng-controller="main">
	<!— Yandex.Metrika counter —>
<script type="text/javascript">
(function (d, w, c) {
(w[c] = w[c] || []).push(function() {
try {
w.yaCounter27907053 = new Ya.Metrika({id:27907053,
webvisor:true,
clickmap:true,
trackLinks:true,
accurateTrackBounce:true});
} catch(e) { }
});

var n = d.getElementsByTagName("script")[0],
s = d.createElement("script"),
f = function () { n.parentNode.insertBefore(s, n); };
s.type = "text/javascript";
s.async = true;
s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

if (w.opera == "[object Opera]") {
d.addEventListener("DOMContentLoaded", f, false);
} else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/27907053" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!— /Yandex.Metrika counter —>


	<header>
		<ul>
			<li><a href="#main">Главная</a></li>
			<li><a href="#flat">Квартиры</a></li>
			<li><a href="#material">Материалы</a></li>
			<li><a href="#place">Расположение</a></li>
			<li><a href="#infrast">Инфраструктура</a></li>
			<li><a href="#stroi">Ход строительства</a></li>
			<li><a href="#condition">Оплата</a></li>
			<li><a href="#contact">Контакты</a></li>
			<a class="trigger" data-toggle="modal" data-target="#trigger"><strong>Звоните</strong>:8 (7172) 769-769 <strong>Пишите</strong>:citylake@bikom.kz</a>
		</ul>
	</header>
	<div style="width: 100%; height: 65px;"></div>
	<section id="main">
		<div class="main-center">
			<img src="http://citylake.kz/wp-content/themes/mytheme/images/logo.png" alt="" width="110px;" class="logo">
			<label class="call">Позвоните нам<br /> <a href="tel: 87172769769">8 7172 769 769</a></label>
			<label class="write">Напишите нам<br /> <a href="mailto: citylake@bikom.kz">citylake@bikom.kz</a></label>
			<div style="clear: both;"></div>
			<div class="price">
				<div class="left"></div>
	
 				<h1 class="h1-click">ЦЕНА ЗА 1 М<sup>2</sup> ОТ {{price}} ТЕНГЕ</h1>
				<div class="right"></div>
				<h2>чистовая отделка по доступной цене</h2>
			</div>

			<div class="opacity-figure"></div>
			<div class="video1">
				<div class="video-head">
					<h4>Посмотрите презентационный фильм о ЖК «CITYLAKE»</h4>
				</div>
				<div class="player"><span class="play video-link" data-video-id="y-F3_0ClvS-pk"></span></div>
			</div>

			<div class="shadow-figure">
				<span>5</span><h5>причин купить квартиру в жк «CITYLAKE»</h5>
				<ul>
					<li class="bounceIn wow">
						<span class="n1"></span>
						<label>Рядом с ЖК «CITYLAKE» расположено озеро<br /> с велодорожками, аллеями<br /> и тротуарами</label>
					</li>

					<li class="bounceIn wow">
						<span class="n2"></span>
						<label>Квартиры сдаются<br /> в чистовой отделке</label>
					</li>

					<li class="bounceIn wow">
						<span class="n3"></span>
						<label>Служба консьержа<br /> 24 часа</label>
					</li>

					<li class="bounceIn wow">
						<span class="n4"></span>
						<label>Безопасность. Ведется поэтажное<br /> видеонаблюдение</label>

					</li>
					<li class="bounceIn wow">
						<span class="n5"></span>
						<label>6-уровневый паркинг</label>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section id="flat">
		<div class="flat-head section-head">
			<h1>квартиры</h1>
		</div>
		<div class="flat-center">
			<article>В ЖК «CITYLAKE» предусмотрены 1, 2, 3, 4 –х комнатные квартиры удобной планировки площадью от 37 до 124 метров.</article>
			<article>Все квартиры сдаются в чистовой отделке. Вы можете заезжать сразу после сдачи дома в эксплуатацию. Высота потолков 3 м подчеркнет уют и дизайн Вашей квартиры.</article>
			<div style="clear: both;"></div>
			<div class="plans">
				<a class="venobox-image img1" data-gall="myGallery" href="http://citylake.kz/wp-content/themes/mytheme/images/pl1.jpg"><img class="plan-img" id="planimg" src="http://citylake.kz/wp-content/themes/mytheme/images/pl1-mini.png" width="410"></a>
				<a class="venobox-image img2" data-gall="myGallery" href="http://citylake.kz/wp-content/themes/mytheme/images/pl2.jpg"><img class="plan-img" id="planimg" src="http://citylake.kz/wp-content/themes/mytheme/images/pl2-mini.png" width="410"></a>
				<a class="venobox-image img3" data-gall="myGallery" href="http://citylake.kz/wp-content/themes/mytheme/images/pl3.jpg"><img class="plan-img" id="planimg" src="http://citylake.kz/wp-content/themes/mytheme/images/pl3-mini.png" width="410"></a>
				<a class="venobox-image img4" data-gall="myGallery" href="http://citylake.kz/wp-content/themes/mytheme/images/pl4.jpg"><img class="plan-img" id="planimg" src="http://citylake.kz/wp-content/themes/mytheme/images/pl4-mini.png" width="410"></a>
				<a class="venobox-image img5" data-gall="myGallery" href="http://citylake.kz/wp-content/themes/mytheme/images/pl5.jpg"><img class="plan-img" id="planimg" src="http://citylake.kz/wp-content/themes/mytheme/images/pl5-mini.png" width="410"></a>
				<a class="venobox-image img6" data-gall="myGallery" href="http://citylake.kz/wp-content/themes/mytheme/images/pl6.jpg"><img class="plan-img" id="planimg" src="http://citylake.kz/wp-content/themes/mytheme/images/pl6-mini.png" width="410"></a>
				<a class="venobox-image img7" data-gall="myGallery" href="http://citylake.kz/wp-content/themes/mytheme/images/pl7.jpg"><img class="plan-img" id="planimg" src="http://citylake.kz/wp-content/themes/mytheme/images/pl7-mini.png" width="410"></a>
				<a class="venobox-image img8" data-gall="myGallery" href="http://citylake.kz/wp-content/themes/mytheme/images/pl8.jpg"><img class="plan-img" id="planimg" src="http://citylake.kz/wp-content/themes/mytheme/images/pl8-mini.png" width="410"></a>
				<a class="print img1" href="http://citylake.kz/wp-content/themes/mytheme/images/pl1.jpg"><span></span><p>Печать планировки</p></a>
				<a class="print img2" href="http://citylake.kz/wp-content/themes/mytheme/images/pl2.jpg"><span></span><p>Печать планировки</p></a>
				<a class="print img3" href="http://citylake.kz/wp-content/themes/mytheme/images/pl3.jpg"><span></span><p>Печать планировки</p></a>
				<a class="print img4" href="http://citylake.kz/wp-content/themes/mytheme/images/pl4.jpg"><span></span><p>Печать планировки</p></a>
				<a class="print img5" href="http://citylake.kz/wp-content/themes/mytheme/images/pl5.jpg"><span></span><p>Печать планировки</p></a>
				<a class="print img6" href="http://citylake.kz/wp-content/themes/mytheme/images/pl6.jpg"><span></span><p>Печать планировки</p></a>
				<a class="print img7" href="http://citylake.kz/wp-content/themes/mytheme/images/pl7.jpg"><span></span><p>Печать планировки</p></a>
				<a class="print img8" href="http://citylake.kz/wp-content/themes/mytheme/images/pl8.jpg"><span></span><p>Печать планировки</p></a>
				<!--<div class="desc">
					<ul>
						<li><p><span>Общая площадь: </span>120м<sup>2</sup></p></li>
						<li><p><span>Кухня: </span>12м<sup>2</sup></p></li>
						<li><p><span>Жилая площадь: </span>80м<sup>2</sup></p></li>
						<li><p><span>Санузлы: </span>1</p></li>
					</ul>
				</div>-->
			</div>
			<div class="select">
				<label>Выберите планировку:</label>
				<div class="myselect">
					<div class="place-select">
						Блок А
					</div>
					<div class="arrow-block">
						<img src="http://citylake.kz/wp-content/themes/mytheme/images/arrow.png">
					</div>
				</div>
				<div class="list">
					<p id="1room" class="1plan">Блок А, 6 Этаж</p>
					<p id="2room" class="2plan">Блок А</p>
					<p id="3room" class="3plan">Блок В, 6 Этаж</p>
					<p id="4room" class="4plan">Блок В</p>
					<p id="5room" class="5plan">Блок Г</p>
					<p id="6room" class="6plan">Блок Д</p>
					<p id="7room" class="7plan">Блок Е, 6 этаж</p>
					<p id="8room" class="8plan">Блок Е</p>
				</div>
			</div>
			<div style="clear: both;"></div>
			<div class="form" style="top: 65px;">
				<div class="form-head">
					<h4>Закажите консультацию по квартире</h4>
				</div>
				<form id="form-choose" action="">
					<label for="name"></label>
					<input type="text" name="name-choose" required x-autocompletetype="name" placeholder="Ваше имя">
					<label for="phone"></label>
					<input type="tel" name="phone-choose" placeholder="Ваш телефон" required x-autocompletetype="tel">
					<label for="mail"></label>
					<input type="email" name="mail-choose" placeholder="E-mail" required x-autocompletetype="email">
					<input type="submit" value="Отправить" onClick="yaCounter27907053.reachGoal('konsultation'); _gaq.push(['_trackEvent', 'konsult', 'click']);" id="send-choose">
					<!-- ga('send', 'event', 'konsult', 'click'); -->
				</form>
			</div>
		</div>
	</section>
	<section id="clean">
		<div class="clean-head section-head">
			<h1>чистовая отделка</h1>
		</div>
		<div class="clean-center">
			<div class="clean-info">
				<h2>Квартиры сдаются в чистовой отделке</h2>
				<h3>Можно заезжать сразу после завершения строительства дома</h3>
				<h3>Срок окончания строительства III квартал 2016 года</h3>
			</div>
			<div class="carousel">
				<div class="item">
					<div class="picture" style="background-image: url('http://citylake.kz/wp-content/themes/mytheme/images/1.jpg');">

					</div>
				</div>
				<div class="item">
					<div class="picture" style="background-image: url('http://citylake.kz/wp-content/themes/mytheme/images/2.jpg');">

					</div>
				</div>
				<div class="item">
					<div class="picture" style="background-image: url('http://citylake.kz/wp-content/themes/mytheme/images/3.jpg');">

					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="material">
		<div class="material-head section-head">
			<h1>материалы</h1>
		</div>
		<div class="material-center">
			<p>Конструктивное решение для ЖК «CITYLAKE» - монолитный железобетонный каркас<br /> со свайным основанием, что обеспечивает прочность и надежность дома.</p>
			<div class="plus bounceInDown wow">
				<span></span>
				<label>Фасад здания облицован<br /> натуральным камнем<br /> травертином и натуральным<br /> гранитом.</label>
			</div>
			<div class="plus bounceInDown wow">
				<span></span>
				<label>Внутреннее наполнение<br /> стен - газоблок.</label>
			</div>
			<div class="plus bounceInDown wow">
				<span></span>
				<label>Остекление - <br /> металлопластиковые<br /> окна 3-х слойные 5-ти<br /> камерные.</label>
			</div>
			<div class="plus bounceInDown wow">
				<span></span>
				<label>Установлены<br /> бесшумные скоростные<br /> лифты премиум класса.</label>
			</div>
			<div style="clear: both;"></div>
			<div class="form" style="top: 150px;">
				<div class="form-head">
					<h4>Узнайте больше о ЖК «CITYLAKE»</h4>
				</div>
				<form id="form-info" action="">
					<label for="name"></label>
					<input type="text" name="name-info" placeholder="Ваше имя" required x-autocompletetype="name">
					<label for="phone"></label>
					<input type="tel" name="phone-info" placeholder="Ваш телефон" required x-autocompletetype="tel">
					<label for="mail"></label>
					<input type="email" name="mail-info" placeholder="E-mail" required x-autocompletetype="email">
					<input type="submit" value="Отправить" onClick="yaCounter27907053.reachGoal('uznat'); return true;" id="send-info">
					<!-- ga('send', 'event', 'uznajte', 'click');  -->
				</form>
			</div>
		</div>
	</section>
	<section id="place">
		<div class="place-head section-head">
			<h1>расположение</h1>
		</div>
		<p>ЖК «CITYLAKE» расположен на Левом берегу столицы в 5 минутах от ТЦ «Хан Шатыр».<br />
			Вблизи находится озеро, парк с велодорожками и аллеями.</p>
			<div class="map">
				<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=8J30K_QJlyWwjMLVMqeurWJZPK6UYvQD"></script>			</div>
			<div class="form" style="top: 250px;">
				<div class="form-head">
					<h4>Задайте вопрос менеджеру</h4>
				</div>
				<form id="form-ask" action="">
					<label for="name"></label>
					<input type="text" name="name-ask" placeholder="Ваше имя" required x-autocompletetype="name">
					<label for="phone"></label>
					<input type="tel" name="phone-ask" placeholder="Ваш телефон" required x-autocompletetype="tel">
					<label for="mail"></label>
					<input type="email" name="mail-ask" placeholder="E-mail" required x-autocompletetype="email">
					<input type="submit" value="Отправить" onClick="yaCounter27907053.reachGoal('sprosit'); return true;" id="send-ask">
					<!-- ga('send', 'event', 'vopros', 'click'); -->
				</form>
			</div>
		</section>
	<section id="infrast">
			<div class="infrast-head section-head">
				<h1>инфраструктура</h1>
			</div>
			<div class="infrast-center">
				<p>ЖК «CITYLAKE» расположен на Левом берегу столицы в 5 минутах от ТЦ «Хан Шатыр».<br />
					Вблизи находится озеро, парк с велодорожками и аллеями.</p>
					<div class="inf-item bounceIn wow">
						<span class="nth1"></span>
						<label>Территория комплекса круглосуточно охраняется.<br /> Поэтажное видеонаблюдение, круглосуточная служба<br /> консьержей и специализированная охрана<br /> гарантируют полную безопасность.</label>
					</div>
					<div class="inf-item bounceIn wow">
						<span class="nth2"></span>
						<label>На территории ЖК созданы все условия для здорового<br /> образа жизни детей и взрослых: футбольное поле,<br /> теннисный корт, тренажеры, беговая дорожка, беседки<br /> и детские игровые площадки.</label>
					</div>
					<div class="inf-item bounceIn wow">
						<span class="nth3"></span>
						<label>Вблизи от дома расположено озеро,<br /> где Вы можете отдохнуть от городской суеты.</label>
					</div>
					<div class="inf-item bounceIn wow">
						<span class="nth4"></span>
						<label>Также для Вашего удобства возведен<br /> 6 - уровневый паркинг на 338 машиномест.</label>
					</div>
					<div class="inf-item bounceIn wow">
						<span class="nth5"></span>
						<label>Собственная сервисная служба<br /> для решения всех бытовых проблем.</label>
					</div>
					<div class="inf-item bounceIn wow">
						<span class="nth6"></span>
						<label>Поблизости расположены все необходимые<br /> объекты для комфортной жизни:<br /> Школа, торгово-развлекательные центры,<br /> фитнес-клубы, медицинские учреждения.</label>
					</div>
					<div style="clear: both;"></div>
				</div>
			</section>
	<section id="stroi">
		<div class="infrast-head section-head">
			<h1>ход строительства</h1>
		</div>
		<div class="stroi-center">
			<div class="dates clear">
				<div ng-repeat="data in dates" ng-class="'date ' + data.active" ng-click="date_click($index)">{{data.title}}</div>
			</div>

			<div class="carousel_2">
				<div ng-repeat="srci in sources" class="item">
					<div class="picture" style="{{'background-image: url(' + srci.src + ')'}};">

					</div>
				</div>
			</div>
			<p>{{slider_text}}</p>
		</div>
	</section>
	<section id="condition">
				<div class="condition-head section-head">
					<h1>условия оплаты</h1>
				</div>
				<p style="margin-bottom: 20px;">Для Вашего удобства мы предусмотрели различные способы оплаты.<br />
					Возможна<br /> <span>100% оплата, беспроцентная рассрочка, кредитование через вторичные банки.</span></p>
					<p>Для получения подробной информации свяжитесь с менеджером отдела продаж или оставьте заявку на сайте.<br />
						Мы с удовольствием ответим на все Ваши вопросы.</p>
						<div class="form" style="top: 70px;">
							<div class="form-head">
								<h4>Задайте вопрос по оплате</h4>
							</div>
							<form id="form-pay" action="">
								<label for="name"></label>
								<input type="text" name="name-pay" placeholder="Ваше имя" required x-autocompletetype="name">
								<label for="phone"></label>
								<input type="tel" name="phone-pay" placeholder="Ваш телефон" required x-autocompletetype="tel">
								<label for="mail"></label>
								<input type="email" name="mail-pay" placeholder="E-mail" required x-autocompletetype="email">
								<input type="submit" value="Отправить" onClick="yaCounter27907053.reachGoal('oplata'); return true;" id="send-pay">
								<!-- ga('send', 'event', 'oplata', 'click'); -->
							</form>
				</div>
			</section>
	<section id="contact">
						<div class="contact-head">
							<h1><span>ЖК «CITYLAKE»</span> - природа и комфорт в 5 минутах от центра!</h1>
						</div>
						<h3 class="zastr">Застройщик ТОО "БИКОМ-ИНЖИНИРИНГ"</h3>
						<img src="http://citylake.kz/wp-content/themes/mytheme/images/BI.png" width="300" style="margin: 0 auto; display: block;">

						<div class="contact-center">
							<div class="cont-top">
								<div class="info-contact">
							<div class="address" style="margin-top: 70px;">
								<img src="http://citylake.kz/wp-content/themes/mytheme/images/map.png">
								<h3>Адреса отделов продаж:</h3>
								<p>Казахстан, г.Астана пр.Республики, 5 пр.Кошкарбаева, 56</p>
							</div>

							<div class="phoner">
								<img src="http://citylake.kz/wp-content/themes/mytheme/images/phoner.png">
								<h3>телефон</h3>
								<p>8 7172 769 769, 9119 - с мобильного бесплатно</p>
							</div>
							</div>
							<div class="map-contact">
								<div class="map-wrap">
									<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=MPHhFK86U-C4Y22NVtzp6ImnnPPDETyC"></script>
								</div>
							</div>
							</div>
							<div class="clear: both;"></div>
							<div class="contact-form">
							<h2>написать нам</h2>
								<form id="form-contact" action="">
									<input type="text" name='name-contact' placeholder='Ваше имя' class="name" required x-autocompletetype="name"/>
									<input type="email" name='email-contact' placeholder='E-mail' class="email" required x-autocompletetype="email"/>
									<input type="submit" id='send-contact' onClick="yaCounter27907053.reachGoal('napisat'); return true;" name='send-contact' value="Отправить" class="send" />
									<textarea rows="4" cols="45" name="text" placeholder="Сообщение" required></textarea>
									<!-- ga('send', 'event', 'napisat', 'click'); -->
								</form>
							</div>
						</div>
					</section>
	<footer>
						<div class="footer-center">
							<p>ЖК «CITYLAKE» —  © 2015</p>
							<a href="http://mindpro.kz" target="_blank"><div class="mindpro"></div></a>
						</div>
					</footer>
	<div class="auth-modal">
						<form action="" method="POST">
							<input type="text" class="auth-form">
							<input type="text" class="change-input" style="display:none;" name="change-price">
							<input type="submit" value="OK" style="display: none;" class="subm">
							<a class="buttn" style="cursor: pointer;">Далее</a>
							<a class="buttn-close" style="cursor: pointer;">Закрыть</a>
						</form>
						
					</div>
	<div id="trigger" class="modal hide fade" tabindex="-1" role="dialog">
						<div class="modal-body">
							<button type="button" class="my-close" data-dismiss="modal"></button>
							<form action="" id="form-trigger">
								<input type="text" required name="name-trigger" placeholder="Ваше имя">
								<input type="tel" required name="phone-trigger" placeholder="Телефон">
								<input type="email" required name="mail-trigger" placeholder="E-mail">
								<input type="submit" name="send-trigger" id="send-trigger" value="Оправить">
							</form>
						</div>
					</div>
	<script type="text/javascript" src="http://citylake.kz/wp-content/themes/mytheme/js/noty/packaged/jquery.noty.packaged.min.js"></script>
	<script src="http://citylake.kz/wp-content/themes/mytheme/js/parallax.min.js"></script>
	<script type="text/javascript" src="http://citylake.kz/wp-content/themes/mytheme/js/sendchoose.js"></script>
	<script type="text/javascript" src="http://citylake.kz/wp-content/themes/mytheme/js/sendask.js"></script>
	<script type="text/javascript" src="http://citylake.kz/wp-content/themes/mytheme/js/sendcontact.js"></script>
	<script type="text/javascript" src="http://citylake.kz/wp-content/themes/mytheme/js/sendinfo.js"></script>
	<script type="text/javascript" src="http://citylake.kz/wp-content/themes/mytheme/js/sendpay.js"></script>
	<script type="text/javascript" src="http://citylake.kz/wp-content/themes/mytheme/js/sendtrigger.js"></script>
	<script type="text/javascript" src="http://citylake.kz/wp-content/themes/mytheme/js/bootstrap-modal.js"></script>
	<script type="text/javascript" src="http://citylake.kz/wp-content/themes/mytheme/js/bootstrap-transition.js"></script>
	<script src="http://citylake.kz/wp-content/themes/mytheme/js/venobox.min.js"></script>
	<script src="http://citylake.kz/wp-content/themes/mytheme/js/jquery.maskedinput.min.js"></script>
	<script src="http://citylake.kz/wp-content/themes/mytheme/js/jquery.printPage.js"></script>
	<script src="http://citylake.kz/wp-content/themes/mytheme/js/jquery-video-lightning.min.js"></script>
	<script src="http://citylake.kz/wp-content/themes/mytheme/js/wow.min.js"></script>
	<script src="http://citylake.kz/wp-content/themes/mytheme/js/jquery.nicescroll.min.js"></script>
	<script src="http://citylake.kz/wp-content/themes/mytheme/libs/owl-carousel/owl.carousel.min.js"></script>
	<script type="text/javascript" src="http://citylake.kz/wp-content/themes/mytheme/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="http://citylake.kz/wp-content/themes/mytheme/js/jquery.plusanchor.js"></script>
	<script>new WOW().init();</script>
<link rel="stylesheet" href="//cdn.callbackhunter.com/widget/tracker.css"> <script type="text/javascript" src="//cdn.callbackhunter.com/widget/tracker.js" charset="UTF-8"></script>
<script type="text/javascript">var hunter_code="4808f94c0dc7172edc0db8a45b5afb07";</script>
				</body>
				</html>
