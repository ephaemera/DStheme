<article class="entry-archive">
  <div class="row justify-content-sm-center">
    <div class="col-md col-lg-3">
      <div class="entry-header-title">
        <h2>
          <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
          </a>
        </h2>
      </div>
    </div>
    <div class="col-md col-lg-7">
      <div class="entry-header-excerpt">
        <?php the_excerpt(); ?>
          <p><a href="<?php the_permalink(); ?>" class="read-more-excerpt">Read More <i class="fas fa-angle-right"></i></a></p>
      </div>
    </div>
  </div>
</article>
