<?php get_header(); ?>

<div class="categories-block">
  <div class="container-fluid">
    <div class="row">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categories_small categories_xxs">
            <section class="categories_section search_page">
              <?php the_post_thumbnail(); ?>
              <h3> <?php the_title(); ?> <br><a href="<?php the_permalink(); ?>">shop</a></h3>
            </section>
          </div>

            get_template_part('template-parts/content', 'search');

        <?php endwhile; ?>
      <?php else: ?>
          <?php get_template_part('template-parts/content', 'none'); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
