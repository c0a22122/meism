<?php

/**
 * Version    : 1.0.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : September 24, 2015
 * Modified   :
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<div class="row site-branding-head">
    <?php do_action('habakiri_before_site_branding'); ?>
    <div class="site-branding col-md-5 site-branding-col ">
        <h1 class="site-branding__heading">
                <?php get_template_part('modules/logo'); ?>
        </h1>
        <!-- end .site-branding -->
    </div>
    <?php if (Habakiri::get('header') === 'header--2row') : ?>
        <div class="phone-content col-md-5 site-branding-col">
            <?php if (get_option('wps_tel_text')) : ?>
                <p class="phone-number"><?php echo get_option('wps_tel_text'); ?></p>
            <?php endif; ?>
            <?php if (get_option('wps_hours_text')) : ?>
                <p class="reception"><?php echo get_option('wps_hours_text'); ?></p>
            <?php endif; ?>
        </div>

        <div class="inquiries col-md-2 site-branding-col ">
            <?php if (get_option('wps_contact_text')) : ?>
                <a href="<?php echo get_option('wps_contact_link'); ?>">
                    <span class="inquiriesbtn btn btn-primary"><?php echo get_option('wps_contact_text'); ?></span>
                </a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php do_action('habakiri_after_site_branding'); ?>
</div>