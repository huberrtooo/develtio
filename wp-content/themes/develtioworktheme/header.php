<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoje finanse - Ubezpieczenia</title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- MAIN MENU -->
    <nav class="navbar navbar-expand-xl justify-content-start">
        <div class="container align-items-center align-items-xl-end menu">
            <div>
                <a class="menu__logo" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt="Logo Twoje Finanse">
                </a>
            </div>
            <button class="navbar-toggler menu__button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="21.885" height="19.067" viewBox="0 0 21.885 19.067"><path d="M0,0V2.736H21.885V0ZM0,8.125V10.86H21.885V8.125Zm0,8.207v2.736H21.885V16.332Z" fill="#000"/></svg>            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container' => true,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto w-100 justify-content-between text-center align-items-center %2$s">%3$s</ul>',
                    'depth' => 1,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                )); ?>
            </div>
        </div>
    </nav>