<?php
/**
 * Template Name: Team Template
 *
 * @author Bowe Frankema <bowe@presscrew.com>
 * @link http://infinity.presscrew.com/
 * @copyright Copyright (C) 2010-2011 Bowe Frankema
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package Infinity
 * @subpackage templates
 * @since 1.0
 */

	infinity_get_header();
?>
	<div id="content-team" class="grid_24" role="main">
		<?php
			do_action( 'open_content' );
			do_action( 'open_page' );
		?>
		<div class="page-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="team-list clearfix">
         <h3 class="team-header">OCSDNet Advisors</h3>
         
	        <ul class="clearfix boxinner">
	            <li>
	                <div class="team-pic">
	                    <img src="<?php echo infinity_option_image_url( 'advisor_1_image', full ); ?>">
	                </div>
	                <div class="team-info">
	                <h3><?php echo infinity_option_get( 'advisor_1_name' ); ?></h3>
	                <div class="team-desc">
	                <p>
	                <?php echo infinity_option_get( 'advisor_1_bio' ); ?>
	                </p>
	                </div>
	                <div class="team-url"><strong><?php echo infinity_option_get( 'advisor_1_link_title' ); ?> </strong> &nbsp; <a href="<?php echo infinity_option_get( 'advisor_1_link' ); ?>" target="_blank"><?php echo infinity_option_get( 'advisor_1_link' ); ?></a></div>
	                </div>
	            </li>
	            
	            <li>
	                <div class="team-pic">
	                    <img src="<?php echo infinity_option_image_url( 'advisor_2_image', full ); ?>">
	                </div>
	                <div class="team-info">
	                <h3><?php echo infinity_option_get( 'advisor_2_name' ); ?></h3>
	                <div class="team-desc">
	                <p>
	                <?php echo infinity_option_get( 'advisor_2_bio' ); ?>
	                </p>
	                </div>
	                <div class="team-url"><strong><?php echo infinity_option_get( 'advisor_2_link_title' ); ?> </strong> &nbsp; <a href="<?php echo infinity_option_get( 'advisor_2_link' ); ?>" target="_blank"><?php echo infinity_option_get( 'advisor_2_link' ); ?></a></div>
	                </div>
	            </li>
	            
	            <li>
	                <div class="team-pic">
	                    <img src="<?php echo infinity_option_image_url( 'advisor_3_image', full ); ?>">
	                </div>
	                <div class="team-info">
	                <h3><?php echo infinity_option_get( 'advisor_3_name' ); ?></h3>
	                <div class="team-desc">
	                <p>
	                <?php echo infinity_option_get( 'advisor_3_bio' ); ?>
	                </p>
	                </div>
	                <div class="team-url"><strong><?php echo infinity_option_get( 'advisor_3_link_title' ); ?> </strong> &nbsp; <a href="<?php echo infinity_option_get( 'advisor_3_link' ); ?>" target="_blank"><?php echo infinity_option_get( 'advisor_3_link' ); ?></a></div>
	                </div>
	            </li>
	            
	            <li>
	                <div class="team-pic">
	                    <img src="<?php echo infinity_option_image_url( 'advisor_4_image', full ); ?>">
	                </div>
	                <div class="team-info">
	                <h3><?php echo infinity_option_get( 'advisor_4_name' ); ?></h3>
	                <div class="team-desc">
	                <p>
	                <?php echo infinity_option_get( 'advisor_4_bio' ); ?>
	                </p>
	                </div>
	                <div class="team-url"><strong><?php echo infinity_option_get( 'advisor_4_link_title' ); ?> </strong> &nbsp; <a href="<?php echo infinity_option_get( 'advisor_4_link' ); ?>" target="_blank"><?php echo infinity_option_get( 'advisor_4_link' ); ?></a></div>
	                </div>
	            </li>
	            
	            <li class="limit-height">
	                <div class="team-pic">
	                    <img src="<?php echo infinity_option_image_url( 'advisor_5_image', full ); ?>">
	                </div>
	                <div class="team-info">
	                <h3><?php echo infinity_option_get( 'advisor_5_name' ); ?></h3>
	                <div class="team-desc">
	                <p>
	                <?php echo infinity_option_get( 'advisor_5_bio' ); ?>
	                </p>
	                </div>
	                <div class="team-url"><strong><?php echo infinity_option_get( 'advisor_5_link_title' ); ?> </strong> &nbsp; <a href="<?php echo infinity_option_get( 'advisor_5_link' ); ?>" target="_blank"><?php echo infinity_option_get( 'advisor_5_link' ); ?></a></div>
	                </div>
	            </li>
	        </ul>
	         <h3 class="team-header">Research Coordination</h3>
         
	        <ul class="clearfix boxinner">
	            <li>
	                <div class="team-pic">
	                    <img src="<?php echo infinity_option_image_url( 'research_coordinator_1_image', full ); ?>">
	                </div>
	                <div class="team-info">
	                <h3><?php echo infinity_option_get( 'research_coordinator_1_name' ); ?></h3>
	                <div class="team-desc">
	                <p>
	                <?php echo infinity_option_get( 'research_coordinator_1_bio' ); ?>
	                </p>
	                </div>
	                <div class="team-url"><strong><?php echo infinity_option_get( 'research_coordinator_1_link_title' ); ?></strong> &nbsp; <a href="<?php echo infinity_option_get( 'research_coordinator_1_link' ); ?>" target="_blank"><?php echo infinity_option_get( 'research_coordinator_1_link' ); ?></a></div>
	                </div>
	            </li>
	            
	            <li>
	                <div class="team-pic">
	                    <img src="<?php echo infinity_option_image_url( 'research_coordinator_2_image', full ); ?>">
	                </div>
	                <div class="team-info">
	                <h3><?php echo infinity_option_get( 'research_coordinator_2_name' ); ?></h3>
	                <div class="team-desc">
	                <p>
	                <?php echo infinity_option_get( 'research_coordinator_2_bio' ); ?>
	                </p>
	                </div>
	                <div class="team-url"><strong><?php echo infinity_option_get( 'research_coordinator_2_link_title' ); ?></strong> &nbsp; <a href="<?php echo infinity_option_get( 'research_coordinator_2_link' ); ?>" target="_blank"><?php echo infinity_option_get( 'research_coordinator_2_link' ); ?></a></div>
	                </div>
	            </li>
	            
	            
	         </ul>
	         <div class="clr"></div>
	         <h3 class="team-header">Network Coordination</h3>
	         <div class="team-summary">
	            <h4>iHub, Nairobi </h4>
	            <p>iHub is Nairobi’s Innovation Hub for the Technology Community. Established in 2010, iHub focuses on supporting the local tech community to bring ideas to life. iHub’s mission is to catalyze Nairobi’s tech community’s growth - accomplished by surfacing information, connecting people, and supporting start-ups. </p>
	          </div>
	         <ul>
	            <li>
	                <div class="team-pic">
	                    <img src="<?php echo infinity_option_image_url( 'network_coordinator_1_image', full ); ?>">
	                </div>
	                <div class="team-info">
	                <h3><?php echo infinity_option_get( 'network_coordinator_1_name' ); ?> </h3>
	                <div class="team-desc">
	                <p>
	                <?php echo infinity_option_get( 'network_coordinator_1_bio' ); ?> 
	                </p>
	                </div>
	                <div class="team-url"><strong><?php echo infinity_option_get( 'network_coordinator_1_link_title' ); ?> </strong> &nbsp; <a href="<?php echo infinity_option_get( 'network_coordinator_1_link' ); ?>" target="_blank"><?php echo infinity_option_get( 'network_coordinator_1_link' ); ?></a></div>
	                </div>
	            </li>
	            
	            <li>
	                <div class="team-pic">
	                    <img src="<?php echo infinity_option_image_url( 'network_coordinator_2_image', full ); ?>">
	                </div>
	                <div class="team-info">
	                <h3><?php echo infinity_option_get( 'network_coordinator_2_name' ); ?> </h3>
	                <div class="team-desc">
	                <p>
	                <?php echo infinity_option_get( 'network_coordinator_2_bio' ); ?> 
	                </p>
	                </div>
	                <div class="team-url"><strong><?php echo infinity_option_get( 'network_coordinator_2_link_title' ); ?> </strong> &nbsp; <a href="<?php echo infinity_option_get( 'network_coordinator_2_link' ); ?>" target="_blank"><?php echo infinity_option_get( 'network_coordinator_2_link' ); ?></a></div>
	                </div>
	            </li>
	          </ul>
	          <div class="clr"></div>
        
    </div>
			
			
		</div><!-- .page -->
		
		<?php
			do_action( 'close_page' );
			do_action( 'close_content' );
		?>
	</div>

<?php
	infinity_get_footer();
?>
