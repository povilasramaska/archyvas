<?php $x =0; if (have_posts()): while (have_posts()) : the_post(); $x++?>
<article>
	<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php if (is_home()) {
			the_post_thumbnail('home-paveikslelis');
		} else {
			the_post_thumbnail('didelis-paveikslelis');
		} ?> 
		</a>
	<?php endif; ?>

	<h3>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	</h3>
	<?php html5wp_excerpt('html5wp_index'); ?>

</article>
<?php if(is_home()&& $x==2){$x=0 ?>
	<div class="clear">


	</div>

	<?php } ?>
	<?php endwhile; ?>
<?php else: ?>
<h2><?php _e( 'Atsiprasau, neturiu ka atvaizduot.', 'green' ); ?></h2>
<?php endif; ?>
