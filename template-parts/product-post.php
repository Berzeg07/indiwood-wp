<div class="product-info">
    <div class="mobile-slider-wrap color-images">
        <?php if( have_rows('группа_изображений_по_цветам') ): ?>
            <?php $k = 0; ?>
            <?php while( have_rows('группа_изображений_по_цветам') ): the_row();
                $big_image_a = get_sub_field('крупное_изображение_а');
                $big_image_b = get_sub_field('крупное_изображение_в');
                $board_image_a = get_sub_field('доска_сторона_а');
                $board_image_b = get_sub_field('доска_сторона_в');
                $texture_image_a = get_sub_field('текстура_сторона_а');
                $texture_image_b = get_sub_field('текстура_сторона_в');
                $k++;
            ?>
            <div class="product-slider-mob swiper-container color-images__tabs imgTab-<?php echo $k ?>">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php echo $big_image_a ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo $board_image_a ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo $texture_image_a ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo $big_image_b ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo $board_image_b ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo $texture_image_b ?>"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <?php endwhile; ?>
        <?php endif ?>   
    </div> 

    <p class="product-title"><?php the_title(); ?></p>
    <p class="product-type"><?php the_field('тип_товара');?></p>
    
    <!-- Селект размеров -->
    <div class="price-tab-wrap">
        <div class="product-price product-info__price product-price_tab">
            <div class="product-price__tabs size-km">
                <?php the_field('цена_товара_кв_м');?> <span>рублей</span>
            </div>
            <div class="product-price__tabs size-pm">
                <?php the_field('цена_за_пм');?> <span>рублей</span>
            </div>
        </div>

        <div class="select-wrap">
            <select class="select-cat select-size-format">
                <option value=".size-km"> Ед. измерения: кв. м</option>
                <option value=".size-pm"> Ед. измерения: пог. м</option>
            </select>
        </div>
    </div>

    <!-- Селект цветов -->
    <?php if( have_rows('группа_изображений_по_цветам') ): ?>
        <?php $j = 0; ?>
        <div class="select-wrap select-wrap_color">
            <select class="select-cat" id="selectColorProduct">
                <?php while( have_rows('группа_изображений_по_цветам') ): the_row();
                    $product_color = get_sub_field('название_цвета_группы');
                    $j++;
                ?>
                <option value=".imgTab-<?php echo $j ?>">ЦВЕТ: <?php echo $product_color ?></option>
                <?php endwhile; ?>
            </select>
        </div>
    <?php endif; ?>
    
    <div class="product-info__btn-wrap">
        <button class="btn order-btn call-btn" type="button">Сделать заказ</button>
    </div>
    <p class="product-info__article article"><?php the_field('описание_товара');?></p>
    <ul class="product-list">
        <li>Размер: <?php the_field('размер_товара');?></li>
        <li>Длина: <?php the_field('длина_товара');?></li>
        <li>Профиль: <?php the_field('профиль_товара');?></li>
        <li>Внешняя обработка: <?php the_field('внешняя_обработка');?></li>
        <li>Текстура: <?php the_field('текстура_товара');?></li>
        <li>Цветовая гамма: <?php the_field('цветовая_гамма_товара');?></li>
        <li>Вес 1 пог. М: <?php the_field('вес_1_пог_м');?></li>
        <li>Производитель: <?php the_field('производитель_товара');?></li>
        <li>Гарантия: <?php the_field('гарантия_товара');?></li>
        <li>Доставка: <?php the_field('доставка_товара');?></li>
        <li>Оплата: <?php the_field('оплата_товара');?></li>
    </ul>
</div>
<div class="scroll-block">
    <div class="image-block">

        <!-- Табы цветовой гаммы -->
        <?php if( have_rows('группа_изображений_по_цветам') ): ?>
            <?php $i = 0; ?>
            <div class="color-images">
                <?php while( have_rows('группа_изображений_по_цветам') ): the_row(); 
                    $big_image_a = get_sub_field('крупное_изображение_а');
                    $big_image_b = get_sub_field('крупное_изображение_в');
                    $board_image_a = get_sub_field('доска_сторона_а');
                    $board_image_b = get_sub_field('доска_сторона_в');
                    $texture_image_a = get_sub_field('текстура_сторона_а');
                    $texture_image_b = get_sub_field('текстура_сторона_в');
                    $i++;
                ?>

                <div class="color-images__tabs imgTab-<?php echo $i ?>">
                    <div class="product-image">
                        <img src="<?php echo $big_image_a ?>">
                    </div>
                    <ul class="product-thumb">
                        <li>
                            <div class="product-thumb__show">
                                <div class="product-thumb__item product-thumb__item-left">
                                    <img src="<?php echo $board_image_a ?>">
                                </div>
                                <div class="product-thumb__item product-thumb__item-right">
                                    <img src="<?php echo $texture_image_a ?>">
                                    <div class="loop"></div>
                                </div>
                            </div>
                            <div class="product-thumb__hidden">
                                <img src="<?php echo $texture_image_a ?>">
                                <div class="loop-close"></div>
                            </div>
                        </li>
                        <li>
                            <div class="product-thumb__show">
                                <div class="product-thumb__item product-thumb__item-left">
                                    <img src="<?php echo $board_image_b ?>">
                                </div>
                                <div class="product-thumb__item product-thumb__item-right">
                                    <img src="<?php echo $texture_image_b ?>">
                                    <div class="loop"></div>
                                </div>
                            </div>
                            <div class="product-thumb__hidden">
                                <img src="<?php echo $texture_image_b ?>">
                                <div class="loop-close"></div>
                            </div>
                        </li>
                    </ul>

                    <div class="product-image">
                        <img src="<?php echo $big_image_b ?>">
                    </div>
                    
                </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <!-- Цвета -->
        <?php if( have_rows('Название_цвета_и_изображение') ): ?>
            <ul class="product-color">
            <?php while( have_rows('Название_цвета_и_изображение') ): the_row(); 
                $colorImage = get_sub_field('картинка_цвета');
                $colorName = get_sub_field('название_цвета');
            ?>
                <li>
                    <?php if($colorImage): ?>
                        <div class="product-color__img"><img src="<?php echo $colorImage ?>"></div>
                    <?php endif; ?>
                    <?php if($colorName): ?>
                        <div class="product-color__title"><?php echo $colorName ?></div>
                    <?php endif; ?>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <!-- Картинка объекта -->
        <div class="product-image"><img src="<?php the_field('изображение_объекта');?>"></div>

    </div>
</div>