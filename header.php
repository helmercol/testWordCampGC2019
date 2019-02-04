<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package testwordcamp
 */
		
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="off-canvas position-left" id="offCanvas" data-off-canvas>

    <!-- Close button -->
    <button class="close-button" aria-label="Close menu" type="button" data-close>
      <span aria-hidden="true">&times;</span>
    </button>

    <!-- Menu -->
    <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'     => 'menu vertical',
			) );
			?>

  </div>

<div id="page" class="site grid-container off-canvas-content" data-off-canvas-content>

	<!--<a class="skip-link screen-reader-text label" href="#content"><//?php esc_html_e( 'Skip to content', 'testwordcamp' ); ?></a>-->

	<header id="masthead" class="site-header grid-x grid-padding-x">

		<div class="cell small-3 show-for-small-only">
			<button type="button" class="button" data-toggle="offCanvas"><i class="fi-list"></i> MENU</button>
		</div>

		<div class="site-branding cell large-12 small-9 medium-12 large-text-center medium-text-center small-text-left">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$testwordcamp_description = get_bloginfo( 'description', 'display' );
			if ( $testwordcamp_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $testwordcamp_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation cell large-12 hide-for-small-only">

			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container_class' => '',
				'menu_class'        => 'menu align-center',
			) );
			?>

		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content grid-x grid-padding-x">
