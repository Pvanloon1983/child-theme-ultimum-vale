<?php get_header(); 
/**
 * Template Name: Condoleance register pagina
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

  <div class="two-column-section">
    <div class="container">
      <div class="text-content">
      
      <div class="flex-grid-container">

        <?php
        $args = array(
            'post_type' => 'condoleances',
            'posts_per_page' => 100
        );
        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>  

          <a href="<?php the_permalink(); ?>" class="condoleance-item">
            <?php $image = get_field('foto_overledene'); ?>
            <div class="condoleance-item-foto-container" 
              style="background-image: url('<?php echo esc_url($image['url']); ?>');">
            </div>
            <div class="condoleance-item-naam">
              <?php the_title(); ?>
            </div>
            <div class="condoleance-overlijden-datum">
              <span><i class="fa-solid fa-cross"></i> <?php echo get_field('datum_overleden'); ?></span>
            </div>
          </a>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

        <?php endif; ?>

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