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
	
	<div class="banner" >
	<div class="container">
    	<ul class="module boxinner-all clearfix">
        	<li>
            	<!--<h3>About OCSDNet:</h3>-->
                <div class="module-text">
                	<?php if( dynamic_sidebar('homepage-left')) : else : endif; ?>
                	<!--<p>An interactive network aiming to gather observations on whether, and under which conditions, open approaches to research and collaboration could lead to various development outcomes in the Global South. </p>-->
                </div>
                <?php if( dynamic_sidebar('homepage-left-link')) : else : endif; ?>
                <!--<a href="http://cbox.ocsdnet.org/about/" class="btn">Read More &rarr;</a>-->
            </li>
            <li>
            	<!--<h3>Who is OCSDNet for? </h3>-->
                <div class="module-text">
                	<?php if( dynamic_sidebar('homepage-middle')) : else : endif; ?>
                	<!--<p>Researchers and practitioners from the Global South working on, or are interested in the role of openness and collaboration in science, as a transformative tool for both development thinking and practices."
					 </p>-->
                </div>
                <?php if( dynamic_sidebar('homepage-middle-link')) : else : endif; ?>
                <!--<a href="purpose.html" class="btn">Read More &rarr;</a>-->
            </li>
            <li>
            	<!--<h3>CALL FOR CONCEPT NOTES: </h3>-->
                <div class="module-text">
                	<?php if( dynamic_sidebar('homepage-right')) : else : endif; ?>
                	<!--<p>Through this call for concept notes, OCSDNet will begin to develop a network of case studies and initiatives which share a set of common elements of openness.
					Up to 15 sub-projects will be funded, which may </p>-->
                </div>
                <?php if( dynamic_sidebar('homepage-right-link')) : else : endif; ?>
                <!--<a href="application.html" class="btn">Read More &rarr;</a>-->
            </li>
        </ul>
    </div>
	</div>
	
	
		<div class="research_areas">
		<div class="container">
			<div class="center">
				<!--<h3>Thematic Research Areas</h3>-->
				<div class="section-intro">
					<?php
						infinity_get_template_part( 'templates/loops/loop', 'page' );
					?>
				<!--<?php if( dynamic_sidebar('research-areas')) : else : endif; ?>-->
				<!--The particular area of focus is whether openness will provide added insights into the role of science, technology, and innovation (STI) in development practices, 
				with the ultimate goal of strengthening local research capacity and informing-->
				</div>
				<!--<h4>Choose a Category To Learn More.. </h4>-->
			</div>
			
			<div class="research-boxes">
				<ul class="boxinner-all clearfix">
					<li><a href="<?php echo infinity_option_get( 'research-area-one-link' ); ?>" class="opt1"><?php echo infinity_option_get( 'research-area-one-title' ); ?></a></li>
					<li><a href="<?php echo infinity_option_get( 'research-area-two-link' ); ?>" class="opt2"><?php echo infinity_option_get( 'research-area-two-title' ); ?></a></li>
					<li><a href="<?php echo infinity_option_get( 'research-area-three-link' ); ?>" class="opt3"><?php echo infinity_option_get( 'research-area-three-title' ); ?></a></li>
					<li><a href="<?php echo infinity_option_get( 'research-area-four-link' ); ?>" class="opt4"><?php echo infinity_option_get( 'research-area-four-title' ); ?></a></li>
				</ul>
			</div>
			
			<!--<div class="center thematic-apply">
			<a href="http://apply.ocsdnet.org/" class="btn btn-round">Apply Now</a>
			</div>-->
		</div>
		</div>
		
	 		<!--<div class="section-newsletter center">
				<div class="newsletter-container">
			    	<h3>Receive our Latest Updates Via Email</h3>
			        <div class="newsletter-tagline"></div>
			        <form action="//ocsdnet.us9.list-manage.com/subscribe/post?u=2573d55cb1c95710c47d40efe&amp;id=36369b552b" method="post">
			        <label for="formfield_email">Email Address:</label>
			        <input type="email" class="inputbox" id="formfield_email" name="formfield[email]" value="" placeholder="Type your Email Address" required />
			        <button class="sbtn" type="submit"> Subscribe </button>
			        </form>
			    </div>
			</div> -->
			
			<div class="section-newsletter center">
						<form action="//ocsdnet.us9.list-manage.com/subscribe/post?u=2573d55cb1c95710c47d40efe&amp;id=36369b552b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div class="newsletter-container">
						
						<div class="mc-field-group">
							<label for="mce-EMAIL">Receive our Latest Updates:
						</label>
							<input type="email" value="" name="EMAIL" class="inputbox" id="mce-EMAIL" placeholder="Type your Email Address" >
						</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;"><input type="text" name="b_2573d55cb1c95710c47d40efe_36369b552b" tabindex="-1" value=""></div>
							<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="sbtn"></div>
							
							</div>
						</form>
						</div>
						<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				<!--End mc_embed_signup-->
	
	
	
		<div class="installation-wrap">
			
		</div>
	
	<!--<div class="installation-wrap">
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
	</div>-->

</div>
<?php
    infinity_get_footer('trial');
?>