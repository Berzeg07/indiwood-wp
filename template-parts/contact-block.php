<div class="contact-block" id="contact">
    <div class="contact-block__item contact-block__item_left">
        <p class="contact-block__title"><?php the_field('заголовок_в_блоке_контакты', 21);?></p>
        <div class="contact-info">
            <div class="contact-info__item">
                <p class="contact-info__title"><?php the_field('город_контакты', 21);?></p>
                <ul class="contact-info__list">
                    <li><?php the_field('адрес_контакты', 21);?></li>
                    <li><?php the_field('время_работы_контакты', 21);?></li>
                </ul>
            </div>
            <div class="contact-info__item">
                <p class="contact-info__title"><?php the_field('заголовок_для_списка_телефонных_номеров', 21);?></p>
                <ul class="contact-info__list">
                    <?php if( have_rows('номера_телефонов_контакты', 21) ): ?>
                        <?php while( have_rows('номера_телефонов_контакты', 21) ): the_row();
                            $contact_phone = get_sub_field('телефон_контакты');
                            $num_clear = get_tel_href($contact_phone);
                        ?>
                            <?php if($contact_phone): ?>
                                <li> <a href="tel:<?php echo $num_clear?>"><?php echo  $contact_phone ?></a></li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="contact-info__item">
                <p class="contact-info__title"><?php the_field('заголовок_для_списка_email', 21);?></p>
                <ul class="contact-info__list">
                    <?php if( have_rows('адреса_email', 21) ): ?>
                        <?php while( have_rows('адреса_email', 21) ): the_row();
                            $contact_email = get_sub_field('email_contact');
                        ?>
                            <?php if($contact_email): ?>
                                <li> <a href="mailto:<?php echo $contact_email?>"><?php echo  $contact_email ?></a></li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
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