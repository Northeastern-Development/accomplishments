<?php /* Template Name: Research Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- <h1><?php the_title(); ?></h1> -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<section class="hero">

					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header"><span class="nu__span-bold">Accelerate discovery</span> through the power of <span class="nu__span-bold">networks</span></h2>
						<div class="nu__hero-stat">
							<div class="nu__stat-block">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/research/research_funding_stats.png" alt="research funding statistics" />
							</div>

						</div>
					</div>
				</section><!--end section-->

				<section class="nu__facultypartnerships">
					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header">Propelling solutions through <span class="nu__span-bold">faculty partnerships</span></h2>

						<ul class="controls">
							<li><a href="#" title="The robots are coming" data-id="partnerships-1" class="activeoption">The robots are coming</a></li>
							<li><a href="#" title="Re-envisioning wireless networks" data-id="partnerships-2">Re-envisioning wireless networks</a></li>
							<li><a href="#" title="Mapping toxins in tap water" data-id="partnerships-3">Mapping toxins in tap water</a></li>
							<li><a href="#" title="Advancing STEM education" data-id="partnerships-4">Advancing STEM education</a></li>
						</ul>

						<div class="content">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/research/partnerships1.jpg" alt="rotator image" />
							<p id="p-1">Northeastern University was selected as a <span class="nu__span-bold">founding member of the Advanced Robotics for Manufacturing Institute</span>, established to promote the development of robots for manufacturing. Led by Northeastern’s <span class="nu__span-bold">Taskin Padir</span>, associate professor of electrical and computer as well as mechanical and industrial engineering, the institute is an outgrowth of Manufacturing USA.</p>
							<p id="p-2">A Northeastern team directed by <span class="nu__span-bold">Tommaso Melodia</span>, associate professor of electrical and computer engineering, <span class="nu__span-bold">leads a National Science Foundation initiative called Platforms for Advanced Wireless Research</span>. The team is overseeing the selection and management of projects to develop next-generation wireless communication networks across the U.S.</p>
							<p id="p-3"><span class="nu__span-bold">A study by Northeastern and the Environmental Working Group</span> showed toxic levels of largely unregulated <span class="nu__span-bold">chemicals in tap water systems</span> serving 15 million Americans in 27 states and more than 48 industrial and military sites.</p>
							<p id="p-4">Northeastern University received <span class="nu__span-bold">$5 million from the National Science Foundation</span> to establish an <span class="nu__span-bold">innovative scholarship and mentoring program</span> for students from underrepresented backgrounds who are studying and doing <span class="nu__span-bold">research in energy-related fields.</span></p>
						</div>

					</div>
				</section>


				<section class="nu__researchstrategy">
					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header">A transformative <span class="nu__span-bold">research strategy</span></h2>
						<img class="left" src="<?php echo get_stylesheet_directory_uri(); ?>/img/research/research_strategy_stats-left.jpg" alt="faculty awards total" />
						<img class="right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/research/research_strategy_stats-right.png" alt="research funding statistics" />
					</div>
				</section>


				<section class="nu__earlycareer">
					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header"><span class="nu__span-bold">Early career</span> excellence</h2>
						<p>Northeastern’s 2016–2017 recipients of national grants and awards recognizing significant contributions to science, engineering, and computer science by junior faculty</p>
						<div class="content">
							<div>
								<p>Five professors were recognized with the National Science Foundation CAREER Award:</p>
								<ul>
									<li><span class="nu__span-bold">Yunrong Chai</span>, assistant professor of biology</li>
									<li><span class="nu__span-bold">Seth Cooper</span>, assistant professor of computer and information science</li>
									<li><span class="nu__span-bold">Randall Hughes</span>, assistant professor of marine and environmental sciences</li>
									<li><span class="nu__span-bold">Yongmin Liu</span>, assistant professor of mechanical and industrial engineering and electrical and computer engineering</li>
									<li><span class="nu__span-bold">Jose Martinez-Lorenzo</span>, assistant professor of mechanical and industrial engineering and electrical and computer engineering</li>
								</ul>
							</div>
							<div>
								<div>
									<img class="nu__desktop" src="<?php echo get_stylesheet_directory_uri(); ?>/img/research/early_career_kaushik_chowdhury.png" alt="Kaushik Chowdhury headshot" />
									<img class="nu__mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/research/early_career_kaushik_chowdhury_mobile.png" alt="Kaushik Chowdhury headshot" />
									<p><span class="nu__span-bold">Kaushik Chowdhury</span>, associate professor of electrical and computer engineering, was named a winner of <span class="nu__span-bold">the Presidential Early Career Award</span> for Scientists and Engineers.</p>
								</div>
								<div>
									<img class="nu__desktop" src="<?php echo get_stylesheet_directory_uri(); ?>/img/research/early_career_pau_closas.png" alt="Pau Closas headshot" />
									<img class="nu__mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/research/early_career_pau_closas_mobile.png" alt="Pau Closas headshot" />
									<p><span class="nu__span-bold">Pau Closas</span>, assistant professor of electrical and computer engineering, earned <span class="nu__span-bold">an Institute of Navigation Early Achievement Award</span>.</p>
								</div>
							</div>
						</div>
					</div>
				</section>





				<section class="slider" data-section="research">
					<div class="title">
						<h3>Experiential PhDs extend our research network</h3>
					</div>
					<div class="background">
				    <div>
				    </div>
						<div id="bgimage" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/slide1.png); background-size: cover; background-position: center center;"></div>
				  </div>
					<div class="wrapper">
						<p id="slider__copy-1">"The technology and problem-solving skills I learned on my graduate co-op at Bristol-Myers Squibb further <span class="nu__span-bold">advanced my research</span> at Northeastern. I tested the feasibility of <span class="nu__span-bold">a new processing platform for monoclonal antibodies</span>."<br /><br /><span class="nu__span-bold">Junyan Zhang</span>,<br /><span style="font-size: 1.75rem;">Doctoral student in chemical engineering</span></p>
						<p id="slider__copy-2">"My doctoral co-op in bioengineering at the Max Planck Institute for Intelligent Systems introduced me to the notion that <span class="nu__span-bold">robotics research could benefit from insights in human motor learning, and vice versa</span>. This view is <span class="nu__span-bold">the driving force behind my current research</span> as a postdoctoral associate in mechanical engineering at MIT."<br /><br /><span class="nu__span-bold">Meghan Huber</span>, <span style="font-size: 1.75rem;">PhD’17</span></p>
						<p id="slider__copy-3">"At Microsoft Research, I looked for <span class="nu__span-bold">patterns and machine-learning algorithms</span> that could automatically translate pages from desktop to mobile. At Google Research, we were trying to <span class="nu__span-bold">accurately identify and extract medical information from forms filled in by patients and other non-physicians</span>. Both experiences helped shape and further <span class="nu__span-bold">my PhD work in information retrieval</span>, an important element of artificial intelligence."<br /><br /><span class="nu__span-bold">Matthew Ekstrand-Abueg</span>,<br /><span style="font-size: 1.75rem;">doctoral student in computer science</span></p>
					</div>
					<div class="choices">
						<div class="active" data-id="1">
							<h3>Chemical Engineering</h3>
							<p>Graduate co-op at Bristol-Myers Squibb</p>
						</div>
						<div data-id="2">
							<h3>Bioengineering</h3>
							<p>Doctoral co-op at the Max Planck Institute for Intelligent Systems</p>
						</div>
						<div data-id="3">
							<h3>Computer Science</h3>
							<p>Doctoral co-op at Microsoft Research and Google Research</p>
						</div>
					</div>
				</section>



				<section class="nu__newinstitutes">
					<div class="nu__randomredbar"></div>
					<div class="wrapper" style="position:relative;height:100%;">
						<div class="content">
							<div>
								<h3><span class="nu__span-bold">New institutes</span> magnify impact <span class="nu__span-bold">across disciplines</span></h3>
								<p>Northeastern has launched four institutes to <span class="nu__span-bold">expand the university’s research expertise</span> in homeland security, cybersecurity and privacy, global resilience, and coastal sustainability.</p>
							</div>
							<div class="js-video">
								<a href="https://www.youtube.com/watch?v=kQx7E_YPY4w" title="Click here to watch this video"><div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/brodley.jpg); background-size: cover; background-position: center center;">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="-347 149 104 104" enable-background="new -347 149 104 104"><style>.st0{filter:url(#filter-1);} .st1{fill:none;stroke:#ffffff;stroke-width:4;} .st2{fill:#ffffff;}</style><filter width="142.5%" height="142.5%" id="filter-1" x="-21.2%" y="-21.2%" filterUnits="objectBoundingBox"><feOffset result="shadowOffsetOuter1" in="SourceAlpha"/><feGaussianBlur stdDeviation="5" result="shadowBlurOuter1" in="shadowOffsetOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" result="shadowMatrixOuter1" in="shadowBlurOuter1"/><feMerge><feMergeNode in="shadowMatrixOuter1"/><feMergeNode in="SourceGraphic"/></feMerge></filter><g transform="translate(12 12)" class="st0"><circle class="st1" cx="-307.2" cy="188.8" r="39.8"/><path class="st2" d="M-314.1 175.8l15.6 12.7-15.6 13.8"/></g></svg>
									<div>
										<h4><span class="nu__span-bold">Carla Brodley</span></h4>
										<p>Dean, College of Computer and Information Science</p>
									</div>
								</div></a>
								<a href="https://www.youtube.com/watch?v=F0IUjaxt5zo" title="Click here to watch this video"><div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/luzzi.jpg); background-size: cover; background-position: center center;">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="-347 149 104 104" enable-background="new -347 149 104 104"><style>.st0{filter:url(#filter-1);} .st1{fill:none;stroke:#ffffff;stroke-width:4;} .st2{fill:#ffffff;}</style><filter width="142.5%" height="142.5%" id="filter-1" x="-21.2%" y="-21.2%" filterUnits="objectBoundingBox"><feOffset result="shadowOffsetOuter1" in="SourceAlpha"/><feGaussianBlur stdDeviation="5" result="shadowBlurOuter1" in="shadowOffsetOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" result="shadowMatrixOuter1" in="shadowBlurOuter1"/><feMerge><feMergeNode in="shadowMatrixOuter1"/><feMergeNode in="SourceGraphic"/></feMerge></filter><g transform="translate(12 12)" class="st0"><circle class="st1" cx="-307.2" cy="188.8" r="39.8"/><path class="st2" d="M-314.1 175.8l15.6 12.7-15.6 13.8"/></g></svg>
									<div>
										<h4><span class="nu__span-bold">David Luzzi</span></h4>
										<p>Vice Provost for Research Innovation and Development; vice president, Innovation Campus in Burlington, Massachusetts</p>
									</div>
								</div></a>
								<a href="https://www.youtube.com/watch?v=pF0CvSyw4d8" title="Click here to watch this video"><div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/flynn.jpg); background-size: cover; background-position: center center;">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="-347 149 104 104" enable-background="new -347 149 104 104"><style>.st0{filter:url(#filter-1);} .st1{fill:none;stroke:#ffffff;stroke-width:4;} .st2{fill:#ffffff;}</style><filter width="142.5%" height="142.5%" id="filter-1" x="-21.2%" y="-21.2%" filterUnits="objectBoundingBox"><feOffset result="shadowOffsetOuter1" in="SourceAlpha"/><feGaussianBlur stdDeviation="5" result="shadowBlurOuter1" in="shadowOffsetOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" result="shadowMatrixOuter1" in="shadowBlurOuter1"/><feMerge><feMergeNode in="shadowMatrixOuter1"/><feMergeNode in="SourceGraphic"/></feMerge></filter><g transform="translate(12 12)" class="st0"><circle class="st1" cx="-307.2" cy="188.8" r="39.8"/><path class="st2" d="M-314.1 175.8l15.6 12.7-15.6 13.8"/></g></svg>
									<div>
										<h4><span class="nu__span-bold">Stephen Flynn</span></h4>
										<p>Professor of Political Science; Founding Director, Global Resilience Institute</p>
									</div>
								</div></a>

								<a href="https://www.youtube.com/watch?v=zikullEBL4k" title="Click here to watch this video"><div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/trussell.jpg); background-size: cover; background-position: center center;">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="-347 149 104 104" enable-background="new -347 149 104 104"><style>.st0{filter:url(#filter-1);} .st1{fill:none;stroke:#ffffff;stroke-width:4;} .st2{fill:#ffffff;}</style><filter width="142.5%" height="142.5%" id="filter-1" x="-21.2%" y="-21.2%" filterUnits="objectBoundingBox"><feOffset result="shadowOffsetOuter1" in="SourceAlpha"/><feGaussianBlur stdDeviation="5" result="shadowBlurOuter1" in="shadowOffsetOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" result="shadowMatrixOuter1" in="shadowBlurOuter1"/><feMerge><feMergeNode in="shadowMatrixOuter1"/><feMergeNode in="SourceGraphic"/></feMerge></filter><g transform="translate(12 12)" class="st0"><circle class="st1" cx="-307.2" cy="188.8" r="39.8"/><path class="st2" d="M-314.1 175.8l15.6 12.7-15.6 13.8"/></g></svg>
									<div>
										<h4><span class="nu__span-bold">Geoffrey Trussell</span></h4>
										<p>Professor and Chair, Department of Marine and Environmental Sciences; Director, Coastal Sustainability Institute</p>
									</div>
								</div></a>

							</div>
						</div>
					</div>
				</section>




				<section class="nu__facultyinnovation">

					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header">Widening the network of <span>faculty</span> innovation</h2>
						<div class="content">
							<div class="facstats">
								<div>
									<h2>610</h2>
									<p>Tenured and tenure-track hires since 2006, including 47 in 2016&ndash;2017</p>
								</div>
								<div>
									<h2>157</h2>
									<p>Undergraduate and graduate programs of study in emerging fields added since 2006</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wrapper" style="position:relative;height:100%; width: 100%; max-width: 100%;">
						<div class="content">
							<div class="talkingheads">
								<div class="theheads">
									<div data-id="talkinghead-1" class="talkinghead" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/bamgbade.jpg); background-size: cover; background-position: center center;" title="Click here to learn more about Benita Bamgbade"><span></span></div>
									<div data-id="talkinghead-2" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/chung.jpg); background-size: cover; background-position: center center;" title="Click here to learn more about Samuel Chung"><span></span></div>
									<div data-id="talkinghead-3" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/hartzog.jpg); background-size: cover; background-position: center center;" title="Click here to learn more about Woodrow Hartzog"><span></span></div>
									<div data-id="talkinghead-4" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/heckman.jpg); background-size: cover; background-position: center center;" title="Click here to learn more about Meg Heckman"><span></span></div>
									<div data-id="talkinghead-5" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/landsmark.jpg); background-size: cover; background-position: center center;" title="Click here to learn more about Ted Landsmark"><span></span></div>
									<div data-id="talkinghead-6" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/mcallister.jpg); background-size: cover; background-position: center center;" title="Click here to learn more about Charn McAllister"><span></span></div>
									<div data-id="talkinghead-7" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/ye.jpg); background-size: cover; background-position: center center;" title="Click here to learn more about Lichuan Ye"><span></span></div>
								</div>

								<div class="chooseatalkinghead">
									<div class="prev" title="Click here to jump to the previous item">&lsaquo;</div>
									<div>
										<div id="talkinghead-1">
											<h4>Benita Bamgbade</h4>
											<h5>Assistant Professor of Pharmacy and Health Systems Sciences</h5>
											<p>Bamgbade’s work on mental health and health disparities focuses on how to <span class="nu__span-bold">reduce mental health disparities</span> among African Americans. Her initial goal is to develop a <span class="nu__span-bold">targeted and evidenced-based intervention</span>.</p>
										</div>
										<div id="talkinghead-2">
											<h4>Samuel Chung</h4>
											<h5>Assistant Professor of Bioengineering</h5>
											<p>Chung’s research seeks <span class="nu__span-bold">the discovery and articulation of novel pathways in neuronal regeneration</span>, with profound implications for our understanding of <span class="nu__span-bold">regenerative biology and new therapeutic strategies</span>.</p>
										</div>
										<div id="talkinghead-3">
											<h4>Woodrow Hartzog</h4>
											<h5>Professor of Law and Computer Science</h5>
											<p>Hartzog is internationally recognized for his research digging deeply into the <span class="nu__span-bold">legal issues surrounding digital privacy, data protection, digital technologies, and robotics</span>.</p>
										</div>
										<div id="talkinghead-4">
											<h4>Meg Heckman</h4>
											<h5>Assistant Professor of Journalism</h5>
											<p>Heckman is a journalist and media scholar whose research explores <span class="nu__span-bold">the intersections of gender, race, technology, and journalism</span>. As a reporter and editor, she has deep expertise in digital storytelling.</p>
										</div>
										<div id="talkinghead-5">
											<h4>Ted Landsmark</h4>
											<h5>Distinguished Professor, Public Policy and Urban Affairs; director, Kitty and Michael Dukakis Center for Urban and Regional Policy</h5>
											<p>Landsmark’s research and practice interests include <span class="nu__span-bold">diversity in design, environmental design, design education, community-based economic development, historic preservation, and African American art and artisanry</span>.</p>
										</div>
										<div id="talkinghead-6">
											<h4>Charn McAllister</h4>
											<h5>Assistant Professor of Management and Organizational Development</h5>
											<p>McAllister looks at how we navigate <span class="nu__span-bold">politics and cope with stressors in the workplace</span>, including the effects of <span class="nu__span-bold">abusive supervision and deviance</span>. He also examines <span class="nu__span-bold">the role of political skill in helping people thrive at work</span>.</p>
										</div>
										<div id="talkinghead-7">
											<h4>Lichuan Ye</h4>
											<h5>Associate Professor of Nursing</h5>
											<p>Ye’s research focuses on <span class="nu__span-bold">sleep quality in clinical settings</span>. She’s developing a prototype of a sleep promotion toolkit that will engage patients in their own care and educate clinicians on how <span class="nu__span-bold">to improve sleep quality</span>.</p>
										</div>
									</div>
									<div class="next" title="Click here to jump to the next item">&rsaquo;</div>
								</div>
								<br />
								<br />
								<br />
								<br />
							</div>

						</div>
					</div>
				</section>


				<section class="collage" id="collage">
					<div class="nu__full-container">
						<div class="nu__row">
							<div class="column left">
					    </div>
					    <div class="column center">
								<h2>Expanding the <span class="nu__span-bold">creative ecosystem</span></h2>
								<div class="nu__stat-block">
									<h2>1,478</h2>
									<p><span class="nu__span-bold">Patent applications</span> filed since 2006, including <span class="nu__span-bold">211 in 2016–2017</span></p>
								</div>
								<div class="nu__stat-block">
									<h2>115%</h2>
									<p>One-year increase in <span class="nu__span-bold">patents issued</span> in 2016–2017</p>
								</div>
								<div class="nu__stat-block">
									<h2>50</h2>
									<p>Spinout <span class="nu__span-bold">companies</span> formed <span class="nu__span-bold">by faculty and students</span> since 2006</p>
								</div>
								<div class="nu__stat-block" style="margin: 50px auto 0 auto;">
									<!-- <p>Meet Some of Our Entrepreneurs</p> -->
									<!-- <button onclick="window.location.href='<?=home_url()?>/research/entrepreneurs'" type="button" name="viewprofiles" title="Click here to view profiles">View Profiles</button> -->
									<a href="entrepreneurs" title="Click here to meet some of our entrepreneurs">Meet Some of Our Entrepreneurs</a>
								</div>
					    </div>
					    <div class="column right">
					    </div>




						</div><!--end nu__row-->
					</div>
				</section><!--end section-->





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
