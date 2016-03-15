<?php get_header(); ?>
		<div id="banner-top-klk">
			<img src="http://placehold.it/950x150">
		</div>
<div id="main-container">

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

		</div>
<?php get_footer(); ?>
