<?php

/**
 * Version    : 1.2.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="og: http://ogp.me/ns# <?php echo (is_single() || is_page()) ? 'fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#' : 'fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#' ?>">
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FPHCP9K7TR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FPHCP9K7TR');
</script>
	<meta name="format-detection" content="telephone=no">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> ontouchstart="">
	<div id="container">
		<?php
		$header_classes     = Habakiri::get_header_classses();
		$site_branding_size = Habakiri::get_site_branding_size();
		$gnav_size          = Habakiri::get_gnav_size();
		?>
		<header id="header" class="header <?php echo esc_attr(implode(' ', $header_classes)); ?>">
			<?php do_action('habakiri_before_header_content'); ?>
			<div class="container">
				<div class="row header__content">
					<div class="col-xs-10 <?php echo esc_attr($site_branding_size); ?> header__col">
						<?php get_template_part('modules/site-branding'); ?>
					</div>
					<div class="col-xs-2 <?php echo esc_attr($gnav_size); ?> header__col global-nav-wrapper clearfix">
						<?php get_template_part('modules/gnav'); ?>
						<div id="responsive-btn"></div>
					</div>
				</div>
			</div>
		</header>
		<div id="contents">