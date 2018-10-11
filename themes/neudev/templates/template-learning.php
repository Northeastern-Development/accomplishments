<?php /* Template Name: Experiential Learning Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>



		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<section class="hero js-hero-learning">

					<div class="wrapper" style="position:relative;height:100%;">

							<h2 class="section-header">A network of learning experiences </h2>



						<div class="nu__hero-stat">
							<div class="nu__stat-block">
								<h2 class="js-count1lh">127%</h2>
								<p>Growth in number of countries where Northeastern has placed students in <span class="nu__span-bold">experiential learning opportunities</span> since 2006</p>

							</div>
						</div>
						<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/blank.png" alt="Experiential Learning Hero Stat"> -->

						<div class="parent">
	            <div class="child" id="1" style="height:202px;"><div><p>60</p><ul><li>No. of countries</li><li>2006&ndash;2007</li></ul></div>
	            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/line1.png" alt="line">
	            </div><div class="child" id="2" style="height:330px"><div><p>92</p><ul><li>No. of countries</li><li>2011&ndash;2012</li></ul></div>
	            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/line2.png" alt="line">
	            </div><div class="child" id="3" style="height:471px"><div><p>131</p><ul><li>No. of countries</li><li>2014&ndash;2015</li></ul></div>
	            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/line3.png" alt="line">
	            </div><div class="child" id="4" style="height:600px;"><div style="position:absolute;margin-top:-40px;margin-left:20px;"><p>136</p><ul><li>No. of countries</li><li>2017&ndash;2018</li></ul></div>
	            	<img id="talleststat" src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/line4.png" alt="line">
	            </div>
							<img id="nu__mobile-stat" src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/learning_hero_stat_mobile.png" alt="learning funding statistics" />
						</div>

						</div>
				</section>



				 <section class="nu__stats js-learning1">
					<div class="wrapper">
						<h2 class="section-header">Expanding the network<span class="nu__span-bold"> globally</span></h2>
						<div class="flex-grid-thirds">
						  <div class="col">
								<h2 class="js-count1">3,820</h2>
								<p>Students had a <span class="nu__span-red nu__span-bold">global learning experience</span>, 2017&ndash;2018</p>
						  </div>
						  <div class="col">
								<h2 class="js-count2">11,188</h2>
								<p><span class="nu__span-red nu__span-bold">Co&ndash;op placements</span> in 2017&ndash;2018, up from 6,301 in 2006&ndash;2007</p>
						  </div>
						  <div class="col">
								<h2 class="js-count3">2,943</h2>
								<p><span class="nu__span-red nu__span-bold">Co&ndash;op employers</span> in the U.S. and globally, 2017&ndash;2018</p>
						  </div>
						</div>
					</div>
				</section><!--end section-->



				<section class="resources" id="resources">
					<div class="wrapper">
						<h2 class="section-header"><span class="nu__span-bold">Transforming experience</span></h2>
						<div class="nu__fifty">
							<figure>
								<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/academic_honors_collage.png" alt="academic honors collage">
								<figcaption><span class="nu__span-bold">Meet some of our most talented</span> undergraduates </figcaption>
							</figure>
							<a href="<?=home_url()?>/resources" class="nu__button" role="button">view all resources</a>
						</div>
						<div class="nu__fifty">
							<p>Faculty and students are beta-testing a new approach to experiential education: Self-Authored Integrated Learning, or SAIL. Developed at Northeastern and grounded in research, SAIL offers a framework for extracting meaning, not just from coursework and co-op, but from everyday experiences—on the playing field, during late-night dorm debates, and with new friends in Beijing.</p>
							<p>SAIL enables students to master skills and abilities along five dimensions: intellectual agility; social consciousness and commitment; global mindset; professional and personal effectiveness; and well-being. Critically, it also helps them transfer knowledge gained in one context to any new situation—the key to adapting to a swiftly changing world.</p>
						</div>
					</div>
				</section><!--end section-->




				<!-- <section class="videos">
					<div class="nu__full-container">
						<div class="nu__vid-header">
							<h4>Transformative  co-op experiences</h4>
						</div>
						<div class="nu__thirds-vid js-video">
							<div class="nu__vid-frame ">
								<a  href="https://www.youtube.com/watch?v=FZeBktiy3KE">
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/coop_sap.jpg" alt="co-op at sap">
									</figure>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="-347 149 104 104" enable-background="new -347 149 104 104"><style>.st0{filter:url(#filter-1);} .st1{fill:none;stroke:#ffffff;stroke-width:4;} .st2{fill:#ffffff;}</style><filter width="142.5%" height="142.5%" id="filter-1" x="-21.2%" y="-21.2%" filterUnits="objectBoundingBox"><feOffset result="shadowOffsetOuter1" in="SourceAlpha"/><feGaussianBlur stdDeviation="5" result="shadowBlurOuter1" in="shadowOffsetOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" result="shadowMatrixOuter1" in="shadowBlurOuter1"/><feMerge><feMergeNode in="shadowMatrixOuter1"/><feMergeNode in="SourceGraphic"/></feMerge></filter><g transform="translate(12 12)" class="st0"><circle class="st1" cx="-307.2" cy="188.8" r="39.8"/><path class="st2" d="M-314.1 175.8l15.6 12.7-15.6 13.8"/></g></svg>
									<div>
										<ul>
											<li>Co-op at SAP</li>
											<li>Laura Martz, DMSB’19, marketing and interactive media  </li>
										</ul>
									</div>
								</a>
							</div>
						</div>

						<div class="nu__thirds-vid js-video">
							<div class="nu__vid-frame ">
								<a  href="https://www.youtube.com/watch?v=41Usr3I1TqM">
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/coop_flocabulary.jpg" alt="co-op at flocabulary">
									</figure>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="-347 149 104 104" enable-background="new -347 149 104 104"><style>.st0{filter:url(#filter-1);} .st1{fill:none;stroke:#ffffff;stroke-width:4;} .st2{fill:#ffffff;}</style><filter width="142.5%" height="142.5%" id="filter-1" x="-21.2%" y="-21.2%" filterUnits="objectBoundingBox"><feOffset result="shadowOffsetOuter1" in="SourceAlpha"/><feGaussianBlur stdDeviation="5" result="shadowBlurOuter1" in="shadowOffsetOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" result="shadowMatrixOuter1" in="shadowBlurOuter1"/><feMerge><feMergeNode in="shadowMatrixOuter1"/><feMergeNode in="SourceGraphic"/></feMerge></filter><g transform="translate(12 12)" class="st0"><circle class="st1" cx="-307.2" cy="188.8" r="39.8"/><path class="st2" d="M-314.1 175.8l15.6 12.7-15.6 13.8"/></g></svg>
									<div>
										<ul>
											<li>Co-op at Flocabulary</li>
											<li>Ryan Fleischer, AMD’19, design; Emily Hassell, SSH’19, English; Elena Burstein-LaCourt, AMD’19, studio art  </li>
										</ul>
									</div>
								</a>
							</div>
						</div>

						<div class="nu__thirds-vid js-video">
							<div class="nu__vid-frame ">
								<a  href="https://www.youtube.com/watch?v=G6kr5GOryb8">
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/coop_flocabulary_nickelodeon.jpg" alt="co-op at nickelodeon">
									</figure>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="-347 149 104 104" enable-background="new -347 149 104 104"><style>.st0{filter:url(#filter-1);} .st1{fill:none;stroke:#ffffff;stroke-width:4;} .st2{fill:#ffffff;}</style><filter width="142.5%" height="142.5%" id="filter-1" x="-21.2%" y="-21.2%" filterUnits="objectBoundingBox"><feOffset result="shadowOffsetOuter1" in="SourceAlpha"/><feGaussianBlur stdDeviation="5" result="shadowBlurOuter1" in="shadowOffsetOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" result="shadowMatrixOuter1" in="shadowBlurOuter1"/><feMerge><feMergeNode in="shadowMatrixOuter1"/><feMergeNode in="SourceGraphic"/></feMerge></filter><g transform="translate(12 12)" class="st0"><circle class="st1" cx="-307.2" cy="188.8" r="39.8"/><path class="st2" d="M-314.1 175.8l15.6 12.7-15.6 13.8"/></g></svg>
									<div>
										<ul>
											<li>Co-op at Nickelodeon</li>
											<li>Melissa Rorech, AMD’18, music composition and technology </li>
										</ul>
									</div>
								</a>
							</div>
						</div>
					</div>
				</section> -->




				<section class="slider" data-section="learning">
					<div class="title">
						<h3><span class="nu__span-bold">Richness of Experience</span></h3>
					</div>
					<div class="background">
						<div>
						</div>
						<div id="bgimage" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/learning/slide1.jpg); background-size: cover; background-position: center center;"></div>
					</div>
					<div class="wrapper">

						<p id="slider__copy-1">"The most attractive part for me was being able to see what it takes to start and run a business. There are so many startups here and so many people who are very ambitious. I can’t tell you how many times I’ve already been asked 'What are you working on?'"<br /><br /><span class="nu__span-bold">Alexy Santos, DMSB’20</span></p>

						<!-- <p id="slider__copy-1">"<span class="nu__span-bold">The refugees’ experiences</span> traveling to and living in Greece could have easily turned anyone sour, but here they were, laughing and smiling with us as we communicated through translators and hand gestures. It was an <span class="nu__span-bold">eye-opening</span> and <span class="nu__span-bold">heart-filling experience</span>."<br /><br /><span class="nu__span-bold">Paxtyn Merten</span>, AMD’20</p> -->

						<p id="slider__copy-2">"Cuba is an island full of paradoxes. It has an innate beauty and its people have an open mindedness that is unmatched, but there is also a lot of internal conflict and we heard some heart&ndash;wrenching stories."<br /><br /><span class="nu__span-bold">Alejandro Serrano, AMD’20</span></p>

						<p id="slider__copy-3">"At Massachusetts General Hospital, I'm working on a self&ndash;designed research project and a rewarding moment came when I finally got the results I wanted after weeks of work. That feeling is why I always want to do research."<br /><br /><span class="nu__span-bold">Kritika Singh, E’20</span> </p>

						<p id="slider__copy-4">"During my past year and a half in Berlin, I grew tremendously as a person. In particular, I worked on a product design team at a startup. When I return to campus, I'll have a better sense of what I want from my classes and professional experiences."<br /><br /><span class="nu__span-bold">Sharon Chan, AMD’19</span></p>

						<p id="slider__copy-5">"Service&ndash;learning is one of the most fulfilling things you can do at Northeastern. It's my favorite form of experiential learning&mdash;a way to give back to the Boston community and grow as a person and make amazing friends. In the S&ndash;L program, everyone loves their service, and each other."<br /><br /><span class="nu__span-bold">Cassandra Barrett, S/SSH’21</span></p>

					</div>
					<div class="choices">
						<div class="active" data-id="1">
							<h3>SEMESTER IN SILICON VALLEY</h3>
							<p>Getting immersed in startup culture</p>
						</div>
						<div data-id="2">
							<h3>DIALOGUE OF CIVILIZATIONS</h3>
							<p>Living amid Cuba's paradoxes </p>
						</div>
						<div data-id="3">
							<h3>UNDERGRADUATE RESEARCH</h3>
							<p>Feeling the rewards of discovery</p>
						</div>
						<div data-id="4">
							<h3>EXPERIENTIAL YEAR ABROAD</h3>
							<p>Bringing Berlin back to Boston</p>
						</div>
						<div data-id="5">
							<h3>SERVICE&ndash;LEARNING</h3>
							<p>Growing by giving back </p>
						</div>
					</div>
				</section>

				<section class="partnerships js-learning2">
					<div class="nu__full-container">
						<div class="nu__partnership-wrapper wrapper">
							<div class="nu__part-col">
								<h2><span class="nu__span-bold">Lifelong learning anywhere, anytime</span></h2>
								<div class="col" >
									<h2 class="js-count4">3000</h2>
									<p><span class="nu__span-bold nu__span-red">Experiential opportunities</span> for graduate students in online programs through more than 900 employers in the Experiential Network</p>
							  </div>
							  <div class="col" >
									<h2 class="js-count5">38%</h2>
									<p>Increase in <span class="nu__span-bold nu__span-red">graduate enrollment</span> since 2013&ndash;2014</p>
							  </div>
								<div class="col" >
									<h2 class="js-counta">5</h2>
									<p>Campuses: Boston, Bay Area, CA, Seattle, Toronto, and Charlotte, NC</p>
							  </div>
							</div>

							<div class="nu__part-col" id="partnership">
								<div class="nu__part-col-section">
									<div class="nu__part-header" >
										<h3>Deepening employee partnerships</h3>
									</div>
									<img class="nu__dt" src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/partnership_ge.jpg" alt="Accelerating GE workers">
									<img class="nu__mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/partnership_ge_mobile.jpg" alt="Accelerating GE workers">
									<p>Northeastern is delivering customized learning to employees of Wellington Management and the Hoffmann Group in Germany through programs in data analytics and the internet of things, respectively. In its preferred partners programs, Northeastern has served 47 members of the Boston Ballet and enrolled 26 players from Major League Baseball.</p>
									<!-- <p><a href="<?=home_url()?>/accelerating-ge-workers">Full Story <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p> -->
								</div>
								<div class="nu__part-col-section">
									<div class="nu__part-header">
										<h3>Mastering data</h3>
									</div>
									<img class="nu__dt" src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/amit.jpg" alt="Amit Shinde">
									<img class="nu__mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/amit.jpg" alt="Amit Shinde">
									<p>Amit Shinde says analyzing data effectively is critical to his position as a lead engineer for VSP Vision Care in Sacramento, California. Northeastern's Master of Professional Studies in Analytics was just what he needed to become a more creative, confident professional. "The combination of theory and programming knowledge was most valuable to me. I was able to get the complete cycle of data-analysis process in an organization."</p>
									<!-- <p><a href="<?=home_url()?>/major-league-opportunity">Full Story <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p> -->
								</div>
								<div class="nu__part-col-section">
									<div class="nu__part-header">
										<h3>New Story TBD</h3>
									</div>
									<img class="nu__dt" src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/amit.jpg" alt="Amit Shinde">
									<img class="nu__mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/amit.jpg" alt="Amit Shinde">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas nibh sed blandit viverra. Maecenas venenatis ligula tristique quam tempus dapibus. Suspendisse bibendum accumsan ex, a euismod dui accumsan non. Fusce laoreet sem et enim condimentum, ut ornare massa semper. Nam lacinia ligula at efficitur lobortis. Proin ac mauris eu nisl ultrices efficitur. Mauris mollis est a posuere mollis. Sed ac tincidunt diam, at interdum nulla. Aliquam. </p>
								</div>
							</div>
						</div>
					</div>

				</section><!--end section-->




				<section class="global js-learning3" id="global">
					<div class="wrapper">
						<h2 class="section-header"><span class="nu__span-bold">High talent, high achievement</span></h2>
						<div class="nu__fifty">
							<figure>
								<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/academic_honors_collage.png" alt="academic honors collage">
								<figcaption>Meet some of our <span class="nu__span-bold">most talented</span> undergraduates </figcaption>
							</figure>
							<a href="<?=home_url()?>/profiles" class="nu__button" role="button">view profiles</a>
						</div>
						<div class="nu__fifty">
							<div class="nu__stat-block">
								<h2 class="js-count6">1469</h2>
								<p>Mean two&ndash;part <span class="nu__span-bold">SAT score</span> for fall 2018 enrolled freshmen</p>
							</div>
							<div class="nu__stat-block">
								<h2 class="js-count7">45</h2>
								<p>External awards for academic excellence in 2017&ndash;2018 won by Northeastern students and recent graduates, including 16 awards supporting global study and leadership</p>
							</div>
						</div>
					</div>
				</section><!--end section-->


				<section class="collage">
					<div class="nu__full-container">
						<div class="nu__row">
							<div class="column left">

					    </div>
					    <div class="column center">
								<h3><span class="nu__span-bold">Diversity of experiences </span> </h3>
								<div class="nu__stat-block">
									<h2>58%</h2>
									<p>Growth since 2011&ndash;2012 in number of students engaging in at least one <span class="nu__span-bold">international experience</span></p>
								</div>
								<div class="nu__stat-block">
									<h2>116%</h2>
									<p>Growth in <span class="nu__span-bold">enrollment</span> of <span class="nu__span-bold">students of color</span> since 2006</p>
								</div>
								<div class="nu__stat-block">
									<h2>17,890</h2>
									<p>Number of students participating in at least one of 416 <span class="nu__span-bold">student organizations</span>, 2017&ndash;2018</p>
								</div>
								<div class="nu__stat-block">
									<p>2018</p>
									<h2>We're #1</h2>
									<p>The mens hockey team <span class="nu__span-bold">defeated Boston University Terriers 5&ndash;2</span> on February 12 to claim <span class="nu__span-bold">Northeastern's first</span> mens Beanpot championship since 1988.</p>
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
