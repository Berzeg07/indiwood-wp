<div class="team-block line-bottom">
    <p class="main-title team-block__title"><?php the_field('заголовок_блока_команда', 21);?></p>
    <div class="team-block__inner">
        <div class="swiper-container team-gallery">
            <div class="swiper-wrapper">
                <?php if( have_rows('сотрудники_команда', 21) ): ?>
                    <?php while( have_rows('сотрудники_команда', 21) ): the_row();
                        $team_member_name = get_sub_field('имя_фамилия_команда');
                        $team_member_position = get_sub_field('должность_команда');
                        $team_member_about = get_sub_field('о_сотруднике_команда');
                        $team_member_img = get_sub_field('фотография_в_галерее_команда');
                    ?>
                        <?php if($team_member_img): ?>
                            <div class="swiper-slide">
                                <ul class="team-gallery__list">
                                    <li>
                                        <div class="team-gallery__image team-gallery__image_big"><img src="<?php echo $team_member_img ?>"></div>
                                        <p class="team-gallery__name"><?php echo  $team_member_name ?></p>
                                        <p class="team-gallery__prof"><?php echo  $team_member_position ?></p>
                                    </li>
                                    <li>
                                        <div class="team-gallery__article article"><?php echo $team_member_about ?></div>
                                    </li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <div class="swiper-button-next swiper-button-black"></div>
            <div class="swiper-button-prev swiper-button-black"></div>
        </div>
        <div class="swiper-container team-gallery-thumbs">
            <div class="swiper-wrapper">
                <?php if( have_rows('сотрудники_команда', 21) ): ?>
                    <?php while( have_rows('сотрудники_команда', 21) ): the_row();
                        $team_member_name = get_sub_field('имя_фамилия_команда');
                        $team_member_position = get_sub_field('должность_команда');
                        $team_member_img = get_sub_field('фотография_в_галерее_команда');
                    ?>
                        <?php if($team_member_img): ?>
                            <div class="swiper-slide">
                                <div class="team-gallery__image team-gallery__image_thumb"><img src="<?php echo $team_member_img ?>"></div>
                                <p class="team-gallery__name team-gallery__name_thumb"><?php echo  $team_member_name ?></p>
                                <p class="team-gallery__prof"><?php echo $team_member_position ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>