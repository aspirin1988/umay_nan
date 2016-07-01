<!--НАЧАЛО жёлтая волнистая линия-->
<div class="zip zip_yellow"></div>
<!--КОНЕЦ жёлтая волнистая линия-->

<!--НАЧАЛО about-->
<div id="about">
	<div class="about_advantages">
		<div class="uk-container uk-container-center">
			<h2>О нас</h2>
			<div class="uk-grid">
				<?php $post=get_posts(array('category_name'=>'about-au','order'=>'ASC', 'orderby'=>'id', 'numberposts'=>3 ));
				foreach ($post as  $value):
				?>
					<style>
						.circle.alarm.bear<?=$value->ID?>{
							background-image: url('<?=get_field('image-unhover',$value->ID)?>');
						}
					</style>
				<div class="uk-width-medium-1-3 uk-width-small-1-2" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:400}">
					<a href="#modal-article<?=$value->ID?>" data-uk-modal>
						<div class="circle alarm bear<?=$value->ID?>" ></div>
						<p><?=$value->post_title?></p>
					</a>
				</div>
					<?php if ($value->post_content): ?>
					<div id="modal-article<?=$value->ID?>" data-uk-modal="{center:true}" class="uk-modal modal-article">
						<div class="uk-modal-dialog uk-modal-dialog-large uk-clearfix">
							<a class="uk-modal-close uk-close"></a>
							<h3><?=$value->post_title?></h3>
							<img src="<?=get_the_post_thumbnail_url($value->ID)?>" class="float-right-img">
							<?=$value->post_content ?>
						</div>
					</div>
					<?php endif; ?>
				<?php endforeach; ?>
				<?php $post=get_posts(array('category_name'=>'about-masha','order'=>'ASC', 'orderby'=>'id', 'numberposts'=>3 ));
				foreach ($post as $value):
				?>
					<style>
						.alphabet.circle.masha<?=$value->ID?>{
							background-image: url('<?=get_field('image-unhover',$value->ID)?>');
						}
					</style>
				<div class="uk-width-medium-1-3 uk-width-small-1-2" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:600}">
					<a href="#modal-article<?=$value->ID?>" data-uk-modal>
						<div class="alphabet circle masha<?=$value->ID?> "></div>
						<p><?=$value->post_title?></p>
					</a>
				</div>
					<?php if ($value->post_content): ?>
					<div id="modal-article<?=$value->ID?>" data-uk-modal="{center:true}" class="uk-modal modal-article">
						<div class="uk-modal-dialog uk-modal-dialog-large uk-clearfix">
							<a class="uk-modal-close uk-close"></a>
							<h3><?=$value->post_title?></h3>
							<img src="<?=get_the_post_thumbnail_url($value->ID)?>" class="float-right-img">
							<?=$value->post_content ?>
						</div>
					</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<!--НАЧАЛО зелёная волнистая линия-->
	<div class="zip zip_green"></div>
	<!--КОНЕЦ зелёная волнистая линия-->

	<div class="about_summary">
		<div class="uk-container uk-container-center">
			<div data-uk-scrollspy="{cls:'uk-animation-fade, delay:1000'}">
				<img src="<?=get_the_post_thumbnail_url(36)?>" alt="Медведь" class="big_bear uk-hidden-small">
				<p><?php  $post=get_post(36); echo $post->post_content;?></p>
			</div>
		</div>
	</div>
</div>
<!--КОНЕЦ about-->

<!--НАЧАЛО зелёная волнистая линия-->
<div class="zip zip_green"></div>
<!--КОНЕЦ зелёная волнистая линия-->

<!--НАЧАЛО галерея-->
<div class="gallery" id="gallery">
	<div class="uk-container uk-container-center">
		<h2>Галерея</h2>
		<div id="slideshow" data-uk-slideshow="{autoplayInterval:1000}">
			<div class="uk-slidenav-position uk-hidden-small">
				<ul class="uk-slideshow">
					<?php $gallery=pp_gallery_get(5);
					foreach ($gallery as $value):
					?>
					<li>
						<a href="<?=$value->url?>" data-uk-lightbox="{group:'my-group'}">
						<img src="<?=$value->url?>">
						</a>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div id="slider" class="uk-slidenav-position" data-uk-slider="{center:true, autoplay:true, pauseOnHover:true, autoplayInterval:3000}">
				<div class="uk-slider-container">
					<ul class="uk-slider uk-grid uk-grid-width-large-1-5 uk-grid-width-medium-1-4 uk-grid-width-small-1-1">
						<?php foreach ($gallery as $key => $value):
						?>
						<li data-uk-slideshow-item="<?=$key?>">
							<img src="<?=$value->url?>">
						</li>
						<?php endforeach; ?>
					</ul>
					<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
					<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--КОНЕЦ галерея-->

<!--НАЧАЛО зелёная волнистая линия-->
<div class="zip zip_green"></div>
<!--КОНЕЦ зелёная волнистая линия-->

<!--НАЧАЛО отзывы-->
<div class="reviews" id="reviews">
	<div class="uk-container uk-container-center">
		<h2>Отзывы</h2>
		<div class="uk-slidenav-position" data-uk-slider="{autoplay:true, pauseOnHover:true, autoplayInterval:5000}">
			<div class="uk-slider-container">
				<ul class="uk-slider uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid">
					<?php $post=get_posts(array('category_name'=>'reviews','order'=>'ASC', 'orderby'=>'id', 'numberposts'=>-1 ));
					foreach ($post as $value):
					?>
					<li>

						<img class="avatar" src="<?=get_the_post_thumbnail_url($value->ID)?>">
						<p class="review">
							<?=$value->post_content?>
						</p>
						<p class="reviewer_name"><?=$value->post_title?></p>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
			<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
		</div>
	</div>
</div>
<!--КОНЕЦ отзывы-->