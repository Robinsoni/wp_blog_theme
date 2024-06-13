<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="site-container">

                    <div class="logo">
                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                        ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>"><span><?php bloginfo('name'); ?></span></a>
                        <?php
                        }
                        ?>
                    </div>

                    <nav class="main-menu">
                        <button class="check-button">
                            <div class="menu-icon">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                        </button>
                        <?php wp_nav_menu(array('theme_location' => 'geeta_main_menu', 'depth' => 2)); ?>
                    </nav>
                    <div class="searchbox">
                        <?php get_search_form(); ?>
                    </div>
                
                <?php
                /*  if (!is_page('landing-page')) : ?>
                    <section class="menu-area">
                        <div class="container">
                        
                        </div>
                    </section>
                <?php endif; */ ?>
            </header>
        </div>
         