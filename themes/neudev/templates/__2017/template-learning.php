<?php /* Template Name: Experiential Learning Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>



		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<section class="hero">

					<div class="wrapper" style="position:relative;height:100%;">

							<h2 class="section-header">Learn anytime, from anywhere, with anyone</h2>
							<div class="nu__hero-stat">
								<div class="nu__stat-block">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/learning_hero_stat.png" alt="learning funding statistics" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/learning_hero_stat_mobile.png" alt="learning funding statistics" />
								</div>

							</div>

						<!-- <h2 class="section-header">Learn any time, from anywhere, with anyone</h2>
						<div class="nu__hero-stat">
							<div class="nu__stat-block">
								<h2>127%</h2>
								<p><span class="nu__span-bold">Growth</span> in number of countries where Northeastern has placed students in <span class="nu__span-bold">experiential learning opportunities</span> since 2006</p>
							</div>
						</div>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/hero_stat.png" alt="Experiential Learning Hero Stat">
						<div class="parent">
	            <div class="child" id="1" style="height:202px;"><div><p>60</p><ul><li>No. of countries</li><li>2006-2007</li></ul></div>
	            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/line1.png" alt="line">
	            </div><div class="child" id="2" style="height:330px"><div><p>92</p><ul><li>No. of countries</li><li>2011-2012</li></ul><</div>
	            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/line2.png" alt="line">
	            </div><div class="child" id="3" style="height:471px"><div><p>131</p><ul><li>No. of countries</li><li>2014-2015</li></ul><</div>
	            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/line3.png" alt="line">
	            </div><div class="child" id="4" style="height:600px;"><div style="position:absolute;margin-top:-40px;margin-left:20px;"><p>136</p><ul><li>No. of countries</li><li>2016-2017</li></ul><</div>
	            	<img id="test" src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/line4.png" alt="line">
	            </div></div></div> -->
						</div>
				</section><!--end section-->



				 <section class="nu__stats">
					<div class="wrapper">
						<h2 class="section-header">Experiential learning grows <span class="nu__span-bold">globally</span></h2>
						<div class="flex-grid-thirds">
						  <div class="col" >
								<h2>3,153</h2>
								<p><span class="nu__span-red nu__span-bold">Co-op employers</span> in the U.S. and around the world in 2016&ndash;2017</p>
						  </div>
						  <div class="col" >
								<h2>11,095</h2>
								<p><span class="nu__span-red nu__span-bold">Co-op placements</span> in 2016&ndash;2017, up from 6,301 in 2006&ndash;2007</p>
						  </div>
						  <div class="col">
								<h2>3,175</h2>
								<p>Students had a <span class="nu__span-red nu__span-bold">global learning experience</span> in 2016&ndash;2017</p>
						  </div>
						</div>
					</div>
				</section><!--end section-->




				<section class="videos">
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
				</section><!--end section-->




				<section class="slider" data-section="learning">
					<div class="title">
						<h3><span class="nu__span-bold">A diverse network</span> of experiences</h3>
					</div>
					<div class="background">
						<div>
						</div>
						<div id="bgimage" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/learning/slide1.png); background-size: cover; background-position: center center;"></div>
					</div>
					<div class="wrapper">

						<p id="slider__copy-1">"<span class="nu__span-bold">The refugees’ experiences</span> traveling to and living in Greece could have easily turned anyone sour, but here they were, laughing and smiling with us as we communicated through translators and hand gestures. It was an <span class="nu__span-bold">eye-opening</span> and <span class="nu__span-bold">heart-filling experience</span>."<br /><br /><span class="nu__span-bold">Paxtyn Merten</span>, AMD’20</p>

						<p id="slider__copy-2">"<span class="nu__span-bold">In Northwest Africa</span>, I saw the importance of environmental mitigation and knew I wanted to work towards <span class="nu__span-bold">changing the processes that enable environmental degradation</span>."<br /><br /><span class="nu__span-bold">Amina Ly</span>, S’18</p>

						<p id="slider__copy-3">"<span class="nu__span-bold">In my year in Costa Rica</span>, I gained a sense of independence and learned valuable lessons about patience, communication, and problem-solving. I was pushed out of my comfort zone many times, which was invaluable for <span class="nu__span-bold">my growth as a learner as well as a human being</span>."<br /><br /><span class="nu__span-bold">Leah Epstein</span>, SSH’19 </p>

						<p id="slider__copy-4">"These students are getting <span class="nu__span-bold">robotics experience in sixth and seventh grade</span>, and hopefully it can be a <span class="nu__span-bold">stepping stone for them</span>."<br /><br /><span class="nu__span-bold">Christopher Scianna</span>, E’19</p>

						<p id="slider__copy-5">"<span class="nu__span-bold">In my project with Breegi Scientific</span>, I improved my communication and project management skills and I gained confidence <span class="nu__span-bold">applying the regulatory knowledge I gained in my master’s program</span>."<br /><br /><span class="nu__span-bold">Diana Parra</span>, MS in Regulatory Affairs</p>

					</div>
					<div class="choices">
						<div class="active" data-id="1">
							<h3>Dialogue of Civilizations </h3>
							<p>Reporting from Syrian refugee camps</p>
						</div>
						<div data-id="2">
							<h3>Undergraduate research</h3>
							<p>Reversing environmental degradation</p>
						</div>
						<div data-id="3">
							<h3>Experiential Year Abroad</h3>
							<p>Studying and practicing sustainable development</p>
						</div>
						<div data-id="4">
							<h3>Service-Learning Project</h3>
							<p>Teaching middle schoolers to win at robotics</p>
						</div>
						<div data-id="5">
							<h3>Graduate Experiential Learning</h3>
							<p>Corporate project elevates online degree </p>
						</div>
					</div>
				</section>

				<section class="partnerships">
					<div class="nu__full-container">
						<div class="nu__partnership-wrapper wrapper">
							<div class="nu__part-col">
								<h2>Partnerships for <span class="nu__span-bold">lifelong learning</span></h2>
								<div class="col" >
									<h2>2,100</h2>
									<p><span class="nu__span-bold nu__span-red">Experiential opportunities</span> for students in online graduate programs through the Experiential Network</p>
							  </div>
							  <div class="col" >
									<h2>209%</h2>
									<p>Increase in <span class="nu__span-bold nu__span-red">graduate enrollment</span> at regional campuses since 2011–2012</p>
							  </div>
							</div>

							<div class="nu__part-col" id="partnership">
								<div class="nu__part-col-section">
									<div class="nu__part-header" >
										<h3>Accelerating GE workers </h3>
									</div>
									<img class="nu__dt" src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/partnership_ge.jpg" alt="Accelerating GE workers">
									<img class="nu__mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/partnership_ge_mobile.jpg" alt="Accelerating GE workers">
									<p>Northeastern is partnering with General Electric to create an accelerated bachelor of science degree in advanced manufacturing for GE employees.</p>
									<p><a href="<?=home_url()?>/accelerating-ge-workers">Full Story <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
								</div>
								<div class="nu__part-col-section">
									<div class="nu__part-header">
										<h3>Major league opportunity </h3>
									</div>
									<img class="nu__dt" src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/partnership_mlb.jpg" alt="Major league opportunity">
									<img class="nu__mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/partnership_mlb_mobile.jpg" alt="Major league opportunity">
									<p>Major League Baseball and Northeastern forged a unique partnership to help players earn degrees and certificates in high-demand fields.</p>
									<p><a href="<?=home_url()?>/major-league-opportunity">Full Story <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
								</div>
							</div>
						</div>
					</div>

				</section><!--end section-->




				<section class="global" id="global">
					<div class="wrapper">
						<h2 class="section-header">Commitment to <span class="nu__span-bold">academic excellence and innovation</span> on campus and around the globe</h2>
						<div class="nu__fifty">
							<figure>
								<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/academic_honors_collage.png" alt="academic honors collage">
								<figcaption>Meet some of our <span class="nu__span-bold">most talented</span> undergraduates </figcaption>
							</figure>
							<a href="<?=home_url()?>/profiles" class="nu__button" role="button">view profiles</a>
						</div>
						<div class="nu__fifty">
							<div class="nu__stat-block">
								<h2>1465</h2>
								<p>Mean two-part <span class="nu__span-bold">SAT score</span> for fall 2017 freshmen, compared to 1230 in fall 2006</p>
							</div>
							<div class="nu__stat-block">
								<h2>75%</h2>
								<p>Of fall 2017 <span class="nu__span-bold">freshmen ranked in the top 10%</span> of their class, compared to 38% in fall 2006</p>
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
								<h3><span class="nu__span-bold">Intercultural</span> hub for <span class="nu__span-bold">diverse</span> experiences</h3>
								<div class="nu__stat-block">
									<h2>502%</h2>
									<p>Growth in <span class="nu__span-bold">international</span> student <span class="nu__span-bold">enrollment</span> since 2006 </p>
								</div>
								<div class="nu__stat-block">
									<h2>107%</h2>
									<p>Growth in <span class="nu__span-bold">enrollment</span> by <span class="nu__span-bold">students of color</span> since 2006</p>
								</div>
								<div class="nu__stat-block">
									<h2>17,400</h2>
									<p><span class="nu__span-bold">Students participating</span> in 403 campus clubs</p>
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
