<div class="about-block line-bottom" id="about">
    <div class="main-title about-block__title"><?php the_field('заголовок_блока_о_компании', 21);?></div>
    <div class="about-block__sub-title"><?php the_field('подпись_к_блоку_о_компании', 21);?></div>
    <div class="about-block__inner">
        <div class="swiper-container tab-links tab-links_mob">
            <div class="swiper-wrapper">
                <?php if( have_rows('раздел_о_компании', 21) ): ?>
                    <?php $tab_num_mob = 0; ?>
                    <?php while( have_rows('раздел_о_компании', 21) ): the_row();
                        $title_tab_about = get_sub_field('название_раздела');
                        $tab_num_mob++;
                    ?>
                        <?php if($title_tab_about): ?>
                            <div class="swiper-slide"><a class="product-link" href="#aboutTab-<?php echo $tab_num_mob ?>"><?php echo $title_tab_about ?></a></div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <ul class="about-tabs tab-links tab-links_desc">
            <?php if( have_rows('раздел_о_компании', 21) ): ?>
                <?php $tab_num = 0; ?>
                
                <?php while( have_rows('раздел_о_компании', 21) ): the_row();
                    $title_tab_about = get_sub_field('название_раздела');
                    $tab_num++;
                ?>
                    <?php if($title_tab_about): ?>
                        <li><a href="#aboutTab-<?php echo $tab_num ?>"><?php echo $title_tab_about ?></a></li>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>

        <?php if( have_rows('раздел_о_компании', 21) ): ?>
            <?php $tab_block = 0; ?>
            
            <?php while( have_rows('раздел_о_компании', 21) ): the_row();
                $title_tab_about = get_sub_field('название_раздела');
                $tab_block++;
            ?>
                <?php if($title_tab_about): ?>
                    <div class="tab-block" id="aboutTab-<?php echo $tab_block ?>">
                        <div class="about-slider swiper-container">
                            <div class="swiper-wrapper">
                                <?php if( have_rows('информация_раздела_ок', 21) ): ?>
                                    <?php while( have_rows('информация_раздела_ок', 21) ): the_row();
                                        $text_tab_about = get_sub_field('текст_информация_о_компании');
                                        $quote_tab_about = get_sub_field('цитата_о_компании');
                                        $image_tab_about = get_sub_field('изображение_о_компании');
                                    ?>
                                        <?php if($image_tab_about): ?>
                                            
                                            <div class="swiper-slide">
                                                <ul class="about-slider__block">
                                                    <li>
                                                        <?php echo $text_tab_about ?>
                                                    </li>
                                                    <li>
                                                        <div class="about-slider__img"><img src="<?php echo $image_tab_about ?>"></div>
                                                    </li>
                                                    <li>
                                                        <div class="about-slider__quote"><?php echo $quote_tab_about ?></div>
                                                    </li>
                                                </ul>
                                            </div>

                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <div class="about-slider__nav">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>

                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>