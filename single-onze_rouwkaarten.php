<?php get_header(); ?>

<main class="main-content">

  <div class="header-hero" style="background-image: url('<?php echo get_field('header_hero_image', 'option'); ?>');           background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="overlay">
      <div class="container">
        <div class="header-hero-inside-container">
          <div class="header-hero-block block-1">
            <h1><?php the_title(); ?></h1>
            <p class="kaartnummer-header">Kaartnummer: <?php echo get_field('kaartnummer'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="two-column-section">
    <div class="container">
      <div class="text-content">
        <div class="rouwkaart-box">
        <?php 
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post(); 
            $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large' ); ?>
            <img src="<?php echo $featured_image[0]; ?>" alt="<?php echo $featured_image['alt']; ?>">
            <div class="text-rouwkaarten-single">
              <p>Download hier het bestelformulier voor de rouwkaarten:</p>
              <a href="#"><p>Klik hier om het downloaden</p></a>
            </div>
          <?php } // end while
        } // end if
        ?>
        </div>
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