<article <?php post_class( array( 'article', 'article--single' ) ); ?>>
	<div class="entry">
		<?php Habakiri::the_title(); ?>
		<?php get_template_part( 'modules/entry-meta' ); ?>
		<?php do_action( 'habakiri_before_entry_content' ); ?>
		<div class="entry__content entry-content">
            <div class="entry-content_img">
            <?php the_post_thumbnail('full'); ?>
            </div>
			<?php the_content(); ?>
		<!-- end .entry__content --></div>
		<?php do_action( 'habakiri_after_entry_content' ); ?>
		
	<?php if(is_active_sidebar('widget_under')) : ?>
	<aside id="sub" class="kizi_under">
		<?php dynamic_sidebar('widget_under'); ?>
		</aside>
	<?php endif; ?>

	<!-- end .entry --></div>

	<?php get_template_part( 'modules/link-pages' ); ?>
    <?php get_template_part( 'prev-and-next' ); ?>
	<?php get_template_part( 'modules/related-posts' ); ?>
	<?php
	if ( comments_open() || pings_open() || get_comments_number() ) {
		comments_template( '', true );
	}
	?>
</article>
