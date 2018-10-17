<?php /* Template Name: Alumni Stories Page Template */ get_header(); ?>

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

						<div class="nu__fixed-column" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/global_network_lifelong_connections_bg.png); background-size: cover; background-position: center center;">
							<div>
								<p><a class="js-back-page" href="<?=home_url()?>/pride-and-support/#alumnistories"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a></p>
								<h2>Alumni forge <span class="nu__span-bold">lifelong connections</span> </h2>
								<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/empower/lifelongconnections.png" alt="global network lifelong connections">
							</div>
						</div><!--end nu__fixed-column-->

						<div class="nu__scroll-column">
							<div>
								<h3>Nurturing young innovators</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/pallota.jpg" alt="James Pallotta, MBA’81">
										<!-- <figcaption>Photo courtesy of Dan Concessi. Photo courtesy of Matt Flannery</figcaption> -->
									</figure>
									<p>James Pallotta, MBA’81, and his family gave $10 million to Northeastern for innovation initiatives they are planning in consultation with university President Joseph E. Aoun. Pallotta, who founded the investment firm the Raptor Group and owns a controlling interest in the Italian soccer team A.S. Roma, wants to propel Northeastern’s students to the forefront of innovation.</p>
								</article>

								<h3>Supporting PhD student&ndash;researchers</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/sami.jpg" alt="Sami Alsaif">
										<!-- <figcaption>Office of Alumni Relations (Basimike with U.S. Rep. John Lewis, of Georgia, at a Northeastern event on Martha’s Vineyard)</figcaption> -->
									</figure>
									<p>Parents Sami Alsaif and Hend Dabbous, PNT’21, established the Alsaif Family Doctoral Fellowship in the College of Engineering, one of the first ever endowed at the university. Fellow Jennifer Rodowicz studies the effect of the internet of things on smart medical implants, while Vikrant Shah is creating autonomous robots for use in harsh arctic environments.</p>
									<!-- <blockquote>
										“I had advisors and professors who not only ensured that I was on top of my coursework, but more importantly, cared about me.”
										<small><span class="nu__span-bold">Binja Basimike</span>, BHS’12, MPH’14</small>
									</blockquote> -->
								</article>

								<h3>Preparing tomorrow’s coders</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/coders.jpg" alt="scholarships">
										<!-- <figcaption>Photo courtesy of Hayley Meng</figcaption> -->
									</figure>
									<p>More than $3.2 million in gifts for scholarships in Northeastern’s master’s degree program in computer science, Align, came from anonymous donors, as well as corporations that include Dell, Providence St. Joseph Health, and Wayfair. The scholarships will enable non&ndash;computer science majors to reinvent their careers and find success in the high&ndash;demand field of coding.</p>
								</article>

								<h3>Sustaining the seafood supply</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/seafood.jpg" alt="genome">
										<!-- <figcaption>Photo: Heratch Ekmekjian</figcaption> -->
									</figure>
									<p>Northeastern’s Ocean Genome Legacy received support from the Paul Angell Foundation and the Seafood Industry Research Fund for research on seafood fraud, the unlawful mislabeling of species. Part of the Coastal Sustainability Institute, OGL works to preserve marine diversity and sustain the global seafood supply.</p>
								</article>

								<h3>Creating new tools to fight cancer</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/cancer.jpg" alt="Richard and Susan Smith Family Foundation">
										<!-- <figcaption>Photo: Mariah Tauger</figcaption> -->
									</figure>
									<p>The Richard and Susan Smith Family Foundation bestowed a Smith Family Award for Excellence in Biomedical Research to Assistant Professor Bryan Spring to develop techniques to visualize and study brain cancer. Spring’s group bridges biophysics, biomedical optics, and cancer biology to target micrometastases that, left behind by standard therapies, limit our ability to cure many cancers.</p>
								</article>

								<h3>Promoting justice, curbing violence</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/arnold.jpg" alt="Arnold Foundation">
										<!-- <figcaption>Photo courtesy of Seema Brodie</figcaption> -->
									</figure>
									<p>The Arnold Foundation awarded nearly $250,000 to Anthony Braga, director of the School of Criminology and Criminal Justice, to enhance procedural justice in "hot spots policing," which focuses on high&ndash;crime urban areas. Braga’s work in reducing violence in disadvantaged neighborhoods has earned national recognition.</p>
								</article>

								<h3>Advancing study of the humanities</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/rossetti.jpg" alt="Rossetti">
										<!-- <figcaption>Photo: Brooks Canaday </figcaption> -->
									</figure>
									<p>Ronald Rossetti, DMSB’66, H’06, and his wife, Linda, established the Rossetti Family Program for the Advancement of the Humanities and the Ronald L. and Linda A. Rossetti Chair for the Humanities at the College of Social Sciences and Humanities. The first incumbent, Associate Professor of Philosophy Rory Smead, will inspire students majoring in science, engineering, and business to explore the liberal arts.</p>
								</article>

								<h3>Deepening understanding of international business</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/sheila.jpg" alt="Sheila">
										<!-- <figcaption>Photo courtesy of Michael Peabody</figcaption> -->
									</figure>
									<p>University Distinguished Professor Sheila M. Puffer has been blazing trails in international business and entrepreneurship, particularly in Russia, for three decades. Her recent bequest to endow the Sheila M. Puffer Research Professorship of International Business in the D’Amore&ndash;McKim School of Business is a gift to students in perpetuity.</p>
								</article>

								<h3>Championing coaching excellence</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/flaman.jpg" alt="Jim Madigan, DMSB’86">
										<!-- <figcaption>Photo courtesy of Michael Peabody</figcaption> -->
									</figure>
									<p>Ice hockey fans united to create the first endowed coaching fund at Northeastern, the Fernie Flaman Endowed Men’s Hockey Coach Fund. Men's ice hockey coach Jim Madigan, DMSB'86, is the first beneficiary. The late, legendary Flaman coached for 19 seasons, achieving 255 victories, a Northeastern coaching record.</p>
								</article>
								<a class="js-back-page nu__mobile-back" href="<?=home_url()?>/pride-and-support/#alumnistories"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a>
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
