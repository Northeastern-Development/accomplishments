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
									<h4>Caroline Fried, SSH’17, double major in international affairs and history, Chinese and social enterprise minors</h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/academic_honors_caroline_fried.jpg" alt="Caroline Fried, SSH’17">
									<p>A visit to Taiwan in high school fueled Fried’s determination to learn Chinese and study Taiwan’s complicated relationship with Mainland China. Among other experiences, she volunteered to teach in a Beijing middle school; worked as a research assistant at the Asia Society Policy Institute in Washington, D.C.; and secured a prestigious research grant to visit Tapei and research a policy paper on China-Taiwan conflict. With the Fulbright, Fried is pursuing a master’s degree in Asia Pacific Studies at Taiwan’s Chengchi University, to launch a career at foreign policy think tanks.  </p>
								</article>

								<!-- <h3>Fulbright Scholarship</h3> -->
								<article>
									<h4>Sarah Sherman, S/SSH’17, combined major in biology and English </h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/academic_honors_sarah_sherman.jpg" alt="Sarah Sherman, S/SSH’17">
									<p>During a 2015 co-op at Massachusetts General Hospital, Sherman learned of the hospital’s work to enhance cancer care in Botswana, where poor access to pathology can hinder timely diagnoses. She bolstered her cancer knowledge with an internship at St. Jude Children’s Research Hospital and a co-op at Dana-Farber Cancer Institute. She is using her Fulbright award to complete a research project in Botswana, evaluating whether improvements to that country’s pathology labs have improved sample-processing times for cancer diagnoses. Her work will shed light on the global public health question of how to provide effective oncology care in resource-limited regions like sub-Saharan Africa.  </p>
								</article>

								<h3>Barry M. Goldwater Scholarship and National Geographic Young Explorers Grant</h3>
								<article>
									<h4>Benjamin Moran, S’18, marine biology major</h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/academic_honors_ben_moran.jpg" alt="Benjamin Moran, S’18">
									<p>Undergraduate experiences in marine science strengthened Moran’s lifelong fascination with the ocean. In addition to working in the labs of Northeastern faculty, he served as a research assistant at the Woods Hole Oceanographic Institution and completed the Three Seas Program, Northeastern’s yearlong exploration of three marine ecosystems. Moran is using the Goldwater Scholarship to study factors driving changes in sea urchin abundance in the Gulf of Maine. With the Young Explorers Grant, he’ll study at the Smithsonian Tropical Research Institute, examining the behavior and genomics of Caribbean reef fish to understand how evolution creates oceanic biodiversity.  </p>
								</article>

								<h3>Critical Language Scholarship</h3>
								<article>
									<h4>Miranda Beggin, DMSB/SSH’17, combined major in business administration and political science, global social entrepreneurship minor </h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/academic_honors_miranda_beggin.jpg" alt="Miranda Beggin, DMSB/SSH’17">
									<p>Beggin is the quintessential global citizen, having worked and studied in six countries while at Northeastern. To fulfill her long-term goal of fostering economic development and job creation in the Middle East, she spent the past few years deepening her knowledge of that region. She traveled through Saudi Arabia on an exchange fellowship to research economic diversification policies in Gulf countries. She earned a research grant to study credit access in Tunisia, and completed a co-op in Jordan as an investment analyst for the startup Oasis500. With the Critical Language Scholarship, Beggin plans to perfect her Arabic while living in Morocco. </p>
								</article>

								<h3>Schwarzman Scholarship</h3>
								<article>
									<h4>Madeline Seibert, S/SSH’16, combined major in environmental science and international affairs</h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/academic_honors_madeline_seibert.jpg" alt="Madeline Seibert, S/SSH’16">
									<p>Taking a Mandarin class in her first year at Northeastern sparked Seibert’s interest in China. She has since developed a sophisticated understanding of that country and its culture. For example, during a six-month co-op at the Natural Resources Defense Council in Beijing, Seibert led an independent study documenting food losses and waste through Chinese supply chains. The research included literature reviews and on-the-ground investigations from farms to markets—and its results brought an underappreciated issue to light. As a recipient of the prestigious Schwarzman Scholarship, she is earning a master’s degree at Tsinghua University in Beijing.</p>
								</article>

								<h3>James Reston Reporting Fellowship</h3>
								<article>
									<h4>Aneri Pattani, AMD’17, journalism major, Spanish minor</h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/academic_honors_aneri_pattani.jpg" alt="Aneri Pattani, AMD’17">
									<p>Pattani has amassed an impressive reporting portfolio in newsrooms nationwide: covering breaking news for <i>The Boston Globe</i>, writing health and technology pieces for CNBC, and unearthing compelling stories at <i>The Texas Tribune</i>. With the James Reston fellowship, Pattani worked in <i>The New York Times’</i> newsroom, reporting stories and learning from some of the world’s best journalists. In addition, Pulitzer Prize-winning <i>New York Times</i> columnist Nicholas Krisof chose Pattani to join him on an international reporting trip to report on social justice issues. </p>
								</article>

								<h3>National Science Foundation Graduate Research Fellowship</h3>
								<article>
									<h4>Travis DeLano, S’17, chemistry major, business administration minor</h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/academic_honors_travis_delano.jpg" alt="Travis DeLano, S’17">
									<p>In addition to completing two co-ops at Boston pharmaceutical companies, DeLano has tutored young students in science and math and served as a research assistant in the lab of chemistry professor Michael Pollastri, who studies neglected diseases. Pollastri raves: “Travis is one of the brightest young minds in chemistry that I have come across.” DeLano is attending the California Institute of Technology for graduate school. He will use the fellowship to develop novel chemical reactions for the formation of challenging and valuable bonds. </p>
								</article>

								<h3>Charles B. Rangel International Affairs Fellowship</h3>
								<article>
									<h4>Terrell Hunt, DMSB’13, business administration major, international affairs minor</h4>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/academic_honors_terrell_hunt.jpg" alt="Travis DeLano, S’17">
									<p>Hunt was one of 50 applicants nationwide selected for the prestigious Rangel fellowship, which seeks to prepare young people for careers in the Foreign Service. At Northeastern, he completed co-ops at the Consulate General of the U.S. in Edinburgh, Scotland, and at the State Department. In the latter role, he was a key point person for U.S. embassies in Belgium, Luxembourg, and the Netherlands. With the Rangel Fellowship, Hunt will work for a member of Congress on international issues, serve overseas in a U.S. embassy, and earn an MBA. Upon graduation, he will become a U.S. diplomat—his dream job. </p>
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
