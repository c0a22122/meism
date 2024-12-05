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
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h3 class="text-center">デバイス検索</h3>
			<div class="search_box"><?php echo do_shortcode('[searchandfilter id="165"]'); ?></div>
			<?php
			// 検索結果でヒットした記事数を取得
			$found_posts = $wp_query->found_posts;
			echo '<p>' . $found_posts . '件</p>';
			?>
		</div>
	</div>
</div>

<div class="sub-page-contents">
	<?php get_template_part('blog_templates/archive/' . Habakiri::get('search_template')); ?>
	<!-- end .sub-page-contents -->
</div>

<?php get_footer(); ?>