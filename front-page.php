<?php get_header(); 
/**
 * The template for displaying the front page
 *
 * @package CMS Webdesign starter
 */
?>

<main class="main-content">

  <div class="header-hero" style="background-image: url('<?php echo get_field('header_hero_image', 'option'); ?>');           background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="overlay">
      <div class="container">
        <div class="header-hero-inside-container">
          <div class="header-hero-block block-1">
            <h1><?php echo get_field('h1_home_page', 'option'); ?></h1>
            <p><?php // echo get_field('tekst_onder_h1_home_page', 'option'); ?></p>
            <a style="text-decoration: none;" href="<?php echo get_field('cta_button_link_h1', 'option'); ?>">
              <div class="btn"><?php echo get_field('cta_button_tekst_h1', 'option'); ?></div>
            </a>
          </div>
          <div class="header-hero-block block-2">
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section pakketten">
    <div class="container">
    
    <h2><?php echo get_field('5_uitvaartpakketten_kop', 'option'); ?></h2>

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

  <section class="section uitleg" style="background-image: url('<?php echo get_field('eerste_uitleg_afbeelding', 'option'); ?>');           background-position: center center; background-repeat: no-repeat; background-size: cover;">
  <div class="overlay">
          <div class="container">    
          <h3><?php echo get_field('wij_nemen_de_tijd_kop', 'option'); ?></h3>      
      <div class="uitleg-box">        
        <div class="box box-1"> 
          <?php echo get_field('wij_nemen_de_tijd_tekst_blok_links', 'option'); ?>
        </div>
        <div class="box box-2">
          <?php echo get_field('wij_nemen_de_tijd_tekst_blok_rechts', 'option'); ?>
        </div>
      </div>
     
      </div>
    </div>
  </section>

  <section class="section cta-uitvaart-regelen">
    <div class="container">
      <h3><?php echo get_field('uw_uitvaart_zoals_u_dat_wilt_kop', 'option'); ?></h3>
      <p><?php echo get_field('uw_uitvaart_zoals_u_dat_wilt_tekst', 'option'); ?></p>
      <a style="text-decoration: none;" href="<?php echo get_field('uw_uitvaart_zoals_u_dat_wilt_knop_link', 'option'); ?>">
        <button class="cta-uitvaart-regelen btn"><?php echo get_field('uw_uitvaart_zoals_u_dat_wilt_knop_tekst', 'option'); ?></button>
      </a>
    </div>
  </section>

  <?php $watBiedenWij = get_field('wat_bieden_wij', 'option'); ?>
  <section class="section wat-bieden-wij" style="background-image: url('<?php echo get_field('wat_bieden_wij_afbeelding', 'option'); ?>'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="overlay">
      <div class="container">
        <h3><?php echo get_field('wat_bieden_wij_kop', 'option'); ?></h3>
        <div class="flex-box">

          
            <div class="box">
            <a href="<?php echo $watBiedenWij['aanbod_kisten_link']; ?>" style="text-decoration: none;"> 
                <div>
                  <?php $image = $watBiedenWij['aanbod_kisten_afbeelding']; ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
                <div>
                  <h3><?php echo $watBiedenWij['aanbod_kisten_titel']; ?></h3>
                  <p><?php echo $watBiedenWij['aanbod_kisten_uitleg']; ?></p>
                  <a class="btn-link" href="<?php echo $watBiedenWij['aanbod_kisten_link']; ?>"><button class="btn"><?php echo $watBiedenWij['aanbod_kisten_knop']; ?></button></a> 
                </div>
              </a> 
            </div>
          
          
          
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

  <section class="section waardige-uitvaart">
    <div class="container">
        <div class="flex-box">
          <div class="inner-text-box box box-1">
            <h3><?php echo get_field('een_waardige_&_respectvolle_uitvaart_kop', 'option'); ?></h3>
            <?php echo get_field('een_waardige_&_respectvolle_uitvaart_tekst', 'option'); ?></h3>
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

</main>

<?php get_footer(); ?>