<div class="terras-calculate">
    <div class="calculate-up up-title">
        <h1 class="calculate__title calculate__title_other terras-calculate-subtitle">Калькулятор</h1>
       
        <h4 class="main-back-title"></h4>
        <h2>01. <?php the_field('название_раздела_кт', 134);?></h2>

        <div class="checkbox-price visually-hidden">
            <span class="delivery"><?php the_field('цена_за_доставку_кт', 134);?></span>
            <span class="froze"><?php the_field('цена_за_замер_кт', 134);?></span>
            <span class="mounting"><?php the_field('цена_за_монтаж_кт', 134);?></span>
        </div>

        <!-- TERRAS-SLIDER-FIRST-UP -->
        <div class="terras-slider__first-up">

            <!-- Модели -->
            <div class="swiper-container calculate-gallery-top terras-slider-up-one" data-item="1" data-title="01. <?php the_field('название_раздела_кт', 134);?>">
                <div class="swiper-wrapper">
                    <?php if( have_rows('галерея_моделей_кт', 134) ): ?>
                        <?php $coumt_model = 0; ?>
                        <?php while( have_rows('галерея_моделей_кт', 134) ): the_row();
                            $modelName_kt = get_sub_field('название_модели_кт');
                            $bigImage_kt = get_sub_field('главное_изображение_модели_кт');
                            $coumt_model++;
                        ?>
                            <?php if($bigImage_kt): ?>
                                <div class="swiper-slide" id="model-<?php echo $coumt_model ?>">
                                    <div class="terras-calculate__select">
                                        <h3><?php echo $modelName_kt ?></h3>
                                        <select class="price-terras">
                                            
                                            <?php while( have_rows('размеры_моделей_кт', 134) ): the_row();
                                                $modelSize_kt = get_sub_field('задать_размеры');
                                                $price_kt = get_sub_field('цена_заданного_размера_кт');
                                            ?>

                                            <option value="<?php echo $price_kt ?>"><?php echo $modelSize_kt ?></option>

                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                    <div class="terras-top1-column">
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
            <!-- End models -->
            
            <!-- Выбор цвета -->

            <!-- Старый вариант -->
            <!-- <div class="swiper-container calculate-gallery-top terras-slider-up-two" data-item="2" data-title="02. <?php the_field('название_раздела_кт_цвет', 134);?>">
                <div class="swiper-wrapper">
                    <?php //if( have_rows('галерея_цветов', 134) ): ?>
                        <?php //while( have_rows('галерея_цветов', 134) ): the_row();
                            //$imageColorName_kt = get_sub_field('название_цвета_кт');
                            //$bigImageColor_kt = get_sub_field('главное_изображение_цвета_кт');
                        ?>
                            <?php //if($bigImageColor_kt): ?>
                                <div class="swiper-slide">
                                    <h3><?php //echo $imageColorName_kt ?></h3>
                                    <div class="terras-top1-column">
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

            <div class="calculate-gallery-top terras-slider-up-two" data-item="2" data-title="02. <?php the_field('название_раздела_кт_цвет', 134);?>">
                <?php if( have_rows('галерея_моделей_кт', 134) ): ?>
                    <?php $coumt_model_color = 0; ?>
                    <?php while( have_rows('галерея_моделей_кт', 134) ): the_row();
                        $coumt_model_color++;
                    ?>
                        
                        <div class="swiper-container terras-slider-up-two2 all-models model-<?php echo $coumt_model_color?>">
                            <div class="swiper-wrapper">

                                <?php if( have_rows('цвета_модели_кт', 134) ): ?>
                                    <?php while( have_rows('цвета_модели_кт', 134) ): the_row();
                                        $model_color_name_kt = get_sub_field('выбор_названия_цвета_кт');
                                        $model_color_img_kt = get_sub_field('большое_изображение_выбора_цвета_кт');
                                    ?>
                                        <div class="swiper-slide">
                                            <h3><?php echo $model_color_name_kt ?></h3>
                                            <div class="terras-top1-column">
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

            <!-- Выбор текстуры -->

            <!-- Старый вариант -->
            <!-- <div class="swiper-container calculate-gallery-top terras-slider-up-three" data-item="3" data-title="03. <?php the_field('название_раздела_текстура_кт', 134);?>">
                <div class="swiper-wrapper">
                    <?php //if( have_rows('галерея_текстур_кт', 134) ): ?>
                        <?php //while( have_rows('галерея_текстур_кт', 134) ): the_row();
                            //$textureName_kt = get_sub_field('название_текстуры_кт');
                            //$bigImageTexture_kt = get_sub_field('главное_изображение_текстуры_кт');
                        ?>
                            <?php //if($bigImageTexture_kt): ?>
                                <div class="swiper-slide">
                                    <h3><?php //echo $textureName_kt ?></h3>
                                    <div class="terras-top1-column">
                                        <img src="<?php //echo $bigImageTexture_kt ?>">
                                    </div>
                                </div>
                            <?php //endif; ?>
                        <?php //endwhile; ?>
                    <?php //endif; ?>
                </div>
            </div> -->

            <div class="calculate-gallery-top terras-slider-up-three" data-item="3" data-title="03. <?php the_field('название_раздела_текстура_кт', 134);?>">
                
                <?php if( have_rows('галерея_моделей_кт', 134) ): ?>
                    <?php $count_model_texture = 0; ?>
                    <?php while( have_rows('галерея_моделей_кт', 134) ): the_row();
                        $count_model_texture++;
                    ?>
                        <div class="swiper-container terras-slider-up-three2 all-models model-<?php echo $count_model_texture ?>">
                            <div class="swiper-wrapper">
                                <?php if( have_rows('текстуры_модели_кт', 134) ): ?>
                                    <?php while( have_rows('текстуры_модели_кт', 134) ): the_row();
                                        $model_texture_name_kt = get_sub_field('выбор_названия_текстуры_кт');
                                        $model_texture_img_kt = get_sub_field('выбор_большого_изображения_текстуры_кт');
                                    ?>
                                        <div class="swiper-slide">
                                            <h3><?php echo $model_texture_name_kt ?></h3>
                                            <div class="terras-top1-column">
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

            <!-- Способ укладки -->
            <div class="swiper-container calculate-gallery-top terras-slider-up-four2" data-item="4" data-title="04. <?php the_field('название_раздела_укладка_кт', 134);?>">
                <div class="swiper-wrapper">
                    <?php if( have_rows('галерея_способов_укладки_кт', 134) ): ?>
                        <?php while( have_rows('галерея_способов_укладки_кт', 134) ): the_row();
                            $uklName_kt = get_sub_field('название_способа_укладки_кт');
                            $bigImageUkl_kt = get_sub_field('главное_изображение_укладки_кт');
                        ?>
                            <?php if($bigImageUkl_kt): ?>
                                <div class="swiper-slide">
                                    <h3><?php echo $uklName_kt ?></h3>
                                    <div class="terras-top1-column">
                                        <img src="<?php echo $bigImageUkl_kt ?>">
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>

            

            <!-- Форма террасы -->
            <div class="swiper-container calculate-gallery-top terras-slider-up-five" data-item="5" data-title="05. <?php the_field('название_раздела_форма_террасы_кт', 134);?>">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="terras-top1-column">
                            <h3>П-образная форма</h3>
                            <div id="tab1" class="tab__box">
                                <img src="<?php the_field('картинка_сторона_а_фт', 134);?>">
                            </div>
                            <div id="tab2" class="tab__box">
                                <img src="<?php the_field('картинка_сторона_б_фт', 134);?>">
                            </div>
                            <!-- <div id="tab3" class="tab__box">
                                <img src="<?php //the_field('картинка_сторона_с_фт', 134);?>">
                            </div> -->
                            <div id="tab3" class="tab__box">
                                <img src="<?php the_field('картинка_сторона_д_фт', 134);?>">
                            </div>
                            <div id="tab4" class="tab__box">
                                <img src="<?php the_field('картинка_сторона_е_фт', 134);?>">
                            </div>
                        </div>
                        <div class="div">
                            <div class="fence-top-four-width terras-top-five-width fence-top-four-tabs">
                            <label data-tab="#tab1" class="for-tab">
                                <span>A =</span> <input type="number" class="fence-a terras-a btn-five js-btn-five" data-input="1"> <span>cm</span>
                                </label>
                                <label data-tab="#tab2" class="for-tab">
                                <span>B =</span> <input type="number" class="fence-b terras-b btn-five js-btn-five" data-input="2"> <span>cm</span>
                                </label>
                                <!-- <label data-tab="#tab3" class="for-tab">
                                <span>C =</span> <input type="number" class="fence-b terras-c btn-five js-btn-five"  data-input="3"> <span>cm</span>
                                </label> -->
                                <label data-tab="#tab3" class="for-tab">
                                <span>D =</span> <input type="number" class="fence-b terras-d btn-five js-btn-five" data-input="3"> <span>cm</span>
                                </label>
                                <label data-tab="#tab4" class="for-tab">
                                <span>E =</span> <input type="number" class="fence-b terras-e btn-five js-btn-five" data-input="4"> <span>cm</span>
                                </label>
                                <label>
                                <span>S =</span> <input type="number" class="fence-b terras-s btn-sum-five js-btn-sum-five"> <span>M <sup>2</sup></span>
                                </label>
                                <button class="terras-top-five-width-button terras-top-five-width-button" type="button" data-num="5">Далее</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="terras-top1-column">
                            <h3>Г-образная форма</h3>
                            <div id="tab21" class="tab__box2">
                                <img src="<?php the_field('картинка_сторона_а_гф', 134);?>">
                            </div>
                            <div id="tab22" class="tab__box2">
                                <img src="<?php the_field('картинка_сторона_в_гф', 134);?>">
                            </div>
                            <div id="tab23" class="tab__box2">
                                <img src="<?php the_field('картинка_сторона_с_гф', 134);?>">
                            </div>
                            <div id="tab24" class="tab__box2">
                                <img src="<?php the_field('картинка_сторона_д_гф', 134);?>">
                            </div>
                        </div>
                        <div class="div">
                            <div class="fence-top-four-width terras-top-five-width fence-top-four-tabs2">
                                <label data-tab="#tab21" class="for-tab">
                                    <span>A =</span> <input type="number" class="fence-a terras-a btn-five js-btn-five2" data-input="21"> <span>cm</span>
                                </label>
                                <label data-tab="#tab22" class="for-tab">
                                    <span>B =</span> <input type="number" class="fence-b terras-b btn-five js-btn-five2" data-input="22"> <span>cm</span>
                                </label>
                                <label data-tab="#tab23" class="for-tab">
                                    <span>C =</span> <input type="number" class="fence-b terras-c btn-five js-btn-five2"  data-input="23"> <span>cm</span>
                                </label>
                                <label data-tab="#tab24" class="for-tab">
                                    <span>D =</span> <input type="number" class="fence-b terras-d btn-five js-btn-five2" data-input="24"> <span>cm</span>
                                </label>
                                <label>
                                    <span>S =</span> <input type="number" class="fence-b terras-s btn-sum-five js-btn-sum-five2"> <span>M <sup>2</sup></span>
                                </label>
                                <button class="terras-top-five-width-button" type="button" data-num="5">Далее</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="terras-top1-column">
                            <h3>Г-образная форма</h3>
                            <div id="tab31" class="tab__box3">
                                <img src="<?php the_field('картинка_сторона_а_гф_2', 134);?>" >
                            </div>
                            <div id="tab32" class="tab__box3">
                                <img src="<?php the_field('картинка_сторона_в_гф_2', 134);?>">
                            </div>
                            <div id="tab33" class="tab__box3">
                                <img src="<?php the_field('картинка_сторона_с_гф_2', 134);?>">
                            </div>
                            <div id="tab34" class="tab__box3">
                                <img src="<?php the_field('картинка_сторона_д_гф_2', 134);?>">
                            </div>
                        </div>
                        <div class="div">
                            <div class="fence-top-four-width terras-top-five-width fence-top-four-tabs3">
                                <label data-tab="#tab31" class="for-tab">
                                    <span>A =</span> <input type="number" class="fence-a terras-a btn-five js-btn-five3" data-input="31"> <span>cm</span>
                                </label>
                                <label data-tab="#tab32" class="for-tab">
                                    <span>B =</span> <input type="number" class="fence-b terras-b btn-five js-btn-five3" data-input="32"> <span>cm</span>
                                </label>
                                <label data-tab="#tab33" class="for-tab">
                                    <span>C =</span> <input type="number" class="fence-b terras-c btn-five js-btn-five3"  data-input="33"> <span>cm</span>
                                </label>
                                <label data-tab="#tab34" class="for-tab">
                                    <span>D =</span> <input type="number" class="fence-b terras-d btn-five js-btn-five3" data-input="34"> <span>cm</span>
                                </label>
                                <label>
                                    <span>S =</span> <input type="number" class="fence-b terras-s btn-sum-five js-btn-sum-five3"> <span>M <sup>2</sup></span>
                                </label>
                                <button class="terras-top-five-width-button" type="button" data-num="5">Далее</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="terras-top1-column">
                            <h3>Прямоугольник</h3>
                            <div id="tab41" class="tab__box4">
                                <img src="<?php the_field('сторона_а_пу', 134);?>">
                            </div>
                            <div id="tab42" class="tab__box4">
                                <img src="<?php the_field('сторона_б_пу', 134);?>">
                            </div>
                        </div>
                        <div class="div">
                            <div class="fence-top-four-width terras-top-five-width terras-top-five-width_six fence-top-four-tabs4">
                                <label data-tab="#tab41" class="for-tab">
                                    <span>A =</span> <input type="number" class="fence-a terras-a btn-five js-btn-five4" data-input="41"> <span>cm</span>
                                </label>
                                <label data-tab="#tab42" class="for-tab">
                                    <span>B =</span> <input type="number" class="fence-b terras-b btn-five js-btn-five4" data-input="42"> <span>cm</span>
                                </label>
                                <label>
                                    <span>S =</span> <input type="number" class="fence-b terras-s btn-sum-five js-btn-sum-five4" > <span>M <sup>2</sup></span>
                                </label>
                                <button class="terras-top-five-width-button" type="button" data-num="5">Далее</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
            <!-- end slider-up -->

            <!-- Лестница -->
            <div class="swiper-container calculate-gallery-top terras-slider-up-six" data-item="6" data-title="06. Выберите модель, цвет и укажите необходимые параметры лестницы">
                <div class="swiper-wrapper">

                    <?php if( have_rows('галерея_лестница', 134) ): ?>
                        <?php while( have_rows('галерея_лестница', 134) ): the_row();
                            $model_les = get_sub_field('модель_лестница');
                            $model_les_img = get_sub_field('картинка_модели_лестницы');
                        ?>
                            <?php if($model_les_img): ?>
                                <div class="swiper-slide">
                                    <div class="terras-top1-question">
                                        <div class="terras-top1-question_one">
                                            <h3>Требуется ли установка лестницы?</h3>
                                            <ul>
                                                <li><button class="terras-btn-no" type="button">Нет</button></li>
                                                <li><button class="terras-btn-yes" type="button">Да</button></li>
                                            </ul>
                                        </div>
                                        <div class="terras-top1-question_two">
                                            <h3><?php echo $model_les ?></h3>
                                            <ul>
                                                <li>
                                                    <div class="terras-steps">
                                                        <span class="minus">-</span>
                                                        <span class="num">5</span>
                                                        <span class="plus">+</span>
                                                    </div>
                                                    <h4>Кол-во ступеней</h4>
                                                </li>
                                                <li>
                                                    <div class="terras-width">
                                                        <span class="minus">-</span>
                                                        <span class="num">3,5</span>
                                                        <span class="plus">+</span>
                                                    </div>
                                                    <h4>Длина (в метрах)</h4>
                                                </li>
                                                <li>
                                                    <div class="unit-color-block">
                                                        <div class="unit-color"></div>

                                                        <div class="unit-color-down">
                                                            <?php if( have_rows('добавить_цвет_модели', 134) ): ?>
                                                                <?php $count_list = 1; ?>
                                                                <?php while( have_rows('добавить_цвет_модели', 134) ): the_row();
                                                                   $color_icon_les = get_sub_field('название_цвета_модели_л');
                                                                    $color_img_les = get_sub_field('картинка_цвета_л');
                                                                    $count_list++;
                                                                ?>
                                                                    <?php if($color_icon_les): ?>
                                                                        <div class="unit-color-item <?php if($count_list == 2){ echo 'unit-color-item_active'; }?>">
                                                                            <span class="unit-color__img"><img src="<?php echo $color_img_les ?>" alt="цвет орех"></span>
                                                                            <span class="unit-color__text"><?php echo $color_icon_les ?></span>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                        </div>
                                                        <span class="unit-title">Цвет</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="terras-top1-column">
                                        <img src="<?php echo $model_les_img ?>">
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
        </div>
        <!-- end terras-slider-first-up -->
        <button class="calculate-up-button" type="button">Далее</button>
    </div>
    <!-- end calculate-up -->
    <div class="calculate-tabs">
        <ul>
            <li class="calculate-tabs_active" data-item="1"><a href="#">01 / <span>Модель</span></a></li>
            <li data-item="2"><a href="#">02 / <span>Цвет</span></a></li>
            <li data-item="3"><a href="#">03 / <span>Текстура</span></a></li>
            <li data-item="4"><a href="#">04 / <span>Способ укладки</span></a></li>
            <li data-item="5"><a href="#">05 / <span>Форма и размер террасы</span></a></li>
            <li data-item="6"><a href="#">06 / <span>Ступени</span></a></li>
        </ul>
    </div>
    <!-- end terras-calculate__tabs -->

    <!-- terras-calculate__down -->

    <div class="terras-calculate__down">

        <!-- Модель -->
        <div class="swiper-container calculate-gallery-thumbs terras-gallery-thumbs-one" data-item="1">
            <div class="swiper-wrapper">
                <?php if( have_rows('галерея_моделей_кт', 134) ): ?>
                    <?php while( have_rows('галерея_моделей_кт', 134) ): the_row();
                        $modelName_kt = get_sub_field('название_модели_кт');
                        $smallImage_kt = get_sub_field('миниатюра_модели_кт');
                    ?>
                        <?php if($smallImage_kt): ?>
                            <div class="swiper-slide">
                                <div class="terras-top1-column">
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

        <!-- Цвет -->
        <!-- старый вариант -->
        <!-- <div class="swiper-container calculate-gallery-thumbs terras-gallery-thumbs-two" data-item="2">
            <div class="swiper-wrapper">
                <?php //if( have_rows('галерея_цветов', 134) ): ?>
                    <?php //while( have_rows('галерея_цветов', 134) ): the_row();
                        //$colorName_kt = get_sub_field('название_цвета_кт');
                        //$smallImageColor_kt = get_sub_field('миниаютра_цвета_кт');
                    ?>
                        <?php //if($smallImageColor_kt): ?>
                            <div class="swiper-slide">
                                <div class="terras-top1-column">
                                    <img src="<?php//echo $smallImageColor_kt ?>">
                                </div>
                                <span><?php //echo $colorName_kt ?></span>
                            </div>
                        <?php //endif; ?>
                    <?php //endwhile; ?>
                <?php //endif; ?>
            </div>
        </div> -->

        <div class="calculate-gallery-thumbs terras-gallery-thumbs-two" data-item="2">
            <?php if( have_rows('галерея_моделей_кт', 134) ): ?>

                <?php $coumt_model_color_thumb = 0; ?>

                <?php while( have_rows('галерея_моделей_кт', 134) ): the_row();
                    $coumt_model_color_thumb++;
                ?>
                    <div class="swiper-container terras-gallery-thumbs-two2 all-models model-<?php echo $coumt_model_color_thumb ?>">
                        <div class="swiper-wrapper">
                            <?php if( have_rows('цвета_модели_кт', 134) ): ?>
                                <?php while( have_rows('цвета_модели_кт', 134) ): the_row();
                                    $model_color_name_kt = get_sub_field('выбор_названия_цвета_кт');
                                    $model_color_thumb_kt = get_sub_field('миниатюра_выбора_цвета_кт');
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

        <!-- Текстура -->

        <!-- Старый вариант -->
        <!-- <div class="swiper-container calculate-gallery-thumbs terras-gallery-thumbs-three" data-item="3">
            <div class="swiper-wrapper">
                <?php //if( have_rows('галерея_текстур_кт', 134) ): ?>
                    <?php //while( have_rows('галерея_текстур_кт', 134) ): the_row();
                        //$textureName_kt = get_sub_field('название_текстуры_кт');
                        //$smallImageTexture_kt = get_sub_field('миниатюра_текстуры_кт');
                    ?>
                        <?php //if($smallImageTexture_kt): ?>
                            <div class="swiper-slide">
                                <div class="gallery-thumbs1-column">
                                    <img src="<?php //echo $smallImageTexture_kt ?>">
                                </div>
                                <span><?php //echo $textureName_kt ?></span>
                            </div>
                        <?php //endif; ?>
                    <?php //endwhile; ?>
                <?php //endif; ?>
            </div>
        </div> -->

        <div class="calculate-gallery-thumbs terras-gallery-thumbs-three" data-item="3">
            <?php if( have_rows('галерея_моделей_кт', 134) ): ?>

                <?php $coumt_model_texture_thumb = 0; ?>

                <?php while( have_rows('галерея_моделей_кт', 134) ): the_row();
                    $coumt_model_texture_thumb++;
                ?>
                    <div class="swiper-container terras-gallery-thumbs-three2 all-models model-<?php echo $coumt_model_texture_thumb ?>">
                        <div class="swiper-wrapper">
                            <?php if( have_rows('текстуры_модели_кт', 134) ): ?>
                                <?php while( have_rows('текстуры_модели_кт', 134) ): the_row();
                                    $model_texture_name_kt = get_sub_field('выбор_названия_текстуры_кт');
                                    $model_texture_thumb_kt = get_sub_field('выбор_миниатюры_текстуры_кт');
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

        <!-- Способ укладки -->
        <div class="swiper-container calculate-gallery-thumbs terras-gallery-thumbs-four2" data-item="4">
            <div class="swiper-wrapper">
                <?php if( have_rows('галерея_способов_укладки_кт', 134) ): ?>
                    <?php while( have_rows('галерея_способов_укладки_кт', 134) ): the_row();
                        $uklName_kt = get_sub_field('название_способа_укладки_кт');
                        $smallImageUkl_kt = get_sub_field('миниатюра_укладки_кт');
                    ?>
                        <?php if($smallImageUkl_kt): ?>
                            <div class="swiper-slide">
                                <div class="terras-top1-column">
                                    <img src="<?php echo $smallImageUkl_kt ?>">
                                </div>
                                <span><?php echo $uklName_kt ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="swiper-container calculate-gallery-thumbs terras-gallery-thumbs-five" data-item="5">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gallery-thumbs1-column">
                        <img src="<?php the_field('миниатюра_для_слайдера_фт', 134);?>">
                    </div>
                    <span>П-образная</span>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-thumbs1-column">
                        <img src="<?php the_field('миниатюра_для_слайдера_гф', 134);?>">
                    </div>
                    <span>Г-образная</span>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-thumbs1-column">
                        <img src="<?php the_field('миниаютра_для_слайдера_гф_2', 134);?>">
                    </div>
                    <span>Г-образная</span>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-thumbs1-column">
                        <img src="<?php the_field('миниатюра_для_слайдера_пу', 134);?>">
                    </div>
                    <span>Прямоугольник</span>
                </div>
            </div>
        </div>

        <!-- Ступени -->
        <div class="swiper-container calculate-gallery-thumbs terras-gallery-thumbs-six" data-item="6">
            <div class="swiper-wrapper">
                <?php if( have_rows('галерея_лестница', 134) ): ?>
                    <?php while( have_rows('галерея_лестница', 134) ): the_row();
                        $min_img = get_sub_field('картинка_модели_лестницы');
                        $name_min_img = get_sub_field('модель_лестница');
                    ?>
                        <?php if($min_img): ?>
                            <div class="swiper-slide">
                                <div class="gallery-thumbs1-column">
                                    <img src="<?php echo $min_img ?>">
                                </div>
                                <span><?php echo $name_min_img ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!--end slider down -->
</div>


