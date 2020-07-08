<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>Главная</title>
    <script>
        var indiwoodApp = {ajax: '<?= admin_url('admin-ajax.php') ?>'}; 
    </script>
	<?php wp_head(); ?>
</head>

<body>
    <header class="header header-opacity header-main" id="header">
        <div class="header__inner">
            <div class="header__item">
                <div class="logo">
                    <div class="logo__name"><?php bloginfo('name'); ?></div>
                    <div class="logo__article">individual wood solutions</div>
                </div>
                <div class="burger"></div>
            </div>
            <div class="header__item">
                <nav class="main-nav" id="mainMenu">
                    <?php 
                        wp_nav_menu( [
                            'theme_location'  => 'header_menu',
                            'container'       => null, 
                            'menu_class'      => 'header-menu-list', 
                            'menu_id'         => 'header_nav',
                            'echo'            => true,
                        ] );
                    ?>
                </nav>
            </div>
            <div class="header__item">
                <ul class="phone-block">
                    <li><a class="phone" href="tel:7499787995">+7 (499) 787 99 5</a></li>
                    <li><span class="work-time">5/2 9:00 - 18:00</span></li>
                </ul>
                <button class="recall call-btn" type="button"><span>Заказать звонок</span></button>
            </div>
        </div>
    </header>
    <div class="dropdown-menu">
        <div class="dropdown-menu__item">
            <div class="dropdown-menu__title">menu</div>
                 <?php 
                    wp_nav_menu( [
                        'theme_location'  => 'dropdown_menu',
                        'container'       => null, 
                        'menu_class'      => 'dropdown-menu__list dropdown-menu__list_main', 
                        'menu_id'         => 'dropdown',
                        'echo'            => true,
                    ] );
                ?>
        </div>
    </div>