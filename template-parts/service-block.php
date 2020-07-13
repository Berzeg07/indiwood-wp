<div class="service-block line-bottom" id="service_block">
    <p class="main-title service-block__title"><?php the_field('заголовок_блока_услуги', 21);?></p>
    <ul class="photo-list photo-list_service">
        <li class="photo-list__item">
            <div class="photo-list__content article">
                <?php the_field('описание_блока_услуги', 21);?>
            </div>
        </li>
        <?php if( have_rows('добавить_услугу', 21) ): ?>
            
            <?php $service = 0; ?>

            <?php $page_id = 373 ?>
            
            <?php while( have_rows('добавить_услугу', 21) ): the_row(); 
                $service_name = get_sub_field('название_услуги');
                $service_image = get_sub_field('фоновая_картинка');
                $service++;
            ?>

                <li class="photo-list__item">
                    <div class="photo-list__img"><img src="<?php echo $service_image ?>"></div>
                    <ul class="photo-list__article">
                        <li>0<?php echo $service ?></li>
                        <li><?php echo $service_name ?></li>
                        <li>
                            <a href="<?php echo get_page_link( $page_id ); ?>" class="btn photo-list__btn service-link" data-attr="serviceTab-<?php echo $service ?>">Подробнее</a>
                        </li>
                    </ul>
                </li>

            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
</div>