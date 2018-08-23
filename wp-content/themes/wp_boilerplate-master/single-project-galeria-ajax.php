
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
		
	<div class="post_container col-md-offset-3 col-md-10">


<div id="gallery" class="gallery">
	

</div>
<a href="https://pixabay.com/">
    <img src="https://pixabay.com/static/img/public/leaderboard_b.png" alt="Pixabay">
</a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>		 
<script>	
$(document).ready(function() {
		$(function() {
	$.ajax({
		url: 'https://pixabay.com/api/?key=9899807-cdbbb74588ead133b8ce58ff7&q=yellow+flowers&image_type=photo',
		
		method: 'GET'
	})
	.then(function(data) {
		console.log(data.hits[0].largeImageURL);
		var imgurl = data.hits[0].largeImageURL
		$('#gallery').prepend('<img id="theImg" src="'+ imgurl + '" />')
	});

});
});

</script>




<?php get_footer() ?>		

	</div>
