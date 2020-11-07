<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name');?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Prata&display=swap" rel="stylesheet">
	<?php wp_head(); ?>



</head>
<body>

    <div class = "header">
		<div class = "inner-header">
			<div class = "logo">
				<img src = 'https://img.etimg.com/thumb/msid-59738997,width-1070,height-580,overlay-economictimes/photo.jpg'></img>
			</div>
			<div class = "navmenu">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</div>
			<div class="menubutton">
				<div class="div"></div>
				<div class="div"></div>
				<div class="div"></div>
			</div>
		</div>
	</div>
	