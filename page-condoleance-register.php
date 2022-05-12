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
            <h1><?php the_title(); ?></h1>
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
            <div class="condoleance-item-foto-container" 
              style="background-image: url('<?php echo get_field('foto_overledene'); ?>');">
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


</div>

<?php get_footer(); ?>