<?php get_header(); ?>

	<section class="article-list homepage">

<h1><?php _e( 'Naujausi irasai', 'green' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>




<?php get_footer(); ?>
