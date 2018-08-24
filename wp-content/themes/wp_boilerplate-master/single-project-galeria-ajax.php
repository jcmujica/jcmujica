
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



	

	<div class="post_line"></div>
		
	<div class="post_container ajax__gallery">
	<h1>Galería AJAX</h1>
	<p>La galería en esta publicación está siendo insertada mediante el uso de AJAX y la API de Pixabay.com</p>

	<div id="gallery" class="img-fluid"></div>
	<div id="gallery__btn" class="gallery__button btn-success">Change Image</div>


<!-- 	<a class="pixabay" href="https://pixabay.com/">
	    <img id="theImg" src="https://pixabay.com/static/img/public/leaderboard_b.png" alt="Pixabay">
	</a> -->

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>		 
	<script>	
		$(document).ready(function() {
				var indice = 0;
				$(function () {
				$.ajax({
				url: 'https://pixabay.com/api/?key=9899807-cdbbb74588ead133b8ce58ff7&q=mountain&image_type=photo',
				method: 'GET'
			})
			.then(function(data) {
				console.log(data);
				var imgurl = data.hits[indice].webformatURL;
				$('#gallery').prepend('<img id="theImg" src="'+ imgurl + '" />');
			});

		});

				$('#gallery__btn').click(function(event) {
					indice += 1;
					if (indice == 20) {
						indice = 0;
					}
					$(function() {
						$.ajax({
						url: 'https://pixabay.com/api/?key=9899807-cdbbb74588ead133b8ce58ff7&q=mountain&image_type=photo',
						method: 'GET'
						})
						.then(function(data) {
						d = new Date();
						var imgurl = data.hits[indice].webformatURL;
						console.log(imgurl);
						$("#gallery img:last-child").remove()
						$('#gallery').prepend('<img id="theImg" src="'+ imgurl + '" />');
						});

				});
				});

				
		});
	</script>

	
		
	</div>


<?php get_footer() ?>		

	
