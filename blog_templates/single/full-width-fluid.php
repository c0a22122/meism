<?php

/**
 * Version    : 1.3.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<div class="container-fluid">
	<div class="row">
		<main id="main" role="main" <?php if (!in_category(array('pro-player', 'streamer', 'vtuber'))) : ?>class="main-ma-60" <?php endif; ?>>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<?php get_template_part('modules/breadcrumbs'); ?>
					</div>
				</div>
			</div>
			<?php
			if (is_404()) {
				get_template_part('content', 'none');
			} else {
				while (have_posts()) {
					the_post();
					get_template_part('content', 'single');
				}
			}
			?>

			<!-- end #main -->
		</main>

		<?php get_sidebar(); ?>
	</div>
	<!-- end .container-fluid -->
</div>