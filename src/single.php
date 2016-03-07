<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="single-img-klk">
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
	<?php
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
// echo $feat_image;
?>
				<a data-img-klk=<?php echo $feat_image?> data-color-klk="olive" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<h1 class="klk-overlay-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h1>
					<?php //the_post_thumbnail(); // Fullsize image for the single post ?>
					<?php
					$attachment_id = get_post_thumbnail_id( $post->ID );
$img_src = wp_get_attachment_image_url( $attachment_id, 'medium' );
$img_srcset = wp_get_attachment_image_srcset( $attachment_id, 'medium' );
?>
<img class="klk-img"src="<?php echo esc_url( $img_src ); ?>"
     srcset="<?php echo esc_attr( $img_srcset ); ?>"
     sizes="(max-height: 25em) 100vw, 1680px" alt="A rad wolf">
				</a>
			</div>
			<!-- /single-img-klk -->
<div id="main-container">
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php endif; ?>
			<!-- /post thumbnail -->
		<div id="banner-top-klk">
			<img src="http://placehold.it/750x150">
		</div>

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
		<div class="post-details-klk">
			<span class="date"> <i class="fa fa-calendar"></i>
				<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
					<?php the_date(); ?> <?php the_time(); ?>
				</time>
			</span>
			<span class="author"><i class="fa fa-pencil"></i><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			</div>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

<?php get_sidebar(); ?>
<!-- </div> -->
<!-- main-container -->
</div>
	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
