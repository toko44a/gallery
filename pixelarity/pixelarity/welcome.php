<!DOCTYPE HTML>
<!--
	Eventually by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes(); ?> >
	<head>
		<title><?php wp_title(); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/welcome_main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/welcome_ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/welcome_ie9.css" /><![endif]-->
	</head>
	<body>
		<!-- Header -->
			<header id="header">
				<h1><?php wp_title(); ?></h1>
				   <?php if(get_field('welocme_text')){ //if the field is not empty
						echo '<p>' . get_field('welcome_text') . '</p>'; //display it
			        } ?>
			</header>

		<!-- Signup Form -->
			<form id="signup-form" method="get" action="#">
				<input type="email" name="email" id="email" placeholder="Email Address" />
				<input type="submit" value="Gallery" />
				<input type="submit" value="Shop" />				
			</form>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<!-- <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li> -->
					<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Iqra Gallery 2016</li>
				</ul>
			</footer>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/welcome_main.js"></script>

	</body>
</html>