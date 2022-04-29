<?php get_header(); 
/**
 * Template Name: Kisten pagina
 *
 */
?>

<main class="main-content">

  <div class="header-hero" style="background-image: url('<?php echo get_field('header_hero_image', 'option'); ?>');           background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="overlay">
      <div class="container">
        <div class="header-hero-inside-container">
          <div class="header-hero-block block-1">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section pakketten kisten">
    <div class="container">

    <!-- <h2>Onze vijf uitvaartpakketten</h3> -->

    <div class="flex-box flex-kisten">

      <?php
      $args = array(
          'post_type' => 'kisten_uv',
          'posts_per_page' => 100
      );
      $the_query = new WP_Query( $args ); 
      
      ?>

      <?php if ( $the_query->have_posts() ) : ?>

          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
          
          $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large' );
          
          ?>  
                
            <a href="<?php the_permalink(); ?>" class="pakket kist"><div>
            <img style="width: 100%;" src="<?php echo $featured_image[0]; ?>" alt="<?php echo $featured_image['alt']; ?>">
            <p class="kist-title">Model: <?php the_title(); ?></p>
            <button class="pakket-button kist-button">
              Bekijk kist
            </button>
            </div></a>

          <?php endwhile; ?>

          <?php wp_reset_postdata(); ?>

      <?php endif; ?>

    </div>


  </div>
  </section>
  <!-- End section pakketten -->

  <section class="section wat-bieden-wij">
    <div class="overlay">
      <div class="container">
        <h2>Wat wij nog meer bieden</h2>
        <div class="flex-box">  
          <div class="box">
            <img src="<?php echo get_field('aanbod_rouwkaarten_afbeelding', 'option'); ?>" alt="">
            <h3><?php echo get_field('aanbod_rouwkaarten_titel', 'option'); ?></h3>
            <p><?php echo get_field('aanbod_rouwkaarten_uitleg', 'option'); ?></p>
            <a class="btn-link" href="/rouwkaarten/"><button class="btn"><?php echo get_field('aanbod_rouwkaarten_knop', 'option'); ?></button></a>
          </div>
          <div class="box">
            <img src="<?php echo get_field('online_condoleance_afbeelding', 'option'); ?>" alt="">
            <h3><?php echo get_field('online_condoleance_titel', 'option'); ?></h3>
            <p><?php echo get_field('online_condoleance_uitleg', 'option'); ?></p>
            <a class="btn-link" href="#"><button class="btn"><?php echo get_field('online_condoleance_knop', 'option'); ?></button></a>
          </div>
        </div> 
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>