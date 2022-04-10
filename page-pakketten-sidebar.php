<?php get_header(); 
/**
 * Template Name: Alle pakketten Sidebar
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
      <h2 class="uitvaartpakketten-heading">Uitvaartpakketten</h2>
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

</main>

<?php get_footer(); ?>