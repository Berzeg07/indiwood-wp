<?php 
    use Carbon_Fields\Container;
    use Carbon_Fields\Field;

    Container::make( 'post_meta', 'Произвольные поля' )->where( 'post_type', '=', 'page' )->where( 'post_id', '=', '21' )
    ->add_fields( array(
        Field::make( 'text', 'crb_text', 'Text Field' ),
    ) );
