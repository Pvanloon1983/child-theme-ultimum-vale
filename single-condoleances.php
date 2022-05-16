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


</div>

<?php get_footer(); ?>