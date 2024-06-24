<?php get_header(); ?> 
<div class="space-placeholder "></div>
<div class=" grid grid-cols-6 max-h-[77vh]">
    <div class="col-span-1  flex flex-col     items-center  ">
        <div class="w-3/4 border border-light-gray-border   mb-1 p-1 shadow-2xl inline-flex items-center   bg-blue-50 px-2 py-1 text-xs font-medium text-secondary-color   ring-blue-700/10  "> Select Verse #</div>

        <?php
        get_template_part('parts/content', 'navigation');
        ?>
 
    </div>
    <div class=" col-span-4  ">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('parts/content', 'singlepostcard');
        ?>

        <?php
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
        endwhile;
        ?>
    </div>
</div>



<?php get_footer(); ?>