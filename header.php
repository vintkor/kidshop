<!--
  __  __            _  _          ____                   _
 |  \/  |          | |(_)        / __ \                 (_)
 | \  / |  ___   __| | _   __ _ | |  | | _ __    ___     _  _ __     _   _   __ _
 | |\/| | / _ \ / _` || | / _` || |  | || '_ \  / _ \   | || '_ \   | | | | / _` |
 | |  | ||  __/| (_| || || (_| || |__| || | | ||  __/ _ | || | | | _| |_| || (_| |
 |_|  |_| \___| \__,_||_| \__,_| \____/ |_| |_| \___|(_)|_||_| |_|(_)\__,_| \__,_|

-->


<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('&#8594;', true, 'right'); echo get_bloginfo('name');?> - <?php echo get_bloginfo('description') ?></title>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="<?php echo get_template_directory_uri(); ?>/app/js/libs.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/app/js/main.js"></script>
  <?php wp_head(); ?>
  

</head>
<body <?php body_class(); ?>>

<div class="wrapper">
  <header>
    <div class="container">
      <div class="row flex">
        <div class="col-md-3">
          <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/app/img/logo.png" alt="" class="logo">
          </a>
        </div>
        <div class="col-md-4 align-center">
          <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
            <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Что искать?">
            <input type="submit" value="Найти">
          </form>
        </div>
        <div class="col-md-2 align-center">
          <div class="col-md-12 phone">
            <p>
              
               (098) <span>456-56-56</span>
            </p>
            <p>
              
               (050) <span>442-65-42</span>
            </p>
          </div>
        </div>
        <div class="col-md-3 cart ">
          <div class="row">
            <div class="col-md-7">
              <?php
              global $woocommerce;
              // get cart quantity
              $qty = $woocommerce->cart->get_cart_contents_count();
              // get cart total
              $total = $woocommerce->cart->get_cart_total();
              // get cart url
              $cart_url = $woocommerce->cart->get_cart_url();
              // if multiple products in cart
              if($qty>1)
                    echo '<div><p>'.$qty.' товаров на сумму '.$total.'</p></div>';
              // if single product in cart
              if($qty==1)
                    echo '<a href="'.$cart_url.'">1 товар - '.$total.'</a>';
              ?>
            </div>
            <div class="col-md-5">
              <img src="<?php echo get_template_directory_uri(); ?>/app/img/shopping-cart.svg">
            </div>
          </div>
          <a href="<?php echo $cart_url ?>"></a>
        </div>
      </div>
    </div>
  </header>

  <nav class="top-nav">
     <?php wp_nav_menu( array( 'theme_location' => 'top-menu') ); ?>
  </nav>