<?php get_header(); ?>

<main class="main-content">

  <div class="header-hero" style="background-image: url('<?php echo get_field('header_hero_image', 'option'); ?>');           background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="overlay">
      <div class="container">
        <div class="header-hero-inside-container">
          <div class="header-hero-block block-1">
            <h1>Model uitvaartkist: <?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- https://wpbeaches.com/image-carousel-thumbnail-slider-acf-gallery-field-wordpress/ -->
  <div class="two-column-section">
    <div class="container">
      <div class="text-content">
            <?php 
            $images = get_field('afbeelding_gallerij');
            if( $images ): ?>
                <div class="slider">
                  <?php foreach( $images as $image ): ?>
                    <a href="<?php echo esc_url($image['url']); ?>" data-lightbox="kisten" data-title="">
                      <div class="slider-outer-image">                        
                          <img style="width: 100%;" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />                      
                      </div>
                    </a>
                  <?php endforeach; ?>  
                  
               </div>

               <div class="navigtion-kisten">
                    <?php 
                    $next_post = get_next_post();
                    if($next_post) {
                      $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
                      echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="right"> &laquo; Vorige<br />&quot;'. $next_title . '&quot;</a>' . "\n";
                    }   

                    $prev_post = get_previous_post();
                    if($prev_post) {
                      $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
                      echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="left">Volgende &raquo;<br />&quot;'. $prev_title . '&quot;</a>' . "\n";
                    }

                    ?>
                  </div>
            <?php endif; ?>  
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