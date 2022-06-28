<?php

    $wpb_all_query = new WP_Query(array(
        'post_type' => 'jobs',
        'post_status'=>'publish', 
        'posts_per_page'=> -1
    ));

    while($wpb_all_query->have_posts()): $wpb_all_query->the_post();
?>

<p><?php the_title(); ?></p>

<?php
    wp_reset_postdata();
    endwhile;
?>

