<div class="swiper-slide" style="background:url(<?php the_field('картинка_баннера');?>); background-repeat: no-repeat; background-size: cover;">
    <video class="video-main" width="100%" preload="auto" autoplay="autoplay" loop="loop" muted="muted">
        <source src="<?php the_field('видео_в_слайдере');?>" type="video/mp4">
    </video>
    <div class="banner-slider__cont">
        <div class="banner-slider__article">
            <?php the_content(); ?>
        </div>
        <div class="main-banner__btn">
            <button class="btn btn-green" type="button">Заказать террасу</button>
        </div>
    </div>
</div>