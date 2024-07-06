<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WZH8GRQ9');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="bhagwat geeta, bhagwad geeta, shrimad bhagwad geeta, shri mat bhagwat geeta, shri mad bhagwat geeta, bhagvad gita, bhagwad gita, shrimat bhagwad gita">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZH8GRQ9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
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
                <div class="hamburger" id="hamburger">
                    &#9776;
                </div>
                <div class="nav-list-container">
                    <?php wp_nav_menu(array('theme_location' => 'geeta_main_menu', 'depth' => 2)); ?>
                </div>
                <div id="close" class="close">&times;</div>
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