<div class="clear"></div>
</div> <!-- #container -->

		<?php do_action( 'bp_after_container' ); ?>

</div><!-- main -->

		<?php do_action( 'bp_before_footer'   ); ?>


<footer>
<div id="footer-container">

<div class="footer-left">
<a href="<?php echo of_get_option('fb', 'http://www.facebook.com' ); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri() ?>/images/fb.png" alt="Home" /></a>
</div>

<div class="footer-right"><?php _e('All rights reserved by', 'Cinematix'); ?> <?php bloginfo( 'name' ); ?></div>
</div>
</footer>

<?php do_action( 'bp_after_footer' ); ?>

<?php wp_footer(); ?>

</body>

</html>