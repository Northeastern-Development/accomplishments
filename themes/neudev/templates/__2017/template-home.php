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
							<h1>The <span>Global</span> University <span>System</span></h1>
							<h2>Pushing boundaries. Making communities agile and creative.</h2>
						</div>
					</div>
				</div>

				<div class="clear"></div>

				<div class="wrapper nu__stats" >
					<div class="nu__map-wrap" >
						<h2>A university on the move</h2>
						<div class="nu__full" >
							<div class="nu__half"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/graphic.png" alt="92% graphic"></div>
							<div class="nu__half">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/89_stat.png" alt="89% stat">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/top_50_stat.png" alt="top 50 stat">
								<!-- <h2>89%</h2>
								<p>of 2016 graduates are <span class="nu__span-bold nu__span-red">employed</span> doing work related to <span class="nu__span-bold nu__span-red">their major</span> </p>
								<h2>Top 50</h2>
								<p>U.S. News Top 50 for <span class="nu__span-bold nu__span-red">five consecutive years</span></p> -->
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
						<h4>Empower campaign</h4>
						<div>
							<h3><a href="<?=home_url()?>/empower-campaign">A <span class="nu__span-bold">global web</span> of alumni, faculty, students, and other supporters <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></h3>
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
	
</body>
</html>
