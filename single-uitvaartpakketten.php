<?php get_header(); ?>

  <main class="main-content">

    <div class="header-hero" style="background-image: url('<?php echo get_field('header_hero_image', 'option'); ?>');           background-position: center center; background-repeat: no-repeat; background-size: cover;">
      <div class="overlay">
        <div class="container">
          <div class="header-hero-inside-container">
            <div class="header-hero-block block-1">
              <h1><?php the_title(); ?></h1>
              <div class="heading-prijs-vanaf">
                <div class="heading-prijs-box">Begrafenis vanaf <?php echo get_field( "begrafenis_vanaf" ); ?></div>
                <div class="heading-prijs-box">Crematie 
                  vanaf <?php echo get_field( "crematie_vanaf" ); ?>
                </div>                
              </div>
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

        <a style="text-decoration: none;" href="<?php echo get_field('pakket_online_aanvragen_knop_link', 'option'); ?>">
          <button class="btn"><?php echo get_field('pakket_online_aanvragen_knop_tekst', 'option'); ?></button>  
        </a>
        <p>Is dit toch niet helemaal wat u zoekt? Vraag dan een vrijblijvende kostenopgave aan.</p>
        <a style="text-decoration: none;" href="<?php echo get_field('offerte_aanvragen_knop_link', 'option'); ?>">
          <button class="btn"><?php echo get_field('offerte_aanvragen_knop_tekst', 'option'); ?></button>
        </a>
        <p>of bel ons geheel vrijblijvend op <a href="tel:+31655143381">06-55143381</a></p>
        </div>

      <!-- Side bar info box -->	
      <?php get_template_part('template-parts/side-bar-info-box'); ?>
      <!-- Einde side bar info box -->

      </div>
    </div>

  </main>

<?php get_footer(); ?>