<div id="prev_next" class="clearfix">
    <?php
    $prevpost = get_adjacent_post(true, '', true);
    $nextpost = get_adjacent_post(true, '', false);
    if ($prevpost or $nextpost) {
    ?>
        <?php
        if ($prevpost) {
            echo '<a href="' . get_permalink($prevpost->ID) . '" title="' . get_the_title($prevpost->ID) . '" id="prev" class="clearfix">
<div id="prev_title">前の記事</div>
' . get_the_post_thumbnail($prevpost->ID, array(100, 100)) . '
<p>' . get_the_title($prevpost->ID) . '</p></a>';
        } else {
            echo  '<div id="prev_no"><a href="' . home_url('/') . '"><div id="prev_next_home"><img src="' . get_stylesheet_directory_uri() . '/img/home_icon.svg" alt="home"></div></a></div>';
        }
        if ($nextpost) {
            echo '<a href="' . get_permalink($nextpost->ID) . '" title="' . get_the_title($nextpost->ID) . '" id="next" class="clearfix">
<div id="next_title">次の記事</div>
' . get_the_post_thumbnail($nextpost->ID, array(100, 100)) . '
<p>' . get_the_title($nextpost->ID) . '</p></a>';
        } else {
            echo '<div id="next_no"><a href="' . home_url('/') . '"><div id="prev_next_home"><img src="' . get_stylesheet_directory_uri() . '/img/home_icon.svg" alt="home"></div></a></div>';
        }
        ?>
    <?php } ?>
</div>