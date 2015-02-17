<?php
/**
 * CBOX.org: Feature Overview
 *
 */
?>
<div class="section-break green testimonials-break">
	<h2>New Commons in a Box communities are created every day</h2>
</div>

<div class="showcase-sites homepage-block row">
    <div class="column sixteen">
		<?php
			// The Query
			query_posts( array( 'post_type' => 'features', 'showposts' => 6 ) );?>
		<?php
		   //Call a pre-made Infinity Loop
		  infinity_get_template_part( 'templates/loops/showcase-loop' ); 
		?>
		<?php   
			// Reset Query
			wp_reset_query();
		?> 
	</div>
</div>