<?php get_header(); ?>

<div id="main-container">
	<main role="main">
		<!-- section -->
		<section>
			oooooo

			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>
