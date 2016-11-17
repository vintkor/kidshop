  <?php
  /**
   * Displays the page section of the theme.
   *
   */
  ?>

  <?php get_header(); ?>
  
  <div class="copy-inner">
    <div class="container">
      <div class="row">
        <?php if( is_active_sidebar('left_sidebar') && is_archive() ): ?>
          <div class="col-md-3 sidebar_woo">
            <?php dynamic_sidebar('left_sidebar'); ?>
          </div>
          <div class="col-md-9">
            <?php woocommerce_content(); ?>
          </div>
        <?php else : ?>
          <div class="col-md-12">
            <?php woocommerce_content(); ?>
          </div>
        <?php endif ?>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>