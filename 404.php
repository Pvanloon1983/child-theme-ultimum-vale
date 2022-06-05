<?php get_header(); 
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package CMS Webdesign starter
 */
?>

<div class="main-content">
  <div class="container">
    <h1 class="page-title"><?php echo __('Oeps! Die pagina kan niet worden gevonden.', 'cmswebdesignstarter') ?></h1>
    <p class="p-not-found-page-message"><?php echo __('Het lijkt erop dat er op deze locatie niets is gevonden.', 'cmswebdesignstarter'); ?></p>
    <p class="terug-naar-homepage-search-results"><span><a href="<?php bloginfo( 'url' ); ?>"><?php echo __('Home pagina', 'cmswebdesignstarter'); ?> <i class="fa-solid fa-circle-chevron-right"></i></a></span></p>
  </div>
</div>

<?php get_footer(); ?>