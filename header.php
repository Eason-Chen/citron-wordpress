<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo('name'); ?></title>

	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body>
	<!-- header statr -->
	<header class="container clearfix">
		<div class="slogan">
			<h1>Citron Natural Mineral Water Of New Zealand</h1>
		</div>
		<a href="<?php echo home_url(); ?>" class="logo"></a>
	</header><!-- header end -->

	<!-- navigation start -->
	<section class="nav_wrapper">
		<nav>
			<?php
				$args = array(
					'theme_location' => 'primary'
				);
			?>
			<?php wp_nav_menu( $args ); ?>
		</nav>
	</section><!-- navigation end -->