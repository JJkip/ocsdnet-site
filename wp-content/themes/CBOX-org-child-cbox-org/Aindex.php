<?php
/**
 * Template Name: Homepage Template
 *
 * @author Bowe Frankema <bowe@presscrew.com>
 * @link http://shop.presscrew.com/
 * @copyright Copyright (C) 2010-2011 Bowe Frankema
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @since 1.0
 */
infinity_get_header();
?>

<div id="content" role="main" class="column sixteen">

	<div class="installation-wrap">
		<?php
			infinity_get_template_part( 'templates/parts/cbox-installation' );
		?>
	</div>

	<div class="features-wrap">
		<?php
			infinity_get_template_part( 'templates/parts/cbox-features' );
		?>
	</div>

	<div class="testimonials-wrap">
		<?php
			infinity_get_template_part( 'templates/parts/cbox-testimonials' );
		?>
	</div>

	<div class="developer-wrap">
		<?php
			infinity_get_template_part( 'templates/parts/cbox-theme' );
		?>
	</div>

	<div class="support-plan-wrap">
		<?php
			 infinity_get_template_part( 'templates/parts/cbox-support-plan' );
		?>
	</div>

	<div class="showcase-wrap">
		<?php
			//infinity_get_template_part( 'templates/parts/cbox-showcase' );
		?>
	</div>

</div>
<?php
    infinity_get_footer();
?>