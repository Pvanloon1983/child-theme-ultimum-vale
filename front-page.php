<?php get_header(); 
/**
 * The template for displaying the front page
 *
 * @package CMS Webdesign starter
 */
?>

<div class="main-content">

  <div class="header-hero">  
    <div class="overlay">
      <div class="container">
        <div class="header-hero-inside-container">
          <div class="header-hero-block block-1">
            <h1>Uitvaartverzorging Ultimum Vale – Een laatste waardige groet!</h1>
            <p>Wij verzorgen in heel NEDERLAND betaalbare uitvaarten met zorg en aandacht voor de nabestaanden en zijn er voor ieder mens, ongeacht de (geloofs)achtergrond van de persoon, waar hij of zij verzekerd is en of er veel geld te besteden is.</p>
            <div class="btn">Meer informatie</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <!-- <h1>Front page</h1> -->

    <p>Hello</p>

    <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); 
            the_content();
        endwhile; 
    endif; 
    ?>
  </div>
</div>

<?php get_footer(); ?>