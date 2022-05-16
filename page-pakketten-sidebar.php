<?php get_header(); 
/**
 * Template Name: Alle pakketten Sidebar
 *
 */
?>

  <main class="main-content">

    <div class="header-hero" style="background-image: url('<?php echo get_field('header_hero_image', 'option'); ?>');           background-position: center center; background-repeat: no-repeat; background-size: cover;">
      <div class="overlay">
        <div class="container">
          <div class="header-hero-inside-container">
            <div class="header-hero-block block-1">
            <?php echo get_template_part('template-parts/alternative_title'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="two-column-section">
      <div class="container">
        <div class="text-content">
          <?php 
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post(); 
              the_content();
            } // end while
          } // end if
          ?>
        </div>
        <div class="box-content box-content-pakketten">
        <h2 class="uitvaartpakketten-heading">Uitvaartpakketten</h2>
      <div class="flex-box">
          <?php
          $args = array(
              'post_type' => 'uitvaartpakketten',
              'posts_per_page' => 5
          );
          $the_query = new WP_Query( $args ); ?>

          <?php if ( $the_query->have_posts() ) : ?>

          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              
          <a href="<?php the_permalink(); ?>" class="pakket"><div>
            <div class="box-span">
            <p class="p-pakket">Uitvaartpakket: <span class="pakket-title"><?php echo get_field( "soort_pakket" ); ?></span></p>
              <p class="p-crem">Crematie vanaf: <span><?php echo get_field( "crematie_vanaf" ); ?></span></p>
              <p class="p-begr">Begrafenis vanaf: <span><?php echo get_field( "begrafenis_vanaf" ); ?></p>
            </div>

            <div class="box-p">
            <p class="p-pakket">Uitvaartpakket</p>
              <p class="p-title"><?php echo get_field( "soort_pakket" ); ?></p>
              <p class="p-crem">Crematie vanaf</p>
              <p class="p-crem-prijs"><?php echo get_field( "crematie_vanaf" ); ?></p>
              <p class="p-begr">Begrafenis vanaf</p>
              <p class="p-begr-prijs"><?php echo get_field( "begrafenis_vanaf" ); ?></p>
            </div>

            <button class="pakket-button">
              Bekijk het pakket
            </button>
          </div></a>

          <?php endwhile; ?>

          <?php wp_reset_postdata(); ?>

          <?php endif; ?>

      </div>

        </div>
      </div>
    </div>

  </main>

<?php get_footer(); ?>