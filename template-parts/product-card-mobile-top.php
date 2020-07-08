<div class="product-list-slider swiper-container">
    <div class="swiper-wrapper" id="productList">
        <?php
            $posts = get_posts( array(
                'numberposts' => -1,
                'order'       => 'ASC',
                'post_type'   => 'product',
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);
            ?>
               <div class="swiper-slide"><a href="#" class="product-link" data-id="<?php the_ID();?>"><?php the_title();?></a></div>
            <?php 
            }
            wp_reset_postdata();
        ?>
    </div>
</div>
