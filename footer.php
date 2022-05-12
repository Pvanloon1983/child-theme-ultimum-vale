<?php 
/**
 * The template for displaying the footer
 * 
 * Contains everything after the <div class="index-content"> closing section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CMS Webdesign starter
 */
?>

<button id="scroll-to-top-button">
  <i class="fa-solid fa-angles-up"></i>
</button>

<footer class="footer">
  <div class="container">
    <div class="footer-widgets"> 

      <?php if ( is_active_sidebar( 'footer-widget-one' ) ) : ?>
        <div class="box"><?php dynamic_sidebar( 'footer-widget-one' ); ?></div>
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'footer-widget-two' ) ) : ?>
        <div class="box"><?php dynamic_sidebar( 'footer-widget-two' ); ?></div>
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'footer-widget-three' ) ) : ?>
        <div class="box"><?php dynamic_sidebar( 'footer-widget-three' ); ?></div>
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'footer-widget-four' ) ) : ?>
        <div class="box"><?php dynamic_sidebar( 'footer-widget-four' ); ?>
        <aside class="widget widget-text social-box-footer">
          <span>
            <i class="fa-brands fa-facebook"></i>
            <span class="volg-ons"><a target="_blank" href="https://www.facebook.com/pages/category/Funeral-Service---Cemetery/Uitvaartverzorging-Ultimum-Vale-BV-107220994216523/">Volg ons <i class="fa-solid fa-arrow-right"></i></a></sp>
          </span>
        </aside>
        </div>
      <?php endif; ?>

  </div>
</footer>
<div class="copyright">
    <div class="container">
      <div class="copyright-box">
        <p>Copyright &copy; <?php echo date('Y'); ?><br> Uitvaartverzorging Ultimum Vale <br> <a href="<?php echo get_field('link_document_algemene_voorwaarden', 'option'); ?>">Algemene voorwaarden</a> | <a href="<?php echo get_field('link_privacybeleid', 'option'); ?>">Privacybeleid</a></p>
      </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>