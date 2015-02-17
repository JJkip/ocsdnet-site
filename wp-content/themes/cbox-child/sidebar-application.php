<?php
/**
 * Infinity Theme: sidebar template
 *
 * @author Bowe Frankema <bowe@presscrew.com>
 * @link http://infinity.presscrew.com/
 * @copyright Copyright (C) 2010-2011 Bowe Frankema
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package Infinity
 * @subpackage templates
 * @since 1.0
 */

	do_action( 'before_sidebar' );
?>

<aside id="sidebar" role="complementary" class="<?php do_action( 'sidebar_class' ); ?>">
	<!--<aside id="sidebar" role="complementary" class="column four sidebar-left">-->
	<!-- sidebar -->
		<?php
			do_action( 'open_sidebar' );?>
			
			
			<!--// Load Sidebars
			//infinity_base_sidebars();-->
			<section id="article-module">
        	<h3><?php echo infinity_option_get( 'application_sidebar_header' ); ?></h3>
            <h4><?php echo infinity_option_get( 'application_sidebar_title' ); ?></h4>
            <div class="summary"><?php echo infinity_option_get( 'application_sidebar_content' ); ?></p>
			<p><a title="OCSDNet goals" href="<?php echo infinity_option_get( 'application_sidebar_readmore_link' ); ?>"><strong><?php echo infinity_option_get( 'application_sidebar_readmore' ); ?></strong></a></div>
			<div class="quick-links">
			<h3><?php echo infinity_option_get( 'related_links_goal_sidebar_header' ); ?></h3>
			<ul>
			<li><a title="Team" href="<?php echo infinity_option_get( 'related_links_goal_sidebar_link_title_1' ); ?>">Meet Our Team</a></li>
			<li><a title="OCSDNet goals" href="<?php echo infinity_option_get( 'related_links_goal_sidebar_link_title_2' ); ?>"><?php echo infinity_option_get( 'related_links_goal_sidebar_link_title_2' ); ?></a></li>
			<li><a title="IAD" href="<?php echo infinity_option_get( 'related_links_goal_sidebar_link_3' ); ?>"><?php echo infinity_option_get( 'related_links_goal_sidebar_link_title_3' ); ?></a></li>
			</ul>
			</div>
        </section>
		<?php	do_action( 'close_sidebar' );
		?>
	
	<?php
		do_action( 'after_sidebar' );
	?>
</aside>
