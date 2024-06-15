<form role="search" method="get" id="searchform" class="searchform " action="<?php echo esc_url( home_url( '/' ) ) ?>">
    <div class="flex relative p-1  border rounded-md     bg-white    align-middle">
        <label class="screen-reader-text" for="s"><?php esc_html_e( 'Search for', 'wp-devs' ) ?>:</label>
        <input type="text" class="outline-none " placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" id="s">
      <!--   <i class="fas fa-search"></i> -->
        <div class="absolute  flex align-middle rounded-md  right-3  ">
            <img class="absolute right-0 self-center   " src="<?php echo get_template_directory_uri(). "/assets/img/search-outline.png"; ?>" alt="" srcset="">
            <input type="submit" class="opacity-0  cursor-pointer " id="searchsubmit" value="<?php esc_html_e( 'Search', 'wp-devs' ) ?>">
        </div>
    </div>
</form>