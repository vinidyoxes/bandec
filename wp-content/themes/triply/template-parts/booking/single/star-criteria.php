<?php
if (\Elementor\Plugin::instance()->editor->is_edit_mode()) {
    $post_id = triply_ba_get_default_single_id();
} else {
    $post_id = get_the_ID();
}
$babe_post = BABE_Post_types::get_post($post_id);

$total_rating = BABE_Rating::get_post_total_rating($post_id);
$total_votes  = BABE_Rating::get_post_total_votes($post_id);

if ($total_rating) {

    $rating_arr = BABE_Rating::get_post_rating($post_id);

    $rating_criteria = BABE_Settings::get_rating_criteria();
    $stars_num       = BABE_Settings::get_rating_stars_num();

    $criteria_num = sizeof($rating_arr);
    $step         = $stars_num / 5;
    $text         = '';
    if ($total_rating <= $step) {
        $text = esc_html__('Bad', 'triply');
    } elseif ($total_rating > $step && $step * 2 >= $total_rating) {
        $text = esc_html__('Not Bad', 'triply');
    } elseif ($total_rating > $step * 2 && $step * 3 >= $total_rating) {
        $text = esc_html__('Good', 'triply');
    } elseif ($total_rating > $step * 3 && $step * 4 >= $total_rating) {
        $text = esc_html__('Very Good', 'triply');
    } elseif ($total_rating > $step * 4) {
        $text = esc_html__('Wonderful', 'triply');
    }
    //// get total rating stars
    ?>
    <div class="review-score">
        <div class="rating-value">
            <div class="rating-score">
                <?php echo round($total_rating, 2) . '<span>/' . $stars_num . '</span>'; ?>
            </div>
            <div class="ratting-text">
                <?php
                echo esc_html($text);
                ?>
            </div>
            <div class="rating-vote"><?php printf('%s ' . _n('verified review', 'verified reviews', $total_votes, 'triply'), $total_votes); ?></div>
        </div>
        <div class="review-criteria">
            <?php
            if ($criteria_num > 1) {
                foreach ($rating_criteria as $rating_name => $rating_title) {
                    if (isset($rating_arr[$rating_name])) {

                        if ($criteria_num > 1) {
                            echo '<div class="review-item">';
                            printf('<span class="post-rating-criterion">%s</span>', $rating_title);
                            $rating = floatval($rating_arr[$rating_name]);
                            $width  = $rating / $stars_num * 100
                            ?>
                            <span class="post-rating-value"><?php echo round($rating, 2) . '/' . $stars_num; ?></span>
                            <div class="review-progress">
                                <span style="width: <?php echo esc_attr(round($width) . '%'); ?>"></span>
                            </div>
                            <?php
                            echo '</div>';
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
    <?php

}else{
    echo '<div class="triply-no-review">'.esc_html__('No reviews yet', 'triply').'</div>';
}

/// end if $total_rating

