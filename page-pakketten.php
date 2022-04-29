<?php get_header(); 
/**
 * Template Name: Uitvaartpakketten pagina
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
            <p class="page-p-different-header">Wij hebben ervoor gekozen om vijf duidelijke pakketten te maken met verschillende prijzen. Wij denken dat wij daardoor de nabestaanden rust kunnen bieden, terwijl zij de juiste begeleiding krijgen van ons in de dagen voordat de uitvaart gaat plaatsvinden.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section pakketten">
    <div class="container">

    <!-- <h2>Onze vijf uitvaartpakketten</h3> -->

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
            <p class="p-pakket">Uitvaartpakket</p>
            <p class="p-title"><?php echo get_field( "soort_pakket" ); ?></p>
            <p class="p-crem">Crematie vanaf</p>
            <p class="p-crem-prijs"><?php echo get_field( "crematie_vanaf" ); ?></p>
            <p class="p-begr">Begrafenis vanaf</p>
            <p class="p-begr-prijs"><?php echo get_field( "begrafenis_vanaf" ); ?></p>
            <button class="pakket-button">
              Bekijk het pakket
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
            <img src="<?php echo get_field('aanbod_kisten_afbeelding', 'option'); ?>" alt="">
            <h3><?php echo get_field('aanbod_kisten_titel', 'option'); ?></h3>
            <p><?php echo get_field('aanbod_kisten_uitleg', 'option'); ?></p>
            <a class="btn-link" href="/kisten/"><button class="btn"><?php echo get_field('aanbod_kisten_knop', 'option'); ?></button></a>
          </div>
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