<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(''); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/component.css" />
        <script src="<?php bloginfo( 'template_url' ); ?>/modernizr.custom.js"></script>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <meta name="text:GoogleWebFont" content="Gentium Book Basic"/>
    	<meta name="text:GoogleWebFontURL" content="Gentium+Book+Basic"/>
        <link href='http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,700,400italic,700italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
        <?php bloginfo('rss2_url'); ?>
    </head>
    <body <?php body_class('cbp-spmenu-push'); ?>>
    	<div class="menuicon">
    		<div class="button" id="showLeft" >
    		<h1>
    			<a href="#"><i class="fa fa-bars"></i></a>
    		</h1>
    		</div>
    	</div>
		<header class="header">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			</a>
		</header>
		<div id="navbar" class="navbar">
			<nav id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>