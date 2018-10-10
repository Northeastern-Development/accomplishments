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
						<h2 class="section-header">A culture of <span class="nu__span-bold">giving</span>  </h2>
						<div class="content">
							<div class="facstats">
								<div>
									<h2>100,000+</h2>
									<p>people from 110 countries made gifts to the campaign</p>
								</div>
								<div>
									<p class="larger"><span class="nu__span-bold">Empowering the future</span></p>
									<p>We celebrated the success of our historic Empower campaign, which enhanced the university with gifts of global significance supporting students, faculty, and research.</p>
								</div>
							</div>
						</div>
					</div>
				</section>




				<section class="nu__engagement js-empower1">

					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header"><span class="nu__span-bold">Record-breaking</span> engagement</h2>
						<p>The Empower campaign succeeded, thanks to the generosity of Northeastern’s <span class="nu__span-bold">global network of supporters</span>.</p>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/empower/stats.png" alt="engagement statistics" />
						<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/empower/engagementstats-right.jpg" alt="foundation contributions" /> -->
						<div>
							<h2 class="js-count2e">2,100+</h2>
							<p>Funds in total supported areas of campaign fundraising such as financial aid, research, athletics, faculty, and student projects</p>
						</div>

					</div>
				</section>





				<section class="nu__givingback" id="giveback">
					<div class="nu__randomredbar"></div>
					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header">Celebrating our achievements</h2>
						<p>Alumni, students, parents, faculty, staff, and friends honored past accomplishments and helped chart Northeastern’s future.</p>
						<div class="content">
							<div>
								<!-- <div>
									<div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/empower/empower_campaign_impact_mclarney.jpg); background-size: cover; background-position: center center;"></div>
									<p>For Ian McLarney, DMSB’17, the Empower campaign enhanced experiential learning.</p>
									<a href="ian" title="Click here to explore">Explore &raquo;</a>
								</div>
								<div>
									<div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/empower/empower_campaign_impact_titcomb.jpg); background-size: cover; background-position: center center;"></div>
									<p>Philanthropy helped Abbey Titcomb, E’18, invent a mobile app to promote campus safety.</p>
									<a href="abbey" title="Click here to explore">Explore &raquo;</a>
								</div> -->
								<div class="js-video-1">
									<div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/empower/leadership-summit.jpg); background-size: cover; background-position: center center;"><a href="https://www.youtube.com/watch?v=y9RsM_e8sYg" title="Click here to watch"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-347 149 104 104" enable-background="new -347 149 104 104"><style>.st0{filter:url(#filter-1);} .st1{fill:none;stroke:#ffffff;stroke-width:4;} .st2{fill:#ffffff;}</style><filter width="142.5%" height="142.5%" id="filter-1" x="-21.2%" y="-21.2%" filterUnits="objectBoundingBox"><feOffset result="shadowOffsetOuter1" in="SourceAlpha"/><feGaussianBlur stdDeviation="5" result="shadowBlurOuter1" in="shadowOffsetOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" result="shadowMatrixOuter1" in="shadowBlurOuter1"/><feMerge><feMergeNode in="shadowMatrixOuter1"/><feMergeNode in="SourceGraphic"/></feMerge></filter><g transform="translate(12 12)" class="st0"><circle class="st1" cx="-307.2" cy="188.8" r="39.8"/><path class="st2" d="M-314.1 175.8l15.6 12.7-15.6 13.8"/></g></svg></a></div>
									<p>Participants from more than 35 countries convened in Paris for Northeastern’s first Global Leadership Summit.</p>
									<a href="https://www.youtube.com/watch?v=y9RsM_e8sYg" title="Click here to watch">Watch &raquo;</a>
								</div>
								<div class="js-video-2">
									<div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/empower/amin.jpg); background-size: cover; background-position: center center;"><a href="https://www.youtube.com/watch?v=kpVfoYiOFRE" title="Click here to watch"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-347 149 104 104" enable-background="new -347 149 104 104"><style>.st0{filter:url(#filter-1);} .st1{fill:none;stroke:#ffffff;stroke-width:4;} .st2{fill:#ffffff;}</style><filter width="142.5%" height="142.5%" id="filter-1" x="-21.2%" y="-21.2%" filterUnits="objectBoundingBox"><feOffset result="shadowOffsetOuter1" in="SourceAlpha"/><feGaussianBlur stdDeviation="5" result="shadowBlurOuter1" in="shadowOffsetOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" result="shadowMatrixOuter1" in="shadowBlurOuter1"/><feMerge><feMergeNode in="shadowMatrixOuter1"/><feMergeNode in="SourceGraphic"/></feMerge></filter><g transform="translate(12 12)" class="st0"><circle class="st1" cx="-307.2" cy="188.8" r="39.8"/><path class="st2" d="M-314.1 175.8l15.6 12.7-15.6 13.8"/></g></svg></a></div>
									<p>The university’s first Distinguished Entrepreneur Award was presented to B/E Aerospace founder Amin Khoury, MBA’89. </p>
									<a href="https://www.youtube.com/watch?v=kpVfoYiOFRE" title="Click here to watch">Watch &raquo;</a>
								</div>
								<div class="js-video-3">
									<div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/empower/giving.jpg); background-size: cover; background-position: center center;"><a href="https://www.youtube.com/watch?v=yeIDX1wjvIs" title="Click here to watch"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-347 149 104 104" enable-background="new -347 149 104 104"><style>.st0{filter:url(#filter-1);} .st1{fill:none;stroke:#ffffff;stroke-width:4;} .st2{fill:#ffffff;}</style><filter width="142.5%" height="142.5%" id="filter-1" x="-21.2%" y="-21.2%" filterUnits="objectBoundingBox"><feOffset result="shadowOffsetOuter1" in="SourceAlpha"/><feGaussianBlur stdDeviation="5" result="shadowBlurOuter1" in="shadowOffsetOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" result="shadowMatrixOuter1" in="shadowBlurOuter1"/><feMerge><feMergeNode in="shadowMatrixOuter1"/><feMergeNode in="SourceGraphic"/></feMerge></filter><g transform="translate(12 12)" class="st0"><circle class="st1" cx="-307.2" cy="188.8" r="39.8"/><path class="st2" d="M-314.1 175.8l15.6 12.7-15.6 13.8"/></g></svg></a></div>
									<p>Thousands of contributions to Annual Giving yielded remarkable results all across Northeastern.</p>
									<a href="https://www.youtube.com/watch?v=yeIDX1wjvIs" title="Click here to watch">Watch &raquo;</a>
								</div>
							</div>
						</div>
					</div>
				</section>





				<section class="globalnetwork js-empower2" id="alumnistories">

					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header">High-impact gifts for students, faculty, and research</h2>
						<div class="content">
							<div class="facstats">
								<div>
									<!-- <h2 class="js-count3e">245,000</h2>
									<p>Alumni in <span class="nu__span-bold">164 countries</span></p> -->

									<!-- <h2 class="js-count4e">39</h2> -->
									<p>In the past year, donors' generosity drove exciting efforts in engineering, business, science, the humanities, and more.</p>

									<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/empower/countryflags.png" alt="country flags" /> -->
								</div>
								<div>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/empower/lifelongconnections.png" alt="lifelong connections collage image" />
									<p>Alumni forge <span class="nu__span-bold">lifelong connections</span></p>
									<a href="alumni-stories" title="Click here to read stories">Read Stories</a>
								</div>
							</div>
						</div>
					</div>
				</section>





				<section class="collage">
					<div class="nu__full-container">
						<div class="nu__row">
							<div class="column left">
								<h2>Connected for life</h2>
								<div class="nu__stat-block">
									<h2>378</h2>
									<p>Alumni events, of which 47 were virtual and live-streamed</p>
								</div>
								<div class="nu__stat-block">
									<h2>43</h2>
									<p>Global communities, plus programs in Argentina, Barcelona, Geneva, Melbourne, Pakistan, Rome, Tokyo, and Vietnam</p>
								</div>
								<div class="nu__stat-block">
									<h2>00</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in sem in augue consequat.</p>
								</div>
					    </div>
					    <div class="column center">
								<div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/empower/brazil.jpg); background-size: cover; background-position: center center;"></div>
								<h2>Opening Doors in Latin America</h2>
								<p>New alumni communities took root in Brazil and Colombia. Enthusiasm among alumni in Latin America is growing in light of deep engagement with Northeastern’s D’Amore-McKim School of Business, the FAS Center for Global Business, the Center for Family Business, and entrepreneurship university-wide.</p>
								<div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/empower/brazil.jpg); background-size: cover; background-position: center center;"></div>
					    </div>
					    <div class="column right">
								<h2>Seeding STEM Careers</h2>
								<p>In November, the Office of Alumni Relations’ Circuits Program hosted a panel on women in STEM in partnership with Women Who Empower, a group of Northeastern alumni, students, and other professionals. Three alumnae—Allison Ventura, CIS’15, senior software engineer at Hubspot; Azita Razzaghi, BHS’88, PhD’91, head of safety and pharmacovigilance at Verastem Inc.; and Christina Kach, E’09, MS’16, associate consultant for Liberty Mutual Insurance—shared their experiences in male-dominated STEM industries, offered advice for navigating workplace dynamics, and told stories about educators who helped them discover STEM. More than 600 people took part in the live-streamed event.</p>
								<div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/empower/stem.jpg); background-size: cover; background-position: center center;"></div>
								<h2>Uniting Like Minds</h2>
								<p>The Northeastern University Civil Engineering Alumni Organization celebrated 40 years of keeping engineering graduates connected. More than 100 participants honored 2018 Outstanding Alumnus Houssam “Sam” Sleiman, E’83, ME’85, director of capital programs and environmental affairs for the Massachusetts Port Authority. The event raised $20,000 for Northeastern’s Department of Civil Engineering.</p>
							</div>





						</div><!--end nu__row-->

					</div>
				</section><!--end section-->



				<section class="nu__alumni" id="nualumnistories">

					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header">Alumni Stories</h2>
						<div class="content">
							<div>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/empower/lifelongconnections.png" alt="lifelong connections collage image" />
								<a href="alumni" title="Click here to read stories">View all Stories</a>
							</div>
						</div>
					</div>
				</section>






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
