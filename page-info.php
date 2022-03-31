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
      <div class="image-container">
        <img src="https://vale.cmswebdesign.nl/wp-content/uploads/2022/03/Peroneel-Gras-300x199-1.jpg" alt="">
        <img src="https://vale.cmswebdesign.nl/wp-content/uploads/2022/03/Peroneel-zitten-300x199-1.jpg" alt="">
      </div>
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

  <?php $begeleid = get_field('begeleid_door', 'option'); ?>
  <section class="section begeleid-door" style="background-image: url('<?php echo $begeleid['begeleid_door_afbeelding']; ?>'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="overlay">
      <div class="container">
      <h3>Wij verzorgen door heel Nederland eerbiedwaardige uitvaarten, begeleid door professionele uitvaartverzorgers uit uw eigen regio.</h3>
        <div class="flex-box">
          <div class="box">
            <i class="fa-solid fa-envelope"></i> 
            <p><?php echo $begeleid['begeleid_door_email']; ?></p>
            <button class="btn">
              Stuur een E-mail
            </button>
          </div>
          <div class="box">
          <i class="fa-solid fa-phone"></i> 
            <p><?php echo $begeleid['begeleid_door_telefoonnummer']; ?></p>
            <button class="btn">
              Bel ons direct
            </button>
          </div>
          <div class="box">
            <i class="fa-solid fa-comment-dots"></i>
            <p><?php echo $begeleid['begeleid_door_bericht']; ?></p>
            <button class="btn">
              Naar het contactformulier
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>