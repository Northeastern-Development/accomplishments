<?php /* Template Name: Titcomb Page Template */ get_header(); ?>

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
								<h2>Student entrepreneur Abbey Titcomb, COE’18 </h2>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/titcomb/left_col-tree_l.png" alt="donor support tree">
							</div>
						</div><!--end nu__fixed-column-->

						<div class="nu__scroll-column">
							<div>
								<h3>Mechanical engineering student Abbey Titcomb had an idea for keeping students safe on campus. With the help of meaningful scholarships and innovative, donor-supported programming, she made that idea a reality.</h3>
								<h3>Sowing the seeds of empowerment</h3>
								<article>

									<div class="nu__accord-item">
										<div class="nu__item-wrap">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/titcomb/ann_mike_sherman.png" alt="Ann and Mike Sherman">
											<span class="nu__accord-arrow"><i data-id="1" class="js-arrow fa fa-angle-double-down" aria-hidden="true"></i></span>
											<div class="nu__accord-copy">
												<small>supporters</small>
												<p class="nu__copy-1">Ann and Michael Sherman, E’68</p>
											</div><!--end nu__accord-copy-->
											<hr>
										</div>
										<div class="nu__accord-hidden" id="nu__accord-1">
											<p>Launch the Michael J. and Ann Sherman Center for Engineering Entrepreneurship Education, which provides funding for co-ops, including the one that allows Titcomb to work on her venture full time.</p>
										</div><!--end nu__accord-hidden-->
									</div><!--end nu__accord-item-->

									<div class="nu__accord-item">
										<div class="nu__item-wrap">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/titcomb/daniel_gregory.png" alt="Daniel Gregory">

											<div class="nu__accord-copy">
												<small>Faculty and donor</small>
												<p class="nu__copy-2">Daniel Gregory </p>
											</div><!--end nu__accord-copy-->

											<img id="nu__lea" src="<?php echo get_stylesheet_directory_uri(); ?>/img/titcomb/lea_dunton.png" alt="Lea Anne Dunton">
											<div class="nu__accord-copy" id="nu__lea-copy">
												<small>parent and donor </small>
												<p class="nu__copy-2">Lea Anne Dunton</p>
											</div><!--end nu__accord-copy-->
											<span class="nu__accord-arrow"><i data-id="2" class="js-arrow fa fa-angle-double-down" aria-hidden="true"></i></span>
										<hr>
										</div>
										<div class="nu__accord-hidden" id="nu__accord-2">
											<p>Are just two of the many donors to Mosaic, the alliance of student entrepreneurship organizations. Mosaic supports the venture incubator IDEA, which provides guidance and funding for Titcomb’s startup.</p>
										</div><!--end nu__accord-hidden-->
									</div><!--end nu__accord-item-->

									<div class="nu__accord-item">
										<div class="nu__item-wrap">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/titcomb/many_donors.png" alt="Many donors">
											<span class="nu__accord-arrow"><i data-id="3" class="js-arrow fa fa-angle-double-down" aria-hidden="true"></i></span>
											<div class="nu__accord-copy">
												<small>General donors to Northeastern</small>
												<p class="nu__copy-3">who include alumni, parents, faculty, staff, students, and friends</p>
											</div><!--end nu__accord-copy-->
											<hr>
										</div>
										<div class="nu__accord-hidden" id="nu__accord-3">
											<p>Make gifts that support the IP CO-LAB, the Northeastern intellectual property law clinic, where Kacy Cuenta, L’17, consults with Titcomb on IP rights, enabling the launch of her venture.</p>
										</div><!--end nu__accord-hidden-->
									</div><!--end nu__accord-item-->

								</article>

								<h3>Philanthropy gives birth to innovation:<br>The Knightly App</h3>
								<article>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/titcomb/philanthropy_left.png" alt="knightly"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/titcomb/philanthropy_right.png" alt="innovation">
									<!-- <small>McLarney takes full advantage of the Northeastern experience:</small> -->
									<small>Helps students stay safe on campus</small>
									<!-- <p>Since launching “the ultimate safety device and network for college students,” Titcomb has hired employee number two, an engineer, and developed a full prototype for Knightly’s network, web and mobile applications, and accompanying hardware. She plans to launch the next version of Knightly in January 2018.</p>
								 -->
								 <p>Titcomb designs the Knightly app and a portable, push-button device that lets college students alert their friends or summon campus police whenever they feel unsafe. She hires a second employee, an engineer; develops a prototype for Knightly’s network, web, and mobile applications, as well as accompanying hardware; and enlists students to begin testing them.</p>
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
