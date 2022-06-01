<?php get_header(); ?>

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

  <div class="two-column-section">
    <div class="container">
      <div class="text-content">
        <div class="single-cond-box-top">
           <div class="image-overledene">
            <?php $image = get_field('foto_overledene'); ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
           </div>
          <div class="info-overledene">
            <div class="datum-overledene">
              <span>
                <i class="fa-solid fa-star-of-life"></i> <?php echo get_field('datum_overleden'); ?> &#8212; 
                <i class="fa-solid fa-cross"></i> <?php echo get_field('datum_overleden'); ?>
              </span>
            </div>
            <div class="text-overledene">
              <?php 
              if ( have_posts() ) {
                while ( have_posts() ) {
                  the_post();
                  the_content();
                } // end while
              } // end if
              ?>
            </div>
          </div>
        </div>

        <div class="condoleance-action">
          <span>Laat een bericht achter</span>
        </div>

        <h3>Uw persoonlijke condoleance</h3>

        <?php Ninja_Forms()->display( 4 ); ?>

        <div class="condoleance-berichten">
            <?php 
            if( have_rows('gegegevens_inzender') ):
                while ( have_rows('gegegevens_inzender') ) : the_row();
                    $aanhef = get_sub_field('aanhef');
                    $naam = get_sub_field('naam');
                    $bericht = get_sub_field('condoleance_bericht');
                    $datum = get_sub_field('datum_inzending'); ?>

                    <div class="condoleance-berichten-box">
                      <p class="aanhef-naam"><?php echo $aanhef . " " . $naam; ?></p>
                      <p class="condoleance-bericht"><?php echo $bericht; ?></p>
                      <p class="datum-inzending"><?php echo $datum; ?></p>
                    </div>

                <?php endwhile;
            else :
                // no rows found
                echo "<p>Er zeen geen condoleances gevonden.</p>";
            endif;        
            ?>
        </div>

      </div>
      <!-- Side bar info box -->	
      <?php get_template_part('template-parts/side-bar-info-box'); ?>
      <!-- Einde side bar info box -->
    </div>
  </div>
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