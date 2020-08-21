<div class="application-block" id="application_block">
    <p class="main-title application-block__title"> <?php the_field('заголовок_применение', 21);?></p>
    <div class="block-article block-article_compact article">
        <?php the_field('текст_применение', 21);?>
    </div>
    <div class="btn-block btn-block_application">
        <button class="btn btn-green application-block__btn call-btn" type="button">Оставить заявку</button>
    </div>
    <ul class="photo-list photo-list_aplication">
        <?php if( have_rows('блок_с_применением', 21) ): ?>
            <?php $numApl = 0; ?>
            <?php while( have_rows('блок_с_применением', 21) ): the_row();
                $apl_name_pr = get_sub_field('где_применяется');
                $apl_img_pr = get_sub_field('фоновая_картинка_пр');
                $apl_article_pr = get_sub_field('подробная_информация_пр');
                $numApl++;
            ?>
                <?php if($apl_img_pr): ?>
                    <li class="photo-list__item">
                        <div class="photo-list__img"><img src="<?php echo $apl_img_pr ?>"></div>
                        <ul class="photo-list__article">
                            <li>0<?php echo $numApl ?></li>
                            <li><?php echo $apl_name_pr ?></li>
                            <li>
                                <!-- <button class="btn photo-list__btn apl-info-show" type="button">Подробнее</button> -->
                                <div class="application-info">
                                    <div class="close-button"></div>
                                    <?php echo  $apl_article_pr ?>
                                </div>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
    <p class="calc-title"> <b><?php the_field('заголовок_калькулятора', 21);?></b></p>
    <p class="main-title application-block__title"><?php the_field('текст_под_заголовком_кальк', 21);?></p>
    <div class="block-article block-article_compact article">
        <?php the_field('описание_калькулятора', 21);?>
    </div>
    <div class="btn-block btn-block_calc">
        <button class="btn btn-green application-block__btn calc-scroll" type="button">Рассчитать стоимость</button>
    </div>
</div>