
<?php get_header(); ?>

        <article>
  	<h1><?php the_title(); ?></h1>
  		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
  		<?php endwhile; ?>
  		<?php else: ?>
  		<h2><?php _e( 'Atsiprasau, neturiu ka atvaizduot.', 'green' ); ?></h2>
  		<?php endif; ?>

        </article>
		<?php if ( has_post_thumbnail() ) { ?>
		<aside>
          <?php the_post_thumbnail('mazas-paveikslelis'); ?>
        </aside>
	<?php } ?>



<?php get_footer(); ?>
