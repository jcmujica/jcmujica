
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
							<li><a id="nav-home" href="<?php home_url('') ?>#goto-home">Home</a></li>
							<li><a id="nav-about" href="<?php get_home_url() ?>#goto-about">About</a></li>
							<li><a id="nav-projects" href="<?php site_url() ?>#goto-projects">Projects</a></li>
							<li><a id="nav-blog" href="#<?php bloginfo( 'template_url' ) ?>goto-blg">Blog</a></li>
							<li><a id="nav-contact" href="<?php bloginfo( 'template_url' ) ?>#goto-cntct">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</nav>


<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>

	

	<div class="post_line"></div>

	<div class="post_container">
		 

		<?php the_post(); ?>
		<div class="row">
			<!-- <div class="col-md-4">
				<span class="post_thumb"><?php the_post_thumbnail('site_post') ?></span>		
			</div> -->
				<div class="col-md-8">
					<span class="post__title"><?php the_title() ?></span>
					<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>		
				</div>
		</div>
		<?php the_content() ?>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->


	
<?php } wp_reset_query(); ?>
</div>
<?php get_sidebar() ?>
<?php get_footer() ?>		

	
