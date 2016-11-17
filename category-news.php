  <?php get_header(); ?>
  
  <div class="copy-inner">
    <div class="container">
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php if( has_post_thumbnail() ): ?>
        <div class="row news">
          <div class="col-md-12">
              <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
          </div>
          <div class="col-md-3">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('', 'class=img-thumbnail'); ?>
            </a>
          </div>
          <div class="col-md-9">
              <?php the_excerpt(); ?>
          </div>
        </div>
        <?php else: ?>
          <div class="row news">
            <div class="col-md-12">
                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            </div>
            <div class="col-md-12">
                <?php the_excerpt(); ?>
            </div>
          </div>
        <?php endif; ?>
        <hr>
      <?php endwhile; endif;?>
      <div class="row">
        <div class="col-md-12">
          <div class="navigate">
            <?php wp_pagenavi(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>