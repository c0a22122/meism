<div id="footerFloatingMenu">
<div class="container-fluid">
<div class="row">
<div class="col-xs-6 under-form">
    <a href="tel:<?php echo get_option( 'wps_tel_text' ); ?>"><span class="btn btn-primary btn-block"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/telicon.png" alt="電話を掛ける">
    <span class="under_btntext">電話窓口</span>
<?php if ( get_option( 'wps_hours_text' ) ) : ?>
<p><?php echo get_option( 'wps_hours_text' ); ?></p>
<?php endif; ?>
</span></a>
</div>
<div class="col-xs-6 under-form">
    <a href="<?php echo get_option( 'wps_contact_link' ); ?>"><span class="btn btn-primary btn-block"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/mailicon.png" alt="メール">
    <span class="under_btntext">メール窓口</span>
<p>24時間受付</p></span></a>
</div>
</div>
</div>
</div>