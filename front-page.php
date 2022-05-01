<?php get_header(); 
/**
 * The template for displaying the front page
 *
 * @package CMS Webdesign starter
 */
?>

<main class="main-content">

  <div class="header-hero" style="background-image: url('<?php echo get_field('header_hero_image', 'option'); ?>');           background-position: center center; background-repeat: no-repeat; background-size: cover;">
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

  <section class="section pakketten">
    <div class="container">

    <h2>5 Uitvaartpakketten</h2>

    <div class="flex-box">

      <?php
      $args = array(
          'post_type' => 'uitvaartpakketten',
          'posts_per_page' => 5
      );
      $the_query = new WP_Query( $args ); ?>

      <?php if ( $the_query->have_posts() ) : ?>

          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>        
            <a href="<?php the_permalink(); ?>" class="pakket"><div>
            <p class="p-pakket">Uitvaartpakket</p>
            <p class="p-title"><?php echo get_field( "soort_pakket" ); ?></p>
            <p class="p-crem">Crematie vanaf</p>
            <p class="p-crem-prijs"><?php echo get_field( "crematie_vanaf" ); ?></p>
            <p class="p-begr">Begrafenis vanaf</p>
            <p class="p-begr-prijs"><?php echo get_field( "begrafenis_vanaf" ); ?></p>
            <button class="pakket-button">
              Bekijk het pakket
            </button>
            </div></a>

          <?php endwhile; ?>

          <?php wp_reset_postdata(); ?>

      <?php endif; ?>

    </div>


  </div>
  </section>
  <!-- End section pakketten -->

  <section class="section uitleg" style="background-image: url('<?php echo get_field('eerste_uitleg_afbeelding', 'option'); ?>');           background-position: center center; background-repeat: no-repeat; background-size: cover;">
  <div class="overlay">
          <div class="container">    
          <h3>Wij nemen de tijd om alle beslissingen met u te bespreken</h3>      
      <div class="uitleg-box">        
        <div class="box box-1"> 
          <p>Wij respecteren volledig uw wensen en zullen deze uitvoeren zoals u dat van ons verwacht.
          Ultimum Vale betekent in het Latijn een laatste groet. De laatste groet naar een overledene is voor iedereen anders. Sommige mensen hechten geen waarde aan de dood. En brengen een laatste groet aan het sterfbed van de overledene, waarna er een crematie in stilte plaats zal vinden.</p>
          <p>Een ander wil graag een laatste groet brengen in een familiekamer van het crematorium. Terwijl sommige mensen meer waarde hechten aan een compleet afscheid in de aula van het crematorium/begraafplaats. Met eventueel een aansluitend informeel samenzijn in de ontvangstruimte van het crematorium of begraafplaats. Misschien vindt u het juist prettiger om op een andere locatie uw gasten te mogen ontvangen.</p>
        </div>
        <div class="box box-2">
          <p>Uitvaartverzorging Ultimum Vale werkt landelijk. In elke provincie hebben wij deskundige uitvaartbegeleiders die u professioneel bijstaan en alle zorgen rondom de uitvaart voor u uit handen neemt. Onze professionele werkwijze is gebouwd op vele jaren van ervaring. Zo zorgen wij dat de laatste groet van uw dierbare altijd waardig verloopt.</p>
          <p>Of de overledene nu wel of niet verzekerd is: ook zonder verzekering kunnen wij de uitvaart verzorgen. Als de overledene verzekerd is, bij voorbeeld bij DELA, Yarden, Ardanta etc,  kunnen jullie altijd door ons de uitvaart laten verzorgen. </p>
          <p><em>- Uitvaartverzorging Ultimum Vale</em></p>
        </div>
      </div>
     
      </div>
    </div>
  </section>

  <section class="section cta-uitvaart-regelen">
    <div class="container">
      <h3>Uw uitvaart zoals u dat wilt?</h3>
      <p>Neem vrijblijvend contact op</p>
      <button class="cta-uitvaart-regelen btn">Contact opnemen met Ultimum Vale</button>
    </div>
  </section>

  <?php $watBiedenWij = get_field('wat_bieden_wij', 'option'); ?>
  <section class="section wat-bieden-wij" style="background-image: url('<?php echo get_field('wat_bieden_wij_afbeelding', 'option'); ?>'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="overlay">
      <div class="container">
        <h3>Wat bieden wij?</h3>
        <div class="flex-box">  
          <div class="box">
            <img src="<?php echo $watBiedenWij['aanbod_kisten_afbeelding']; ?>" alt="">
            <h3><?php echo $watBiedenWij['aanbod_kisten_titel']; ?></h3>
            <p><?php echo $watBiedenWij['aanbod_kisten_uitleg']; ?></p>
            <a class="btn-link" href="#"><button class="btn"><?php echo $watBiedenWij['aanbod_kisten_knop']; ?></button></a>
          </div>
          <div class="box">
            <img src="<?php echo $watBiedenWij['aanbod_rouwkaarten_afbeelding']; ?>" alt="">
            <h3><?php echo $watBiedenWij['aanbod_rouwkaarten_titel']; ?></h3>
            <p><?php echo $watBiedenWij['aanbod_rouwkaarten_uitleg']; ?></p>
            <a class="btn-link" href="#"><button class="btn"><?php echo $watBiedenWij['aanbod_rouwkaarten_knop']; ?></button></a>
          </div>
          <div class="box">
            <img src="<?php echo $watBiedenWij['online_condoleance_afbeelding']; ?>" alt="">
            <h3><?php echo $watBiedenWij['online_condoleance_titel']; ?></h3>
            <p><?php echo $watBiedenWij['online_condoleance_uitleg']; ?></p>
            <a class="btn-link" href="#"><button class="btn"><?php echo $watBiedenWij['online_condoleance_knop']; ?></button></a>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <section class="section waardige-uitvaart">
    <div class="container">
        <div class="flex-box">
          <div class="inner-text-box box box-1">
            <h3>Een waardige & respectvolle uitvaart hoeft niet veel te kosten</h3>
            <p>Wij hebben ervoor gekozen om <a href="#">vijf duidelijke pakketten</a> te maken met verschillende prijzen. Wij denken dat wij daardoor de nabestaanden rust kunnen bieden, terwijl zij de juiste begeleiding krijgen van ons in de dagen voordat de uitvaart gaat plaatsvinden.</p>
            <p>Uitvaartverzorging Ultimum Vale  is er om u te ondersteunen in deze moeilijke tijd en zorgt dat deze laatste groet geheel volgens uw wens verloopt.</p>
          </div>
    </div>
  </section>

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

</main>

<?php get_footer(); ?>