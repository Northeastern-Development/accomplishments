<?php /* Template Name: Empower Page Template */ get_header(); ?>

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
						<h2 class="section-header">Communities <span class="nu__span-bold">empowered</span>  </h2>
						<div class="content">
							<div class="facstats">
								<div>
									<h2>$1.4B</h2>
									<p>Raised—<span class="nu__span-bold">$400 million over the original goal</span>—for students, faculty, and research, half from philanthropic supporters and half from industry and government partners</p>
								</div>
								<div>
									<p class="larger">The Power of We</p>
									<p>Since 2013, <span class="nu__span-bold">Northeastern’s supporters</span> have come together for <span class="nu__span-bold">campaign celebrations</span> in the nation’s capital and 12 other cities around the world.</p>
								</div>
							</div>
						</div>
					</div>
				</section>




				<section class="nu__engagement">

					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header"><span class="nu__span-bold">Record-breaking</span> engagement</h2>
						<p>The Empower campaign succeeded, thanks to the generosity of Northeastern’s <span class="nu__span-bold">global network of supporters</span>.</p>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/empower/engagementstats-left.png" alt="engagement statistics" />
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/empower/engagementstats-right.jpg" alt="foundation contributions" />


					</div>
				</section>





				<section class="nu__givingback" id="giveback">
					<div class="nu__randomredbar"></div>
					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header">Giving that gives back</h2>
						<p>Northeastern’s many supporters <span class="nu__span-bold nu__span-red">enrich the student experience</span>. In turn, graduates <span class="nu__span-bold nu__span-red">give back to society</span> as global citizens, innovators, and leaders.</p>
						<div class="content">
							<div>
								<div>
									<div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/empower/empower_campaign_impact_mclarney.jpg); background-size: cover; background-position: center center;"></div>
									<p>For Ian McLarney, DMSB’17, the Empower campaign enhanced experiential learning.</p>
									<a href="ian" title="Click here to explore">Explore &raquo;</a>
								</div>
								<div>
									<div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/empower/empower_campaign_impact_titcomb.jpg); background-size: cover; background-position: center center;"></div>
									<p>Philanthropy helped Abbey Titcomb, E’18, invent a mobile app to promote campus safety.</p>
									<a href="abbey" title="Click here to explore">Explore &raquo;</a>
								</div>
								<div class="js-video-2">
									<div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/empower/empower_campaign_impact_dumazo.jpg); background-size: cover; background-position: center center;"><a href="https://www.youtube.com/watch?v=nbuXrqNAuwk" title="Click here to watch"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-347 149 104 104" enable-background="new -347 149 104 104"><style>.st0{filter:url(#filter-1);} .st1{fill:none;stroke:#ffffff;stroke-width:4;} .st2{fill:#ffffff;}</style><filter width="142.5%" height="142.5%" id="filter-1" x="-21.2%" y="-21.2%" filterUnits="objectBoundingBox"><feOffset result="shadowOffsetOuter1" in="SourceAlpha"/><feGaussianBlur stdDeviation="5" result="shadowBlurOuter1" in="shadowOffsetOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" result="shadowMatrixOuter1" in="shadowBlurOuter1"/><feMerge><feMergeNode in="shadowMatrixOuter1"/><feMergeNode in="SourceGraphic"/></feMerge></filter><g transform="translate(12 12)" class="st0"><circle class="st1" cx="-307.2" cy="188.8" r="39.8"/><path class="st2" d="M-314.1 175.8l15.6 12.7-15.6 13.8"/></g></svg></a></div>
									<p>Scholarships to the Lowell Institute School enable working adults like Dumazo Ngesina, CPS’19, to complete a Bachelor of Science degree, online or on campus.</p>
									<a href="https://www.youtube.com/watch?v=nbuXrqNAuwk" title="Click here to watch">Watch &raquo;</a>
								</div>
							</div>
						</div>
					</div>
				</section>





				<section class="globalnetwork" id="alumnistories">

					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header">An expanding <span class="nu__span-bold">global network</span></h2>
						<div class="content">
							<div class="facstats">
								<div>
									<h2>245,000+</h2>
									<p>Alumni in <span class="nu__span-bold">164 countries</span></p>

									<h2>39</h2>
									<p><span class="nu__span-bold">Alumni communities</span>, including new communities in Indonesia, China, South Korea, Thailand, and Panama</p>

									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/empower/countryflags.png" alt="country flags" />
								</div>
								<div>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/empower/lifelongconnections.png" alt="lifelong connections collage image" />
									<p>Alumni forge <span class="nu__span-bold">lifelong connections</span></p>
									<a href="alumni" title="Click here to read stories">Read Stories</a>
								</div>
							</div>
						</div>
					</div>
				</section>





				<section class="collage">
					<div class="nu__full-container">
						<div class="nu__row">
							<div class="column left">
								<h2>Connecting <span class="nu__span-bold">across continents</span></h2>
								<div class="nu__stat-block">
									<h2>449</h2>
									<p>Alumni <span class="nu__span-bold">events</span> in 2017</p>
								</div>
								<div class="nu__stat-block">
									<h2>21</h2>
									<p><span class="nu__span-bold">Countries</span> represented by alumni participating in <span class="nu__span-bold">Virtual Networking events</span></p>
								</div>
					    </div>
					    <div class="column center">
								<div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/empower/alumni-event_london.jpg); background-size: cover; background-position: center center;"></div>
								<h2>LONDON CALLING</h2>
								<p>In March, alumni, students, and parents gathered at the historic London Transport Museum to hear success stories from three exemplars of the grit, resilience, and tenacity fostered by experiential learning: Ashley Smith, DMSB’10, client solutions manager at Facebook; Brian Schatz, DMSB’10, Uber for Business; and Natasha Davidson, DMSB’98, senior director of international field and channel marketing at Blackboard.</p>
					    </div>
					    <div class="column right">
								<h2>GENEVA CONVENTION</h2>
								<p>Alumni, students, parents, and faculty convened in Geneva at the United Nations in June, joining students on a Dialogue of Civilizations course on international security and diplomacy. Participants met alumni working at the World Economic Forum and at the Geneva Centre for the Democratic Control of Armed Forces; Amandeep Singh Gill, India’s ambassador to the UN Conference on Disarmament; and other UN leaders.</p>
								<div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/empower/alumni-event_geneva.jpg); background-size: cover; background-position: center center;"></div>
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
