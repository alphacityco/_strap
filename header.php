<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>

<?php if (is_home() || is_front_page()) { ?>
	<style>
		#primary {
			width: 100%;
		}
		
	</style>
<?php } ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header" role="banner">
	<a class="menu-bar" data-toggle="collapse" href="#menu">
            <span class="bars"></span>            
        </a>
    	<div class="collapse menu" id="menu">
            <ul class="list-inline">
		<?php $foot_nav = wp_nav_menu( array( 'container' => '', 'echo' => '0', 'theme_location' => 'primary' ) );
	 $foot_nav2 = preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $foot_nav );
	// $foot_nav2 = preg_replace( array( '#<li[^>]*>#', '#</li>$#' ), '', $foot_nav2 );
	 echo $foot_nav2;
	  ?>
            </ul> 
    	</div>

        <div class="container logo-texto">
            <div class="row">
                <h2 class="text-center">geoliteratura</h2>
            </div>
        </div> 	
	<!-- //Navigation  -->
	</header><!-- #masthead -->
	<header id="sticker" class="intro-header">
		<?php if (dynamic_sidebar('top-mapa')); {  } ?>
    	</header>	<div id="page" class="site container">
		<div id="content" class="site-content">
