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
								<img class="navbar_img" src="" alt="">
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
		<?php $id = get_the_ID(); 
			echo $post_id;
		?>



			
			


		 

		<?php the_post(); ?>

		<?php the_post_thumbnail() ?>
		<?php the_title() ?>
		<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
		<?php the_content() ?>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->


	
<?php } wp_reset_query(); ?>

<?php get_sidebar() ?>
<?php get_footer() ?>