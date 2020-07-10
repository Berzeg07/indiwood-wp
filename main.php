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
    
    <!-- Application block -->
    <?php get_template_part('template-parts/application-block'); ?>
        
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

    <!-- Галерея indiwood -->
    <?php get_template_part('template-parts/gallery-block'); ?>
    
    <!-- О компании -->
    <?php get_template_part('template-parts/about-block'); ?>

    <!-- Команда indiwood -->
    <?php get_template_part('template-parts/team-block'); ?>

    <div class="news-block line-bottom">
        <p class="main-title news-block__title">
            indiwood <b>новости</b></p>

        <?php 
            $posts_news = get_posts( array(
                // 'numberposts' => 4,
                'order' => 'ASC',
                'post_type'   => 'post_news',
                'suppress_filters' => true,
                'posts_per_page' => '2',
                'paged' => 1
            ) );
        ?>        
        <!-- <ul class="news-top"> -->
        <ul class="news-listing">

            <?php    
                foreach( $posts_news as $post ) { 
                    setup_postdata($post);
                    get_template_part('template-parts/news-block'); 
                }
                wp_reset_postdata();

                $count = wp_count_posts('post_news');
                var_dump($count);
            ?>  
        </ul>
        <?php //echo //do_shortcode( '[ajax_load_more id="8957675556" loading_style="purple" container_type="ul" css_classes="news_block_list" post_type="post_news" posts_per_page="1" post_format="standard" scroll="false"]'); ?>


        <!-- <ul class="news-top"> -->


            <!-- <li class="news-top__item">
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
            </li> -->

            <!-- <li class="news-top__item">
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
            </li> -->
        <!-- </ul> -->
        <!-- <ul class="news-bottom">
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
        </ul> -->
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

    <!-- Contact & map -->
    <?php get_template_part('template-parts/contact-block'); ?>

<?php get_footer(); ?>
