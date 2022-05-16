<?php
acf_form_head();
get_header(); 
/**
 * Template Name: Site reviews page
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
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="two-column-section">
    <div class="container">
      <div class="text-content">

      <div class="waarderings-box">
        <div class="row row-border-bottom">
          <div><span><?php echo get_field('eerste_regel', 'option'); ?></span></div>
          <div class="text-align">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
        </div>
        <div class="row row-border-bottom">
          <div><span><?php echo get_field('tweede_regel', 'option'); ?></sp></div>
          <div class="text-align">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
        </div>
        <div class="row row-border-bottom">
          <div><span><?php echo get_field('derde_regel', 'option'); ?></sp></div>
          <div class="text-align">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
        </div>
        <div class="row row-samenvatting">
          <div>
            <span><strong>Samenvatting</strong></span>
            <p class="review-box-text"><?php echo get_field('box_tekst', 'option'); ?></p>
          </div>
          <div class="star-box-with-number text-align">
            <span class="big-number"><strong>5</strong></span>
            <div>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
          </div>
        </div>
      </div>

      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $args = array(
          'post_type' => 'site_reviews',
          'posts_per_page' => 5,
          'paged' => $paged,
      );
      $the_query = new WP_Query( $args ); ?>

      <?php if ( $the_query->have_posts() ) : ?>

          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php 
          $ratingstar = get_field('waardering');
          ?>
            <span class="fa fa-star <?php if ($ratingstar >= 1) { echo 'checked';}?>"></span>
            <span class="fa fa-star <?php if ($ratingstar >= 2) { echo 'checked';}?>"></span>
            <span class="fa fa-star <?php if ($ratingstar >= 3) { echo 'checked';}?>"></span>
            <span class="fa fa-star <?php if ($ratingstar >= 4) { echo 'checked';}?>"></span>
            <span class="fa fa-star <?php if ($ratingstar == 5) { echo 'checked';}?>"></span>
            <span class="review-datum"><?php echo get_field('datum');  ?></span>
              
          <?php the_content(); ?>
          <p class="review-naam"><?php echo "-" . get_field('naam'); ?></p>

          <?php endwhile; ?>
          

          <?php 
          
          $total_pages =  $the_query->max_num_pages;

          if ($total_pages > 1){
      
              $current_page = max(1, get_query_var('paged'));
      
              echo "<div class='paginatie'>";
              echo paginate_links(array(
                  'base' => get_pagenum_link(1) . '%_%',
                  'format' => '/page/%#%',
                  'current' => $current_page,
                  'total' => $total_pages,
                  'prev_text'    => __('« Vorige'),
                  'next_text'    => __('Volgende »'),
              ));
              echo "</div>";
          } 
          
          ?>

          <?php wp_reset_postdata(); ?>

          <?php Ninja_Forms()->display( 3 ); ?>

        <?php endif; ?>

      </div>
      <!-- Side bar info box -->	
      <?php get_template_part('template-parts/side-bar-info-box'); ?>
      <!-- Einde side bar info box -->
    </div>
  </div>


</div>

<?php get_footer(); ?>