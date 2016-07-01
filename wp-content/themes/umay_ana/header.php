<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/sticky.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slideshow.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/styles.css">
</head>
<body>
<!--НАЧАЛО main section-->
<div class="main-section" id="main-section">
	<header class="uk-container uk-container-center">
		<p class="address">
			<?=get_field('address',5)?>
		</p>
		<p class="phone-numbers">
			<a href="tel:<?=get_field('phone-1',5)?>"><?=get_field('phone-1',5)?></a><br>
			<a href="tel:<?=get_field('phone-2',5)?>"><?=get_field('phone-2',5)?></a>
		</p>
	</header>

	<nav class="uk-navbar" data-uk-sticky="{top:-200, animation: 'uk-animation-slide-top'}">
		<div class="uk-container uk-container-center">
			<ul class="uk-navbar-nav uk-hidden-small uk-navbar-attached" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
				<li><a href="#main-section" data-uk-smooth-scroll>Главная</a></li>
				<li><a href="#about" data-uk-smooth-scroll="{offset: 75}">О нас</a></li>
				<li><a href="#gallery" data-uk-smooth-scroll="{offset: 65}">Галерея</a></li>
				<li><a href="#reviews" data-uk-smooth-scroll="{offset: 65}">Отзывы</a></li>
				<li><a href="#footer" data-uk-smooth-scroll>Контакты</a></li>
			</ul>
			<a href="#sidebar-menu" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas="{target:'#sidebar-menu'}"></a>
		</div>
	</nav>
	<div id="sidebar-menu" class="uk-offcanvas">
		<div class="uk-offcanvas-bar">
			<ul class="uk-nav uk-nav-offcanvas" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}" data-uk-nav>
				<li><a href="#main-section" data-uk-smooth-scroll>Главная</a></li>
				<li><a href="#about" data-uk-smooth-scroll="{offset: 65}">О нас</a></li>
				<li><a href="#gallery" data-uk-smooth-scroll="{offset: 105}">Галерея</a></li>
				<li><a href="#reviews" data-uk-smooth-scroll="{offset: 65}">Отзывы</a></li>
				<li><a href="#footer" data-uk-smooth-scroll>Контакты</a></li>
			</ul>
		</div>
	</div>

	<a href="/"><img src="<?=get_field('logo',5)?>" alt="Лого" class="logo" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:500}"></a>

</div>
<!--КОНЕЦ main section-->