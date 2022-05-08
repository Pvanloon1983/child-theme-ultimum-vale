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
            <img src="<?php echo get_field('foto_overledene'); ?>" alt="">
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