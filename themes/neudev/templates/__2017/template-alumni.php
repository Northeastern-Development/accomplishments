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
								<p><a class="js-back-page" href="<?=home_url()?>/empower-campaign/#alumnistories"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a></p>
								<h2>Alumni forge <span class="nu__span-bold">lifelong connections</span> </h2>
								<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/global_network_lifelong_connections.png" alt="global network lifelong connections">
							</div>
						</div><!--end nu__fixed-column-->

						<div class="nu__scroll-column">
							<div>
								<h3>Mentor, mentee</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/pair.jpg" alt="Caroline Fried, SSH’17">
										<!-- <figcaption>Photo courtesy of Dan Concessi. Photo courtesy of Matt Flannery</figcaption> -->
									</figure>
									<p>A partnership began in 2014 between Dan Concessi, DMSB’16 (left), and Matt Flannery, DMSB’89, through the <a href="https://www.northeastern.edu/alumni/regional-co-op-mentor-program/" target="_blank">Northeastern Regional Co-op Mentor Program</a> in New York City. Flannery helped Concessi navigate the finance industry, while Concessi shared his new knowledge and ideas with his mentor. In 2017, both stepped up for Northeastern: Flannery became a leader of the university’s New York City Community, while Concessi volunteered to mentor the next generation of co-op students.</p>
								</article>

								<h3>Young alumni connectors</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/connectors.jpg" alt="Basimike with U.S. Rep. John Lewis, of Georgia">
										<figcaption>Office of Alumni Relations (Basimike with U.S. Rep. John Lewis, of Georgia, at a Northeastern event on Martha’s Vineyard)</figcaption>
									</figure>
									<p>As an international student, Binja Basimike, BHS’12, MPH’14, not only earned two degrees at Northeastern, but also found a place to call home. “I had advisors and professors who not only ensured that I was on top of my coursework, but more importantly, cared about me,” she says. Today she is vice chair of the <a href="https://www.northeastern.edu/alumni/communities/young-alumni-advisory-board/" target="_blank">Young Alumni Advisory Board</a>, working to engage and empower recent graduates. She also helped establish the MMXI Fund, an alumni-led scholarship, and participates in <a href="https://www.northeastern.edu/alumni/women-who-empower/" target="_blank">Women Who Empower</a> and the <a href="https://www.northeastern.edu/alumni/lifelong-learning/lifelong-learning-on-demand/" target="_blank">Lifelong Learning: On Demand</a> series organized by the <a href="https://www.northeastern.edu/alumni/" target="_blank">Office of Alumni Relations</a>. </p>
									<blockquote>
										“I had advisors and professors who not only ensured that I was on top of my coursework, but more importantly, cared about me.”
										<small><span class="nu__span-bold">Binja Basimike</span>, BHS’12, MPH’14</small>
									</blockquote>
								</article>

								<h3>Opening doors to the world</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/haley_meng.jpg" alt="Hayley Meng">
										<!-- <figcaption>Photo courtesy of Hayley Meng</figcaption> -->
									</figure>
									<p>For Haley Meng, SSH’11, Northeastern opened doors to a global network. “My experience living and working in China through the university is a big reason why I decided to move to Hong Kong five years ago.” Eager to give back, Meng is bringing together the Northeastern community in Hong Kong through the West Meets East Club, which she founded in 2015 as a social and events platform to encourage cross-cultural communication. With support from Northeastern’s Hong Kong Community, Meng also organized a kickoff event for alumni and parents in 2017.</p>
								</article>

								<h3>Ties that bond</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/ties_that_bond.jpg" alt="Northeastern’s affinity groups">
										<figcaption>Photo: Heratch Ekmekjian</figcaption>
									</figure>
									<p>Northeastern’s <a href="https://www.northeastern.edu/alumni/communities/organizations/" target="_blank">affinity groups</a> connect alumni and students with a common passion: a club, hobby, culture, ethnicity, sport, or perhaps a career focus. At a networking event in May for alumni of the College of Professional Studies security programs, attendees witnessed an induction ceremony of the Order of the Sword and Shield, a national honor society for professionals in homeland security, intelligence, emergency management, and related disciplines. This year’s induction was the largest in the order’s history.</p>
								</article>

								<h3>Co-ops hiring co-ops</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/coops_hiring_coops.png" alt="Co-ops hiring co-ops">
										<figcaption>Photo: Mariah Tauger</figcaption>
									</figure>
									<p>The idea for the Eat Your Coffee company, which makes caffeinated breakfast bars for people on the go, struck Ali Kothari and Johnny Fayad, DMSB’17, during an 8 a.m. class at Northeastern. They took the concept to the Husky Startup Challenge, then refined it with help from the university’s entrepreneurial ecosystem. But their ace-in-the-hole is the co-op program.</p>
									<p>The company has hired seven co-ops in marketing and sales roles, and recently brought on alumnus Allen Meringolo, DMSB’17, as their first full-time employee, in sales. “We’ve worked with students from several other schools,” says Kothari, “but our co-ops are able to fit into the role more smoothly and make a larger impact. They just get it.”</p>
									<blockquote>
										“We’ve worked with students from several other schools, but our co-ops are able to fit into the role more smoothly and make a larger impact. They just get it.”
										<small>Ali Kothari, DMSB’17</small>
									</blockquote>
								</article>

								<h3>Tapping into the network</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/women_empower.jpg" alt="Seema Brodie, L'01">
										<!-- <figcaption>Photo courtesy of Seema Brodie</figcaption> -->
									</figure>
									<p>It took just one event for Seema Brodie, L'01, founder of BikeBus, a cycling gym on wheels with a patent-pending safety system, to get reconnected to Northeastern. She hosted a <a href="https://www.northeastern.edu/alumni/huskies-fitness/" target="_blank">Huskies Fitness</a> class, part of an event series organized by the <a href="https://www.northeastern.edu/alumni/" target="_blank">Office of Alumni Relations</a>. From there, she became involved in the <a href="https://www.northeastern.edu/alumni/women-who-empower/" target="_blank">Women Who Empower</a> program’s annual summit. She was also a featured guest at the She Started It Film Festival, organized by OAR and IDEA, Northeastern’s student-run venture accelerator—where she found business-development support, networking opportunities, and access to new investors. Today, Brodie is leveraging the McCarthy(s) Venture Mentoring Network, and she has given talks at the School of Law about her startup. “Northeastern University has an outstanding commitment to connect, engage, and help alumni,” Brodie says.</p>
								</article>

								<h3>Lifelong learning</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/pete_petrin.jpg" alt="Pete Petrin, SSH’13">
										<figcaption>Photo: Brooks Canaday </figcaption>
									</figure>
									<p>For Pete Petrin, SSH’13, a Northeastern education translates to lifelong learning. After graduating, Petrin joined Teach for America, stoking a passion for education, particularly math and data analytics. He then took a Level Analytics Bootcamp, which inspired him to switch gears and become a data analyst with the D.C. Public Charter School Board. Influenced by the <a href="https://www.northeastern.edu/alumni/lifelong-learning/lifelong-learning-on-demand/" target="_blank">Lifelong Learning: On Demand</a> and Circuits programs offered by the Office of Alumni Relations, Petrin took an even bigger leap into a master’s degree in learning analytics at Northeastern. He stays engaged with fellow alumni through the <a href="https://www.northeastern.edu/alumni/communities/young-alumni-advisory-board/" target="_blank">Young Alumni Advisory Board</a>.</p>
								</article>

								<h3>Networked, virtually</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/michael_peabody.jpg" alt="Michael Peabody, AS’02">
										<!-- <figcaption>Photo courtesy of Michael Peabody</figcaption> -->
									</figure>
									<p>Having served for nearly 10 years as a high school principal in Tegucigalpa, Honduras, Michael Peabody, AS’02, began talking with his wife, Ana Merriam (pictured with son Michael H. Peabody) about what returning to the U.S. might mean for their careers. Surveying job opportunities from afar, he tried the <a href="https://www.northeastern.edu/alumni/career/networking/" target="_blank">Virtual Northeastern Networking Hours</a> offered by Northeastern’s Office of Alumni Relations. “In under 10 minutes, I was able to connect with several people in the education field and learned about new strategies,” he says. Hooked into the university network, Peabody discovered the online Doctor of Education program at the College of Professional Studies.</p>
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
