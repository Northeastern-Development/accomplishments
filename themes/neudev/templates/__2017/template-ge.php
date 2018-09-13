<?php /* Template Name: GE Story Page Template */ get_header(); ?>

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

						<div class="nu__fixed-column" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/learning/ge_bg.jpg); background-size: cover; background-position: center center;">
							<div>
								<p><a class="js-back-page" href="<?=home_url()?>/experiential-learning/#partnership"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a></p>
								<h2>Accelerating GE workers </h2>
							</div>
						</div><!--end nu__fixed-column-->

						<div class="nu__scroll-column">
							<div>
								<h3>A partnership to advance talent</h3>
								<article>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/partnership_ge_story.jpg" alt="Partnerships GE">
									<p>In 2016, Northeastern was one of eight colleges and universities named to the U.S. Department of Education’s new experiment, Educational Quality through Innovation Partnerships. EQUIP encourages creative collaborations between universities and nontraditional education providers to improve talent pipelines and job readiness for the 21st century. Through EQUIP, Northeastern is partnering with General Electric to offer an accelerated Bachelor of Science degree in advanced manufacturing. Northeastern faculty will provide online course instruction, EQUIP students will apply their knowledge in manufacturing environments through experiential learning opportunities, and GE practitioners will assess student performance. Students can use federal financial aid toward this new degree program, which is believed to be the first of its kind in the nation.    </p>
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
