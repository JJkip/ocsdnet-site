<?php
/*
Template Name: Page with Background
*/
?>

<?php get_header(); ?>

	<div id="content">

	<div class="page-title"><?php the_title(); ?></div>

	<div id="content-white">

		<?php do_action( 'bp_before_blog_page' ); ?>

		<div class="page" id="blog-page" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="text">

					<?php
					if ( has_post_thumbnail() ) { ?>
						<div class="thumbnail">
						<?php the_post_thumbnail('full'); ?>
						</div>
					<?php } else {
					// no thumbnail
					}
					?>
					<div class="entry">

						<?php the_content( __( '<p class="serif">Read the rest of this page &rarr;</p>', 'Cinematix' ) ); ?>

						<?php wp_link_pages( array( 'before' => '<div class="page-link"><p>' . __( 'Pages: ', 'Cinematix' ), 'after' => '</p></div>', 'next_or_number' => 'number' ) ); ?>

					</div>
					</div>

				</div>

			<?php endwhile; endif; ?>

		</div><!-- .page -->

		<?php do_action( 'bp_after_blog_page' ); ?>

	</div><!-- #content-white -->

<?php comments_template(); ?>

	</div><!-- #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
