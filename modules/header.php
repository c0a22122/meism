
<div style="transform: translate3d(0px, 0px, 0px);">
    <?php if ( get_option( 'wps_main_header_text' ) ) : ?>
				<div class="habakiri-slider__item-content col-xs-12">
					<?php echo get_option( 'wps_main_header_text' ); ?>
				</div>
    <?php endif; ?>
    <?php if ( get_theme_mod( 'wps_main_header_img_pc' ) ) : ?>
			<img src="<?php echo get_the_wps_main_header_img_pc_url(); ?>" alt="ヘッダー" class="head-img nosp" draggable="false">
    <?php endif; ?>
    <?php if ( get_theme_mod( 'wps_main_header_img_sp' ) ) : ?>
			<img src="<?php echo get_the_wps_main_header_img_sp_url(); ?>" alt="ヘッダー" class="nopc" draggable="false">
    <?php endif; ?>
</div>