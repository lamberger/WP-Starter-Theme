<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- 1140px Grid styles for IE -->
<!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/style/css/ie.css" type="text/css" media="screen" /><![endif]-->
	
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/style/js/css3-mediaqueries.js"></script> 

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<!-- wordpress head -->
<?php wp_head(); ?>
<!-- /wordpress head -->

<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
	
<body <?php body_class(); ?>>

<div class="container">
	<div class="row">
		
		<div class="fivecol">
		
			<header>
				<hgroup>
					<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
					<h2><?php bloginfo('description'); ?></h2>
				</hgroup>
			</header>
	
		</div><!-- End fivecol -->
		
		<div class="sevencol last">
		
			<!-- header menu -->
		
		</div><!-- End sevencol-->

	</div><!-- End row-->

</div><!-- End container -->	