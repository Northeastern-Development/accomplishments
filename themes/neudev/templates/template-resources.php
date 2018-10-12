<?php /* Template Name: Resources Page Template */ get_header(); ?>

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
							<p><a class="js-back-page" href="<?=home_url()?>/experiential-learning/#resources"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a></p>
							<h2>Meet some of our most talented undergraduates </h2>
							<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/learning/academic_honors_collage.png" alt="academic honors collage">
						</div>
					</div><!--end nu__fixed-column-->

					<div class="nu__scroll-column">
						<div>
							<h3>Bringing SAIL to life</h3>
							<article>
								<h4>Professor Jacqueline Isaacs: Bringing SAIL to life</h4>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/isaacs.jpg" alt="Jacqueline Isaacs">
								<p>As a SAIL ambassador, Professor of Mechanical and Industrial Engineering Jacqueline Isaacs is bringing SAIL to life for engineering students and faculty. Her challenge: To align courses with SAIL’s learning dimensions and introduce SAIL at leadership retreats for the student officers of 50-plus clubs and teams.</p>
								<p>A course on "Environmental Manufacturing and Product Use," she explains, “introduces policy, ethics, and social issues alongside emerging technologies. It asks questions about designing products that have an environmental footprint and how they affect environmental and human health.”</p>
								<p>The course "demands systems thinking on a global level," a skill SAIL aims to nurture. Students must balance environmental and health impacts against variables such as cost and materials choices—options that come with their own ramifications.</p>
								<p>From there, Isaacs says, it’s no great leap to introduce SAIL’s five learning dimensions, particularly intellectual agility, global mindset, and social consciousness and commitment.</p>
								<p>"Learning to self-reflect, students discover their preferences … and how to learn what they don’t know."</p>
							</article>

							<h3>Harnessing SAIL’s mobile app</h3>
							<article>
								<h4>Philip Andolena, DMSB’19: Harnessing SAIL’s mobile app</h4>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/andolena.jpg" alt="Philip Andolena, DMSB’19">
								<p>To Philip Andolena, DMSB’19, who joined SAIL’s Student Advisory Board in 2017, SAIL’s experiential learning goals made instant sense. He points to skills and traits—like community engagement and critical thinking—that he had already learned and taught as a resident assistant.</p>
								<p>He’s now beta-testing the SAIL app. You can tap a “calendar feed” of new learning opportunities that “eventually will be global,” Andolena notes. You can create a visual, sharable profile of your learning in five dimensions, a mosaic to which "you add pieces as you build out experiences." You can track key "learning moments" on a timeline. All this, he says, helps you "pitch your strengths" to employers, grad schools, and peers.
								Eventually the calendar feed will be comprehensive, "and you’ll find activities in areas where you want to grow," he says. As more students and alumni sign on, "It’ll be great for professional networking."</p>
							 <p>You’ll seek others’ advice about co-ops that interest you, Andolena says. And while you’re on co-op, when "it can be hard to feel connected," you’ll search for events that bring co-op students together.</p>
								<p>"SAIL’s learning goals are “already baked into Northeastern’s culture."</p>
							</article>

							<h3>Nurturing Change Agents with SAIL</h3>
							<article>
								<h4>Social Impact Lab Director Rebecca Riccio: Nurturing Change Agents with SAIL</h4>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/riccio.jpg" alt="Rebecca Riccio">
								<p>As the director of Northeastern’s Social Impact Lab, Rebecca Riccio helps students become agents of social change. For her, SAIL resonated instantly.</p>
								<p>From her long experience managing international human-service programs, Riccio also understands the importance of skills SAIL teaches, like perspective taking and cultural agility. Today she empowers students to think, work, and collaborate across sectors and disciplines to benefit their communities.</p>
								<p>As students learn to effect change through philanthropy, awarding grants to nonprofits, they describe their insights in terms of SAIL’s five dimensions. Assignments and readings explicitly invite them to hone skills like negotiating, and traits like respect and civic-mindedness.</p>
								<p>"SAIL has emboldened me to emphasize skills, competencies, and attributes like comfort with ambiguity, empathy, and humility in an academically rigorous course," Riccio says.</p>
								<p>SAIL also "holds me accountable," she says, to giving students not just knowledge, but the "experiences and reflection time" they’ll need to persevere as citizen-leaders and change agents fighting for social and economic justice, a sustainable planet, and the well-being of all.</p>
								<p>"Viewing 'soft skills' as a part of Northeastern’s teaching mandate isn't just valid. It’s ethically imperative."</p>
							</article>

							<h3>Using SAIL to Choose a Major</h3>
							<article>
								<h4>Explore Program Director Kim Irmiter: Using SAIL to Choose a Major</h4>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/kim.jpg" alt="Kim Irmiter">
								<p>SAIL’s earliest adopters are students in Northeastern’s Explore program: first-years who haven’t chosen a major. For them, "SAIL comes naturally," says director Kim Irmiter.</p>
								<p>Like Explore, SAIL is all about developing along dimensions—like personal and professional growth—that are fundamental to students’ identity and focus. "Our students are already charting not only their academic path, but also experiential opportunities and co-curriculars."</p>
								<p>SAIL’s learning dimensions, skills, and traits are built into the Explore curriculum. Students develop a plan for coursework they’ll sample. They practice a key goal of SAIL called knowledge transfer by thinking about how they’ve applied an acquired skill to new situations.</p>
								<p>Using the SAIL app, they share their 360 "honeycomb" visualization and "moments," insights relevant to their academic and career explorations. They write about setbacks and successes in clubs, sports, and other activities that build attributes like self-advocacy and leadership.</p>
								<p>Finally, each student drafts a "Major Exploration" plan. Filtered through SAIL’s learning framework, these plans uncover student’s strengths and room for growth.</p>
								<p>"To Explore’s students, SAIL comes naturally. They’re already thinking hard about their interests and strengths."</p>

							</article>


							<h3>Growth in Social Consciousness and Commitment </h3>
							<article>
								<h4>Alejandra and Vanessa Pena, SSH’18: Growth in Social Consciousness and Commitment</h4>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/pena.jpg" alt="Alejandra and Vanessa Pena">
								<p>When sisters Alejandra and Vanessa Pena, SSH’18, transferred to Northeastern from the University of Quito in their native Ecuador, they had a genuine desire to create social change.</p>
								<p>Today, as co-founders of Aweik, these alumni are promoting social entrepreneurship in Latin America to solve stubborn problems in education, health, and other areas, thanks to what they say is their exponential growth in one of SAIL’s learning dimensions: social consciousness and commitment.</p>
								<p>Through student orientation, advising, and the co-op course, "We got to know ourselves better, explore our interests, and look for the experiences we needed," says Alejandra, a combined business and economics major. Next came the Global Social Enterprise course, a Dialogue of Civilizations in India to explore the roots of poverty, and co-ops—Alejandra at a microfinance nonprofit in San Francisco, and Vanessa at a technology-based startup in New York.</p>
								<p>Integrating lessons learned, Aweik supports technology-focused social entrepreneurs, connecting them to business leaders and policymakers worldwide. This fall, Aweik will host an impact development summit in Ecuador.</p>
								<p>"We have to create an ecosystem that will improve these enterprises and help them grow."</p>

							</article>





							<a class="js-back-page nu__mobile-back" href="<?=home_url()?>/experiential-learning/#resources"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a>
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
