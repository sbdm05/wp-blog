<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <h1>
            <a href="<?php echo get_home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </h1>
        <h3><?php bloginfo('description'); ?></h3>
        <nav>
            <ul>

            </ul>
            <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-header', 
                        'container'      => 'ul',
                     
                    ));
                ?>
        </nav>
    </header>