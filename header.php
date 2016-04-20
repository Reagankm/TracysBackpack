<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tracy\'s_Backpack
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Bootstrap core CSS -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />

<!-- FontAwesome Icons -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet" />

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Comfortaa|Kranky|Lobster' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'tracys_backpack' ); ?></a>

        <!-- HEADER -->
        <header class="site-header" role="banner">
          <a name="blog-top" class="jump"> </a>
          
          <img id="monkey-float" class="navbar-fixed-top" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/monkey_sign.png" />
          
          <section id="hero" >        
	    <a href="<?php echo esc_url(home_url('/')); ?>"><div class="container">
              <h1><?php bloginfo('name'); ?></h1>
              <h3><?php bloginfo('description'); ?></h3>
	    </div></a>      
          </section> 
        </header>
