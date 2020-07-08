
<li class="catalog-list__item">
    <p class="catalog-list__title"><?php the_title(); ?></p>
    <p class="catalog-list__article"><?php the_field('тип_товара');?></p>

     <div class="price-tab-wrap">
        <div class="product-price product-info__price product-price_tab">
            <div class="product-price__tabs size-km">
                <?php the_field('цена_товара_кв_м');?> <span>рублей</span>
            </div>
            <div class="product-price__tabs size-pm">
                <?php the_field('цена_за_пм');?> <span>рублей</span>
            </div>
        </div>

        <div class="select-wrap select-wrap_product">
            <select class="select-cat select-size-format">
                <option value=".size-km"> Ед. измерения: кв. м</option>
                <option value=".size-pm"> Ед. измерения: пог. м</option>
            </select>
        </div>
    </div>

    <ul class="color-preview">
        <!-- Цвета -->
        <?php if( have_rows('Название_цвета_и_изображение') ): ?>
            
            <?php while( have_rows('Название_цвета_и_изображение') ): the_row(); 
                $colorImage = get_sub_field('картинка_цвета');
                $colorName = get_sub_field('название_цвета');
            ?>
                <li>
                    <?php if($colorImage): ?>
                        <div class="color-preview__img"><img src="<?php echo $colorImage ?>"></div>
                    <?php endif; ?>
                </li>
            <?php endwhile; ?>
            
        <?php endif; ?>
    </ul>

    <div class="catalog-img"><img src="<?php the_field('изображение_для_каталога');?>"></div>

</li>
