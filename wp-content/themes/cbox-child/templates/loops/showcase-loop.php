<ul id="showcase-slider">
<?php if ( have_posts()): while ( have_posts() ):the_post();?>
		<li class="featured-item">		
					<div class="post-thumb-small feature-image column six">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'infinity' ) ?> <?php the_title_attribute(); ?>">
								<?php the_post_thumbnail( array( 'width' => 410, 'height' => 300, 'crop' => true ) ) ?>

							</a>
					</div>							
					<div class="column ten">
					<h4 class="post-title">
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h4>	
						<?php
							do_action( 'open_single_entry' );
							the_excerpt( __( 'Read the rest of this entry &rarr;', 'infinity' ) );
						?>
					</div>
		</li>
<?php endwhile; else: ?>
<?php endif;?>
</ul>