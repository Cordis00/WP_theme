<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="top-block">
      <div class="container-fluid">
        <header>
          <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-2 text-center logo_img">
              <a href="#"><?php the_custom_logo(); ?></a>
            </div>
            <?php dynamic_sidebar('sidebar-2'); ?>
            <div class="col-md-2 col-sm-3 col-xs-3 bask_img">
              <i class="fa fa-shopping-basket" aria-hidden="true"></i>
              <p class="buy">$300</p>
            </div>
          </div>
        </header>
      </div>
    </div>

    <div class="bottom-block">
      <div class="container nav_menu">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center">
            <span class="search_bar" id="btn_search">
              <i class="fa fa-search" aria-hidden="true"></i>
            </span>
            <form action="#" id="search_bar_form">
              <input type="text">
              <button><img src="<?php echo get_template_directory_uri().'/images/T-shirt.png'; ?>" alt="search"></button>
            </form>
            <span class="nav_bar" id="btn_nav">
              <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
            </span>
            <nav id="nav_modal_menu">
              <?php
                wp_nav_menu(array(
                  'theme_location' => 'primary',
                  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'menu_class' => 'list-inline',
                  'menu_id' => '',
                  'depth' => 1
                ));
              ?>
            </nav>
          </div>
        </div>
      </div>
    </div>
