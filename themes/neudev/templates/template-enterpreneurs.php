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
								<h3>Cord Meyer, S'19</h3>
								<article>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/rescue_hound.jpg" alt="Rescue Hound">
									<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/wheelchair.jpg" alt="wheelchair"> -->
									<p>When Cord Meyer, S'19, returned to campus from his first co-op as an EMT, he was astonished by how little his fellow students knew about basic first aid. So he started <a href="https://www.rescuehound.co/" target="_blank">Rescue Hound</a>, a company that provides customizable first aid kits specifically designed for college students. The kits include a brief guide on basic first aid as well as a more detailed booklet on what to do in case of heart attack, animal bites, shock, and more. "Rescue Hound will empower students to help themselves," Meyer says.</p>
								</article>

								<h3>Keith Corso and Evan Eddleston, DMSB’21 and DMSB’22</h3>
								<article>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/busright_may.jpg" alt="BusRight">
									<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/iphone.jpg" alt="iphone"> -->
									<p>Keith Corso, DMSB'21, and Evan Eddleston, DMSB'22, created BusRight, a new app that keeps track of school bus passengers, pinpoints locations of buses in transit, and calculates optimal routes. BusRight won $40,000 at the national undergraduate business pitch competition, E-Fest, and the entrepreneurs believe they can revolutionize the school bus industry. "Bus drivers are home earlier, students are home earlier, and parents know where their kids are. It's a much more efficient system than the one in place today," says Eddleston.</p>
								</article>

								<h3>Professor Raymond Fu</h3>
								<article>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/raymond.jpg" alt="Giaran Raymond Fu">
									<p>Raymond Fu&mdash;who holds joint appointments in the College of Engineering and the College of Computer and Information Science&mdash;is the founder of a startup, Giaran, that uses AI to allow consumers to test cosmetics virtually. The company's technology leverages research that uses computer vision, Big Data, and augmented reality to create novel algorithms for data mining and predictive modeling. </p>
								</article>

								<h3>Katie Wilhoit, SSH’19</h3>
								<article>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/wilhoit.jpg" alt="Katie Wilhoit">
									<p>Student Katie Wilhoit, SSH’19, founded Unsize to aid online shopping and eliminate the need for sizes, labels, and gender boxes. Unsize, which is expected to be available to the public by the end of the year, will use body measurements to determine what clothing will fit online shoppers. In its current iteration, subscribers will receive a device to measure the size of their waist, legs, and arms. "I want to help build confidence and not put people into boxes," she says.</p>
								</article>

								<h3>Professors Yung Joon Jung and Swastik Kar</h3>
								<article>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/kar.jpg" alt="Swastik Kar">
									<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/candy_pieces.jpg" alt="pieces of candy"> -->
									<p>Yung Joon Jung, professor of mechanical and industrial engineering, and Swastik Kar, professor of physics, along with alumnus Dan Esposito, E’08, were awarded $50,000 through the 2017 MassChallenge accelerator for their startup company, Guardion. Their venture is based on technology Kar and Jung have perfected during a five-year collaboration: a radiation sensor that’s at least an order of magnitude more sensitive than existing options. It’s also smaller and less expensive to build. The sensors could be placed strategically all around a city to detect early signs of radiation from nuclear or radiological terrorism.</p>
								</article>

								<h3>Dan Levangie, P’73</h3>
								<article>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/cerevasc.jpg" alt="Cerevasc">
									<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/candy_pieces.jpg" alt="pieces of candy"> -->
									<p>Dan Levangie, P’73, cofounded Cerevasc, a startup that is developing a device to revolutionize the treatment of hydrocephalus, commonly known as water on the brain. The eShunt System simplifies the surgical insertion of brain shunts to drain fluid. Current treatment requires extremely invasive brain surgery, general anesthesia, and several days of hospitalization. The eShunt System will allow placement of a tiny shunt through a vein in the groin, up through the heart, and into the cerebral vasculature, potentially in a one-day procedure using conscious sedation.</p>
								</article>

								<h3>Solomon Mensah, PhD'19</h3>
								<article>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/therapeutic.jpg" alt="therapeutic">
									<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entrepreneurs/candy_pieces.jpg" alt="pieces of candy"> -->
									<p>Doctoral student Solomon Mensah co-founded Therapeutic Innovations in 2014 with the goal of designing cheaper, easier-to-use medical devices for developing countries. The company’s prototype, called the Airbaby, features a face mask that delivers a combination of ambient air and oxygen to babies to help their lungs function and retain oxygen. Therapeutic Innovations was accepted into MassChallenge in 2016 and received a $50,000 grant from the National Science Foundation’s I-CORPS program in 2017.</p>
								</article>

								<a class="js-back-page nu__mobile-back" href="<?=home_url()?>/research#collage"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a>

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
