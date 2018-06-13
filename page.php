<?php get_header(); ?>
    <div class="//jumbotron //jumbotron-fluid page single">
        <div class="container">
            <div class="entry-header">
                <div class="row justify-content-sm-center">
                    <div class="col-sm col-md-9">
                      <?php the_post_thumbnail('small-thumbnail'); ?>
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
            <!-- entry-header -->
        </div>
    </div>
    <!-- jumbotron -->
    <div class="page-single">
        <div class="container single">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('content', 'page'); ?>
                        <?php endwhile; ?>
                            <?php else : ?>
                                <p>
                                    <?php __('No Pages Found', 'dstheme'); ?>
                                </p>
                                <?php endif; ?>
        </div>
        <!-- container -->
        <div class="container-fluid">
            <?php get_footer('page'); ?>
