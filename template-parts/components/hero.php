<?php

$backgroundImage = get_field('background_image');
$title = get_field('title');
$subtitle = get_field('subtitle');

?>
<section class="inner-page__hero" style="background: url('<?php echo $backgroundImage; ?>') no-repeat; background-size: cover;background-position: center;">
	<section class="inner-page__hero-text">
		<div class="inner-page__hero-title">
			<?php echo $title; ?>
		</div>
		<div class="inner-page__hero-subtitle">
			<?php echo $subtitle; ?>
		</div>
	</section>
	<section class="inner-page__hero-contact">
		<div class="inner-page__hero-title">
			<?php echo $title; ?>
		</div>
		<div class="inner-page__hero-subtitle">
			<?php echo $subtitle; ?>
		</div>
	</section>
</section>
