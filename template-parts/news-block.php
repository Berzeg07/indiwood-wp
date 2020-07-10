<!-- <li class="news-top__item"> -->
<div class="news-item">
    <p class="news-date">15th november 2020</p>
    <p class="news-title"><?php the_title();?></p>
    <p class="news-sup-title"><?php the_field('подзаголовок_новости');?></p>
    <div class="news-img"><img src="<?php the_field('превью_новости');?>"></div>
    <ul class="news-preview-list">
        <li>
            <div class="news-article article">
                <?php the_field('короткое_описание_слева');?>
            </div>
        </li>
        <li>
            <div class="news-article article">
                <?php the_field('короткое_описание_справа');?>
            </div>
        </li>
    </ul>
    <div class="read-more"><a href="<?php the_permalink(); ?>">read more</a></div>
</div> 