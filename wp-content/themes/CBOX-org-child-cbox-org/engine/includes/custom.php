<?php

/**
 * Inject slider template
 */
function infinity_slider_insert()
{
	// load template for the slider
	if ( is_page_template( 'templates/homepage-template.php' ) ): ?>
<div id="intro-header">
	<div class="wow bounceInDown">
					<!-- Image -->
					<a href="http://commonsinabox.org/download">
						<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/splash-image.png">		
					</a>
	</div>
	<div class="section-break blue">
		<h2>CBOX takes the complexity out of creating a Commons site, helping organizations create a space where members can discuss issues, collaborate on projects, and share work.</h2>
	</div>

</div>
		<?php
	endif;
}
add_action( 'open_container', 'infinity_slider_insert' );

/**
 * Enqueues Slider JS at the bottom of the homepage
 */
function cbox_child_bx_slider_script()
{
	if ( is_page_template('templates/homepage-template.php') ) {
		// render script tag ?>
		<script type="text/javascript">
			jQuery(document).ready(function(){

				jQuery('#showcase-slider').bxSlider({
				  autoControls: false,
				  controls: false
				});

					jQuery(".lightbox").fancybox({
						maxWidth	: 800,
						maxHeight	: 600,
						fitToView	: false,
						width		: '70%',
						height		: '70%',
						autoSize	: false,
						closeClick	: false,
						openEffect	: 'none',
						closeEffect	: 'none'
					});

			});

			new WOW(
  {
    offset:       50,        // default
    duration:     '1s',       // default
    delay:        '0s',       // default
    iteration:    '1'         // default
  }
).init();

		</script><?php
	}
}
add_action( 'close_body', 'cbox_child_bx_slider_script' );

/**
 * Google CSE scripts in the footer of every page
 */
function cboxorg_google_cse_script() {
	?>
	<script>
	  (function() {
	    var cx = '004422289312162680297:xyv6trczsdw';
	    var gcse = document.createElement('script');
	    gcse.type = 'text/javascript';
	    gcse.async = true;
	    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
		'//www.google.com/cse/cse.js?cx=' + cx;
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(gcse, s);
	  })();
	</script>
	<?php
}
add_action( 'wp_head', 'cboxorg_google_cse_script', 9999 );

/**
 * Redirect logins to current page
 */
function cboxorg_redirect_login_link( $wp_admin_bar ) {
	$n = $wp_admin_bar->get_node( 'bp-login' );
	if ( $n ) {
		$wp_admin_bar->add_node( array(
			'id' => 'bp-login',
			'href' => wp_login_url( wp_guess_url() ),
		) );
	}
}
add_action( 'admin_bar_menu', 'cboxorg_redirect_login_link', 100 );