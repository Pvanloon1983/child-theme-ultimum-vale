<?php get_header(); 
/**
 * Template Name: Alle pakketten Sidebar
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

    <div class="flex-box">
      <a href="#" class="pakket"><div>
      <div class="box-span">
        <p class="p-pakket">Uitvaartpakket: <span class="pakket-title">Basis</span></p>
          <p class="p-crem">Crematie vanaf: <span>€ 1495,-</span></p>
          <p class="p-begr">Begrafenis vanaf: <span>€ 1495,-</p>
        </div>

        <div class="box-p">
        <p class="p-pakket">Uitvaartpakket</p>
          <p class="p-title">Basis</p>
          <p class="p-crem">Crematie vanaf</p>
          <p class="p-crem-prijs">€ 1495,-</p>
          <p class="p-begr">Begrafenis vanaf</p>
          <p class="p-begr-prijs">€ 1920,-</p>
        </div>

        <button class="pakket-button">
          Bekijk het pakket
        </button>
      </div></a>
      <a href="#" class="pakket"><div>
      <div class="box-span">
        <p class="p-pakket">Uitvaartpakket: <span class="pakket-title">Basis</span></p>
          <p class="p-crem">Crematie vanaf: <span>€ 1495,-</span></p>
          <p class="p-begr">Begrafenis vanaf: <span>€ 1495,-</p>
        </div>

        <div class="box-p">
        <p class="p-pakket">Uitvaartpakket</p>
          <p class="p-title">Basis</p>
          <p class="p-crem">Crematie vanaf</p>
          <p class="p-crem-prijs">€ 1495,-</p>
          <p class="p-begr">Begrafenis vanaf</p>
          <p class="p-begr-prijs">€ 1920,-</p>
        </div>

        <button class="pakket-button">
          Bekijk het pakket
        </button>
      </div></a>
      <a href="#" class="pakket"><div>
      <div class="box-span">
        <p class="p-pakket">Uitvaartpakket: <span class="pakket-title">Basis</span></p>
          <p class="p-crem">Crematie vanaf: <span>€ 1495,-</span></p>
          <p class="p-begr">Begrafenis vanaf: <span>€ 1495,-</p>
        </div>

        <div class="box-p">
        <p class="p-pakket">Uitvaartpakket</p>
          <p class="p-title">Basis</p>
          <p class="p-crem">Crematie vanaf</p>
          <p class="p-crem-prijs">€ 1495,-</p>
          <p class="p-begr">Begrafenis vanaf</p>
          <p class="p-begr-prijs">€ 1920,-</p>
        </div>

        <button class="pakket-button">
          Bekijk het pakket
        </button>
      </div></a>
      <a href="#" class="pakket"><div>
        <div class="box-span">
        <p class="p-pakket">Uitvaartpakket: <span class="pakket-title">Basis</span></p>
          <p class="p-crem">Crematie vanaf: <span>€ 1495,-</span></p>
          <p class="p-begr">Begrafenis vanaf: <span>€ 1495,-</p>
        </div>

        <div class="box-p">
        <p class="p-pakket">Uitvaartpakket</p>
          <p class="p-title">Basis</p>
          <p class="p-crem">Crematie vanaf</p>
          <p class="p-crem-prijs">€ 1495,-</p>
          <p class="p-begr">Begrafenis vanaf</p>
          <p class="p-begr-prijs">€ 1920,-</p>
        </div>

        <button class="pakket-button">
          Bekijk het pakket
        </button>
      </div></a>
      <a href="#" class="pakket"><div>
      <div class="box-span">
        <p class="p-pakket">Uitvaartpakket: <span class="pakket-title">Basis</span></p>
          <p class="p-crem">Crematie vanaf: <span>€ 1495,-</span></p>
          <p class="p-begr">Begrafenis vanaf: <span>€ 1495,-</p>
        </div>

        <div class="box-p">
        <p class="p-pakket">Uitvaartpakket</p>
          <p class="p-title">Basis</p>
          <p class="p-crem">Crematie vanaf</p>
          <p class="p-crem-prijs">€ 1495,-</p>
          <p class="p-begr">Begrafenis vanaf</p>
          <p class="p-begr-prijs">€ 1920,-</p>
        </div>

        <button class="pakket-button">
          Bekijk het pakket
        </button>
      </div></a>
    
    </div>

      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>