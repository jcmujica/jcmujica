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
						<img class="navbar_img" src="assets/img/logo.png" alt="">
					</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul id="myMenu" class="nav navbar-nav navbar-right">
						<li><a id="nav-home" href="#goto-home">Home</a></li>
						<li><a id="nav-about" href="#goto-about">Acerca</a></li>
						<li><a id="nav-projects" href="#goto-projects">Proyectos</a></li>
						<li><a id="nav-blog" href="#goto-blg">Blog</a></li>
						<li><a id="nav-contact" href="#goto-cntct">Contacto</a></li>
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
					<h1 class="title">
						<a href="" class="typewrite inactiveLink" data-period="2000000" data-type='[ " &ltDesarrollador Front-End/>" ]'>
	  					</a>	
					</h1>
				</div>
			</div>

			<div class="bot-footer">	
				JCMujica.com All Rights Reserved
			</div>	
		</div>

		<div class="section about-section" id="section-about">
			<div class="row">
				<div class="col-md-offset-5 col-md-5">
					<h1><div class="black">&#62;</div>Acerca de mí</h1>
				</div>
			</div>	
			<div class="col-md-offset-1 col-md-4 ">
					<img class="about-image" src="<?php bloginfo( 'template_url' ) ?>/assets/images/avatar.png" alt="">

			</div>
				<div class="col-md-5">
					

					<div class="row">
						<div class="col-md-2">
							<i class="far fa-clone"></i>
						</div>
						<div class="col-md-10">
							<p>Diseño Responsivo</p>	
						</div>
					</div>						
					<div class="row"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odit placeat repellendus fugiat voluptas unde quasi, eligendi ea reprehenderit, nulla facere animi magni distinctio quos minus. Laborum nihil, quo dolorum! Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>						
					<div class="row"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odit placeat repellendus fugiat voluptas unde quasi, eligendi ea reprehenderit, nulla facere animi magni distinctio quos minus. Laborum nihil, quo dolorum! Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>						
					

				</div>

					
		</div>
		<div class="section sec-projects" id="section-projects">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<h1>Proyectos</h1>
				</div>			
				<div class="col-md-offset-2 col-md-8">
					<img class="project-image" src="<?php bloginfo( 'template_url' ) ?>/assets/images/verde.png" alt="">
					<img class="project-image" src="<?php bloginfo( 'template_url' ) ?>/assets/images/azul.png" alt="">
					<img class="project-image" src="<?php bloginfo( 'template_url' ) ?>/assets/images/verde.png" alt="">
					<img class="project-image" src="<?php bloginfo( 'template_url' ) ?>/assets/images/azul.png" alt="">
					<img class="project-image" src="<?php bloginfo( 'template_url' ) ?>/assets/images/verde.png" alt="">
					<img class="project-image" src="<?php bloginfo( 'template_url' ) ?>/assets/images/azul.png" alt="">
				</div>
			</div>
						
		</div>
		<div class="section" id="section-blog">
			<div class="col-md-offset-1 col-md-7">
				
				<?php
						$arg = array(
							'post_type'		 => 'blog',
							'category_name'	 => '',
							'posts_per_page' => 1,
							'offset'		 => 0,
							'post__not_in'	 => array($post->ID),
							'paged'			 => $paged
						);
					
						$get_arg = new WP_Query( $arg );
					
						while ( $get_arg->have_posts() ) {
							$get_arg->the_post();
						?>
							
							<!-- Content -->
					
						<?php } wp_reset_postdata();
					?>


			</div>			
		</div>
		<div class="section" id="section-cntct">
			<div class="col-md-offset-1 col-md-7">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odit placeat repellendus fugiat voluptas unde quasi, eligendi ea reprehenderit, nulla facere animi magni distinctio quos minus. Laborum nihil, quo dolorum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non saepe eius porro adipisci tempore, quos quibusdam tenetur doloribus! Iste veniam tempore tempora ratione fugiat, eveniet, voluptatibus amet earum cum doloribus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, dolore ea minus inventore eius, possimus veritatis, saepe amet repudiandae adipisci reprehenderit non unde. Nihil reprehenderit amet veritatis sit. Fugit, cum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi iure quisquam exercitationem, sint eligendi nostrum dolorum ex veritatis fuga ducimus impedit ipsum, provident ad vero ipsam similique eveniet. Ipsa, itaque.</p>
			</div>			
		</div>
	</div>

<?php get_footer() ?>