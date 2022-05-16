<?php if (!empty(get_field('alternatieve_titel'))) : ?>
<h1><?php echo get_field('alternatieve_titel'); ?></h1>
<?php else : ?>
<h1><?php the_title(); ?></h1>
<?php endif; ?>