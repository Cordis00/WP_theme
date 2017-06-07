<?php get_header(); ?>
<div class="banner-block">
  <div class="container-fluid">
    <div class="row">
      <!-- <div class="col-md-12 col-sm-12 col-xs-12">
        <?php if(is_front_page()) {?>
        <?php query_posts('showposts=5&post_type=post'); ?>
        <div id="carousel-id" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-id" data-slide-to="0" class=""></li>
            <li data-target="#carousel-id" data-slide-to="1" class=""></li>
            <li data-target="#carousel-id" data-slide-to="2" class=""></li>
            <li data-target="#carousel-id" data-slide-to="3" class="active"></li>

          </ol>
          <div class="carousel-inner" role="listbox">

            <?php if (have_posts() ) : while (have_posts() ) : the_post (); $i++; ?>

            <?php if ($i==1) {  ?>
            <div class="item active">
            <?php } else { ?>
            <div class="item">
            <?php } ?>
              <?php if ( has_post_thumbnail() ) {
                $url = wp_get_attachment_url( get_post_thumbnail_id() );
              ?>
              <img src="<?php if (get_theme_mod( 'change_branding' )) : echo get_theme_mod( 'change_branding'); else: echo get_template_directory_uri().'/images/T-shirt.png'; endif; ?>"  class="img-responsive img_banner" alt="<?php the_title(); ?>">
              <?php } ?>
              <div class="container">
                <div class="carousel-caption">
                  <h1><?php echo get_theme_mod('header_banner_content'); ?></h1>
                  <p class="text"><?php echo get_theme_mod('banner_content'); ?></p>
                  <a href="<?php the_permalink(); ?>">SHOP NOW</a>
                </div>
              </div>
            </div>
          <?php endwhile; endif; ?>
          </div>
        </div>
        <?php } wp_reset_query(); ?>
      </div> -->
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div id="carousel-id" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <?php
              $published_posts = get_category(19)->category_count;

              for($i = 0; $i < $published_posts; $i++) {
                if($i == 0) {
                  $act = "active";
                }else {
                  $act = "";
                }
                echo "<li data-target='#carousel-id' data-slide-to='$i' class='$act'></li>";
              }
            ?>
          </ol>
          <div class="carousel-inner" role="listbox">
            <?php $carousel_posts = get_posts('category=19&showposts=5');
            if (sizeof($carousel_posts) > 0){
                $count = 0;
                foreach ($carousel_posts as $post) :
                    setup_postdata($post);?>
                    <?php if ($count != 0){
                        echo '<div class="item">';
                    }else{
                        echo '<div class="item active">';
                        $count++;
                    } ?>
                        <?php the_post_thumbnail(Banner_post); ?>
                        <div class="carousel-caption">
                            <h1 class=""><?php the_title(); ?></h1>
                            <p class=""> <?php the_content(); ?> </p>
                            <a href="<?php the_permalink(); ?>">SHOP NOW</a>
                        </div>
                    </div>
                <?php endforeach; } ?>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="categories-block">
  <div class="container-fluid">
    <div class="row">

      <?php if ( have_posts() ) :
        query_posts('cat=16');
        while ( have_posts() ) : the_post(); ?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 categories_small categories_xxs">
            <section class="categories_section">
              <?php the_post_thumbnail(); ?>
              <h3> <?php the_title(); ?> <br><a href="<?php the_permalink(); ?>">shop</a></h3>
            </section>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</div>

<div class="top-products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p> <?php echo get_theme_mod('header_products'); ?> </p>
      </div>
    </div>
  </div>
</div>

<div class="products">
  <div class="container-fluid">
    <div class="row">
      <?php if ( have_posts() ) :
        query_posts('cat=17');
        while ( have_posts() ) : the_post(); ?>
        <div class="col-md-4 col-sm-4 col-xs-6 small_products">
            <section>
              <?php the_post_thumbnail(); ?>
              <span><?php the_title(); ?>
                <a href="<?php the_permalink(); ?>">buy now</a>
              </span>
            </section>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
