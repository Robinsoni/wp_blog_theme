<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main site-container">
            <div class="container">
                <div class="error-404">
                    <div>
                        <h1 class=" text-center text-4xl   "><?php esc_html_e('Page not found', 'geeta'); ?></h1>
                        <p class="text-center text-2xl"><?php esc_html_e('Unfortunately, the page you tried to reach does not exist on this site.', 'geeta') ?></p>
                        <img class="w-[60%] h-50vh mt-8 ml-auto mr-auto" src="<?php echo get_template_directory_uri()."/assets/img/404.png";?> " alt="" >
                    </div>

                    <div class="error">
                        <?php
                        /* the_widget(
                            'WP_Widget_Recent_Posts',
                            array(
                                'title' => esc_html__('Latest Posts', 'geeta'),
                                'number'    => 3
                            )
                        ); */
                        get_sidebar();
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>