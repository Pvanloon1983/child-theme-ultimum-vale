<?php get_header(); 
/**
 * Template Name: Sidebar Info Box
 *
 */
?>

<div class="main-content">

  <div class="header-hero" style="background-image: url('<?php echo get_field('header_hero_image', 'option'); ?>');           background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="overlay">
      <div class="container">
        <div class="header-hero-inside-container">
          <div class="header-hero-block block-1">
            <h1><?php the_title(); ?></h1>
            <p>Wij zijn met Uitvaartverzorging Ultimum Vale in februari 2020 begonnen met haar werkzaamheden. In verschillende functies hebben wij ervaring in de uitvaartbranche. Wij beseffen dat wij op een heel moeilijk moment in contact komen met nabestaanden die net een dierbare hebben verloren. Nabestaanden zijn vaak zwak en kwetsbaar.</p>
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
      </div>
      <div class="box-content">
        <div class="box-info">
          <h3>Wilt u meer informatie?</h3>
          <p>Heeft u een uitvaartpakket gevonden die bij uw wensen past, of zijn er vragen of onduidelijkheden? Neem gerust contact met ons op.</p>
          <button class="btn">Contact opnemen</button>
        </div>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>