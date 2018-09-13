<?php /* Template Name: Mclarney Page Template */ get_header(); ?>

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
							<!-- <div class="nu__vertical-dash"></div> -->

						</div>

						<div class="nu__fixed-column">
							<div>
								<p><a class="js-back-page" href="<?=home_url()?>/empower/#giveback"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a></p>
								<h2>Top university scholar:<br> Ian McLarney </h2>
								<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/mclarney/left_col_tree_l.png" alt="donor support tree">
							</div>
						</div><!--end nu__fixed-column-->

						<div class="nu__scroll-column">
							<div>
								<h3>Ian McLarney, a business administration major focused on finance, is but one example of the Empower campaign’s impact. Donors’ support enriched experiential learning for McLarney, setting him on a path to business innovation and leadership.</h3>
								<h3>Donors’ support opens doors to opportunity</h3>

								<article>
									<div class="nu__accord-item">
										<div class="nu__item-wrap">
											<img id="nu__ian-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mclarney/alan_richard2.png" alt="Richard D’Amore, DMSB’76, and Alan McKim, DMSB’88">

											<div class="nu__accord-copy">
												<small id="nu__small-1">Alumni, campaign co-chairs, and benefactors</small>
												<p id="nu__small-2" class="nu__copy-1">Richard D’Amore, DMSB’76, and Alan McKim, DMSB’88</p>
											</div><!--end nu__accord-copy-->
											<span class="nu__accord-arrow"><i data-id="1" class="js-arrow fa fa-angle-double-down" aria-hidden="true"></i></span>
											<hr>
										</div>
										<div class="nu__accord-hidden" id="nu__accord-1">
											<p>Make a transformational $60 million gift to enrich the faculty and student experience at the renamed D’Amore-McKim School of Business, which in 2012 welcomes McLarney.</p>
										</div><!--end nu__accord-hidden-->
									</div><!--end nu__accord-item-->

									<div class="nu__accord-item">
										<div class="nu__item-wrap">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mclarney/eric_jean.png" alt="Eric and Jean Young">
											<span class="nu__accord-arrow"><i data-id="2" class="js-arrow fa fa-angle-double-down" aria-hidden="true"></i></span>
											<div class="nu__accord-copy">
												<small>Northeastern parents and donors </small>
												<p class="nu__copy-2">Eric and Jean Young (with son Ryan, S’17) </p>
											</div><!--end nu__accord-copy-->
											<hr>
										</div>
										<div class="nu__accord-hidden" id="nu__accord-2">
											<p>Lend ongoing strategic guidance and generous support to Scout, a student-led design studio at the College of Arts, Media and Design. At Scout, McLarney holds directorships in both marketing and operations.</p>
										</div><!--end nu__accord-hidden-->
									</div><!--end nu__accord-item-->

									<div class="nu__accord-item">
										<div class="nu__item-wrap">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mclarney/john_hatso.png" alt="John Hatsopoulos, LA’59">
											<span class="nu__accord-arrow"><i data-id="3" class="js-arrow fa fa-angle-double-down" aria-hidden="true"></i></span>
											<div class="nu__accord-copy">
												<small>Alumnus and donor </small>
												<p class="nu__copy-3">John Hatsopoulos, LA’59, H’99</p>
											</div><!--end nu__accord-copy-->
											<hr>
										</div>
										<div class="nu__accord-hidden" id="nu__accord-3">
											<p>Champions Northeastern’s emerging business leaders through the Entrepreneurship and Innovation Fund, which supports students in co-ops at fledgling companies. Startup Adeo Health Science hires McLarney for a co-op in product development.</p>
										</div><!--end nu__accord-hidden-->
									</div><!--end nu__accord-item-->

									<div class="nu__accord-item">
										<div class="nu__item-wrap">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mclarney/many_donors.png" alt=">Many donors">
											<span class="nu__accord-arrow"><i data-id="4" class="js-arrow fa fa-angle-double-down" aria-hidden="true"></i></span>
											<div class="nu__accord-copy">
												<small>Many donors  </small>
												<p class="nu__copy-4">who include alumni, parents, faculty, staff, students, and friends</p>
											</div><!--end nu__accord-copy-->
											<hr>
										</div>
										<div class="nu__accord-hidden" id="nu__accord-4">
											<p>Make gifts for use by the university for any purpose, including travel and study abroad by high-achieving students like McLarney.</p>
										</div><!--end nu__accord-hidden-->
									</div><!--end nu__accord-item-->
								</article>

								<h3>Experiential learning empowers students</h3>
								<article>
									<p>With university support, McLarney takes full advantage of the Northeastern experience:</p>
									<ul>
										<li>Completes a Dialogue of Civilizations course in Singapore and Indonesia;</li>
										<li>Helps map a Boston neighborhood to improve residents’ access to healthy foods; and</li>
										<li>Performs community service in Kentucky, and co-leads service projects in Colorado and Costa Rica.</li>
									</ul>
								</article>
								<h3>Students serve society as innovators and leaders</h3>
								<article>
									<p>Upon graduating, McLarney lands the role of analyst at Mavrck, a marketing technology company founded by three D’Amore-McKim alumni. Having joined Northeastern’s growing network, this aspiring CEO aims to pay it forward.</p>
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
