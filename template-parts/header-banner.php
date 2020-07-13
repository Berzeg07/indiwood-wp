<div class="main-banner" id="top_main">
    <div class="banner-slider swiper-container">
        <div class="swiper-wrapper">
            <?php if( have_rows('галерея_в_шапке', 21) ): ?>
                
                <?php while( have_rows('галерея_в_шапке', 21) ): the_row(); 
                    $banner_img = get_sub_field('картинка_в_слайдере_шп');
                    $banner_content = get_sub_field('текст_на_слайде_шп');
                    $banner_video = get_sub_field('видео_в_шапке');
                ?>

                <div class="swiper-slide" style="background:url(<?php echo $banner_img?>); background-repeat: no-repeat; background-size: cover;">
                    <?php if( $banner_video ): ?>
                        <video class="video-main" width="100%" preload="auto" autoplay="autoplay" loop="loop" muted="muted">
                            <source src="<?php echo $banner_video ?>" type="video/mp4">
                        </video>
                    <?php endif; ?>
                    <div class="banner-slider__cont">
                        <div class="banner-slider__article">
                            <?php echo $banner_content ?>
                        </div>
                        <div class="main-banner__btn">
                            <button class="btn btn-green" type="button">Заказать террасу</button>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
            
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
</div>