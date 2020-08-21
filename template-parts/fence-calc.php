<div class="fence-calculate fence-calculate_top hide">
    <div class="calculate-up up-title">
        <h1 class="calculate__title calculate__title_other terras-calculate-subtitle">Калькулятор</h1>
        <h4 class="main-back-title2">Unodeck forte</h4>

        <h2>01. <?php the_field('название_раздела_кз_модели', 135);?></h2>
        
        <div class="checkbox-price visually-hidden">
            <span class="delivery"><?php the_field('цена_за_доставку_кз', 135);?></span>
            <span class="froze"><?php the_field('цена_за_замер_кз', 135);?></span>
            <span class="mounting"><?php the_field('цена_за_монтаж_кз', 135);?></span>
        </div>

        <div class="swiper-container calculate-gallery-top fence-slider_up-one" data-item="1" data-title="01. <?php the_field('название_раздела_кз_модели', 135);?>">
            <div class="swiper-wrapper">
                <?php if( have_rows('галерея_моделей_кз', 135) ): ?>
                    <?php $count_model = 0; ?>
                    <?php while( have_rows('галерея_моделей_кз', 135) ): the_row();
                        $modelName_kt = get_sub_field('название_модели_кз');
                        $bigImage_kt = get_sub_field('главное_изображение_модели_кз');
                        //$price_kz = get_sub_field('цена_модели_кз');
                        $count_model++;
                    ?>
                        <?php if($bigImage_kt): ?>
                            <div class="swiper-slide" id="fence-model-<?php echo $count_model ?>">
                                <div class="terras-price visually-hidden"><?php echo $price_kz ?></div>
                                <div class="terras-calculate__select">
                                    <h3 class="js-title1"><?php echo $modelName_kt ?></h3>
                                    <select class="price-fence">
                                        <?php while( have_rows('размеры_модели_кз', 135) ): the_row();
                                            $modelSize_kt = get_sub_field('задать_размеры_кз');
                                            $price_model_kz = get_sub_field('цена_заданного_размера_кз');
                                        ?>
                                            <option value="<?php echo $price_model_kz ?>"><?php echo $modelSize_kt ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <div class="fence-top1-column">
                                    <img src="<?php echo $bigImage_kt ?>">
                                </div>

                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            
            </div>
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
        <!-- end slider-up -->

        <!-- Выбор цвета -->
        <!-- Старый вариант -->
        <!-- <div class="swiper-container calculate-gallery-top fence-slider_up-two" data-item="2" data-title="02. <?php the_field('название_раздела_кз_цвет', 135);?>">
            <div class="swiper-wrapper">
                <?php //if( have_rows('галерея_цветов_кз', 135) ): ?>
                    <?php //while( have_rows('галерея_цветов_кз', 135) ): the_row();
                        //$imageColorName_kt = get_sub_field('название_цвета_кз');
                        //$bigImageColor_kt = get_sub_field('главное_изображение_цвета_кз');
                    ?>
                        <?php //if($bigImageColor_kt): ?>
                            <div class="swiper-slide">
                                <h3 class="calculate-subtitle"><?php //echo $imageColorName_kt ?></h3>
                                <div class="fence-top1-column">
                                    <img src="<?php //echo $bigImageColor_kt ?>">
                                </div>
                            </div>
                        <?php //endif; ?>
                    <?php //endwhile; ?>
                <?php //endif; ?>
            </div>
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div> -->

        <div class="calculate-gallery-top fence-slider_up-two" data-item="2" data-title="02. <?php the_field('название_раздела_кз_цвет', 135);?>">
            <?php if( have_rows('галерея_моделей_кз', 135) ): ?>
                <?php $coumt_model_color = 0; ?>
                <?php while( have_rows('галерея_моделей_кз', 135) ): the_row();
                    $coumt_model_color++;
                ?>
                    
                    <div class="swiper-container fence-slider_up-two2 all-models fence-model-<?php echo $coumt_model_color ?>">
                        <div class="swiper-wrapper">

                            <?php if( have_rows('цвета_модели_кз', 135) ): ?>
                                <?php while( have_rows('цвета_модели_кз', 135) ): the_row();
                                    $model_color_name_kt = get_sub_field('выбор_названия_цвета_кз');
                                    $model_color_img_kt = get_sub_field('большое_изображение_выбора_цвета_кз');
                                ?>
                                    <div class="swiper-slide">
                                        <h3 class="calculate-subtitle"><?php echo $model_color_name_kt ?></h3>
                                        <div class="fence-top1-column">
                                            <img src="<?php echo $model_color_img_kt ?>">
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>    
                    
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- end slider-up -->

        <!-- Выбор текстуры -->
        <!-- Старый вариант -->
        <!-- <div class="swiper-container calculate-gallery-top fence-slider_up-three" data-item="3" data-title="03. <?php the_field('название_раздела_текстура_кз', 135);?>">
            <div class="swiper-wrapper">
                <?php //if( have_rows('галерея_текстур_кз', 135) ): ?>
                    <?php //while( have_rows('галерея_текстур_кз', 135) ): the_row();
                        //$textureName_kt = get_sub_field('название_текстуры_кз');
                        //$bigImageTexture_kt = get_sub_field('главное_изображение_текстуры_кз');
                    ?>
                        <?php //if($bigImageTexture_kt): ?>
                            <div class="swiper-slide">
                                <h3><?php //echo $textureName_kt ?></h3>
                                <div class="fence-top1-column">
                                    <img src="<?php //echo $bigImageTexture_kt ?>">
                                </div>
                            </div>
                        <?php //endif; ?>
                    <?php //endwhile; ?>
                <?php //endif; ?>
            </div>
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div> -->

        <div class="calculate-gallery-top fence-slider_up-three" data-item="3" data-title="03. <?php the_field('название_раздела_текстура_кз', 135);?>">
                
            <?php if( have_rows('галерея_моделей_кз', 135) ): ?>
                <?php $count_model_texture = 0; ?>
                <?php while( have_rows('галерея_моделей_кз', 135) ): the_row();
                    $count_model_texture++;
                ?>
                    <div class="swiper-container fence-slider_up-three2 all-models fence-model-<?php echo $count_model_texture ?>">
                        <div class="swiper-wrapper">
                            <?php if( have_rows('текстуры_моделей_кз', 135) ): ?>
                                <?php while( have_rows('текстуры_моделей_кз', 135) ): the_row();
                                    $model_texture_name_kt = get_sub_field('выбор_названия_текстуры_кз');
                                    $model_texture_img_kt = get_sub_field('выбор_большого_изображения_текстуры_кз');
                                ?>
                                    <div class="swiper-slide">
                                        <h3><?php echo $model_texture_name_kt ?></h3>
                                        <div class="fence-top1-column">
                                            <img src="<?php echo $model_texture_img_kt ?>">
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
            
                <?php endwhile; ?>
            <?php endif; ?>
                            
        </div>


        <!-- end slider-up -->
        <div class="swiper-container calculate-gallery-top fence-slider_up-four" data-item="4" data-title="04. <?php the_field('название_раздела_длина_забора', 135);?>">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="fence-top-four">
                        <h3><?php the_field('заголовок_длина_забора', 135);?></h3>
                        <img src="<?php the_field('изображение_забора', 135);?>">
                    </div>
                    <div class="div">
                        <div class="fence-top-four-block">
                            <div class="fence-top-four-width">
                                <label>
                                    <span>A =</span> <input type="text" class="fence-input fence-a"> <span>mm</span>
                                </label>
                                <label>
                                    <span>B =</span> <input type="text" class="fence-input fence-b"> <span>mm</span>
                                </label>
                            </div>
                            <div class="fence-top-four-column">
                                <div class="fence-top-four-door">
                                    <h3>Нужны ли ворота?</h3>
                                    <div class="fence-top-four-select js-gate">
                                        <span class="fence-top-four-gate_active">Да</span>
                                        <span>Нет</span>
                                    </div>
                                </div>
                                <div class="fence-top-four-door js-wicket">
                                    <h3>Нужны ли калитка?</h3>
                                    <div class="fence-top-four-select">
                                        <span class="fence-top-wicket_active">Да</span>
                                        <span>Нет</span>
                                    </div>
                                </div>
                            </div>
                            <button class="fence-top-four-button" type="button" data-num="4">Далее</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end slider-up -->
        <div class="swiper-container calculate-gallery-top fence-slider_up-five" data-item="5" data-title="05. <?php the_field('название_раздела_кз_ворота', 135);?>">
            <div class="swiper-wrapper">
                <?php if( have_rows('галерея_типа_ворот', 135) ): ?>
                    <?php while( have_rows('галерея_типа_ворот', 135) ): the_row();
                        $typeName_kz = get_sub_field('тип_ворот_кз');
                        $bigImageType_kz = get_sub_field('главное_изображение_ворот_кз');
                        $price_vor_kz = get_sub_field('цена_ворот_кз');
                    ?>
                        <?php if($bigImageType_kz): ?>
                            <div class="swiper-slide">
                                <h3 class="calculate-subtitle"><?php echo $typeName_kz ?></h3>
                                <div class="fence-top1-column">
                                    <div class="fence-five-door_block">
                                        <span class="fence-five-door_b">B</span>
                                        <div class="fence-five-door_calc">
                                            <span class="minus">—</span>
                                            <span class="answer">3,5</span>
                                            <span>М</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </div>
                                    <img src="<?php echo $bigImageType_kz ?>">
                                </div>

                                <div class="fence-door-price visually-hidden"><?php echo $price_vor_kz ?></div>

                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- end slider-up -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
        <!-- end block-u -->
        <button class="calculate-up-button" type="button" data-num="1">Далее</button>
        <div class="calculate-tabs">
            <ul>
                <li class="calculate-tabs_active" data-item="1"><a href="#">01 / <span>Модель</span></a></li>
                <li data-item="2"><a href="#">02 / <span>Цвет</span></a></li>
                <li data-item="3"><a href="#">03 / <span>Текстура</span></a></li>
                <li data-item="4"><a href="#">04 / <span>Длина и ширина</span></a></li>
                <li data-item="5"><a href="#">05 / <span>Ворота</span></a></li>
            </ul>
        </div>
        <!-- end terras-calculate__tabs -->

        <!-- Миниатюры -->
        <div class="swiper-container calculate-gallery-thumbs fence-gallery_thumbs-one" data-item="1">
            <div class="swiper-wrapper">
                <?php if( have_rows('галерея_моделей_кз', 135) ): ?>
                    <?php while( have_rows('галерея_моделей_кз', 135) ): the_row();
                        $modelName_kt = get_sub_field('название_модели_кз');
                        $smallImage_kt = get_sub_field('миниатюра_модели_кз');
                    ?>
                        <?php if($smallImage_kt): ?>
                            <div class="swiper-slide">
                                <div class="gallery-thumbs1-column">
                                    <img src="<?php echo $smallImage_kt ?>">
                                </div>
                                <span><?php echo $modelName_kt ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- Add Scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
        <!--end slider down -->
        
        <!-- Старый вариант -->
        <!-- <div class="swiper-container calculate-gallery-thumbs fence-gallery_thumbs-two" data-item="2">
            <div class="swiper-wrapper">
                <?php //if( have_rows('галерея_цветов_кз', 135) ): ?>
                    <?php //while( have_rows('галерея_цветов_кз', 135) ): the_row();
                        //$imageColorName_kt = get_sub_field('название_цвета_кз');
                        //$bigImageColor_kt = get_sub_field('миниатюра_цвета_кз');
                    ?>
                        <?php //if($bigImageColor_kt): ?>
                            <div class="swiper-slide">
                                <div class="gallery-thumbs1-column">
                                    <img src="<?php //echo $bigImageColor_kt ?>">
                                </div>
                                <span><?php //echo $imageColorName_kt ?></span>
                            </div>
                        <?php //endif; ?>
                    <?php //endwhile; ?>
                <?php //endif; ?>
            </div>
            <!-- Add Scrollbar -->
            <!-- <div class="swiper-scrollbar"></div>
        </div> --> 

        <div class="calculate-gallery-thumbs fence-gallery_thumbs-two" data-item="2">
            <?php if( have_rows('галерея_моделей_кз', 135) ): ?>

                <?php $coumt_model_color_thumb = 0; ?>

                <?php while( have_rows('галерея_моделей_кз', 135) ): the_row();
                    $coumt_model_color_thumb++;
                ?>
                    <div class="swiper-container fence-gallery_thumbs-two2 all-models fence-model-<?php echo $coumt_model_color_thumb ?>">
                        <div class="swiper-wrapper">
                            <?php if( have_rows('цвета_модели_кз', 135) ): ?>
                                <?php while( have_rows('цвета_модели_кз', 135) ): the_row();
                                    $model_color_name_kt = get_sub_field('выбор_названия_цвета_кз');
                                    $model_color_thumb_kt = get_sub_field('миниатюра_выбора_цвета_кз');
                                ?>
                                    <div class="swiper-slide">
                                        <div class="gallery-thumbs1-column">
                                            <img src="<?php echo $model_color_thumb_kt ?>">
                                        </div>
                                        <span><?php echo $model_color_name_kt ?></span>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>    
                <?php endwhile; ?>
            <?php endif; ?>
        </div>



        <!--end slider down -->
        <!-- Текстура миниатюра -->

        <!-- Старый вариант -->
        <!-- <div class="swiper-container calculate-gallery-thumbs fence-gallery_thumbs-three" data-item="3">
            <div class="swiper-wrapper">
                <?php //if( have_rows('галерея_текстур_кз', 135) ): ?>
                    <?php //while( have_rows('галерея_текстур_кз', 135) ): the_row();
                        //$textureName_kz = get_sub_field('название_текстуры_кз');
                        //$smallImageTexture_kz = get_sub_field('миниатюра_текстуры_кз');
                    ?>
                        <?php //if($smallImageTexture_kz): ?>
                            <div class="swiper-slide">
                                
                                <div class="gallery-thumbs1-column">
                                    <img src="<?php //echo $smallImageTexture_kz ?>">
                                </div>
                                <span><?php //echo $textureName_kz ?></span>
                            </div>
                        <?php //endif; ?>
                    <?php //endwhile; ?>
                <?php //endif; ?>
            </div>
            <!-- Add Scrollbar -->
            <!-- <div class="swiper-scrollbar"></div>
        </div> --> 

        <div class="calculate-gallery-thumbs fence-gallery_thumbs-three" data-item="3">
            <?php if( have_rows('галерея_моделей_кз', 135) ): ?>

                <?php $coumt_model_texture_thumb = 0; ?>

                <?php while( have_rows('галерея_моделей_кз', 135) ): the_row();
                    $coumt_model_texture_thumb++;
                ?>
                    <div class="swiper-container fence-gallery_thumbs-three2 all-models fence-model-<?php echo $coumt_model_texture_thumb ?>">
                        <div class="swiper-wrapper">
                            <?php if( have_rows('текстуры_моделей_кз', 135) ): ?>
                                <?php while( have_rows('текстуры_моделей_кз', 135) ): the_row();
                                    $model_texture_name_kt = get_sub_field('выбор_названия_текстуры_кз');
                                    $model_texture_thumb_kt = get_sub_field('выбор_миниатюры_текстуры_кз');
                                ?>
                                    <div class="swiper-slide">
                                        <div class="gallery-thumbs1-column">
                                            <img src="<?php echo $model_texture_thumb_kt ?>">
                                        </div>
                                        <span><?php echo $model_texture_name_kt ?></span>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>    
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!--end slider down -->
        <div class="fence-four-down calculate-gallery-thumbs" data-item="4"></div>
        <div class="swiper-container calculate-gallery-thumbs fence-gallery_thumbs-five" data-item="5">
            <div class="swiper-wrapper">
                <?php if( have_rows('галерея_типа_ворот', 135) ): ?>
                    <?php while( have_rows('галерея_типа_ворот', 135) ): the_row();
                        $typeName_kz = get_sub_field('тип_ворот_кз');
                        $smallImageType_kz = get_sub_field('миниатюра_ворот_кз');
                    ?>
                        <?php if($smallImageType_kz): ?>
                            <div class="swiper-slide">
                                <div class="gallery-thumbs1-column">
                                    <img src="<?php echo $smallImageType_kz ?>">
                                </div>
                                <span><?php echo $typeName_kz ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- Add Scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
        <!--end slider down -->
    </div>
    <!--  end fence calculate  -->
</div>