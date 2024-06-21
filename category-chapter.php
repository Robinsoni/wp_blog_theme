<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="" />

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php the_archive_title('<h1 class="archive-title">', '</h1>'); ?>
            <?php the_archive_description('<div class="archive-description">', '</div>'); ?>

            <section class="post-container site-container grid grid-cols-3 gap-3">
                <?php
                $current_category = get_queried_object();
                $child_categories = get_categories(array(
                    'parent' => $current_category->term_id,
                    'hide_empty' => false,
                ));
                if (!empty($child_categories)) {
                    $child_category_ids = wp_list_pluck($child_categories, 'term_id');

                    $args = array(
                        'category__in' => $child_category_ids,
                        'posts_per_page' => -1, // Change this to limit the number of posts
                    );

                    $query = new WP_Query($args);
 
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            get_template_part('parts/content', 'card');
                        endwhile;
                        wp_reset_postdata();
                ?>
                        <div class="wpdevs-pagination">
                            <div class="pages new">
                                <?php previous_posts_link(esc_html__("<< Newer posts", 'wp-devs')); ?>
                            </div>
                            <div class="pages old">
                                <?php next_posts_link(esc_html__("Older posts >>", 'wp-devs')); ?>
                            </div>
                        </div>
                    <?php
                    else : ?>
                        <p><?php esc_html_e('Nothing yet to be displayed!', 'wp-devs') ?></p>
                <?php endif;
                } else {
                    echo '<p>This category has no child categories.</p>';
                }
                ?>

            </section>
            <?php get_sidebar(); ?>

        </main>
    </div>
</div>
<?php get_footer(); ?>