<?php 
add_filter('show_admin_bar', '__return_false');
add_action('wp_enqueue_scripts', 'style_theme');
add_action( 'wp_footer', 'scripts_theme' );
add_theme_support( 'post-formats', array( 'video' ) );
// Слайдер в шапке *
add_action( 'init', 'register_post_banner_main' );
// Товары *
add_action( 'init', 'register_post_product' );
// Калькулятор террас *
add_action( 'init', 'register_post_calc_terrace' );
// Новости *
add_action( 'init', 'register_post_news' );

function get_tel_href($tel) {
    return preg_replace("/[^+0-9]/", '', $tel);
}

if (wp_doing_ajax()) {
    add_action('wp_ajax_getproduct', 'indiwood_get_product');
    add_action('wp_ajax_nopriv_getproduct', 'indiwood_get_product');
}
function indiwood_get_product() {
	if (isset($_POST)) {
		global $post;
		$productId = $_POST['productId'] ? sanitize_text_field($_POST['productId']) : false;
		$post = get_post($productId);
		setup_postdata($post);
		get_template_part('template-parts/product-post');
		// exit;
		wp_die();
	} else {
 	   echo json_encode(['error' => true, 'message' => '1']);
		// exit;
		wp_die();
	}
}

if (wp_doing_ajax()) {
    add_action('wp_ajax_getproductList', 'indiwood_get_catalog');
    add_action('wp_ajax_nopriv_getproductList', 'indiwood_get_catalog');
}
function indiwood_get_catalog() {
	if (isset($_POST)) {
		global $post;
		$productId = $_POST['productId'] ? sanitize_text_field($_POST['productId']) : false;
		// $post = get_post($productId);
		// setup_postdata($post);
		$posts = get_posts( array(
			'numberposts' => -1,
			// 'category'    => 10,
			// 'taxonomy' => 'categories',
			'orderby'     => 'date',
			'order'       => 'DESC',
			'include'     => array(),
			'exclude'     => array(),
			'meta_key'    => '',
			'meta_value'  =>'',
			'post_type'   => 'product',
			'suppress_filters' => true, 
			'tax_query' => array(                              
				array(
					'taxonomy' => 'categories',
					'field'    => 'slug',
					'terms'    => $productId
				)
			),
		) );
		
		foreach( $posts as $post ){
			setup_postdata($post);
			get_template_part('template-parts/catalog-list'); 
	
		}
		
		wp_reset_postdata();
		// get_template_part('template-parts/catalog-list');
		// exit;
		wp_die();
	} else {
 	   echo json_encode(['error' => true, 'message' => '1']);
		// exit;
		wp_die();
	}
}

if (wp_doing_ajax()) {
    add_action('wp_ajax_getnews', 'indiwood_get_news');
    add_action('wp_ajax_nopriv_getnews', 'indiwood_get_news');
}
function indiwood_get_news() {
	if (isset($_POST)) {
		global $post;
		$news_page = $_POST['news_page'] ? sanitize_text_field($_POST['news_page']) : false;

		$posts_news = get_posts( array(
			// 'numberposts' => 4,
			'order' => 'ASC',
			'post_type'   => 'post_news',
			'suppress_filters' => true,
			'posts_per_page' => $news_page,
			'paged' => 1
		) );

		foreach( $posts_news as $post ) { 
			setup_postdata($post);
			get_template_part('template-parts/news-block'); 
		}

		
		wp_reset_postdata();
		// get_template_part('template-parts/catalog-list');
		// exit;
		wp_die();
	} else {
 	   echo json_encode(['error' => true, 'message' => '1']);
		// exit;
		wp_die();
	}
}

function register_post_news(){
	register_post_type( 'post_news', [
		'label'  => null,
		'labels' => [
			'name'               => 'Новости', // основное название для типа записи
			'singular_name'      => 'Новости', // название для одной записи этого типа
			'add_new'            => 'Добавить новость', // для добавления новой записи
			'add_new_item'       => 'Добавление новости', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование новости', // для редактирования типа записи
			'new_item'           => 'Новая новость', // текст новой записи
			'view_item'          => 'Смотреть новость', // для просмотра записи этого типа.
			'all_items' => 'Все новости',
			'search_items'       => 'Искать новость', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Новости', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-list-view',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => true,
		'supports'            => [ 'title','editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

function register_post_calc_terrace(){
	register_post_type( 'calc_terrace', [
		'label'  => null,
		'labels' => [
			'name'               => 'Калькулятор', // основное название для типа записи
			'singular_name'      => 'Калькулятор', // название для одной записи этого типа
			'add_new'            => 'Добавить калькулятор', // для добавления новой записи
			'add_new_item'       => 'Добавление калькулятор', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование калькулятора', // для редактирования типа записи
			'new_item'           => 'Новый калькулятор', // текст новой записи
			'view_item'          => 'Смотреть калькулятор', // для просмотра записи этого типа.
			'all_items' => 'Все калькуляторы',
			'search_items'       => 'Искать калькулятор', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Калькуляторы', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-settings',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

function register_post_banner_main(){
	register_post_type( 'banner_slider', [
		'label'  => null,
		'labels' => [
			'name'               => 'Слайдер баннеров', // основное название для типа записи
			'singular_name'      => 'Баннер', // название для одной записи этого типа
			'add_new'            => 'Добавить баннер', // для добавления новой записи
			'add_new_item'       => 'Добавление баннера', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование баннера', // для редактирования типа записи
			'new_item'           => 'Новый баннер', // текст новой записи
			'view_item'          => 'Смотреть баннер', // для просмотра записи этого типа.
			'all_items' => 'Все баннеры',
			'search_items'       => 'Искать баннер', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Баннеры на главной', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-image',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

function register_post_product(){
	register_post_type( 'product', [
		'label'  => null,
		'labels' => [
			'name'               => 'Товары', // основное название для типа записи
			'singular_name'      => 'Товар', // название для одной записи этого типа
			'add_new'            => 'Добавить товар', // для добавления новой записи
			'add_new_item'       => 'Добавление товара', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование товара', // для редактирования типа записи
			'new_item'           => 'Новый товар', // текст новой записи
			'view_item'          => 'Смотреть товар', // для просмотра записи этого типа.
			'all_items' => 'Все товары',
			'search_items'       => 'Искать товар', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено товаров в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Товары', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-products',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('categories'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

// хук для регистрации
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){

	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy( 'categories', [ 'product' ], [ 
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Категории',
			'singular_name'     => 'Категория',
			'search_items'      => 'Найти категорию',
			'all_items'         => 'Все категории',
			'view_item '        => 'Смотреть категории',
			'parent_item'       => 'Родительская категория',
			'parent_item_colon' => 'Родительская категория:',
			'edit_item'         => 'Редактировать категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить категорию',
			'new_item_name'     => 'Новое название категории',
			'menu_name'         => 'Категории',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => true,
		// 'rewrite'               => array( 'hierarchical' => true ),

		'rewrite'               => true,
	] );
}

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'Меню в шапке',
		'dropdown_menu' => 'Выпадающее меню'
	] );
} );

function style_theme(){
	wp_enqueue_style('swiperStyle', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css');
	wp_enqueue_style( 'selectricStyle', get_template_directory_uri() . '/assets/libs/selectric/selectric.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');
}

function scripts_theme() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('selectricScript', get_template_directory_uri() .'/assets/libs/selectric/jquery.selectric.min.js', array('jquery'));
	wp_enqueue_script('swiperScript', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js');
	wp_enqueue_script('yandexMap', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU');
	wp_enqueue_script('commonJs', get_template_directory_uri() .'/assets/js/common.js');
	wp_enqueue_script('myScripts', get_template_directory_uri() .'/assets/js/script.js');
}

