<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicon, generate the favicons with: http://realfavicongenerator.net -->
    <!-- Apple touch icons should be accessible from the root of the site, and do not have to be linked here -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/ico/favicon.ico">

	<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon.png"/>  
	<link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon.png" />

    <!-- Include only one concatenated stylesheet here, minified -->
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">

    <!-- Head scripts, avoid including scripts here -->
    <!-- Don't forget to compile and minify the used modernizr features, or to remove it when unused -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/modernizr.js"></script>
	<!-- Typekit -->
	<script type="text/javascript" src="//use.typekit.net/our3dxe.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <!-- Wordpress head function -->
    <?php wp_head(); ?>

  </head>
<body <?php body_class(); ?> >
	<?php include_once('ico/sprites.svg'); ?>
	<!-- Topbar with logo -->
	<div class="Topbar">
		<div class="u-gridContainer">
			<div class="Topbar-logo">
				<a href="/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cropped-logo.png" />
				</a>
			</div>
			<div class="Topbar-contact">
				<a href="https://www.facebook.com/mohamed.sediki.161">
					<svg class="Icon Icon--facebook" viewBox="0 0 128 128">
						<use xlink:href="#icon-facebook2"></use>
					</svg>
				</a>
				<a href="tel:0641507461">
					<svg class="Icon Icon--contact" viewBox="0 0 128 128">
						<use xlink:href="#icon-phone"></use>
					</svg>
					06-41507461
				</a>
			</div>
		</div>
	</div>
 
	<!-- Main     navigation -->
	<div class="Navigation-wrap">
		<?php include 'includes/navigation.php'; ?>
	</div>
   
	<div class="Header">
		<div class="u-gridContainer">
			<div class="Header-image">
				<div class="cycle-slideshow"
					 data-cycle-fx="fade"
					 data-cycle-timeout="6000">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/polo_sediki2.jpg" />
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/polo_sediki.jpg" />
				</div>
				<div class="Header-slogan">
				<!--	Meld je nu aan voor een proefles  -->
					Tijdelijk gratis proefles!
					<a class="Header-button" href="/contact">Aanmelden</a>
				</div>
			</div>
		</div>
	</div> 
