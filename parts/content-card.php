<div class="card-container w-full border rounded-md  p-[15px] hover:shadow-2xl cursor-pointer    transition-transform  ease-in-out  delay-75  hover:scale-[1.02]   ">
    <div class="card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!--  <img class="h-[240px] w-full" src="http://geeta.local/wp-content/uploads/2024/06/arujun-vishad-yog.png" alt=""> -->
        <!--  <img class="h-[240px] w-full" src="<?php echo get_template_directory_uri() . "/assets/img/card-img-placeholder.png"; ?>" alt=""> -->
        <?php the_post_thumbnail('large'); ?>
        <div class="card-details mt-4  mb-4">
            <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">अध्याय-एक</span>
            <div class="text-xl  font-semibold mt-2 mb-2 "><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </div>

            <!-- excerpt start -->
            <div class="excerpt-parent relative">
                <span class="excerpt-badge animate-pulse inline-flex items-baseline  rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-[#340d00] ring-1 ring-inset ring-blue-700/10">Read Exerpt <pre> </pre><i class="fas fa-angle-double-right  text-[#d69e00] "></i></span>
                <div class="excerpt-card bg-white hidden absolute  transition-all dark:bg-slate-900 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
                    <div>
                        <span class="inline-flex items-center justify-center p-2 bg-indigo-500 rounded-md shadow-lg">
                           <!--  <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"></svg> -->
                           <a href="<?php the_permalink(); ?>"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h280v280h-80v-144L388-332Z"/> </svg></a>
                        </span>
                    </div>
                    <h3 class="text-slate-900 text-lg font-extrabold   dark:text-white mt-5 text-base font-medium tracking-tight">संक्षिप्त टिप्पणी</h3>
                    <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
                        <?php the_excerpt();?>
                    </p>
                </div>
            </div>
            <!-- excerpt end -->

            <div class="author flex justify-between  items-center  text-gray-500 w-3/4  mt-4  ">
                <div class="author-details flex items-center">
                    <img class="mr-2 " src="<? echo get_template_directory_uri() . "/assets/img/author-image.png"; ?>" alt="">
                    <span class="author-name">Tracey Wilson</span>
                </div>
                <span class="posted-on">August 20,2022</span>
            </div>
        </div>
    </div>
</div>