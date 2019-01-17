<?php /* Template Name: Research Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- <h1><?php the_title(); ?></h1> -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<section class="hero js-hero-research">
					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header">A<span class="nu__span-bold"> network</span> for sharing <span class="nu__span-bold">discovery</span></h2>

						<div class="nu__hero-stat">
							<div class="nu__stat-block">
								<h2 class="js-count1rh">229</h2>
								<p>Increase in external research awards, 2006&ndash;2018</p>
							</div>
						</div>
						<div class="parent">
	            <div class="child" id="1" style="height:202px;"><div> <p>$48.7M</p><ul><li>External research funding</li><li>2006&ndash;2007</li></ul> </div>
	            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/line1.png" alt="line">
	            </div><div class="child" id="2" style="height:330px"><div><p>$95.2M</p><ul><li>External research funding</li><li>2011&ndash;2012</li></ul></div>
	            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/line2.png" alt="line">
	            </div><div class="child" id="3" style="height:471px"><div><p>$111.2M</p><ul><li>External research funding</li><li>2014&ndash;2015</li></ul></div>
	            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/line3.png" alt="line">
	            </div><div class="child" id="4" style="height:600px;"><div style="position:absolute;margin-top:-40px;margin-left:20px;"><p>$160.3M</p><ul><li>External research funding</li><li>2017&ndash;2018</li></ul></div>
	            	<img id="talleststat" src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/line4.png" alt="line">
	            </div>
							<img id="nu__mobile-stat" src="<?php echo get_stylesheet_directory_uri(); ?>/img/research/mobile_hero_research1.png" alt="learning funding statistics" />
						</div>
					</div>
				</section>




				<section class="nu__facultypartnerships">
					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header">Propelling solutions through <span class="nu__span-bold">faculty partnerships</span></h2>

						<ul class="controls">
							<li><a href="#" title="Challenging a climate strategy " data-id="partnerships-1" class="activeoption">Challenging a climate strategy </a></li>
							<li><a href="#" title="Study finds flood threat" data-id="partnerships-2">Study finds flood threat</a></li>
							<li><a href="#" title="Mobile security gap found " data-id="partnerships-3">Mobile security gap found </a></li>
							<li><a href="#" title="Kostas Research Institute chosen for Army technology hub" data-id="partnerships-4">Kostas Research Institute</a></li>
							<li><a href="#" title="Expanding collaborative security reserach" data-id="partnerships-5">Expanding collaborative security reserach</a></li>
							<li><a href="#" title="Launching coastal sustainability network" data-id="partnerships-6">Launching coastal sustainability network</a></li>
							<li><a href="#" title="Scientists pioneer epidemic models" data-id="partnerships-7">Scientists pioneer epidemic models</a></li>
						</ul>

						<div class="content">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/research/partnerships1.jpg" alt="rotator image" />
							<p id="p-1">GRI associate director Jennie Stephens and Peter Frumhoff, the chief climate scientist and director of science and policy at the Union of Concerned Scientists, are challenging the idea of climate engineering as an ideal solution to climate change. Stephens and Frumhoff noted in a joint paper that there is inadequate international governance to oversee such large-scale efforts to manipulate global temperatures. Optimizing the climate in one part of the world could harm another region, leading to geopolitical strife, they said.</p>
							<p id="p-2">A new study by Samuel Muñoz of the CSI and colleagues from Woods Hole Oceanographic Institute, the University of Alabama, and Southern Illinois University showed that human activity is increasing the risk of catastrophic floods. The researchers found that the probability of a 100-year flood occurring in the Mississippi River system has increased 20 percent in the past 500 years, mostly because of river engineering and other human activities. Their research lends support to a movement to de-engineer rivers back to something closer to their natural states. </p>
							<p id="p-3">A team of researchers from Northeastern and the University of California, Santa Barbara, found that apps on mobile phones can secretly record screenshots of users’ activities and send them to third parties. The study, led by David Choffnes and Christo Wilson of the Cybersecurity and Privacy Institute, noted that because screenshots may include personal information like passwords, a phone’s privacy window could be exploited for profit. In all, 9,000 of the 17,000 apps the team analyzed had the potential to take screenshots. </p>
							<p id="p-4">In April, the U.S. Army Research Laboratory announced a location for its new, northeast regional hub: the Kostas Research Institute for Homeland Security at Northeastern’s Innovation Campus in Burlington, Massachusetts. ARL researchers will work with faculty and other academic and industry partners to improve warfighter safety by speeding the transfer of technologies from the lab to the battlefield, according to Senior Vice Provost for Research David Luzzi.</p>
							<p id="p-5">Northeastern broke ground on new facilities to advance the mission of the Innovation Campus in Burlington, Massachusetts: partnering with industry and government researchers to develop technologies vital to national security, intelligence, and defense. The expansion includes the Unmanned Aircraft and Ground Systems Lab, where researchers will develop autonomous drone and ground technologies; and a 104,000-square-foot building that will house classrooms, convening spaces, and research laboratories. </p>
							<p id="p-6">Northeastern is spearheading the Coastal Universities Coalition, a consortium of more than a dozen of the world’s leading universities focused on solving the shared challenges of coastal sustainability. The CUC’s research network will identify societal challenges unique to coastal communities and advance the development of solutions through research collaborations, public policy recommendations, and coordinated advocacy for increased federal funding. The coalition members include other leaders in the field, such as the University of Miami and the University of Washington.</p>
							<p id="p-7">NSI researchers collaborated with 16 international teams on a groundbreaking epidemic modeling study, the RAPIDD Ebola challenge. Northeastern’s team, led by NSI director Alessandro Vespignani, the Sternberg Distinguished Professor of Physics, Computer Science, and Health Sciences, used its model based on the 2014 West African Ebola epidemic to recreate crisis-level conditions. The other teams then sought to develop models forecasting the evolution of the simulated epidemic. The study, published in the journal <i>Epidemics</i>, yielded findings that will improve the predictive modeling of future outbreaks.</p>
						</div>



					</div>
				</section>


				<section class="nu__researchstrategy js-research1">
					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header">Select<span class="nu__span-bold"> research grants</span></h2>
						<div class="nuleft">
							<h2 class="js-count1rr">252</h2>
							<p>$1M+  <span class="nu__span-bold">faculty awards</span> since 2006</p>
						</div>
						<div class="stat-container nuright">
							<svg preserveAspectRatio="xMidYMin" width="828"  viewBox="0 0 828 828"></svg>
						</div>
					</div>
				</section>


				<section class="nu__earlycareer">
					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header"><span class="nu__span-bold">Faculty Excellence Recognized </span></h2>
						<p>Northeastern’s 2017&ndash;2018 recipients of national grants and awards recognizing significant contributions to science, engineering, and computer science by junior faculty.</p>
						<div class="controls js-recognition">
							<ul>
	
								<!-- <li><span data-id="recognition-1" class="selected">NATIONAL SCIENCE FOUNDATION</span></li>
								<li><span data-id="recognition-2">DEFENSE DEPARTMENT AGENCIES</span></li>
								<li><span data-id="recognition-3">NATIONAL INSTITUTES OF HEALTH</span></li>
								<li><span data-id="recognition-4">INNOVATIVE THINKERS RECOGNIZED</span></li> -->
								<li><span data-id="recognition-4" class="selected">Accomplished Senior Faculty</span></li>
								<li><span data-id="recognition-2">Defense Department Awards</span></li>
								<li><span data-id="recognition-3">National Institutes of Health Awards</span></li>
								<li><span data-id="recognition-1">National Science Foundation Awards</span></li>
							</ul>

						</div>
						<div class="content js-recognition-content">

							<?php include(locate_template('_includes/recognition4.php')); ?>


						</div><!--end content-->

					</div>


				</section>





				<section class="slider" data-section="research">
					<div class="title">
						<h3>A new experiential PhD  </h3>
					</div>
					<div class="background">
				    <div>

				    </div>
						<div id="bgimage" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/slide1.jpg); background-size: cover; background-position: center center;"></div>
				  </div>
					<div class="wrapper">
						<p id="slider__copy-1">"During my experiential fellowship in the Office of Opinion Research at the U.S. State Department, I analyzed public opinion data from the Middle East and South Asia and wrote analyses that put complex political issues into context for senior policymakers. This experience strengthened my analytical skills and helped me frame my own dissertation research to be as policy-relevant as possible."<br /><br /><span class="nu__span-bold">Dylan Maguire</span><br /><span style="font-size: 1.75rem;">doctoral candidate, political science</span></p>
						<p id="slider__copy-2">"At Microsoft Research, I explored how intelligent conversational agents can support information workers’ emotional well-being and improve their task management and productivity. My mentors and I developed and evaluated a software program that assisted users in scheduling tasks, reflecting on their work, minimizing distractions, and remembering to take breaks. My experience reinforced my interest in designing conversational agents and advanced my dissertation work."<br /><br /><span class="nu__span-bold">Evelyne Kimani</span><br> <span style="font-size: 1.75rem;">doctoral student, computer and information science</span></p>
						<p id="slider__copy-3">"At GSK, I work on DNA-encoded library technology, which makes it possible to screen billions of chemical compounds for potential use as pharmaceuticals. I focus on designing and synthesizing large libraries of compounds that target a wide range of enzymes and receptors. Joining Professor Michael Pollastri’s group at Northeastern allows me to learn drug discovery and medicinal chemistry in ways that can be used for screening projects across GSK."<br /><br /><span class="nu__span-bold">Jing Chai</span><br /><span style="font-size: 1.75rem;">doctoral student and GSK scientist</span></p>
					</div>
					<div class="choices">
						<div class="active" data-id="1">
							<h3>POLITICAL SCIENCE</h3>
							<p>Doctoral fellowship at the State Department </p>
						</div>
						<div data-id="2">
							<h3>COMPUTER AND INFORMATION SCIENCE </h3>
							<p>Doctoral internship at Microsoft Research</p>
						</div>
						<div data-id="3">
							<h3>CHEMISTRY AND CHEMICAL BIOLOGY </h3>
							<p>Doctoral research at GSK</p>
						</div>
					</div>
				</section>

				<section class="nu__facultyinnovation js-research2">

					<div class="wrapper" style="position:relative;height:100%;">
						<h2 class="section-header">Expanding a faculty of creators </h2>
						<div class="content">
							<div class="facstats">
								<div>
									<h2 class="js-count1">656</h2>
									<p>Tenured and tenure-track hires since 2006, including 48 in 2017&ndash;2018</p>
								</div>
								<div>
									<h2 class="js-count2">186</h2>
									<p>Undergraduate and graduate programs of study in emerging fields added since 2006</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wrapper" style="position:relative;height:100%; width: 100%; max-width: 100%;">
						<div class="content">
							<div class="talkingheads">
								<div class="theheads">
									<div data-id="talkinghead-1" class="talkinghead" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/donghee.jpg); background-size: cover; background-position: center center;" title="Click here to learn more about Donghee Jo "><span></span></div>
									<div data-id="talkinghead-2" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/venkat.jpg); background-size: cover; background-position: center center;" title="Click here to learn more about Venkat Kuppuswamy "><span></span></div>
									<div data-id="talkinghead-3" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/loui.jpg); background-size: cover; background-position: center center;" title="Click here to learn more about Psyche Loui"><span></span></div>
									<div data-id="talkinghead-4" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/ramezani.jpg); background-size: cover; background-position: center center;" title="Click here to learn more about Alireza Ramezani"><span></span></div>
									<div data-id="talkinghead-5" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/hiliary.jpg); background-size: cover; background-position: center center;" title="Click here to learn more about Hillary Robinson"><span></span></div>
									<div data-id="talkinghead-6" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/sun.jpg); background-size: cover; background-position: center center;" title="Click here to learn more about Hao Sun"><span></span></div>
									<div data-id="talkinghead-7" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/research/gabrieli.jpg); background-size: cover; background-position: center center;" title="Click here to learn more about Susan Whitfield-Gabrieli"><span></span></div>
								</div>

								<div class="chooseatalkinghead">
									<div class="prev" title="Click here to jump to the previous item">&lsaquo;</div>
									<div>
										<div id="talkinghead-1">
											<h4>Donghee Jo</h4>
											<h5>Assistant Professor of Economics</h5>
											<p>An affiliated faculty member of the Network Science Institute, Jo specializes in <span class="nu__span-bold">political economy and media economics</span>. The primary focus of his research is the <span class="nu__span-bold">causes, consequences, and potential remedies of political polarization</span>.</p>
										</div>
										<div id="talkinghead-2">
											<h4>Venkat Kuppuswamy </h4>
											<h5>Assistant Professor of Entrepreneurship and Innovation</h5>
											<p>Kuppuswamy's research interests fall into two broad areas: the <span class="nu__span-bold">biases and forms of discrimination confronting minority entrepreneurs—</span>particularly on crowd-based platforms like crowdfunding, and the <span class="nu__span-bold">performance consequences of corporate diversification decisions.</span> </p>
										</div>
										<div id="talkinghead-3">
											<h4>Psyche Loui</h4>
											<h5>Assistant Professor of Music</h5>
											<p>Loui studies the <span class="nu__span-bold">intersection of music and emotions</span>. She aims to understand the <span class="nu__span-bold">networks of brain structure and function that enable musical processes</span>: auditory and multisensory perception, learning and memory of sound structure, sound production, and the human aesthetic and emotional response to sensory stimuli. </p>
										</div>
										<div id="talkinghead-4">
											<h4>Alireza Ramezani</h4>
											<h5>Assistant Professor of Electrical and Computer Engineering</h5>
											<p>Ramezani’s research interests include <span class="nu__span-bold">articulated robot movement</span> (aerial and terrestrial) and <span class="nu__span-bold">applied nonlinear control theory</span>. He’s studying the <span class="nu__span-bold">flight specialization of bats</span> to develop an Unmanned Aerial System (UAS) with bat morphology called Bat Bot.</p>
										</div>
										<div id="talkinghead-5">
											<h4>Hillary Robinson</h4>
											<h5>Associate Professor of Law and Sociology</h5>
											<p>Robinson’s research concerns the <span class="nu__span-bold">interaction between technological change and legal decision-making</span> in the construction of social order, particularly as legal institutions engage in decision-making about technological things and practices </span>.</p>
										</div>
										<div id="talkinghead-6">
											<h4>Hao Sun</h4>
											<h5>Assistant Professor of Civil and Environmental Engineering</h5>
											<p>Hao Sun's research uses <span class="nu__span-bold">analytics and machine learning</span> combined with internet-of-things enabled sensors to track the resilience, sustainability, and safety of buildings. The overall aim of this interdisciplinary work is to develop <span class="nu__span-bold">intelligent infrastructure systems and buildings</span>, enhance the resilience and sustainability of our living communities, and make our structures safer.</p>
										</div>
										<div id="talkinghead-7">
											<h4>Susan Whitfield-Gabrieli</h4>
											<h5>Professor of Psychology </h5>
											<p>Whitfield-Gabrieli seeks to understand the <span class="nu__span-bold">brain basis of psychiatric disorders—</span>such as schizophrenia and attention deficit-hyperactivity disorder—and to promote translation of this knowledge into clinical practice. </p>
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
								<h2>Ecosystem of <span class="nu__span-bold">invention</span></h2>
								<div class="nu__stat-block">
									<h2>6th</h2>
									<p>Among national universities for undergraduate entrepreneurship programs, ranked by <i>Entrepreneur Magazine</i> and The Princeton Review</p>
								</div>
								<div class="nu__stat-block">
									<h2>13th</h2>
									<p>Among national universities for graduate entrepreneurship programs, ranked by <i>Entrepreneur Magazine</i> and The Princeton Review</p>
								</div>
								<!-- <div class="nu__stat-block">
									<h2>50</h2>
									<p>Spinout <span class="nu__span-bold">companies</span> formed <span class="nu__span-bold">by faculty and students</span> since 2006</p>
								</div> -->
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
