<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
			
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				
				<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
				
				<div class="off-canvas-content" data-off-canvas-content>
					
					<header class="header" role="banner">
							
						 <div class="top-bar" id="top-bar-menu">
							<div class="top-bar">
								<div class="medium-5 columns show-for-large">
									<div class="top-bar-right">
										<?php joints_top_navleft(); ?>
									</div>
								</div>
								<div class="small-6 medium-2 columns">
									<a href="<?php echo home_url(); ?>"  class="logo">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Gite a l'ombre d'un olivier">
									</a>
								</div>
								<div class="medium-5 columns show-for-large">
									<div class="top-bar-left ">
										<?php joints_top_navright(); ?>
									</div>
								</div>
								<!--<ul class="menu">
									<li>
										<a href="<?php echo home_url(); ?>"  class="logo">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Gite a l'ombre d'un olivier">
										</a>
									</li>
								</ul>-->
								<div class="small-6 columns top-bar-right float-right hide-for-large">
									<ul class="menu">
										<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
										<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
									</ul>
								</div>
							</div>
							<!--<div class="top-bar-left show-for-large">
								<?php joints_top_navleft(); ?>
							</div>
							<div class="top-bar-right show-for-large">
								<?php joints_top_navright(); ?>
							</div>-->

						</div>


					</header> <!-- end .header -->
					<?php if ( !is_front_page()) { ?>
						<div class="fildariane">
							<?php if ( function_exists('yoast_breadcrumb') ) 
							{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
						</div>
		 			<?php } ?>