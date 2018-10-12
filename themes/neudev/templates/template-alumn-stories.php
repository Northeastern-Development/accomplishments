<?php /* Template Name: Alumni Stories Extra Page Template */ get_header(); ?>

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
								<p><a class="js-back-page" href="<?=home_url()?>/pride-and-support#nualumnistories"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a></p>
								<h2>Alumni forge <span class="nu__span-bold">lifelong connections</span> </h2>
								<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/empower/lifelongconnections.png" alt="global network lifelong connections">
							</div>
						</div><!--end nu__fixed-column-->

						<div class="nu__scroll-column">
							<div>
								<h3>Strengthening our global network</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/pallota.jpg" alt="Faust and Marciano">
										<!-- <figcaption>Photo courtesy of Dan Concessi. Photo courtesy of Matt Flannery</figcaption> -->
									</figure>
									<p>After working as a freelance sports broadcaster and the voice of Northeastern men’s basketball for five years, Alex Faust, SSH’12, got his big break in 2017, when he called his first National Hockey League game. Today, as the LA Kings play-by-play announcer for Fox Sports West, he is the NHL’s youngest announcer. A former member of the Young Alumni Advisory Board, a group of alumni who support alumni programming, Faust is always keen to come back to his alma mater. He hosted alumnus-actor David Marciano, AS’83, at an Office of Alumni Relations’ Northeastern Near You event in California in 2017. And in August, he joined the Coaches Caravan on Cape Cod to celebrate the record-breaking success of the Howlin’ Huskies.</p>
								</article>

								<h3>Choosing a different path</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/colleen.jpg" alt="Colleen Finnegan">
										<!-- <figcaption>Office of Alumni Relations (Basimike with U.S. Rep. John Lewis, of Georgia, at a Northeastern event on Martha’s Vineyard)</figcaption> -->
									</figure>
									<p>After graduating from Northeastern, Colleen Finnegan, AMD’11, started out in music tech at Sonicbids, picked up social marketing skills at Twitter, learned how to throw large-scale concerts and market them digitally at Pandora—then brought all of that experience together as Pandora's employee experience and marketing manager. Currently at Squarespace, Finnegan leads the Recruitment Marketing and Campus Programs teams, focusing on digital, social, and experiential channels to tell employees' stories. Recently Finnegan shared their experiences with fellow Northeastern graduates through the Office of Alumni Relations’s Northeastern Near You program in San Francisco. And in October of 2017, Finnegan spoke at the fourth annual Reach Out LGBTQA+ Career Conference hosted by the office and Northeastern’s LGBTQA Resource Center.</p>
									<!-- <blockquote>
										“I had advisors and professors who not only ensured that I was on top of my coursework, but more importantly, cared about me.”
										<small><span class="nu__span-bold">Binja Basimike</span>, BHS’12, MPH’14</small>
									</blockquote> -->
								</article>

								<h3>Advancing a big idea</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/gaines.jpg" alt="sarah gaines">
										<!-- <figcaption>Photo courtesy of Hayley Meng</figcaption> -->
									</figure>
									<p>For Sarah Gaines, AMD’15, what began as a blog called Fit University to help college students stay strong and healthy soon attracted a nationwide community. And thanks to her Northeastern network and the university’s venture accelerator, IDEA, Fit University is now a global phenomenon, with Gaines holding fitness and health events, workshops and retreats around the world. Recently USA Today invited her to do a Facebook Live workout for that news outlet’s million-plus online followers. Gaines also hosted a Huskies Fitness class for alumni and established Y Society, a forum to support young women’s social and professional development.</p>
								</article>

								<h3>Going green</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/zhong.jpg" alt="April Zhong">
										<!-- <figcaption>Photo: Heratch Ekmekjian</figcaption> -->
									</figure>
									<p>April Zhong, MS'96, has fused her passion for the environment with an eye for market opportunity. Realizing that a transition to solar energy was inevitable, Zhong also saw a dearth of solar firms offering services to small and medium-sized businesses. In 2007, she created SilRay, Inc., now a top-50, fast-growing private company in Silicon Valley bringing solar power to commercial clients. Zhong has emerged as a role model for Northeastern women seeking careers in STEM fields. In March 2018, she was a panelist in a Women Who Empower event titled “The Power of Science and Entrepreneurship” in San Francisco. She also serves on the Dean’s Advisory Council for the College of Science.</p>
								</article>

								<h3>Volunteer for life</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/contis.jpg" alt="Peter Contis">
										<!-- <figcaption>Photo: Mariah Tauger</figcaption> -->
									</figure>
									<p>When Double Husky Peter A. Contis, MBA’83, MS’86, arrived at Northeastern in the early 1980’s, he saw emblems and reminders of his homeland, Greece, everywhere on campus—through trustees, his professors, even building names. Although his country was 5,000 miles away, he felt at home. In 1986, following graduate school, Contis started teaching at DMSB and advising Greek students who were applying to the university, eventually becoming involved with the Office of Alumni Relations community in Greece. In 2008, Contis became the community’s leader. After more than 15 years of volunteering, he says he’ll keep going, with high hopes that his son, Andrew, will be "a future Husky, Class of 2028."</p>
								</article>

								<h3>Creating a community space</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/pray.jpg" alt="Whitney Pray">
										<!-- <figcaption>Photo courtesy of Seema Brodie</figcaption> -->
									</figure>
									<p>Whitney Pray’s deep dive into anthropology at Northeastern inspired a deep curiosity about other cultures. It also nudged her to move beyond her comfort zone. In 2011, Pray, SSH’13, traveled to Colombia to teach English and fell in love with the country. Venturing into business in Bogotá, she opened an artisan shop that became a restaurant and, in 2018, a bakery called El Nido (The Nest). Pray hopes to build a community for sharing knowledge and experience, starting with her own Northeastern network. This fall, she will host the Office of Alumni Relations’ first Huskies Hands-On program in Bogotá.</p>
								</article>

								<h3>Legacy of leadership</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/stewart.jpg" alt="Sydney Stewart">
										<!-- <figcaption>Photo: Brooks Canaday </figcaption> -->
									</figure>
									<p>People who know Legacy Husky Sydney Stewart, AMD’15, call her a born leader. As an undergraduate studying communications and cinema studies, Stewart joined the Iota Gamma chapter of Alpha Kappa Alpha Sorority, which her mother, alumna Ann W. Stewart, SH’76, started at Northeastern in 1974. Sydney also served on the National Pan-Hellenic Council, bringing together representatives from nine African American fraternities and sororities, and was named to the Huntington 100. Today she serves on the Office of Alumni Relations’ Young Alumni Advisory Board, working to engage and empower recent graduates. Committed to black alumni engagement, in 2018, she co-chaired Black Alumni Weekend on Martha’s Vineyard.</p>
								</article>

								<h3>Building connections</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/simms.jpg" alt="Nathan Simms">
										<!-- <figcaption>Photo courtesy of Michael Peabody</figcaption> -->
									</figure>
									<p>Double Husky Nathan Simms, SSH’10, MS’17, is on a mission to reconnect alumni with Northeastern. In 2016, he became one of the founders of the Graduate Students of Color Collective to promote education, professionalism, and civic duty among members of the collective, and to recognize the struggles of marginalized populations through civic engagement. Simms turned his gift for making connections into a professional role as the community outreach coordinator for Northeastern’s Office of City and Community Affairs. Simms is also a key player in the Office of Alumni Relations’ black alumni engagement programs.</p>
								</article>

								<h3>Networked for life</h3>
								<article>
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alumni/joshi.jpg" alt="Sailaja Joshi">
										<!-- <figcaption>Photo courtesy of Michael Peabody</figcaption> -->
									</figure>
									<p>Growing up, Sailaja Joshi, DMSB’06, couldn’t find a single children’s book that represented her Indian culture. In 2013, pregnant with her first child, she decided to change that. With a $1,000 prototype funding from the university’s venture accelerator, IDEA, Joshi hired an illustrator and developed the first book for Bharat Babies, a publisher of children’s books highlighting India’s heritage. To date, the company has released more than a dozen titles. Earlier this year, Joshi forged a partnership with the Scholastic Book Club, which has optioned Let's Celebrate Diwali, an illustrated story of Diwali told from the perspective of four different faiths that celebrate the holiday. Joshi was also recently accepted into Babson College’s prestigious WIN LAB 2018-19 cohort of female entrepreneurs.</p>
								</article>
								<a class="js-back-page nu__mobile-back" href="<?=home_url()?>/pride-and-support#nualumnistories"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a>
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
