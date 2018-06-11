<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package patomarques
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!--<link rel="stylesheet" href="<?php /*echo get_template_directory_uri(); */?>/bower_components/components-font-awesome/css/fontawesome.css">-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/mdi/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom/css/bundle.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom/sass/patomarques.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Preloader-->
<div id="loader">
    <div class="centrize">
        <div class="v-center">
            <div id="mask">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader-->

<!-- Navbar-->
<header id="topnav">
    <div class="container">
        <div class="logo">
            <a href="<?php echo get_site_url(); ?>">
                <h1 class="logo logo-home logo-dark">Pato Marques</h1>
            </a>
        </div>
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle">
                    <div class="lines"><span></span><span></span><span></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="button_container button_menu_gray" id="toggle">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
        </div>

        <div class="overlay" id="overlay">
            <nav class="overlay-menu">
                <?php wp_nav_menu(array('container' => false)); ?>
            </nav>
        </div>
    </div>
</header>

<div id="page" class="site hidden">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'patomarques' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$patomarques_description = get_bloginfo( 'description', 'display' );
			if ( $patomarques_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $patomarques_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'patomarques' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

    <div id="content" class="site-content"></div>
</div>
