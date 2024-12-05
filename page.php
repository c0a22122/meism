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
<?php get_header(); ?>
<div class="sub-page-contents">

	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
					<?php endwhile; ?>

				<!-- end #main --></main>
			<!-- end .col-md-9 --></div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			<!-- end .col-md-3 --></div>
		<!-- end .row --></div>
	<!-- end .container --></div>

<!-- end .sub-page-contents --></div>
<?php get_footer(); ?>
