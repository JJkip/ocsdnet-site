<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ) ?>; charset=<?php bloginfo( 'charset' ) ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
		<link rel="shortcut icon" href="<?php echo of_get_option('favicon_path', 'http://www.demo1.diaboliquedesign.com/5/favicon.gif' ); ?>" />
		<?php do_action( 'bp_head' ) ?>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

		<?php
			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );

			wp_head();
		?>

<script>
  document.createElement('header');
  document.createElement('section');
  document.createElement('article');
  document.createElement('aside');
  document.createElement('nav');
  document.createElement('footer');
</script>


<!--[if lt IE 9]>
<style type="text/css">
iframe, .video-container object, .video-container embed { width: auto!important; }
img { width: auto!important; height:auto; }
</style>
<![endif]-->

<?php echo of_get_option('analytics', ' ' ); ?>

	</head>

	<body <?php body_class() ?> id="bp-default">

	<?php do_action( 'bp_before_header' ) ?>

<header>

<div id="header-container">
<div id="header-left">
	<div id="logo"><a href="http://ocsdnet.org/"><img src="<?php echo of_get_option('logo_path', 'http://cbox.ocsdnet.org/wp-content/uploads/2014/11/logo.png' ); ?>" alt="<?php _ex( 'Home', 'Home page banner link title', 'buddypress' ); ?>" /></a></div>
</div><!-- #header-left -->

<div id="header-right">
	<a class="tile tile-contact" href="<?php echo home_url(); ?>/<?php _e('contact', 'Cinematix'); ?>"><span class="tile-title"><?php _e('CONTACT', 'Cinematix'); ?></span></a>
	<a class="tile tile-blog" href="http://ocsdnet.org/"><span class="tile-title">OCSDNet</span></a>
	<a class="tile tile-members" href="<?php echo home_url(); ?>/<?php _e('members', 'Cinematix'); ?>"><span class="tile-title"><?php _e('MEMBERS', 'Cinematix'); ?></span></a>
	<a class="tile tile-groups" href="<?php echo home_url(); ?>/<?php _e('groups', 'Cinematix'); ?>"><span class="tile-title"><?php _e('GROUPS', 'Cinematix'); ?></span></a>
	<a class="tile tile-activity" href="<?php echo home_url(); ?>/<?php _e('activity', 'Cinematix'); ?>"><span class="tile-title"><?php _e('ACTIVITY', 'Cinematix'); ?></span></a>
	
	<a class="tile tile-forums" href="<?php echo home_url(); ?>/<?php _e('forums', 'Cinematix'); ?>"><span class="tile-title"><?php _e('FORUMS', 'Cinematix'); ?></span></a>
</div><!-- #header-right -->

<?php do_action( 'bp_header' ) ?>
</div><!-- #header-container -->

</header>

<div id="header-bar">
<div id="header-bar-container">
	

	<div id="navigation-400">
	<form name="site-menu" action="#" method="post">
		<?php
		wp_nav_menu_select(
    		array(
       			'theme_location' => 'select-menu'
    			)
		);
		?>
	</form>
	</div>
<!--Search box on the top bar-->
	<!--<div id="bar-right">
	 	<?php get_search_form(); ?>
        	</div><!--bar-right ends-->

</div><!-- #header-bar-container -->
</div><!-- #header-bar -->

<div class="clear"></div>

<div id="main">

<div id="container">