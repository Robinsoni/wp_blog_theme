
<?php
/** Get parent category */
$current_post_id = get_the_ID();
$categories = get_the_category();

if ($categories) {
    foreach ($categories as $category) {
        // Check if the category has a parent
        if ($category->parent) {
            // Get the parent category ID
            $parent_category_id = $category->parent;
            break;
        }
    }

    $child_categories = get_categories(array(
        'parent' => $parent_category_id,
        'hide_empty' => false,
    ));
    if (!empty($child_categories)) {
        $child_category_ids = wp_list_pluck($child_categories, 'term_id');

        $args = array(
            'category__in' => $child_category_ids,
            'posts_per_page' => -1, // Change this to limit the number of posts
        );
    }
    $query = new WP_Query($args);
    $nav_list = '<ul id="verse-navigation"   class=" shadow-2xl  grid grid-cols-5 gap-2 w-3/4 h-1/3 items-center text-center h-auto max-h-[600px] overflow-auto  ">';
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $perma_link =    get_permalink();
            $title = get_the_title();
            $title = explode("-", $title)[1];
            $is_active = $current_post_id == get_the_ID(); 
            $active_class = $is_active ? 'active':"";
            $nav_list .= '<li class="'.$active_class.'">
                        <a href=' . $perma_link . '>
                            ' . $title . '
                        </a>
                    </li>';
        endwhile;
        wp_reset_postdata();
    endif;
    $nav_list .= "</ul>";
    echo $nav_list;
}
?> 
