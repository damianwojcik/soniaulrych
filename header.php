<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?= THEME_URL; ?>/favicon.ico" type="image/png">


	<!-- HTML 5 SUPPORT
	================================================== -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


<!-- =================================================
		sidebar-menu
================================================== -->
<aside class="sidebar-menu">

	<a href="#" class="btn sidebar-btn">WRÓĆ</a>

	<nav id="mobile-menu">

		<?php wp_nav_menu(); ?>

	</nav>

</aside>
<!-- END mobile nav -->


<div class="page--wrapper">

	<!-- =================================================
			header
	================================================== -->
	<header>

		<div class="container">

			<div class="row">

				<div class="span2">

					<?php $logo = get_field('logo', 'option'); ?>

					<?php if( !empty($logo) ): ?>

					<a href="<?=SITE_URL?>"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></a>

					<?php endif; ?>

					<!-- mobile nav -->
					<div id="menu-toggle">

						<span id="menu-toggle-text">MENU</span>

						<div class="menu-bars">

							<span class="menu-bar"></span>
							<span class="menu-bar"></span>
							<span class="menu-bar"></span>

						</div>

					</div>

				</div>

				<div class="span10">

					<nav id="primary-menu">

						<?php wp_nav_menu(); ?>

					</nav>

				</div>

			</div>

		</div>

	</header>
