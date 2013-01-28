<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title('|', true, 'left'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="container">
<?php do_action( 'before' ); ?>
	<header id="branding" role="banner">
      
       <div id="inner-header" class="clearfix">
		<hgroup id="top-header">
			<div id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
			<div id="site-description"><?php bloginfo( 'description' ); ?></div>
		</hgroup>
        
        <?php get_search_form(); ?>

		<nav id="access" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'online-marketer' ); ?></h1>
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'online-marketer' ); ?>"><?php _e( 'Skip to content', 'online-marketer' ); ?></a></div>

			<?php onlinemarketer_main_nav(); // Adjust using Menus in Wordpress Admin ?>
		</nav><!-- #access -->
        <div class="navbreak"></div>
      </div>
      
      <?php
		$header_image = get_header_image();
		if ( ! empty( $header_image ) ) :
			if ( function_exists( 'get_custom_header' ) ) {
				$header_image_width  = get_custom_header()->width;
				$header_image_height = get_custom_header()->height;
			} else {
				$header_image_width  = HEADER_IMAGE_WIDTH;
				$header_image_height = HEADER_IMAGE_HEIGHT;
			}
		?>
		<div id="headerimg"><img src="<?php header_image(); ?>" width="<?php echo $header_image_width; ?>" height="<?php echo $header_image_height; ?>" alt="" /></div>
		<?php endif; ?>
      
	</header><!-- #branding -->

