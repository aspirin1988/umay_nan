<footer id="footer">

	<div class="contacts">
		<div class="uk-container uk-container-center">

			<div class="uk-grid">
				<div class="uk-width-medium-1-3 logo-container">
					<a href="/"><img src="<?=get_field('logo',5)?>" alt="Лого" class="logo uk-visible-large" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:500}"></a>
				</div>
				<div class="uk-width-medium-1-3" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:100}">
					<img src="<?php bloginfo('template_directory') ?>/public/img/contacts_icon_pin.png" alt="Маркер">
					<p><?=get_field('address',5)?></p>
					<img src="<?php bloginfo('template_directory') ?>/public/img/contacts_icon_phone.png" alt="Телефон">
					<p><a href="tel:<?=get_field('phone-1',5)?>"><?=get_field('phone-1',5)?></a> | <a href="tel:<?=get_field('phone-2',5)?>"><?=get_field('phone-2',5)?></a></p>
					<p><a href="mailto:<?=get_field('email',5)?>"><?=get_field('email',5)?></a></p>

				</div>
				<div class="uk-width-medium-1-3">
					<img src="<?=get_field('image-f',5)?>" alt="Маша" class="uk-visible-large maria-with-phone" data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:900}">
				</div>
			</div>

		</div>
	</div>

	<!--НАЧАЛО картя яндекса-->
	<?=get_field('map',5)?>
	<!--КОНЕЦ картя яндекса-->

	<!--НАЧАЛО волнистая линия-->
	<div class="bottom-wave-line"></div>
	<!--КОНЕЦ волнистая линия-->

</footer>
<!--КОНЕЦ контакты/футер-->

<!--НАЧАЛО модальное окно статьи-->
</div>
<!--КОНЕЦ модальное окно статьи-->


<script src="<?php bloginfo('template_directory') ?>/public/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/sticky.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slideshow.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/scripts.js"></script>
<?=get_field('google',5)?>
<?=get_field('yandex',5)?>
<?php wp_footer() ?>
</body>
</html>