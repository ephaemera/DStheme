<article class="entry" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="row justify-content-sm-center">
    <div class="col-sm col-md-9 single-content">
      <?php the_content(); ?>
      <div class="row post-nav">
        <?php wp_link_pages(); ?>
          <div class="col-sm nav-prev">
              <?php previous_post_link('%link'); ?>
          </div>
          <div class="col-sm nav-next">
              <?php next_post_link('%link'); ?> 
          </div>
      </div>
      <?php comments_template(); ?>
    </div>
  </div>
</article>
