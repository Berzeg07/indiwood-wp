<div class="gallery-block line-bottom" id="gallery_block">
    <p class="main-title gallery-block__title"><?php the_field('заголовок_блока_галерея', 21);?></p>
    <div class="gallery-indiwood swiper-container">
        <div class="swiper-wrapper">
            <?php if( have_rows('галерея_indiwood', 21) ): ?>
                <?php while( have_rows('галерея_indiwood', 21) ): the_row();
                    $title_gi = get_sub_field('заголовок_ги');
                    $subTitle_gi = get_sub_field('подпись_под_заголовком_ги');
                    $article_gi = get_sub_field('текст_ги');
                    $image_gi = get_sub_field('картинка_ги');
                ?>
                    <?php if($image_gi): ?>
                        <div class="swiper-slide">
                            <div class="gallery-indiwood__img"><img src="<?php echo $image_gi?>"></div>
                            <ul class="gallery-indiwood__cont">
                                <li>
                                    <p class="gallery-indiwood__title"><?php echo $title_gi ?></p>
                                    <p class="gallery-indiwood__sub-title"><?php echo $subTitle_gi ?></p>
                                </li>
                                <li>
                                    <p class="gallery-indiwood__article article"><?php echo $article_gi ?></p>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="gallery-indiwood__nav">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>