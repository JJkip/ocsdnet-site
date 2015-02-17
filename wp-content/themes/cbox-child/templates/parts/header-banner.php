<?php 
/**
 * Infinity Theme: Header Content
 *
 * This template contains the Header Content. Fork this in your Child THeme
 * if you want to change the markup but don't want to mess around doctypes/meta etc!
 *
 * @author Bowe Frankema <bowe@presscrew.com>
 * @link http://infinity.presscrew.com/
 * @copyright Copyright (C) 2010-2011 Bowe Frankema
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package Infinity
 * @subpackage templates
 * @since 1.0
 */
?>
<div class="top-wrap row <?php do_action( 'top_wrap_class' ); ?>">
	<?php
		// Load Top Menu only if it's enabled
		if ( current_theme_supports( 'infinity-top-menu-setup' ) ) :
		infinity_get_template_part( 'templates/parts/top-menu', 'header' );
		endif;
	?>
	<!-- header -->
	<header id="header" role="banner">
		<div id="logo-menu-wrap">
			<?php
				do_action( 'open_header' );
				if ( !infinity_feature( 'infinity-header-logo' ) ):
			?>
			<?php
				$heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div';
			?>
			<<?php echo $heading_tag; ?> id="site-title">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>
				<span id="site-description"><?php bloginfo('description'); ?></span>
			</<?php echo $heading_tag; ?>>
			<?php
				endif;
			?>
			
			
		<div class="top-right">
			
			<div class="log-in">
	            <ul>
	            	<a class="btn btn-primary" href="http://ocsdnet.org/wp-login.php"><i class="fa fa-user fa-fw"></i> Login</a>
	            </ul>
			</div>
			
			<div class="share-links">
				<label>Find Us On</label>
	            <ul>
	                <li><a href="https://www.facebook.com/OCSDNet" target="" class="share-icon share-fb"></a></li>
	                <li><a href="https://twitter.com/OCSDNet" target="" class="share-icon share-tw"></a></li>
	                <li><a href="https://www.linkedin.com/groups/Open-Collaborative-Science-in-Development-6727668" target="" class="share-icon share-ln"></a></li>
	                <li><a href="https://plus.google.com/communities/110353447686859096400" target="" class="share-icon share-gp"></a></li>
	            </ul>
	            <div class="searchform">
	                <form action="" method="get" class="clearfix">
	                    <input type="search" name="s" value="<?php echo get_search_query(); ?>" id="searchfield_search" placeholder="Search..." />
	                    <button type="submit" class="sbtn"><img src="http://cbox.ocsdnet.org/wp-content/uploads/2014/10/search-icon1.png" alt="Search" /></button>
	                </form>
				</div>
			</div>
			
				<!-- Load Main Menu only if it's enabled-->
				<?php
				if ( current_theme_supports( 'infinity-main-menu-setup' ) ) :
				infinity_get_template_part( 'templates/parts/main-menu', 'header' );
				endif;
				?>
		</div>
		<?php
			do_action( 'close_header' );
		?>
			
		</div>
	</header><!-- end header -->
	<?php
		// Load Sub Menu only if it's enabled
		if ( current_theme_supports( 'infinity-sub-menu-setup' ) ) :
			infinity_get_template_part( 'templates/parts/sub-menu', 'header' );
		endif;
	?>
</div><!-- end top wrap -->
