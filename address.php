<?
	$title = "Где купить - адреса фирменных магазинов столов и стульев СТОЛЬНИК";
	$description = "Адреса фирменных магазинов столов и стульев СТОЛЬНИК";
	include "header.php";
	$pic = "<img alt='Стольник' src='images/m_logo.png' style='vertical-align: middle;' title='Фирменный салон &laquo;СТОЛЬНИК мебель для трапез&raquo;'>";
?>

<section id="main">
	<section class="page">
		<ul class="breadcrumbs">
			<li><a href="/">Главная</a></li>
			<li><i class="fas fa-long-arrow-alt-left"></i></li>
			<li><b>Где купить</b></li>
		</ul>

<!--
		<div style="background: lightgoldenrodyellow; border-radius: 20px; padding: 10px;">
			<h3 style="color: #911; text-align: center;">Уважаемые покупатели!</h3>
			<h3 style="line-height: 2em;">В связи со сложившейся ситуацией, вызванной коронавирусом, временно закрыты некоторые наши фирменные салоны. Но мы продолжаем работать для вас. Будем рады принять заказ на изготовление столов и стульев. Просто оставьте свой номер через форму <a href="/feedback.php?location=<?=$_SERVER['REQUEST_URI']?>" style="background: #fd8134; color: #fff; text-decoration: none; padding: 5px 10px; border-radius: 10px; white-space: nowrap;">Заказать звонок</a> и продавец-консультант перезвонит вам.</h3>
		</div>
-->
	</section>

	<section>
		<div style="line-height: 1.5em; text-align: center">
			<h1>Где купить:</h1>
			<h4>Киров</h4>
			<ul>
				<li class="shop" id="megadom">
<!--					<?=$pic?>-->
					ТЦ «Мегадом» - корпус В - ул. Блюхера, 39 <a href="tel:+79195241680"><i class="fas fa-phone"></i>+7 919 524 16 80</a>
					<a href="#megadom" class="map_btn" title="Посмотреть на карте"><i class="fas fa-map-marked-alt"></i> Карта</a>
					<div class="map">
						<div style="height: 400px;">
							<iframe src="https://yandex.ru/map-widget/v1/?z=12&ol=biz&oid=121917433788" width="100%" height="400" frameborder="0"></iframe>
						</div>
					</div>
				</li>
			</ul>
			<h4>Екатеринбург</h4>
			<ul>
				<li class="shop" id="klen">
<!--					<?=$pic?>-->
					ТЦ «Клён» - ул. П. Лумумбы, 38 <a href="tel:+79506329090"><i class="fas fa-phone"></i>+7 950 632 90 90</a>
					<a href="#klen" class="map_btn" title="Посмотреть на карте"><i class="fas fa-map-marked-alt"></i> Карта</a>
					<div class="map">
						<div style="height: 400px;">
							<iframe src="https://yandex.ru/map-widget/v1/?z=12&ol=biz&oid=101225294556" width="100%" height="400" frameborder="0"></iframe>
						</div>
					</div>
				</li>
				<li class="shop" id="gulliver">
<!--					<?=$pic?>-->
					ТЦ «Гулливер» - ул. 40 лет ВЛКСМ, 38 <a href="tel:+79002051927"><i class="fas fa-phone"></i>+7 900 205 19 27</a>
					<a href="#gulliver" class="map_btn" title="Посмотреть на карте"><i class="fas fa-map-marked-alt"></i> Карта</a>
					<div class="map">
						<div style="height: 400px;">
							<iframe src="https://yandex.ru/map-widget/v1/?z=12&ol=biz&oid=73717768691" width="100%" height="400" frameborder="0"></iframe>
						</div>
					</div>
				</li>
				<li class="shop" id="ema">
<!--					<?=$pic?>-->
					ТЦ «ЭМА» - Верх-Исетский бульвар, 13 <a href="tel:+79028792799"><i class="fas fa-phone"></i>+7 902 879 27 99</a>
					<a href="#ema" class="map_btn" title="Посмотреть на карте"><i class="fas fa-map-marked-alt"></i> Карта</a>
					<div class="map">
						<div style="height: 400px;">
							<iframe src="https://yandex.ru/map-widget/v1/?z=12&ol=biz&oid=187273769375" width="100%" height="400" frameborder="0"></iframe>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
</section>

<script>
	$(function(){
		$("a.map_btn").on("click", function(e){
			var anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $(anchor.attr('href')).offset().top - 70
			}, 500);
			e.preventDefault();
			return false;
		});
	});
</script>

<?
	include "footer.php";
?>
