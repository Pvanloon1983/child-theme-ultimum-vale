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
          <?php echo get_template_part('template-parts/alternative_title'); ?>
          <p><?php echo get_field('tekst_onder_de_titel'); ?></p>
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
                
            <a href="<?php the_permalink(); ?>" class="pakket kist">            
            <img style="width: 100%;" src="<?php echo $featured_image[0]; ?>" alt="<?php echo $featured_image['alt']; ?>">
            <div class="kisten-title-bekijken">
              <div class="kist-title">Model: <?php the_title(); ?></div>
              <div class="bekijk-kist">
                Bekijk kist
              </div>
            </div>
            </a>

          <?php endwhile; ?>

          <?php wp_reset_postdata(); ?>

      <?php endif; ?>

    </div>


  </div>
  </section>
  <!-- End section pakketten -->

  <?php $watBiedenWij = get_field('wat_bieden_wij', 'option'); ?>
  <section class="section wat-bieden-wij">
    <div class="overlay">
      <div class="container">
        <h2><?php echo get_field('wat_bieden_wij_kop_2', 'option'); ?></h2>
        <hr class="hr">
        <div class="flex-box">  

           <div class="box">
            <a href="<?php echo $watBiedenWij['aanbod_rouwkaarten_link']; ?>" style="text-decoration: none;">
                <?php $image = $watBiedenWij['aanbod_rouwkaarten_afbeelding']; ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <h3><?php echo $watBiedenWij['aanbod_rouwkaarten_titel']; ?></h3>
                <p><?php echo $watBiedenWij['aanbod_rouwkaarten_uitleg']; ?></p>
                <a class="btn-link" href="<?php echo $watBiedenWij['aanbod_rouwkaarten_link']; ?>"><button class="btn"><?php echo $watBiedenWij['aanbod_rouwkaarten_knop']; ?></button></a>
            </a>
          </div>

          <div class="box">
            <a href="<?php echo $watBiedenWij['online_condoleance_link']; ?>" style="text-decoration: none;">
                <?php $image = $watBiedenWij['online_condoleance_afbeelding']; ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <h3><?php echo $watBiedenWij['online_condoleance_titel']; ?></h3>
                <p><?php echo $watBiedenWij['online_condoleance_uitleg']; ?></p>
                <a class="btn-link" href="<?php echo $watBiedenWij['online_condoleance_link']; ?>"><button class="btn"><?php echo $watBiedenWij['online_condoleance_knop']; ?></button></a>
            </a>
          </div>

        </div> 
      </div>
    </div>
  </section>

  <?php $begeleid = get_field('begeleid_door', 'option'); ?>
  <section class="section begeleid-door" style="background-image: url('<?php echo $begeleid['begeleid_door_afbeelding']; ?>'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="overlay">
      <div class="container">
      <h3><?php echo get_field('wij_verzorgen_door_heel_nederland_kop', 'option'); ?></h3>
        <div class="flex-box">
          
            <div class="box">
              <a style="text-decoration: none;" href="mailto:<?php echo $begeleid['begeleid_door_email']; ?>">
              <i class="fa-solid fa-envelope"></i> 
              <p><?php echo $begeleid['begeleid_door_email']; ?></p>
              <button class="btn">
                Stuur een E-mail
              </button>
              </a>
            </div>

          <div class="box">
          <a style="text-decoration: none;" href="tel:<?php echo $begeleid['begeleid_door_telefoonnummer_link']; ?>">
          <i class="fa-solid fa-phone"></i> 
            <p><?php echo $begeleid['begeleid_door_telefoonnummer']; ?></p>
            <button class="btn">
              Bel ons direct
            </button>
          </a>
          </div>

          <div class="box">
            <a style="text-decoration: none;" href="<?php echo $begeleid['begeleid_door_contact_link']; ?>">
              <i class="fa-solid fa-comment-dots"></i>
              <p><?php echo $begeleid['begeleid_door_bericht']; ?></p>
              <button class="btn">
                Naar het contactformulier
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>