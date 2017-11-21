<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- container starts  -->
	<div class="container">
		<!-- header area starts here -->

		<header class="header-area">
			<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

			<div class="main-menu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About us</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">Service</a></li>
					<li><a href="#">Contact us</a></li>
				</ul>
			</div>
			<div class="header-image">
				<?php get_template_part('template-parts/header', 'image'); ?>
			</div>
		</header>
