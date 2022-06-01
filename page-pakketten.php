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
          <?php echo get_template_part('template-parts/alternative_title'); ?>
            <p><?php echo get_field('tekst_onder_de_titel'); ?></p>
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

  <?php $watBiedenWij = get_field('wat_bieden_wij', 'option'); ?>
  <section class="section wat-bieden-wij">
    <div class="overlay">
      <div class="container">
        <h2><?php echo get_field('wat_bieden_wij_kop_2', 'option'); ?></h2>
        <hr class="hr">
        <div class="flex-box">  

          <div class="box">
            <a href="<?php echo $watBiedenWij['aanbod_kisten_link']; ?>" style="text-decoration: none;"> 
                <?php $image = $watBiedenWij['aanbod_kisten_afbeelding']; ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <h3><?php echo $watBiedenWij['aanbod_kisten_titel']; ?></h3>
                <p><?php echo $watBiedenWij['aanbod_kisten_uitleg']; ?></p>
                <a class="btn-link" href="<?php echo $watBiedenWij['aanbod_kisten_link']; ?>"><button class="btn"><?php echo $watBiedenWij['aanbod_kisten_knop']; ?></button></a>
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

  <!-- <section class="extra-diensten">
    <div class="overlay">
      <div class="container">
        <h3 class="extra-diensten-titel">Wat wij nog meer bieden</h3>
          <div class="grid-box">
            <div class="extra-diensten-box extra-diensten-box-1">
                <div class="image-box-extra-diensten">
                  <img src="http://nieuwvale.test/wp-content/uploads/2022/03/kisten-widget-1024x390-1.png" alt="">
                </div>
                <div class="extra-diensten-text">
                  <h3>Ruime keuze kisten</h3>
                  <p>Wij beschikken over een ruime keuze aan kisten van hoge kwaliteit.</p>
                  <a class="btn-link" href="/kisten/"><button class="btn">Bekijk de kisten</button></a>
                </div>
            </div>

            <div class="extra-diensten-box extra-diensten-box-2">
                <div class="extra-diensten-text">
                  <h3>Rouwkaarten</h3>
                  <p>Wij hebben een ruime keuze op maat ontworpen kaarten.</p>
                  <a class="btn-link" href="/rouwkaarten/"><button class="btn">Bekijk de kaarten</button></a>
                </div>
                <div class="image-box-extra-diensten">
                  <img src="http://nieuwvale.test/wp-content/uploads/2022/03/rouwkaarten-widget-1024x389-1.png" alt="">
                </div>
            </div>


            <div class="extra-diensten-box extra-diensten-box-3">
                <div class="image-box-extra-diensten">
                  <img src="http://nieuwvale.test/wp-content/uploads/2022/03/kaarsen-widget-1024x389-1.png" alt="">
                </div>
                <div class="extra-diensten-text">
                  <h3>Online Condoleance</h3>
                  <p>Laat een persoonlijk bericht achter in ons register.</p>
                  <a class="btn-link" href="/online-condoleance/"><button class="btn">Bekijk het condoleace register</button></a>
                </div>
            </div>
        </div>
      </div>
    <div>
  </section> -->

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