<div class="space-placeholder h-[160px]"></div>
<footer class=" bg-navyblue-color text-white p-4">
            <div class="site-container">
                <nav class="footer-menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'geeta_footer_menu' , 'depth' => 1 )); ?>
                </nav>
                <div class="copyright">
                    <p><?php echo esc_html( get_theme_mod( 'set_copyright', __( 'Copyright X - All Rights Reserved', 'geeta' ) ) ); ?></p>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>