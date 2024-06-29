<?php
$shloka = get_post_meta(get_the_ID(), 'Verse', true);
?>

<div class="card-container border max-h-[77vh] max-md:overflow-auto   border-l-secondary-color border-l-[30px]  w-full rounded-md  p-[15px] shadow-2xl cursor-pointer    transition-transform  ease-in-out  delay-75      " >
    <div class="card flex justify-between max-md:flex-col " id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        

        <div class="card-details mt-4  mb-4 w-2/3 pr-20  max-h-[70vh]  overflow-auto  max-md:w-full max-md:pr-[5px] max-md:order-2 "  >
            <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">अध्याय-एक</span>
            <div class="text-xl  font-semibold mt-2 "><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </div>
            <div class="text-center text-xl font-bold  "> <?php echo  $shloka; ?></div>

            <div class="mt-4"> <?php the_content(); ?></div>
            <!-- <div class="author flex justify-between  items-center  text-gray-500 w-3/4  mt-4  ">
                    <div class="author-details flex items-center">
                        <img class="mr-2 " src="<? echo get_template_directory_uri() . "/assets/img/author-image.png"; ?>" alt="">
                        <span class="author-name">Tracey Wilson</span>
                    </div>
                    <span class="posted-on">August 20,2022</span>
                </div> -->
        </div>
        <div class="w-1/3 mt-4 mb-4 verse-img  max-md:w-full  ">
            <?php the_post_thumbnail('large'); ?>
        </div>
    </div> 
</div>
