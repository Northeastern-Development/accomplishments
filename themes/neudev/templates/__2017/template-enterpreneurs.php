<?php /* Template Name: Entrepreneurs Page Template */ get_header(); ?>

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

						<div class="nu__fixed-column" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/entrepreneurs_bg.png); background-size: cover; background-position: center center;">
							<div>
								<p><a class="js-back-page" href="<?=home_url()?>/research#collage"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a></p>
								<h2>Creativity unleashed in every direction</h2>
							</div>
						</div><!--end nu__fixed-column-->

						<div class="nu__scroll-column">
							<div>
								<h3>Portable energy boost</h3>
								<article>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/portable_energry_boost_combo.png" alt="Portable energy boost 2 people">
									<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/wheelchair.jpg" alt="wheelchair"> -->
									<p>A startup launched by two Northeastern engineering graduates, Louise Katzovitz, E’17, and Martin Bujwid, E’17, eases the physical burden placed on patient escorts and other caregivers at hospitals and other healthcare settings. Power Assist Solutions offers a detachable device that helps power manually operated wheelchairs, thereby reducing the amount of energy staff members exert when pushing patients from place to place. </p>
								</article>
								<h3>Building virtual communities</h3>
								<article>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/virtual_communities_combo.png" alt="Building virtual communities 2 people">
									<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/iphone.jpg" alt="iphone"> -->
									<p>Amino, a mobile-​​based social service aimed at building online communities around niche interests, received $19 million in funding last December from six venture capital firms. The company was launched in 2011 by Ben Anderson, AMD’12, and Yin Wang, PhD’11. Since then, its 250 iPhone and Android apps—ranging from the Anime amino to the Minecraft amino—have been downloaded more than 13 million times in more than 50 countries.  </p>
								</article>
								<h3>Faculty ventures shine</h3>
								<article>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/faculty_ventures_shine.jpg" alt="Faculty ventures shine">
									<p>Two faculty ventures earned prizes at the MassChallenge Boston startup competition. 3DFortify, which uses 3-D printing and magnetics to create strong, lightweight composites from resin and carbon fibers, received a $50,000 Gold prize. The spinout from the lab of Assistant Professor of Mechanical and Industrial Engineering Randall Erb was one of 16 “highest impact startups.” QSM Technologies, which emerged from Associate Professor Edgar Goluch’s chemical engineering lab, won an In-Kind Silver prize. QSM uses a proprietary instrument sensor to identify common bacteria in bodily fluids within one minute at point of care. </p>
								</article>
								<h3>Game-changing e-commerce</h3>
								<article>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/game_changing.jpg" alt="Game-changing e-commerce">
									<p>Alumnus Ronaldo Mouchawar, E’88, ME’90, who launched the e-commerce site Souq.com in 2005, sold what has become one of the Middle East’s most recognized online retailers to Amazon for more than $650 million. “[The Arab world] is full of young people and small- and medium-sized businesses, but there was no e-commerce platform to connect those businesses,” said Mouchawar. “We knew that building one would be a huge challenge, but that it could improve the lives of people in the region.”</p>
								</article>
								<h3>Healthy snacking</h3>
								<article>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/healthy_snacking_combo.png" alt="Healthy snacking 2 people">
									<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/candy_pieces.jpg" alt="pieces of candy"> -->
									<p>The co-founders of Health by Chocolate Bakery, Ara Josefsson, DMSB’16, MS’17, and Jaida Mercurio, DMSB/AMD’21, have created handcrafted chocolates and baked goods that are high in protein and low in fat and carbs. Candies in three flavors—apple pie, birthday cake, and chocolate almond—contain fewer than 50 calories apiece. Organic, gluten-free, and antioxidant-rich, product ingredients include dark and white chocolate, coconut flakes, chia seeds, cinnamon, and whey protein. “There is nothing like this on the market,” said Josefsson. </p>
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
