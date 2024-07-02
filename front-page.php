<?php get_header(); ?>
<div class="overflow-hidden bg-tertiary-color text-white py-2  sticky  top-0 z-[1]  ">
    <div class="ticker-animation whitespace-nowrap">
        <span class="mx-4">इस वेबसाइट का सारा कंटेंट हिंदू धार्मिक ग्रंथों से तथा महापुरुषों और संतों की वाणी से लिया गया है, जिसमें गीता प्रेस से प्रकाशित होने वाले ग्रंथों की अहम भूमिका है। इस वेबसाइट पर उपलब्ध कंटेंट का हम किसी भी तरह का आधिपत्य नहीं जताते हैं तथा इस वेबसाइट का उद्देश्य केवल जन-जन तक भगवद उपदेशों को पहुंचाना है।</span>
        <span class="mx-4">हरे राम हरे राम, राम राम हरे हरे, हरे कृष्ण हरे कृष्ण, कृष्ण कृष्ण हरे हरे</span>
        <span class="mx-4">FYI: Related content on this site will be added time to time, so please be updated and visit the site too often. </span>
    </div>
</div>
<section class="hero-section site-container">
    <div class="image-container flex w-full h-[500px]  hero bg-custom-image bg-no-repeat bg-cover bg-[center_center] rounded-md  transition-transform duration-75   shadow-xl">
    </div>
</section>
<section class="ad-section h-[160px] w-full ">
</section>
<section class="post-container site-container grid grid-cols-3 gap-3 max-sm:grid-cols-1 max-md:grid-cols-2">

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
            get_template_part('parts/content', 'card');
            get_template_part('parts/content', 'card');
            get_template_part('parts/content', 'card');
            get_template_part('parts/content', 'card');
            get_template_part('parts/content', 'card');
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>

</section>

<?php get_footer(); ?>