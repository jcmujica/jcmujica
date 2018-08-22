<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>

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

	<div class="post_line"></div>

	<div class="post_container col-md-offset-3 col-md-6">
		 

		<?php the_post(); ?>

		<div class="post_thumb"><?php the_post_thumbnail('site_post') ?></div>
		<h1><?php the_title() ?></h1>
		<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
		<?php the_content() ?>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->


	
<?php } wp_reset_query(); ?>

<?php get_sidebar() ?>
<?php get_footer() ?>		

	</div>
