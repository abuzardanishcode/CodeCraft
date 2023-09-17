<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="Your Website Logo">
        </a>
    </div>
    <nav>
    <?php
        wp_nav_menu(array(
            'theme_location' => 'primary-menu', // Replace with the desired menu location
            'menu_class' => 'menu',
        ));
    ?>

    </nav>
</header>
