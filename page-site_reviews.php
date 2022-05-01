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
            <h1><?php the_title(); ?></h1>
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
          <div><span>Begrafenis</span></div>
          <div class="text-align">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
        </div>
        <div class="row row-border-bottom">
          <div><span>Crematie</sp></div>
          <div class="text-align">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
        </div>
        <div class="row row-border-bottom">
          <div><span>Respectvol en deskundig</sp></div>
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
            <p class="review-box-text">Uitvaartverzorging Ultimum Vale wil er zijn voor iedereen. Ongeacht waar de persoon verzekerd is, en of er veel of weinig te besteden is. De sterren aan de zijkant zijn het gemiddelde van de recensies van onze klanten. Lees in onderstaande reacties de beoordelingen van Uitvaartverzorging Ultimum Vale. Ons team van gecertificeerde uitvaartverzorgers staan voor u door heel Nederland 24/7 voor u klaar.</p>
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
      <div class="box-content">
        <div class="box-info">
          <h2>Wilt u meer informatie?</h2>
          <p>Heeft u een uitvaartpakket gevonden die bij uw wensen past, of zijn er vragen of onduidelijkheden? Neem gerust contact met ons op.</p>
          <button class="btn">Contact opnemen</button>
        </div>
      </div>
    </div>
  </div>


</div>

<?php get_footer(); ?>