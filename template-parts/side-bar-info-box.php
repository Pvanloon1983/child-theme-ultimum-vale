<div class="box-content">
  <div class="box-info">
    <h2><?php echo get_field('side_bar_info_box_kop', 'option'); ?></h2>
    <?php echo get_field('side_bar_info_box_tekst', 'option'); ?>
    <a style="text-decoration: none;" href="<?php echo get_field('side_bar_info_box_knop_link', 'option'); ?>">
      <button class="btn"><?php echo get_field('side_bar_info_box_knop_tekst', 'option'); ?></button>
    </a>
  </div>
</div>