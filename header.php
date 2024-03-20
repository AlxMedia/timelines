<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( get_theme_mod( 'theme-toggle', 'on' ) == 'on' ): ?>
	<script>
		document.body.classList.add(localStorage.getItem('theme') || 'dark');
	</script>
<?php endif; ?>

<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<a class="skip-link screen-reader-text" href="#page"><?php _e( 'Skip to content', 'timelines' ); ?></a>

<div id="wrapper">
	
	<header id="header" class="nav-menu-dropdown-left">
	
		<div class="group">
			<?php echo timelines_site_title(); ?>
			<?php if ( display_header_text() == true ): ?>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			<?php endif; ?>
			
			<?php if ( has_nav_menu('header') ): ?>
				<div id="wrap-nav-header" class="wrap-nav">
					<?php \Timelines\Nav::nav_menu(array('theme_location'=>'header','menu_id' => 'nav-header','fallback_cb'=> false)); ?>
				</div>
			<?php endif; ?>
			
			<?php if ( has_nav_menu('mobile') ): ?>
				<div id="wrap-nav-mobile" class="wrap-nav">
					<?php \Timelines\Nav::nav_menu(array('theme_location'=>'mobile','menu_id' => 'nav-mobile','fallback_cb'=> false)); ?>
				</div>
			<?php endif; ?>
			
		</div>
		
	</header><!--/#header-->

	<div class="grid-container">
		
		<?php get_template_part('sidebar-left'); ?>
		
		<div class="subgrid-container">
			<div class="main-header">
				
				<?php if ( is_single() ): ?>
					<?php get_template_part('inc/subheader'); ?>
				<?php endif; ?>	
				
				<?php if ( get_header_image() && is_home() ) : ?>
					<div class="site-header">
						<div class="main-header-single-wrap">
							<a href="<?php echo esc_url( home_url('/') ); ?>" rel="home" class="main-header-single" style="background-image:url('<?php header_image(); ?>');"></a>
						</div>
					</div>
				<?php endif; ?>
			
				<?php get_template_part('inc/featured'); ?>
				
				<?php if ( is_single() ): ?>
					<?php get_template_part('inc/single-header'); ?>
				<?php endif; ?>
				
			</div>
			<div class="main-container" id="page">