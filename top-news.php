<?php
$slideargs = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby'  => 'date',
    'order'  => 'DESC',
    'category_name'   => 'news',
    'posts_per_page' => 6
);
$the_query = new WP_Query($slideargs);
if ($the_query->have_posts()) :
?>

    <div class="swiper ma-20">
        <div class="swiper-wrapper">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="swiper-slide">
                    <a class="no_stick_" href="<?php the_permalink(); ?>">
                        <div class="swiper-slide">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/No_image.jpg" alt="サムネイル">
                            <?php endif; ?>
                        </div>
                        <?php
                        // カテゴリーのデータを取得
                        $cat = get_the_category();
                        $cat = $cat[0];
                        ?>
                        <div class="swiper-cat">
                            <p><?php echo $cat->cat_name; ?></p><span><?php the_date('Y/m/d'); ?></span>
                        </div>
                        <p class="swiper-title"><?php echo mb_strimwidth(get_the_title(), 0, 80, "…", "UTF-8"); ?></p>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php endif;
    wp_reset_postdata(); ?>
        </div>
    </div>

    <a href="<?php echo home_url(); ?>/category/news/" class="linkbtn">VIEW MORE</a>