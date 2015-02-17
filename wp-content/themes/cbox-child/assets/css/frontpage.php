<?php
  /*  
   * Template Name: Front
   * 
   */
    infinity_get_header();
?>
		<!--<div class="demoHead">

		<div style="margin-top:15px;">
		<div style="float:left"><h3>Examples:</h3></div>
		<div style="float:left" class="demoExampleLinks">
		<a href="index.htm" class="btn selected">Basic Example</a>
		<a href="smartwizard2-vertical.htm" class="btn">Vertical Style</a>
		<a href="smartwizard2-multiple.htm" class="btn">Multiple Wizards</a>
		<a href="smartwizard2-ajax.htm" class="btn">Ajax Contents</a>
		<a href="smartwizard2-validation.htm" class="btn">Step Validation</a>
		<a href="smartwizard-autostep.htm" class="btn">Auto Step buttons</a>
		</div>
		<div style="clear:both;"></div>
		</div>

		</div>-->
		<section class="carousel-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Carousel
						================================================== -->
						<?php
							$slider_Posts = new WP_Query(array(
								'posts_per_page'=>3,
                                                                'orderby'=>'date',
                                                                'order'=>'DESC'
							));
						?>
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<?php if($slider_Posts->have_posts()): ?>
									<ol class="carousel-indicators">
										 <?php $i=0; while($i<3): ?>
											 <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0) echo 'active'; ?>"></li> 
											 <?php $i+=1; ?>
										 <?php endwhile; ?>
									</ol>
									<div class="carousel-inner" role="listbox">
									
											<?php $i=0; while($slider_Posts->have_posts()): $slider_Posts->the_post(); ?>
						
											
												<?php if(has_post_thumbnail()): ?>
													<div class="item<?php if($i === 0) echo ' active'; ?>">

<?php $url = wp_get_attachment_url(get_post_thumbnail_id()); ?>
														<img src="<?php echo $url; ?>"  class="img-responsive"/>
														<div class="container">
															<div class="carousel-caption">
										                                         <div class="bg-overlay"></div>
											                                 <div class="content">
																<h4><?php echo get_the_title(); ?></h4>
																<p>
																	<?php echo substr(get_the_excerpt(), 0, 150); ?>
																	<a href="<?php echo  get_the_permalink(); ?>">read more...</a>
																</p>
                                                                                                                          </div>
															</div>
														</div>
													</div>
												<?php else: ?>
														
													<div class="item<?php if($i === 0) echo ' active'; ?>">
														<div class="container">
                                                                                                                     <span class="alert alert-danger">No Post Thumbnail</span>
                                                                                                                </div>
                                                                                                        </div>
												<?php endif; ?>
												
											<?php $i+=1; endwhile; ?>
									</div>
									<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> 
										<span class="glyphicon slider-arrow-left" aria-hidden="true">
											<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/images/pointer_left.png" class="img-responsive">
										</span>
										<span class="sr-only">Previous</span> 
									</a>
									
									<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> 
										<span class="glyphicon slider-arrow-right" aria-hidden="true">
											<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/images/pointer_right.png" class="img-responsive">
										</span>
										<span class="sr-only">Next</span>
									</a>
							<?php else: ?>
								<span class="alert alert-danger">Sorry no posts here. Please contact admin</span>
							<?php endif; ?>
						</div><!-- /.carousel -->
					</div>
				</div>
			</div>
		</section>
		
		<section class="general-panel-section">
			<div class="container">
				<div class="row">
					
					<!--GRANT WINNERS
						======================================-->
					<?php 
						$grant_Winners = new WP_Query(array(
							'post_type'=>'grant-winners',
							'posts_per_page'=>4,
                                                        'orderby'=>'date',
                                                        'order'=>'DESC'
						)); 
					?>
					<div class="col-md-4">
						<div class="panel panel-default panel-articles">
							<div class="panel-heading">
								<img class="img-responsive pull-left" src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/images/icon-g.png"/>
								<h3 class="panel-title">FROM THE GRANT WINNERS</h3>
							</div>
							<div class="panel-body">
								<?php if($grant_Winners->have_posts()): ?>
									<div class="grant-winners">

										<ul class="list-inline grant-winner">
											<?php while($grant_Winners->have_posts()): $grant_Winners->the_post(); ?>
												<li>
												<?php if(has_post_thumbnail()): ?>
														<div class="grant-winner-image pull-left">
                                                                                                                <?php $url = wp_get_attachment_url(get_post_thumbnail_id()); ?>
														<img src="<?php echo $url; ?>" class="img-responsive">
														</div>
													<?php else: ?>
														<div class="grant-winner-image pull-left">
															<img src="<?php bloginfo('template_url'); ?>/assets/img/default_grant.png" class="img-responsive">
														</div>
													<?php endif; ?>
													
													<div class="grant-winner-article pull-right">
														<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
														<p>
															<a href="<?php the_permalink(); ?>">
																<?php echo get_post_meta(get_the_ID(), 'name', true); ?>
															</a>
														</p>
													</div>
													
												</li>
											<?php endwhile; ?>
										</ul>
									</div>
								<?php else: ?>
									<div class="grant-winners">
										<ul class="list-inline grant-winner">
											<li>
												<div class="grant-winner-article pull-right">
													<p>
														<span class="alert alert-danger">No Posts Here</span>
													</p>
												</div>
											</li>
										</ul>
									</div>
								<?php endif; ?>
							</div>
							<div class="panel-footer more-articles">
								<a href="<?php bloginfo('url'); ?>"> <i class="fa fa-eye"></i>&nbsp;view more</a>
							</div>
						</div>
					</div>
					
					<!--OCSDNET FORUM
						======================================-->
					<?php 
                                              $forum_Topics = new WP_Query(array(
                                                                'post_type'=>'forum', 
                                                                'posts_per_page'=>4,
                                                                'orderby'=>'date',
                                                                'order'=>'DESC'
                                               ));
                                         ?>
					<div class="col-md-4">
						<div class="panel panel-default panel-forum">
							<div class="panel-heading">
								<img class="img-responsive pull-left" src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/images/icon-f.png"/>
								<h3 class="panel-title">CURRENTLY ON OCSDNET FORUM</h3>
							</div>
							<?php if($forum_Topics->have_posts()): ?>
                                                        <div class="panel-body">
								<ul class="list-inline forum-list">
									<?php $i=0; while($forum_Topics->have_posts()): $forum_Topics->the_post(); ?>
                                                                          <li>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									  </li>
									  <?php if($i < 4): ?> <hr /> <?php endif; ?>
                                                                        <?php $i+=1; endwhile; ?>
								</ul>
							</div>
                                                        <?php else: ?>
                                                        <div class="panel-body">
								<ul class="list-inline forum-list">
									<li>
										<span class="alert alert-success">No Forum Topics Available</span>
									</li>
								</ul>
							</div>
                                                        <?php endif; ?>
							<div class="panel-footer more-forum">
								<a href="<?php bloginfo('url'); ?>"> <i class="fa fa-eye"></i>&nbsp;view more</a>
							</div>
						</div>
					</div>
					
					<!--UPCOMING EVENTS
						======================================-->
					<?php 
						$events = new WP_Query(array(
						   'post_type'=>'events',
						   'posts_per_page'=>5,
                                                   'orderby'=>'date',
                                                   'order'=>'DESC'
						)); 
					?>
					
					<div class="col-md-4">
						<div class="panel panel-default panel-events">
							<div class="panel-heading">
								<img class="img-responsive pull-left" src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/images/icon-e.png"/>
								<h3 class="panel-title">UPCOMING EVENTS</h3>
							</div>
							<?php if($events->have_posts()): ?>
								<div class="panel-body">
									<ul class="list-inline all-events">
										<?php $i=0; while($events->have_posts()): $events->the_post(); ?>
											<li>
												<div class="event-month pull-left">
													<h4><?php echo get_post_meta(get_the_ID(), 'month', true); ?></h4>
													<p>
														<?php echo get_post_meta(get_the_ID(), 'start_date', true); ?>-
														<?php echo get_post_meta(get_the_ID(), 'end_date', true); ?>
													</p>
												</div>
												<div class="event-title pull-right">
													<p>
														<?php the_title(); ?>
													</p>
												</div>
											</li>
									       <?php if($i < 4): ?> <hr /> <?php endif; ?>
									    <?php $i+=1; endwhile; ?>
								</div>
								<div class="panel-footer more-events">
									<a href="<?php bloginfo('url'); ?>"> <i class="fa fa-eye"></i>&nbsp;view more</a>
								</div>
							<?php else: ?>
								
								<div class="panel-body">
									<ul class="list-inline all-events">
										<li>
											<div class="event-title pull-right">
												<p>
													<span class="alert alert-warning">No Upcoming events</span>
												</p>
											</div>
										</li>
								</div>
							<?php endif; ?>
						</div>
					</div>
					
					
				</div>
			</div>
		</section>
		
		<section class="subscribe-section">
			<div class="container">
				<div class="subscribe">
					<div class="row">
						<div class="col-md-12">

							<div class="subscribe-header">
								<h3>Receive our Latest Updates</h3>
							</div>
							<div class="subscribe-form">
								<form action="//ocsdnet.us9.list-manage.com/subscribe/post?u=2573d55cb1c95710c47d40efe&amp;id=36369b552b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									<div class="col-md-6">
										<div class="form-group">
							<input type="email" value="" name="EMAIL" class="inputbox form-control email-subscription" id="mce-EMAIL" placeholder="Enter your Email Address" >
										</div>
									</div>
									<div class="col-md-4">
										<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default btn-subscribe">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

						<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				<!--End mc_embed_signup-->
<?php
   infinity_get_footer();
?>