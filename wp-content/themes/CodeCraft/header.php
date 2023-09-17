<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="ontainer">
    <div class="logo">
        <?php
            $site_title = get_bloginfo('name');
            $words = explode(' ', $site_title); // Split the site title into words

            if (count($words) > 0) {
                $first_word = $words[0]; // Get the first word
                $remaining_words = implode(' ', array_slice($words, 1)); // Get the remaining words

                // Output the first word with a specific CSS class for styling
                echo '<a href="' . esc_url(home_url('/')) . '"><span class="first-word">' . esc_html($first_word) . '</span></a>';

                // Output the remaining words
                echo esc_html($remaining_words);
            } else {
                // Output the site title as is
                echo esc_html($site_title);
            }
        ?>
    </div>

    <nav>
    <?php
        wp_nav_menu(array(
            'theme_location' => 'primary-menu', // Replace with the desired menu location
            'menu_class' => 'menu',
        ));
    ?>

    </nav>
    <div class="buttons">
        <div class="nav-button">
            Let's Talk
        </div>
        <input type="checkbox" id="darkModeToggle">
        <label for="darkModeToggle"></label>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
</header>
<?php wp_footer(); ?>
