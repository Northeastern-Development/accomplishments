<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<div class="nu__full-container">
					<div class="nu__full-hero">
						<div class="wrapper nu__hero-text">
							<h1>The Power of Our Network</h1>
							<h2>Northeastern is transforming the face of higher education.</h2>
						</div>
					</div>
				</div>

				<div class="clear"></div>

				<div class="wrapper nu__stats js-home1" >
					<div class="nu__map-wrap" >
						<h2>The university's reach, amplified</h2>
						<div class="nu__full" >
							<div class="nu__half">
									 <div id="test-circle"></div>

							</div>
							<div class="nu__half">
								<h2 class="js-count1h">229%</h2>
								<!-- <p>of <span class="nu__span-bold nu__span-red">employed</span> 2016 graduates are doing work related to <span class="nu__span-bold nu__span-red">their major</span></p> -->
								<p>Increase in research funding since 2006</p>
								<h2>Top <span class="js-count2">50</span></h2>
								<!-- <p>Northeastern ranked among the top 50 national universites by <i>U.S. News &amp; World Report</i> for <span class="nu__span-bold nu__span-red">five consecutive years</span></p> -->
								<p>Northeastern has been ranked by <i>U.S. News & World Report</i> among the nation’s top 50 universities for six consecutive years.</p>
							</div>
						</div>
						</div>
				</div><!--end wrapper-->

				<div class="clear"></div>

				<div class="flex-container">
				  <div class="flex-item" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/home/ia2017_experiential_learning.jpg); background-size: cover; background-position: center center;">
						<h4>Experiential learning</h4>
						<div>
							<h3><a href="<?=home_url()?>/experiential-learning">A <span class="nu__span-bold">network of experiences</span> making learners more agile <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></h3>
						</div>
				  </div>
				  <div class="flex-item" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/home/ia2017_research.jpg); background-size: cover; background-position: center center;">
						<h4>research</h4>
						<div>
							<h3><a href="<?=home_url()?>/research"><span class="nu__span-bold">Research</span> that crosses boundaries, freeing <span class="nu__span-bold">faculty</span> to innovate <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></h3>
						</div>
				  </div>
				  <div class="flex-item" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/home/ia2017_empower_campaign.jpg); background-size: cover; background-position: center center;">
						<h4>Pride and Support</h4>
						<div>
							<h3><a href="<?=home_url()?>/pride-and-support">A <span class="nu__span-bold">global web</span> of alumni, faculty, students, and other supporters <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></h3>
						</div>
				  </div>
				</div>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'neudev' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
