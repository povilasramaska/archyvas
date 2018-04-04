
<?php get_header(); ?>
	<section class="article-list">
		<article>
			<h1><?php _e( 'Archyvas', 'green' ); ?></h1>
		</article>
	</section>

	<main role="main">
		<!-- section -->
		<section class="article-list">



			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
