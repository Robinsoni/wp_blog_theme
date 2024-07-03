<?php get_header(); ?> 
<div class="space-placeholder "></div>
<div class=" grid grid-cols-6 max-md:h-auto  max-md:max-h-[1000vh] max-h-[77vh]  max-md:grid-cols-1">
    <div class="col-span-1  flex flex-col     items-center max-md:col-span-1 max-md:order-2 max-md:mt-2 ">
        <div class="w-3/4 border border-light-gray-border   mb-1 p-1 shadow-2xl inline-flex items-center   bg-blue-50 px-2 py-1 text-xs font-medium text-secondary-color   ring-blue-700/10  "> Select Verse #</div> 
        <?php
        get_template_part('parts/content', 'navigation');
        ?>
 
    </div>
    <div class=" col-span-4  max-md:col-span-1">
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