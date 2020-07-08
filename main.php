<?php 
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>
    <div class="main-banner" id="top_main">
        <div class="banner-slider swiper-container">
            <div class="swiper-wrapper">
                <?php 
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'post_type'   => 'banner_slider',
                        'suppress_filters' => true,
                    ) );

                    foreach( $posts as $post ) { 
                        setup_postdata($post);
                        get_template_part('template-parts/banner-post', get_post_format()); 
                    }
                    
                    wp_reset_postdata(); 
                ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>

    <div class="content card-top">
        <p class="content-title-mob">Карточка товара</p>

        <!-- Блоки мобильной версии карточки товара -->
        <?php get_template_part('template-parts/product-card-mobile-top'); ?> 
        
        <!-- Сайдбар карточки товара -->
        <div class="content__inner content__inner_product" id="product_block">
            <div class="sidebar sidebar-product">
                <div class="sidebar__title"> Карточка товара</div>
                <ul class="sidebar-list sidebar-list__top" id="productList">
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'order'       => 'ASC',
                            'post_type'   => 'product',
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                        ?>
                            <li><a href="#" data-id="<?php the_ID();?>"><?php the_title();?></a></li>
                        <?php 
                        }
                        wp_reset_postdata();
                    ?>
                </ul>
            </div>

            <!-- Карточка товара -->
            <div class="product-card-wrap" id="productCardWrap">
                <?php 
                    $posts = get_posts( array(
                        'numberposts' => 1,
                        'order' => 'ASC',
                        'post_type'   => 'product',
                        'suppress_filters' => true,
                    ) );

                    foreach( $posts as $post ) { 
                        setup_postdata($post);
                        get_template_part('template-parts/product-post'); 
                    }
                    
                    wp_reset_postdata(); 
                ?>
            </div>
        </div>
    </div>
    <div class="content catalog-top">
        <p class="content-title-mob">Каталог</p>
        <div class="product-list-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a class="product-link" href="#">Все</a></div>
                <div class="swiper-slide"><a class="product-link is-active" href="#">Террасная доска</a></div>
                <div class="swiper-slide"><a class="product-link" href="#">UnoDeck Mogano</a></div>
                <div class="swiper-slide"><a class="product-link" href="#">Ступени</a></div>
                <div class="swiper-slide"><a class="product-link" href="#">Заборная доска</a></div>
                <div class="swiper-slide"><a class="product-link" href="#">Заборы</a></div>
                <div class="swiper-slide"><a class="product-link" href="#">Ограждения</a></div>
                <div class="swiper-slide"><a class="product-link" href="#">Комплектующие</a></div>
            </div>
        </div>
        <div class="catalog-select catalog-select_mob">
            <select class="select-cat">
                <option> INDIWOOD</option>
                <option> INDIWOOD</option>
                <option> INDIWOOD</option>
            </select>
        </div>
        <div class="content__inner content__catalog" id="content__catalog">
            <div class="sidebar sidebar_catalog">
                <div class="sidebar__title"> Каталог</div>
                <ul class="sidebar-list" id="catalogList">
                    <!-- Вывод категорий товаров -->
                    <?php  
                        $terms = get_terms( 'categories' );
                        $categories = get_categories( [
                            'taxonomy'     => 'categories',
                            'type'         => 'product',
                            'child_of'     => 0,
                            'parent'       => '',
                            'orderby'      => 'name',
                            'order'        => 'ASC',
                            'hide_empty'   => 1,
                            'hierarchical' => 1,
                            'exclude'      => '',
                            'include'      => '',
                            'number'       => 0,
                            'pad_counts'   => false,
                        ] );
                        // var_dump($categories);
                        // var_dump($terms);

                        $terms = get_terms( 'categories' );
                            if( $terms && !is_wp_error($terms) ){
                                foreach( $terms as $term ){
                                echo '<li><a data-attr="' . $term->name  . '">'. $term->name .'</a></li>';
                            }
                        }

                    ?>
                    <!-- <li><a class="is-active" href="#">Все</a></li>
                    <li> <a href="#">Террасная доска</a></li>
                    <li><a href="#">UnoDeck Mogano</a></li>
                    <li><a href="#">Ступени</a></li>
                    <li><a href="#">Заборная доска</a></li>
                    <li><a href="#">Заборы</a></li>
                    <li><a href="#">Ограждения</a></li>
                    <li><a href="#">Комплектующие</a></li> -->

                    
                </ul>
            </div>
            <div class="catalog-list-wrap">
                <div class="catalog-list">
                    <ul id="catalogProduct">
                        <?php 
                            $posts = get_posts( array(
                                'numberposts' => -1,
                                'order' => 'ASC',
                                'post_type'   => 'product',
                                'suppress_filters' => true,
                            ) );

                            foreach( $posts as $post ) { 
                                setup_postdata($post);
                                get_template_part('template-parts/catalog-list'); 
                            }
                            
                            wp_reset_postdata(); 
                        ?>
                    </ul>
                    <ul class="catalog-list__more">
                        <li class="catalog-list__item"></li>
                        <li class="catalog-list__item">
                            <button class="btn-more" type="button">Смотреть еще</button>
                        </li>
                        <li class="catalog-list__item"></li>
                    </ul>
                </div>
           
            </div>
        </div>
    </div>
    <div class="application-block" id="application_block">
        <p class="main-title application-block__title"> <b>Применение </b>indiwood</p>
        <div class="block-article block-article_compact article">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        <div class="btn-block btn-block_application">
            <button class="btn btn-green application-block__btn call-btn" type="button">Оставить заявку</button>
        </div>
        <ul class="photo-list photo-list_aplication">
            <li class="photo-list__item">
                <div class="photo-list__img"><img src="img/application-1.jpg"></div>
                <ul class="photo-list__article">
                    <li>01</li>
                    <li>Жилые дома и дачи</li>
                    <li>
                        <button class="btn photo-list__btn" type="button">Подробнее</button>
                    </li>
                </ul>
            </li>
            <li class="photo-list__item">
                <div class="photo-list__img"><img src="img/application-2.jpg"></div>
                <ul class="photo-list__article">
                    <li>02</li>
                    <li>Рестораны и кафе</li>
                    <li>
                        <button class="btn photo-list__btn" type="button">Подробнее</button>
                    </li>
                </ul>
            </li>
            <li class="photo-list__item">
                <div class="photo-list__img"><img src="img/application-3.jpg"></div>
                <ul class="photo-list__article">
                    <li>03</li>
                    <li>Эксплуатиремая кровля</li>
                    <li>
                        <button class="btn photo-list__btn" type="button">Подробнее</button>
                    </li>
                </ul>
            </li>
            <li class="photo-list__item">
                <div class="photo-list__img"><img src="img/application-4.jpg"></div>
                <ul class="photo-list__article">
                    <li>04</li>
                    <li>Парки и зоны отдыха</li>
                    <li>
                        <button class="btn photo-list__btn" type="button">Подробнее</button>
                    </li>
                </ul>
            </li>
            <li class="photo-list__item">
                <div class="photo-list__img"><img src="img/application-5.jpg"></div>
                <ul class="photo-list__article">
                    <li>05</li>
                    <li>Пирсы и причалы</li>
                    <li>
                        <button class="btn photo-list__btn" type="button">Подробнее</button>
                    </li>
                </ul>
            </li>
            <li class="photo-list__item">
                <div class="photo-list__img"><img src="img/application-6.jpg"></div>
                <ul class="photo-list__article">
                    <li>06</li>
                    <li>Территория вокруг бассейна</li>
                    <li>
                        <button class="btn photo-list__btn" type="button">Подробнее</button>
                    </li>
                </ul>
            </li>
        </ul>
        <p class="calc-title"> <b>Калькулятор террас и заборов</b></p>
        <p class="main-title application-block__title">indiwood</p>
        <div class="block-article block-article_compact article">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        <div class="btn-block btn-block_calc">
            <button class="btn btn-green application-block__btn" type="button">Рассчитать стоимость                </button>
        </div>
    </div>

    <section class="calculate" id="calculate">
        <div class="calculate__block">
            <h1 class="calculate__title calculate__title_other">Калькулятор</h1>
            <div class="calculate__select">
                <select>
                    <option value="Террас">Террас</option>
                    <option value="Заборов">Заборов</option>
                </select>
            </div>
        </div>

        <!-- TERRAS-CALCULATE -->
        <?php get_template_part('template-parts/terras-calc'); ?>

        <!-- FENCE CALCULATE -->
        <?php get_template_part('template-parts/fence-calc'); ?>
       
    </section>
    <!-- FORM FOR FENCE -->
    <div class="fence-form">
        <div class="fence-form__inner">
            <div class="fence-form__buttons">
                <a class="fence-form__back" href="#">
                    <img src="img/calculate-prev.png" alt="back">
                    <span>Назад</span>
                </a>
                <a class="fence-form__again" href="#">Начать заново</a>
            </div>
            <div class="fence-form-columns">
                <div class="fence-form-column__first">
                    <p class="fence-form__img"><span><img src="img/slider1-big1.png" alt="Результат"></span></p>
                    <div class="fence-form-square__calc">
                        <p class="fence-form__square">S = <span>125</span>М<sup>2</sup></p>
                        <div class="fence-form__name">
                            <h2>Unodeck vintage</h2>
                            <p><span>Nut</span> / <span>Velvet</span></p>
                        </div>
                    </div>
                    <p class="fence-form__options">Пожалуйста добавьте дополнительные опции, если они требуются</p>
                    <ul class="fence-form__checkbox">
                        <li>
                            <input type="checkbox" id="one"><label for="one" data-sum="500">Замер</label>
                        </li>
                        <li>
                            <input type="checkbox" id="two"><label for="two" data-sum="1000">Доставка</label>
                        </li>
                        <li>
                            <input type="checkbox" id="three"><label for="three" data-sum="1500">Монтаж</label>
                        </li>
                    </ul>
                    <p class="fence-form__sum-origin"><span>250 000</span> рублей</p>
                    <div class="fence-form__bottom">
                        <button type="button">Отправить расчет на почту</button>
                        <a><img src="img/arrow-down_white.png" alt="slidebottom"></a>
                    </div>
                </div>
                <div class="fence-form-column__second">
                    <form method="post" class="fence-form__form">
                        <div class="fence-form-line">
                            <div class="fence-form__subname">
                                <h3>Unodeck vintage</h3>
                                <p><span>Nut</span> / <span>Velvet</span></p>
                            </div>
                            <p class="fence-form__sum"><span>250 000</span> рублей</p>
                        </div>
                        <p class="fence-form-description">Оставьте свои данные или перезвоните нам 8 (800) 649 84 47 и наши специалисты проконсультируют вас о всех тонкостях строительства террас, расскажут о материалах, особенностях монтажа и рассчитают стоимость.</p>
                        <div class="fence-form-input_box">
                            <input type="text" placeholder="Имя" class="fence-form__input js-name" required>
                            <input type="text" placeholder="Телефон" class="fence-form__input js-phone" required>
                            <input type="email" placeholder="Email" class="fence-form__input js-email" required>
                        </div>
                        <textarea name="" placeholder="Ваш комментарий или вопрос" class="fence-form__textarea"></textarea>
                        <div class="fence-form__files-block">
                            <input type="file" placeholder="Прикрепить свои файлы" multiple accept="image/*,image/jpeg" class="fence-form__files" id="files">
                            <label for="files">ПРИКРЕПИТЬ СВОЙ ФАЙЛЫ</label>
                        </div>
                        <div class="fence-form__send">
                            <a href="#">Скачать расчет в pdf</a>
                            <button type="submit">Отправить расчет на почту</button>
                        </div>
                        <p class="fence-form__attansion">Нажимая на кнопку "Отправить", вы принимаете условия пользовательского соглашения и даете согласие на обработку персональных данных</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="service-block line-bottom" id="service_block">
        <p class="main-title service-block__title"> <b>Услуги </b>indiwood</p>
        <ul class="photo-list photo-list_service">
            <li class="photo-list__item">
                <div class="photo-list__content article">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </li>
            <li class="photo-list__item">
                <div class="photo-list__img"><img src="img/service-1.jpg"></div>
                <ul class="photo-list__article">
                    <li>01</li>
                    <li>выезд на объект</li>
                    <li>
                        <button class="btn photo-list__btn" type="button">Подробнее</button>
                    </li>
                </ul>
            </li>
            <li class="photo-list__item">
                <div class="photo-list__img"><img src="img/service-2.jpg"></div>
                <ul class="photo-list__article">
                    <li>02</li>
                    <li>Замер</li>
                    <li>
                        <button class="btn photo-list__btn" type="button">Подробнее</button>
                    </li>
                </ul>
            </li>
            <li class="photo-list__item">
                <div class="photo-list__img"><img src="img/service-3.jpg"></div>
                <ul class="photo-list__article">
                    <li>03</li>
                    <li>Геодезия</li>
                    <li>
                        <button class="btn photo-list__btn" type="button">Подробнее</button>
                    </li>
                </ul>
            </li>
            <li class="photo-list__item">
                <div class="photo-list__img"><img src="img/service-4.jpg"></div>
                <ul class="photo-list__article">
                    <li>04</li>
                    <li>Проектирование</li>
                    <li>
                        <button class="btn photo-list__btn" type="button">Подробнее</button>
                    </li>
                </ul>
            </li>
            <li class="photo-list__item">
                <div class="photo-list__img"><img src="img/service-5.jpg"></div>
                <ul class="photo-list__article">
                    <li>05</li>
                    <li>Визуализация</li>
                    <li>
                        <button class="btn photo-list__btn" type="button">Подробнее</button>
                    </li>
                </ul>
            </li>
            <li class="photo-list__item">
                <div class="photo-list__img"><img src="img/service-6.jpg"></div>
                <ul class="photo-list__article">
                    <li>06</li>
                    <li>Все материалы</li>
                    <li>
                        <button class="btn photo-list__btn" type="button">Подробнее</button>
                    </li>
                </ul>
            </li>
            <li class="photo-list__item">
                <div class="photo-list__img"><img src="img/service-7.jpg"></div>
                <ul class="photo-list__article">
                    <li>07</li>
                    <li>Доставка</li>
                    <li>
                        <button class="btn photo-list__btn" type="button">Подробнее</button>
                    </li>
                </ul>
            </li>
            <li class="photo-list__item">
                <div class="photo-list__img"><img src="img/service-8.jpg"></div>
                <ul class="photo-list__article">
                    <li>08</li>
                    <li>Монтаж</li>
                    <li>
                        <button class="btn photo-list__btn" type="button">Подробнее</button>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="gallery-block line-bottom" id="gallery_block">
        <p class="main-title gallery-block__title"> <b>Галерея </b>indiwood</p>
        <div class="gallery-indiwood swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gallery-indiwood__img"><img src="img/ig-1.jpg"></div>
                    <ul class="gallery-indiwood__cont">
                        <li>
                            <p class="gallery-indiwood__title">Royal beach</p>
                            <p class="gallery-indiwood__sub-title">Yacht club</p>
                        </li>
                        <li>
                            <p class="gallery-indiwood__article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </li>
                    </ul>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-indiwood__img"><img src="img/ig-2.jpg"></div>
                    <ul class="gallery-indiwood__cont">
                        <li>
                            <p class="gallery-indiwood__title">Royal beach</p>
                            <p class="gallery-indiwood__sub-title">Yacht club</p>
                        </li>
                        <li>
                            <p class="gallery-indiwood__article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </li>
                    </ul>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-indiwood__img"><img src="img/ig-1.jpg"></div>
                    <ul class="gallery-indiwood__cont">
                        <li>
                            <p class="gallery-indiwood__title">Royal beach</p>
                            <p class="gallery-indiwood__sub-title">Yacht club</p>
                        </li>
                        <li>
                            <p class="gallery-indiwood__article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="gallery-indiwood__nav">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <div class="about-block line-bottom" id="about">
        <p class="main-title about-block__title">о indiwood</p>
        <p class="about-block__sub-title">The smartest people work every day to provide the best service and to make our clients happy</p>
        <div class="about-block__inner">
            <div class="swiper-container tab-links tab-links_mob">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><a class="product-link is-active" href="#aboutComp">О компании</a></div>
                    <div class="swiper-slide"><a class="product-link" href="#howWork">Как мы работаем</a></div>
                    <div class="swiper-slide"><a class="product-link" href="#warranty">Гарантии</a></div>
                    <div class="swiper-slide"><a class="product-link" href="#production">Производство</a></div>
                    <div class="swiper-slide"><a class="product-link" href="#vacancies">Вакансии</a></div>
                </div>
            </div>
            <ul class="about-tabs tab-links tab-links_desc">
                <li><a href="#aboutComp">О компании</a></li>
                <li><a href="#howWork">Как мы работаем</a></li>
                <li><a href="#warranty">Гарантии</a></li>
                <li><a href="#production">Производство</a></li>
                <li><a href="#vacancies">Вакансии</a></li>
            </ul>
            <div class="tab-block" id="aboutComp">
                <div class="about-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <ul class="about-slider__block">
                                <li>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </li>
                                <li>
                                    <div class="about-slider__img"><img src="img/news.jpg"></div>
                                </li>
                                <li>
                                    <p class="about-slider__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul class="about-slider__block">
                                <li>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                                </li>
                                <li>
                                    <div class="about-slider__img"><img src="img/news.jpg"></div>
                                </li>
                                <li>
                                    <p class="about-slider__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul class="about-slider__block">
                                <li>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </li>
                                <li>
                                    <div class="about-slider__img"><img src="img/news.jpg"></div>
                                </li>
                                <li>
                                    <p class="about-slider__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="about-slider__nav">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <div class="tab-block" id="howWork">
                <div class="about-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <ul class="about-slider__block">
                                <li>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </li>
                                <li>
                                    <div class="about-slider__img"><img src="img/news.jpg"></div>
                                </li>
                                <li>
                                    <p class="about-slider__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul class="about-slider__block">
                                <li>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                                </li>
                                <li>
                                    <div class="about-slider__img"><img src="img/news.jpg"></div>
                                </li>
                                <li>
                                    <p class="about-slider__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul class="about-slider__block">
                                <li>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </li>
                                <li>
                                    <div class="about-slider__img"><img src="img/news.jpg"></div>
                                </li>
                                <li>
                                    <p class="about-slider__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="about-slider__nav">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <div class="tab-block" id="warranty">
                <div class="about-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <ul class="about-slider__block">
                                <li>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </li>
                                <li>
                                    <div class="about-slider__img"><img src="img/news.jpg"></div>
                                </li>
                                <li>
                                    <p class="about-slider__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul class="about-slider__block">
                                <li>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                                </li>
                                <li>
                                    <div class="about-slider__img"><img src="img/news.jpg"></div>
                                </li>
                                <li>
                                    <p class="about-slider__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul class="about-slider__block">
                                <li>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </li>
                                <li>
                                    <div class="about-slider__img"><img src="img/news.jpg"></div>
                                </li>
                                <li>
                                    <p class="about-slider__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="about-slider__nav">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <div class="tab-block" id="production">
                <div class="about-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <ul class="about-slider__block">
                                <li>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </li>
                                <li>
                                    <div class="about-slider__img"><img src="img/news.jpg"></div>
                                </li>
                                <li>
                                    <p class="about-slider__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul class="about-slider__block">
                                <li>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                                </li>
                                <li>
                                    <div class="about-slider__img"><img src="img/news.jpg"></div>
                                </li>
                                <li>
                                    <p class="about-slider__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul class="about-slider__block">
                                <li>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </li>
                                <li>
                                    <div class="about-slider__img"><img src="img/news.jpg"></div>
                                </li>
                                <li>
                                    <p class="about-slider__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="about-slider__nav">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <div class="tab-block" id="vacancies">
                <div class="about-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <ul class="about-slider__block">
                                <li>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </li>
                                <li>
                                    <div class="about-slider__img"><img src="img/news.jpg"></div>
                                </li>
                                <li>
                                    <p class="about-slider__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul class="about-slider__block">
                                <li>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                                </li>
                                <li>
                                    <div class="about-slider__img"><img src="img/news.jpg"></div>
                                </li>
                                <li>
                                    <p class="about-slider__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul class="about-slider__block">
                                <li>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </li>
                                <li>
                                    <div class="about-slider__img"><img src="img/news.jpg"></div>
                                </li>
                                <li>
                                    <p class="about-slider__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="about-slider__nav">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-block line-bottom">
        <p class="main-title team-block__title"><b>Команда </b>indiwood</p>
        <div class="team-block__inner">
            <div class="swiper-container team-gallery">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <ul class="team-gallery__list">
                            <li>
                                <div class="team-gallery__image team-gallery__image_big"><img src="img/team.jpg"></div>
                                <p class="team-gallery__name">James Read</p>
                                <p class="team-gallery__prof">Technical manager</p>
                            </li>
                            <li>
                                <p class="team-gallery__article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul class="team-gallery__list">
                            <li>
                                <div class="team-gallery__image team-gallery__image_big"><img src="img/team.jpg"></div>
                                <p class="team-gallery__name">James Read</p>
                                <p class="team-gallery__prof">Technical manager</p>
                            </li>
                            <li>
                                <p class="team-gallery__article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul class="team-gallery__list">
                            <li>
                                <div class="team-gallery__image team-gallery__image_big"><img src="img/team.jpg"></div>
                                <p class="team-gallery__name">James Read</p>
                                <p class="team-gallery__prof">Technical manager</p>
                            </li>
                            <li>
                                <p class="team-gallery__article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul class="team-gallery__list">
                            <li>
                                <div class="team-gallery__image team-gallery__image_big"><img src="img/team.jpg"></div>
                                <p class="team-gallery__name">James Read</p>
                                <p class="team-gallery__prof">Technical manager</p>
                            </li>
                            <li>
                                <p class="team-gallery__article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul class="team-gallery__list">
                            <li>
                                <div class="team-gallery__image team-gallery__image_big"><img src="img/team.jpg"></div>
                                <p class="team-gallery__name">James Read</p>
                                <p class="team-gallery__prof">Technical manager</p>
                            </li>
                            <li>
                                <p class="team-gallery__article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul class="team-gallery__list">
                            <li>
                                <div class="team-gallery__image team-gallery__image_big"><img src="img/team.jpg"></div>
                                <p class="team-gallery__name">James Read</p>
                                <p class="team-gallery__prof">Technical manager</p>
                            </li>
                            <li>
                                <p class="team-gallery__article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-button-next swiper-button-black"></div>
                <div class="swiper-button-prev swiper-button-black"></div>
            </div>
            <div class="swiper-container team-gallery-thumbs">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="team-gallery__image team-gallery__image_thumb"><img src="img/team.jpg"></div>
                        <p class="team-gallery__name team-gallery__name_thumb">James Read</p>
                        <p class="team-gallery__prof">Technical manager</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-gallery__image team-gallery__image_thumb"><img src="img/team.jpg"></div>
                        <p class="team-gallery__name team-gallery__name_thumb">James Read</p>
                        <p class="team-gallery__prof">Technical manager</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-gallery__image team-gallery__image_thumb"><img src="img/team.jpg"></div>
                        <p class="team-gallery__name team-gallery__name_thumb">James Read</p>
                        <p class="team-gallery__prof">Technical manager</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-gallery__image team-gallery__image_thumb"><img src="img/team.jpg"></div>
                        <p class="team-gallery__name team-gallery__name_thumb">James Read</p>
                        <p class="team-gallery__prof">Technical manager</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-gallery__image team-gallery__image_thumb"><img src="img/team.jpg"></div>
                        <p class="team-gallery__name team-gallery__name_thumb">James Read</p>
                        <p class="team-gallery__prof">Technical manager</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-gallery__image team-gallery__image_thumb"><img src="img/team.jpg"></div>
                        <p class="team-gallery__name team-gallery__name_thumb">James Read</p>
                        <p class="team-gallery__prof">Technical manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-block line-bottom">
        <p class="main-title news-block__title">
            indiwood <b>новости</b></p>
        <ul class="news-top">
            <li class="news-top__item">
                <p class="news-date">15th november 2020</p>
                <p class="news-title">Royal beach</p>
                <p class="news-sup-title">yacht club</p>
                <div class="news-img"><img src="img/news.jpg"></div>
                <ul class="news-preview-list">
                    <li>
                        <p class="news-article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </li>
                    <li>
                        <p class="news-article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </li>
                </ul>
                <div class="read-more"><a href="#">read more</a></div>
            </li>
            <li class="news-top__item">
                <div class="news-date">15th november 2020</div>
                <p class="news-title">Royal beach</p>
                <p class="news-sup-title">yacht club</p>
                <div class="news-img"><img src="img/news.jpg"></div>
                <ul class="news-preview-list">
                    <li>
                        <p class="news-article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </li>
                    <li>
                        <p class="news-article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </li>
                </ul>
                <div class="read-more"><a href="#">read more</a></div>
            </li>
        </ul>
        <ul class="news-bottom">
            <li class="news-bottom__item">
                <div class="news-date">15th november 2020</div>
                <p class="news-title">Royal beach</p>
                <p class="news-sup-title">yacht club</p>
                <div class="news-img"><img src="img/news.jpg"></div>
                <p class="news-article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <div class="read-more"><a href="#">read more</a></div>
            </li>
            <li class="news-bottom__item">
                <div class="news-date">15th november 2020</div>
                <p class="news-title">Royal beach</p>
                <p class="news-sup-title">yacht club</p>
                <div class="news-img"><img src="img/news.jpg"></div>
                <p class="news-article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <div class="read-more"><a href="#">read more</a></div>
            </li>
            <li class="news-bottom__item">
                <div class="news-date">15th november 2020</div>
                <p class="news-title">Royal beach</p>
                <p class="news-sup-title">yacht club</p>
                <div class="news-img"><img src="img/news.jpg"></div>
                <p class="news-article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <div class="read-more"><a href="#">read more</a></div>
            </li>
            <li class="news-bottom__item">
                <div class="news-date">15th november 2020</div>
                <p class="news-title">Royal beach</p>
                <p class="news-sup-title">yacht club</p>
                <div class="news-img"><img src="img/news.jpg"></div>
                <p class="news-article article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <div class="read-more"><a href="#">read more    </a></div>
            </li>
        </ul>
        <div class="news-block__btn-wrap">
            <button class="btn news-block__btn" type="button">Смотреть еще    </button>
        </div>
    </div>
    <div class="seo-block line-bottom">
        <p class="main-title seo-block__title">indiwood seo <b>текст</b></p>
        <ul class="seo-block__cont article">
            <li>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </li>
            <li>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </li>
        </ul>
        <div class="seo-block__btn-wrap">
            <button class="btn btn-black call-btn" type="button">оставить заявку    </button>
        </div>
    </div>
    <div class="contact-block" id="contact">
        <div class="contact-block__item contact-block__item_left">
            <p class="contact-block__title">Свяжитесь с нами</p>
            <div class="contact-info">
                <div class="contact-info__item">
                    <p class="contact-info__title">MOSCOW /</p>
                    <ul class="contact-info__list">
                        <li>SW1A 2AA, 10 Downing Street</li>
                        <li>5/2 9:00 - 18:00</li>
                    </ul>
                </div>
                <div class="contact-info__item">
                    <p class="contact-info__title">ТЕЛЕФОН /</p>
                    <ul class="contact-info__list">
                        <li> <a href="tel:74953200000">+7 (495) 320 0000</a></li>
                        <li> <a href="tel:79214653576">+7 (921) 465 3576</a></li>
                        <li> <a href="tel:79214653576">+7 (921) 465 3576</a></li>
                    </ul>
                </div>
                <div class="contact-info__item">
                    <p class="contact-info__title">EMAIL /</p>
                    <ul class="contact-info__list">
                        <li><a href="mailto:ask@Pr@indiwood.ru">Pr@indiwood.ru</a></li>
                        <li><a href="mailto:SALES@indiwood.ru">SALES@indiwood.ru</a></li>
                        <li><a href="mailto:SALES@indiwood.ru">SALES@indiwood.ru</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contact-block__item contact-block__item_right">
            <form class="form-recal">
                <div class="form-recal__inp">
                    <input class="inp" type="text" placeholder="Ваше имя">
                    <input class="inp" type="text" placeholder="Email">
                </div>
                <textarea class="textarea"></textarea>
                <div class="form-recal__btn-wrap">
                    <button class="btn form-recal__btn" type="submit">Отправить    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="map-block" id="mapmain"></div>
    

<?php get_footer(); ?>
