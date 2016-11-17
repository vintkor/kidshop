  <?php get_header(); ?>
  
  <div class="copy-inner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail('', 'class=img-thumbnail'); ?>
            <?php the_content(); ?>
          <?php endwhile; endif;?>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>