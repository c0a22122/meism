<?php
$slideargs = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'orderby'  => 'date',
	'order'  => 'DESC',
	'posts_per_page' => 8
);
$the_query = new WP_Query($slideargs);
if ($the_query->have_posts()) :
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<article class="related_box">
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<a class="related_posts" href="<?php the_permalink(); ?>">
							<img src="<?php the_field('icon'); ?>" alt="<?php the_field('name'); ?>">
							<div class="related_posts_title">
								<h2><?php the_title(); ?></h2>
								<p><?php $cat = get_the_category();
									$cat = $cat[0]; {
										echo $cat->cat_name;
									} ?></p>
							</div>
						</a>
					<?php endwhile; ?>
				<?php endif;
			wp_reset_postdata(); ?>
				</article>
			</div>
		</div>
	</div>