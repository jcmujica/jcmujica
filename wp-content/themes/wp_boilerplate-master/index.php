<?php get_header() ?>


<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<nav class="navbar">
			<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<span class="main-logo" id="logo-text">JCMujica.com</span>
					</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul id="myMenu" class="nav navbar-nav navbar-right">
						<li><a id="nav-home" href="#goto-home">Home</a></li>
						<li><a id="nav-about" href="#goto-about">About</a></li>
						<li><a id="nav-projects" href="#goto-projects">Projects</a></li>
						<li><a id="nav-blog" href="#goto-blg">Blog</a></li>
						<li><a id="nav-contact" href="#goto-cntct">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</nav>

<div id="pagepiling">
		<div class="main-body section" id="section-home">
			<div class="row">
				<div class="title-container container-fluid title col-md-offset-2 col-md-8">
					<div class="title">
						<a href="" class="typewrite inactiveLink" data-period="20000000" data-type='[ " &ltFront-End Developer/>" ]'>
	  					</a>	
					</div>
				</div>
			</div>
		</div>

		<div class="section about-section" id="section-about">
			<div class="row">
				<div class="col-md-offset-2 col-md-10">
					<h1>/About me</h1>
				</div>
			</div>	
			<div class="col-md-offset-2 col-md-3 col-sm-3">
					<img class="about-image" src="<?php bloginfo( 'template_url' ) ?>/assets/images/avatar.svg" alt="">		
			</div>
				<div class="col-md-5">
					
					<div class="about-desc">
						<h2>&gt; Who is JCMujica?</h2>
						<div class="abt-txt">I'm a Venezuelan Electronic Engineer - Computers with experience in customer support and knowledge in the areas of IT, Front-End Development, and various programming languages. I also have an advanced level of written and spoken English. I currently live in Santiago, Chile.</div>
					</div>


					<div class="skill-list">
						<ul>
							<h2>Skills and Abilities</h2>
							<li>
								<div class="skill-txt">
									<span class="skill-underscore">_</span>
								 Responsive Design</div>
							</li>
							<li>
								<div class="skill-txt">
									<span class="skill-underscore">_</span>
								Animated Development</div>
							</li>
							<li>
								<div class="skill-txt">
									<span class="skill-underscore">_</span>
								Preference for intuitive and simple UI</div>
							</li>
							<li>
								<div class="skill-txt">
									<span class="skill-underscore">_</span>
								High loadign speeds for websites</div>
							</li>
						</ul>
					</div>				
					

				</div>

					
		</div>
		<div class="section sec-projects" id="section-projects">
			<div class="row">
				<div class="col-md-offset-2 col-md-10">
					<h1>/Proyectos</h1>
				</div>			
				<div class="col-md-offset-1 col-md-10">

				<?php
					$arg = array(
						'post_type'		 => 'project',
						'posts_per_page' => 6
					);
				
					$get_arg = new WP_Query( $arg );
				
					while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
						
				<!-- Content -->
				<div class="project-container">
					<article class="project">
						<a href="<?php the_permalink() ?>">
							<?php the_post_thumbnail('site_post', array('class' => 'project__img')) ?>
							<div class="project__content">
								<div class="middle">
									<div class="project-text">
										<h3 class="project__title"> <?php the_title() ?> </h3>
										<p class="project__excerpt"><?php the_excerpt() ?></p>
									</div>
								</div>
							</div>
						</a>
					</article>
				</div>
					<?php } wp_reset_postdata();
				?>
				</div>

			</div>

						
		</div>
		<div class="section sec-blog" id="section-blog">



<div class="row">
				<div class="col-md-offset-2 col-md-10">
					<h1>/Blog</h1>
				</div>			
				<div class="col-md-offset-1 col-md-10">

				<?php
					$arg = array(
						'post_type'		 => 'blog_post',
						'posts_per_page' => 6
					);
				
					$get_arg = new WP_Query( $arg );
				
					while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
						
				<!-- Content -->
				<div class="blog-container">
					<article class="blog">
						<a href="<?php the_permalink() ?>">
							<?php the_post_thumbnail('site_post', array('class' => 'blog__img')) ?>
							<div class="blog__content">
								<div class="middle">
									<div class="blog-text">
										<h3 class="blog__title"> <?php the_title() ?> </h3>
										<p class="blog__excerpt"><?php the_excerpt() ?></p>
									</div>
								</div>
							</div>
						</a>
					</article>
				</div>
					<?php } wp_reset_postdata();
				?>
				</div>

			</div>


			
		</div>
		<div class="section sec-contact" id="section-cntct">
			<div class="col-md-offset-2 col-md-10">
				<h1>/Contacto</h1>
			</div>		
		</div>
	</div>

<?php get_footer() ?>