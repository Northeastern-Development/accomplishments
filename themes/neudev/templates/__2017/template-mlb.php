<?php /* Template Name: MLB Story Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>



		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>
				<section>

					<div class="nu__full-container">
						<div id="nu__dash-wrapper">
							<div class="nu__vertical-dash"></div>


						</div>

							<div class="nu__fixed-column" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/learning/partnership_mlb_bg.jpg); background-size: cover; background-position: center center;">
							<div>
								<p><a class="js-back-page" href="<?=home_url()?>/experiential-learning/#partnership"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a></p>
								<h2>Major league opportunity</h2>
							</div>
						</div><!--end nu__fixed-column-->

						<div class="nu__scroll-column">
							<div>
								<h3>First MLB higher ed partnership</h3>
								<article>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/partnership_mlb_story.jpg" alt="Partnerships MLB">
									<p>In June 2017, Major League Baseball selected Northeastern over a competitive field of other universities to establish the sport’s first higher education partnership. Professional baseball players can participate in a wide range of Northeastern’s educational programs—including in-person or online courses—during and after their baseball careers. Players can work towards bachelor’s degrees in high-demand fields, as well as master’s degrees and certificates in subjects like data analytics, sports leadership, digital media, and project management. The university will also provide players with an advisor who will offer academic and career counseling; develop tailored degrees and career plans; and act as a dedicated point of contact for players seeking guidance.  </p>
								</article>


							</div>
						</div><!--end nu__scroll-column-->
					</div><!--end nu__full-container-->

					<div class="clear"></div>

				</section><!--end section-->
				<div class="clear"></div>

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
