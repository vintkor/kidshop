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
        <div class="col-md-12">
          <?php woocommerce_content(); ?>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>