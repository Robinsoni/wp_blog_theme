<?php get_header(); ?>
<section class="hero-section site-container">
    <div class="image-container flex w-full h-[500px]  hero bg-custom-image bg-no-repeat bg-cover bg-[center_center] rounded-md"> 
    </div>
</section>
<section class="ad-section h-[160px] w-full ">
</section>
<section class="post-container site-container grid grid-cols-3 gap-3">
    <?php
    $count = 7;
    while($count-- >0){
        get_template_part( 'parts/content', 'card' );
        }    
    ?>  
</section>
<?php get_footer(); ?>