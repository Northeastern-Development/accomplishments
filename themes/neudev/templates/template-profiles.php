<?php /* Template Name: Profile Page Template */ get_header(); ?>

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

						<div class="nu__fixed-column" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/fixed_bg.jpg); background-size: cover; background-position: center center;">
							<div>
								<p><a class="js-back-page" href="<?=home_url()?>/experiential-learning/#global"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a></p>
								<h2>Meet some of our most talented undergraduates </h2>
								<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/academic_honors_collage.png" alt="academic honors collage">
							</div>
						</div><!--end nu__fixed-column-->

						<div class="nu__scroll-column">
							<div>
								<h3>Fulbright Scholarship</h3>
								<article>
									<h4>Olivia Allen, SSH’14, international affairs major, social entrepreneurship and business administration minors</h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/fulbright.jpg" alt="Olivia Allen, SSH’14">
									<p>While a Northeastern student, Allen helped disenfranchised populations at home and abroad&mdash;from teaching English to women in a Boston homeless shelter to helping low-income residents in a South African slum start microbusinesses. Those experiences deepened her commitment to teaching and social justice. After graduating in 2014, she joined Teach for America as a fifth-grade teacher in North Carolina, where she helped immigrant students gain fluency in English and other subjects. Colleagues say Allen is a model educator, developing novel methods to ensure that her students succeed. With this scholarship, she will teach English to students in Colombia.</p>
								</article>

								<!-- <h3>Fulbright Scholarship</h3> -->
								<article>
									<h4>Rayyan Mikati, AMD’18, major in visual design </h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/mikati.jpg" alt="Rayyan Mikati, AMD’18">
									<p>Mikati combined her passions for art and science to develop an independent major focused on preserving art and artifacts. Through her work in museum settings, including Rochester Art Center in Minnesota and the Lebanese Marine and Wildlife Museum in Lebanon, she has navigated multiple challenges to create, restore, and conserve art and enrich the public's understanding of art. Mikati will earn a master's degree in the conservation of fine art at the University of Northumbria in England. Ultimately, she intends to earn a PhD in Islamic art history, then work as a conservator in the Middle East to protect art in war-torn areas.</p>
								</article>

								<article>
									<h4>Daniel Russotto, CCIS ’18, computer science major, English and philosophy minors</h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/russotto.jpg" alt="Daniel Russotto, CCIS ’18">
									<p>Large data sets can reveal security breaches, predict hospital staffing needs, and identify youth at risk for crime. That's how Russotto wants to use Big Data, and to achieve that goal, he plans to earn a master's degree in business analytics and Big Data at Instituto de Empresa in Madrid. Russotto maximized his experiential learning opportunities at Northeastern, studying Spanish and culture in Peru, serving as a teaching assistant in social enterprise, co-founding a Room to Read chapter to advance literacy among girls, and honing his creative software-engineering skills during three co-ops at thriving companies.</p>
								</article>

								<article>
									<h4>Amy Zhao, E’18, chemical engineering major, writing minor</h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/zhao.jpg" alt="Amy Zhao, E’18">
									<p>Zhao believes "language is agency." Writing and storytelling have helped her connect with others and navigate the complexities of her identity as a Chinese American. Two years ago, for example, she turned the stories of her family's experience during China's Cultural Revolution into a powerful podcast. While working as a tutor in Northeastern's writing center, Zhao exhibited not only a deft understanding of the written word, but an innate ability to teach, using a caring, personalized approach to help students strengthen their writing. With the Fulbright, she will teach English to secondary students in Thailand.  </p>
								</article>


								<h3>GEM Fellowship </h3>
								<article>
									<h4>Thurston Brevett, E’18, electrical engineering major, mathematics minor</h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/brevett.jpg" alt="Thurston Brevett, E’18">
									<p>Brevett plans to earn a PhD and become a leader in developing remote-sensing platforms for disaster response. He has already built a notable record of research and service in engineering. At ALERT, a security-focused research center at Northeastern, he worked on coding, processing methods, and algorithms related to improving airport screening technologies. At MIT's Lincoln Laboratory, he participated in a project to make radars more tolerant to windfarm interference. And while serving as chairman of Northeastern's chapter of the National Society of Black Engineers, Brevett launched an after-school robotics program for underserved youth.</p>
								</article>


								<h3>Benjamin A. Gilman International Scholarship</h3>
								<article>
									<h4>Michele Kinama, DMSB’18, international business and finance majors, international affairs and Russian minors</h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/gilman.jpg" alt="Michele Kinama, DMSB’18">
									<p>As a girl, Kinama longed to see the world outside of her small Illinois hometown. This led her to enroll in Northeastern's international business program, which requires students to complete a year of expatriate study. She has already spent time in Russia studying emerging markets and in Israel and Palestine, studying literature and conflict. The Gilman scholarship enabled Kinama to complete a full year of study at Lancaster University in England. These opportunities will bring her closer to achieving her career goal: leading a management consulting firm in Europe.</p>
								</article>

								<h3>The Barry M. Goldwater Scholarship</h3>
								<article>
									<h4>Kritika Singh, E’20, bioengineering major, chemistry minor</h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/singh.jpg" alt="Kritika Singh, E’20">
									<p>Singh has immersed herself in research at impressive institutions, including Harvard Medical School and Massachusetts General Hospital. "She is highly intelligent, exceptionally hard-working, dedicated, and a team player," one advisor says. In the lab, Singh quickly masters techniques and produces publication-quality results. At MGH, for example, she tackled a complex project that required knowledge of several fields, including organic synthesis and computational biology, and she overcame unexpected challenges to perform at an advanced level. Singh plans to earn a MD/PhD and conduct research at the nexus of chemical biology and engineering to develop innovative therapies for patients.</p>
								</article>

								<article>
									<h4>Isaac Kresse, S/E’19, double major in chemistry and computer engineering</h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/goldwater.jpg" alt="Isaac Kresse, S/E’19">
									<p>To prepare for a biochemistry career, Kresse has pursued rigorous coursework and research experience. He has specialized in chemistry and computer engineering to gain an expansive skillset with which to approach biochemical problems. Applying computer algorithms to the vast amounts of data involved in biochemistry can reveal surprising patterns and solutions, he notes. While assisting with research in labs at Northeastern, Harvard Medical School, the University of Singapore, and the Norway-based research group SINTEF, he's exhibited an advanced level of expertise, a collaborative spirit, and a desire to always learn more. </p>
								</article>


								<h3>James Reston Reporting Fellowship</h3>
								<article>
									<h4>Tyler Blint-Welsh, AMD’19, journalism major</h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/reston.jpg" alt="Tyler Blint-Welsh, AMD’19">
									<p>With the fearless curiosity of a seasoned journalist, Blint-Welsh has already amassed an impressive portfolio at newspapers nationwide. He's written lengthy features on Maine's public education system for the <i>Bangor Daily News</i>, profiled professional athletes for the <i>Los Angeles Times</i>, and investigated the rapid decline of yellow cabs&mdash;and what that means for cab drivers&mdash;for <i>The New York Times'</i> Student Journalism Institute. As a Reston Fellow for the <i>Times</i>&mdash;the paper that the Brooklyn native grew up reading&mdash;he hopes to tell the stories of underrepresented and disenfranchised voices, such as the city's homeless population. </p>
								</article>


								<a class="js-back-page nu__mobile-back" href="<?=home_url()?>/experiential-learning/#global"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a>
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
