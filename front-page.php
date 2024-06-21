<?php get_header(); ?>
<section class="hero-section site-container">
    <div class="image-container flex w-full h-[500px]  hero bg-custom-image bg-no-repeat bg-cover bg-[center_center] rounded-md  transition-transform duration-75   shadow-xl"> 
    </div>
</section>
<section class="ad-section h-[160px] w-full ">
</section>
<section class="post-container site-container grid grid-cols-3 gap-3">


    
<?php
    // Get top-level categories
    $parent_categories = get_categories(array(
        'parent' => 0,
        'hide_empty' => false,
    ));

    $parent_categories_with_children = array();

    // Find parent categories that have child categories
    foreach ($parent_categories as $category) {
        $child_categories = get_categories(array(
            'parent' => $category->term_id,
            'hide_empty' => false,
        ));

        if (!empty($child_categories)) {
        }
        $parent_categories_with_children[] = $category->term_id;
    } 
    // Query posts from parent categories that have child categories
    $args = array(
        'category__in' => $parent_categories_with_children,
        'posts_per_page' => -1,
    );
     $query = new WP_Query($args); 
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();  
            get_template_part( 'parts/content', 'card' );
        endwhile; 
        wp_reset_postdata();
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>
</section>
<?php get_footer(); ?>