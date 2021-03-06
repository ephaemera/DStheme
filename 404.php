<?php
/**
* Template for Page Not Found
**/

get_header(); ?>
    <div class="archive">
        <div class="container">
            <div class="entry-header">
                <div class="row justify-content-sm-center">
                    <div class="col-sm col-md-9">
                        <?php if(have_posts()) : ?>
                            <h1>Search results for: <?php the_search_query(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page search">
        <div class="container">
            <?php while(have_posts()) : the_post(); ?>
                <?php get_template_part('content'); ?>
                    <?php endwhile; ?>
                        <div class="row justify-content-center paginate">
                            <?php echo paginate_links(); ?>
                        </div>
                        <?php else : ?>
                          <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'dstheme' ); ?></p>
                          <?php get_search_form(); ?>
                            <?php endif; ?>
        </div>
        <!-- container -->
        <?php get_footer(); ?>
