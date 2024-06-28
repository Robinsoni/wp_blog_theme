<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="bhagwat geeta, bhagwad geeta, shrimad bhagwad geeta, shri mat bhagwat geeta, shri mad bhagwat geeta">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class=" max-h-[18vh] shadow-xl   mb-1  ">
        <div class="site-container flex  justify-between pt-6 pb-5 items-center "> 
                    <div class="logo max-w-20  ">
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

                    <nav class="main-menu flex"> 
                        <?php wp_nav_menu(array('theme_location' => 'geeta_main_menu', 'depth' => 2)); ?>
                    </nav>
                    <!-- <div class="searchbox">
                        <?php /* get_search_form(); */ ?>
                    </div> -->
                <?php
                /*  if (!is_page('landing-page')) : ?>
                    <section class="menu-area">
                        <div class="container">
                        
                        </div>
                    </section>
                <?php endif; */ ?>
        </div>
    </header>
         