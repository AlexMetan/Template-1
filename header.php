<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- BootStrap -->
	<link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/css/bootstrap.min.css">
	

	<!-- Font Awesome -->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Theme -->
	<link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/style.css">

	<!-- Animation -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<header>
	<nav class="navbar navbar-expand-md navbar-light">
		<div class="container">
			<a class="navbar-brand menu-item" href="#"><img src="<?=get_template_directory_uri(); ?>/img/logo.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
					<?php wp_nav_menu( array( 'Template 1' => 'primary', 'depth' => 2)); ?> 
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<?php wp_head(); ?>
<body>

