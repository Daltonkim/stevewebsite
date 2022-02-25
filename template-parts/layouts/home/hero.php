<?php 
    $backgroundImage = get_sub_field('background_image');
    $title = get_sub_field('title'); 
?> 
<section class="home__hero" style="background: url('<?php echo $backgroundImage; ?>') no-repeat; background-size: cover;background-position: center;">
    <div class="home__hero-title">
        <?php echo $title; ?>
    </div>
</section>