  <?php
  /*
  Template Name: Главная
  */
  ?>

  <?php get_header(); ?>
  
  <div class="slider owl-carousel">
    <?php $idObj = get_category_by_slug('slider'); $id = $idObj->term_id;
            $n=10;
            $recent = new WP_Query("cat=$id&showposts=$n");?>
            <?php while($recent->have_posts()) : $recent->the_post();?>
            <div class="owl">
              <?php the_post_thumbnail(); ?>
              <div class="wrapper_slide">
                <h3><?php the_title(); ?></h3>  
                <a href="<?php the_permalink(); ?>">Подробнее...</a>      
              </div>
            </div>
    <?php endwhile; wp_reset_query(); ?>
  </div>

  <div class="main_category">
    <div class="container">
      <div class="row">
        <?php
                  $args = array(
                   'number'     => $number,
                   'orderby'    => $orderby,
                   'order'      => $order,
                   'hide_empty' => $hide_empty,
                   'include'    => $ids,
                   'parent'     => 0
                   );
                  $product_categories = get_terms( 'product_cat', $args );
                  $count = count($product_categories);
                   if ( $count > 0 ){
                       foreach ( $product_categories as $product_category ) {
                           $thumbnail_id = get_woocommerce_term_meta( $product_category->term_id, 'thumbnail_id', true );
                           $thumbnail_url = wp_get_attachment_thumb_url( $thumbnail_id );
                           echo '<div class="col-md-4 supercat">';
                             echo '<div class="cat_wrapper">';
                                 echo '<img src="' . $thumbnail_url . '" alt="Купить ' . $product_category->name . ' в Киеве">';
                                 echo '<h2>' . $product_category->name . '</h2>';
                                 echo '<a href="' . get_term_link( $product_category ) . '"></a>';
                             echo '</div>';
                           echo '</div>';
                      }
                   }
                ?>
      </div>
    </div>
  </div>

  <div class="copy">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          <?php endwhile; endif;?>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>