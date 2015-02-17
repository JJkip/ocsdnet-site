<?php
/*
Template Name: Password Recovery
*/
?>

<?php get_header(); ?>

	<div id="content">
	<div class="page-title-bold"><?php the_title(); ?></div>

	<?php if ( is_user_logged_in() ) : ?>

		<center><h3><?php _e('You are logged in! Redirecting to your profile.', 'Cinematix'); ?></h3></center><br /><br /><br />

		<script type="text/javascript">
		<!--
		window.location = "<?php echo bp_loggedin_user_domain() ?>"
		//-->
		</script>

	<?php else : ?>
<br /><br />

			<form method="post" action="<?php echo site_url('wp-login.php?action=lostpassword', 'login_post') ?>" id="page-login-form" class="standard-form">
			<p><?php echo of_get_option('t-39', 'Please enter your username or email address. You will receive a link to create a new password via email.' ); ?></p>
			<div class="username">
				<label for="user_login"><?php _e('Username or Email', 'Cinematix' ); ?>: </label>
				<input type="text" name="user_login" class="input" value="" size="20" id="page-user-pass" tabindex="1001" />
			</div>
			<div class="login_fields">
				<?php do_action('login_form', 'resetpass'); ?>
				<input type="submit" name="user-submit" value="<?php _e('Reset my password', 'Cinematix' ); ?>" id="wp-submit" tabindex="1002" />
				<?php $reset = $_GET['reset']; if($reset == true) { echo '<br /><br /><br /><br /><br /><p class="sent-message">' . _e('A message will be sent to your email address.', 'Cinematix' ) . '</p>'; } ?>
				<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>?reset=true" />
				<input type="hidden" name="user-cookie" value="1" />
			</div>
			</form>

	<?php endif; ?>


	</div><!-- #content -->

<div class="clear"></div>

<?php get_footer(); ?>
