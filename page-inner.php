<?php 
/*
Template Name: Внутренняя
*/
?>

<?php get_header('inner'); ?>
<div class="content-page">
      <div class="link-back link-back_mob inner-link-back"><a href="/">Назад</a></div>
      <p class="content-title-mob content-page__title-mob">Наши услуги</p>
      <div class="service-list-slider swiper-container service-tabs-mob">
        <div class="swiper-wrapper">
            <?php if( have_rows('добавить_услугу', 21) ): ?>
                
                <?php $service = 0; ?>
                
                <?php while( have_rows('добавить_услугу', 21) ): the_row(); 
                    $service_name = get_sub_field('название_услуги');
                    $service++;
                ?>

                <div class="swiper-slide"><a class="product-link serviceTab-<?php echo $service ?>" href="#serviceTab-<?php echo $service ?>"><?php echo $service_name ?></a></div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
      </div>
      <div class="service-slider-mob swiper-container">
        <div class="swiper-wrapper">
            <?php if( have_rows('картинки_в_среднем_блоке') ): ?>
                
                
                <?php while( have_rows('картинки_в_среднем_блоке') ): the_row(); 
                    $service_big_img = get_sub_field('добавить_картинку_су_б');
                ?>

                <div class="swiper-slide"><img src="<?php echo $service_big_img ?>"></div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="content-page__inner">
        <div class="sidebar sidebar-page content-page__column">
          <div class="link-back"><a class="inner-link-back" href="/">Назад</a></div>
          <div class="sidebar__title sidebar__title_inner">Наши услуги</div>
          <ul class="sidebar-list sidebar-list_page service-tabs">
           <?php if( have_rows('добавить_услугу', 21) ): ?>
                
                <?php $service = 0; ?>
                
                <?php while( have_rows('добавить_услугу', 21) ): the_row(); 
                    $service_name = get_sub_field('название_услуги');
                    $service++;
                ?>

                <li><a href="#serviceTab-<?php echo $service ?>" class="serviceTab-<?php echo $service ?>"><?php echo $service_name ?></a></li>

                <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
        <div class="content-page__column content-page__image">
            <?php if( have_rows('картинки_в_среднем_блоке') ): ?>
                
                
                <?php while( have_rows('картинки_в_среднем_блоке') ): the_row(); 
                    $service_big_img2 = get_sub_field('добавить_картинку_су_б');
                ?>

                <img src="<?php echo $service_big_img2 ?>">

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="content-page__column">
          <div class="tab-service">
            <div class="service-info">
                <?php if( have_rows('добавить_услугу', 21) ): ?>
                    
                    <?php $service = 0; ?>
                    
                    <?php while( have_rows('добавить_услугу', 21) ): the_row(); 
                        $service_name = get_sub_field('название_услуги');
                        $service_content = get_sub_field('описание_услуги_су');
                        $service++;
                    ?>

                    <div class="service-info__tab" id="serviceTab-<?php echo $service ?>">
                        <p class="tab-service__title"><?php echo $service_name ?></p>
                        <!-- <p class="tab-service__sub-title">Design</p> -->
                        <div class="tab-service__article article">
                            <?php echo $service_content ?>
                        </div>  
                    </div>

                    <?php endwhile; ?>
                <?php endif; ?>

              <div class="service-info__btn-wrap">
                <button class="tab-service__btn btn call-btn" type="button">Сделать заявку</button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
<?php get_footer('inner'); ?>