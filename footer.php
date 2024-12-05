<?php

/**
 * Version    : 1.0.1
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 24, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php do_action('habakiri_after_contents_content'); ?>
</div>
<footer id="footer" class="footer">

	<?php if (is_active_sidebar('footer-widget-area')) : ?>
		<div class="footer-widget-area">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar('footer-widget-area'); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div class="copyright">
		<div class="container">
			Copyright &copy; <?php echo date('Y'); ?> MEISM All Rights Reserved.
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
<p class="pagetop"><a href="#">▲</a></p>
</body>

</html>