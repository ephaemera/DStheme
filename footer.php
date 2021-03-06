<footer>
    <div class="container footer-sidebar">
        <div class="row justify-content-sm-center">
            <div class="col-md col-lg-3 left-widget">
                <?php if(is_active_sidebar('sidebar1')): ?>
                    <?php dynamic_sidebar('sidebar1'); ?>
                        <?php endif; ?>
            </div>
            <div class="col-md col-lg-3 center-widget">
                <?php if(is_active_sidebar('sidebar2')): ?>
                    <?php dynamic_sidebar('sidebar2'); ?>
                        <?php endif; ?>
            </div>
            <div class="col-md col-lg-3 right-widget">
                <?php if(is_active_sidebar('sidebar3')): ?>
                    <?php dynamic_sidebar('sidebar3'); ?>
                        <?php endif; ?>
            </div>
        </div>
    </div>
    <p class="top text-center smooth-scroll"><a href="#top"><i class="fas fa-chevron-circle-up"></i></a></p>
    <div class="container-fluid sharing">
        <div class="row justify-content-sm-center">
            <div class="col-sm col-md-4 text-center">
                <?php if(is_active_sidebar('sharing-sidebar1')): ?>
                    <?php dynamic_sidebar('sharing-sidebar1'); ?>
                        <?php endif; ?>
                        <div class="hd-search">
                          <?php get_search_form(); ?>
                        </div>
            </div>
        </div>
    </div>
    <p class="copyright text-center">Site and content &copy;
        <?php echo Date('Y'); ?> -
            <?php bloginfo('name'); ?>, Ephaemera Creative and Vision by Pixels. All Rights Reserved.</p>
</footer>
    </div>
   <?php wp_footer(); ?>
</body>
</html>
