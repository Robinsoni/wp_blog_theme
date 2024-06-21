
<?php
/** Get parent category */
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
    $nav_list = "<ul class='table table-column grid grid-cols-5  '>";
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
         $perma_link =    get_permalink();
         $title = get_the_title();
         $title = explode("-",$title)[1];
        $nav_list .= '<li>
                        <a href='.$perma_link.'>
                            '.$title.'
                        </a>
                    </li>';
        
        /* get_template_part( 'parts/content', 'navigationlist' );  */
        endwhile;
        wp_reset_postdata();
    endif;
    $nav_list .= "</ul>";
    echo "nav :: ";print_r($nav_list);die(" :: end");
} 
?>
<div class="grid-cols-5 ">
