<?php get_header(); ?>

  <main class="main-content">

    <div class="header-hero" style="background-image: url('<?php echo get_field('header_hero_image', 'option'); ?>');           background-position: center center; background-repeat: no-repeat; background-size: cover;">
      <div class="overlay">
        <div class="container">
          <div class="header-hero-inside-container">
            <div class="header-hero-block block-1">
              <h1><?php the_title(); ?></h1>
              <div class="heading-prijs-vanaf">
                <div class="heading-prijs-box">Begrafenis vanaf <?php echo get_field( "begrafenis_vanaf" ); ?></div>
                <div class="heading-prijs-box">Crematie 
                  vanaf <?php echo get_field( "crematie_vanaf" ); ?>
                </div>                
              </div>
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

        <button class="btn">Pakket online aanvragen</button>  
        <p>Is dit toch niet helemaal wat u zoekt? Vraag dan een vrijblijvende kostenopgave aan.</p>
        <button class="btn">Offerte aanvragen</button>
        <p>of bel ons geheel vrijblijvend op <a href="tel:+31655143381">0655143381</a></p>
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

    <?php $begeleid = get_field('begeleid_door', 'option'); ?>
  <section class="section begeleid-door" style="background-image: url('<?php echo $begeleid['begeleid_door_afbeelding']; ?>'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="overlay">
      <div class="container">
      <h3>Wilt u een overlijden melden of wilt u meer informatie?</h3>
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

  </main>

<?php get_footer(); ?>