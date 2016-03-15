<?php get_header(); ?>

<div id="main-container">
	<main role="main">
		<!-- section -->
		<h3>catt</h3>
		<section>

			<h1><?php _e( 'Category: ', 'html5blank' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>
