<?php get_header(); ?>
    <div class="jumbotron jumbotron-fluid archive">
        <div class="container">
            <div class="entry-header">
                <div class="row justify-content-sm-center">
                    <div class="col-sm col-md-9">
                        <?php if(have_posts()) : ?>
                            <p>Archives</p>
                            <h1><?php
              if ( is_category() ) {
                single_cat_title();
              } elseif ( is_tag() ) {
                single_tag_title();
              } elseif ( is_author() ) {
                the_post();
                echo 'Author Archives: ' . get_the_author();
                rewind_posts();
              } elseif ( is_day() ) {
                echo 'Daily Archives: ' . get_the_date();
              } elseif ( is_month() ) {
                echo 'Monthly Archives: ' . get_the_date('F Y');
              } elseif ( is_year() ) {
                echo 'Yearly Archives: ' . get_the_date('Y');
              } else {
                echo 'Archives:';
              }
             ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page archive">
        <div class="container">
            <?php while(have_posts()) : the_post(); ?>
                <?php get_template_part('content'); ?>
                    <?php endwhile; ?>
                        <div class="row justify-content-center paginate">
                            <?php echo paginate_links(); ?>
                        </div>
                        <?php else : ?>
                            <p>
                                <?php __('No Posts Found', 'dstheme'); ?>
                            </p>
                            <?php endif; ?>
        </div>
        <!-- container -->
        <?php get_footer(); ?>
