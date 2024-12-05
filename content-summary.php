<?php

/**
 * Version    : 1.0.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : August 28, 2015
 * Modified   :
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<article <?php post_class(array('article', 'article--summary')); ?>>

	<?php if (Habakiri::get('is_displaying_thumbnail') === 'false') : ?>

		<div class="entry">
			<?php Habakiri::the_title(); ?>

			<?php get_template_part('modules/entry-meta'); ?>
			<!-- end .entry -->
		</div>

	<?php else : ?>
		<a class="grid_link" href="<?php the_permalink(); ?>">
			<div class="entry--has_media entry">
				<div class="entry--has_media__inner">
					<div class="media__inner_relative">
						<?php if (has_post_thumbnail()): ?>
							<?php the_post_thumbnail('full'); ?>
						<?php else : ?>
							<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/No_image.jpg" alt="サムネイル">
						<?php endif; ?>
					</div>
					<div class="entry--has_media__body">
						<span class="entry-meta_items"><?php the_time('Y/m/d'); ?> </span>
						<h2><?php the_title(); ?></h2>
						<!-- end .entry--has_media__body -->
					</div>
					<!-- end .entry--has_media__inner -->
				</div>
				<!-- end .entry--has_media -->
			</div>
		</a>
	<?php endif; ?>

</article>