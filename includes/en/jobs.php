<?php

    $wpb_all_query = new WP_Query(array(
        'post_type' => 'jobs',
        'post_status'=>'publish', 
        'posts_per_page'=> -1
    ));

    while($wpb_all_query->have_posts()): $wpb_all_query->the_post();
?>

<!-- CARD USER -->
<a href="<?php the_permalink(); ?>" class="cardLink">
    <div class="row card-user">
        <div class="col-sm-3 d-flex justify-content-center align-items-center">
            <div class="container-photo">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="default image">
            </div>
        </div>
        <div class="col-sm-9">
            <div class="info-user">
                <h4><?php the_title(); ?></h4>         
                <b>
                    <span>
                        <span>Company Name</span>
                        <span>|</span>
                        <span>San José, SJ</span>
                        <span>|</span>
                        <span>Full Time</span>
                    </span>
                </b>
                <p><?php the_content(); ?></p>
            </div>
        </div>                        
    </div>
</a>                
<!-- CARD USER -->

<?php
    wp_reset_postdata();
    endwhile;
?>

<?php
    wp_reset_postdata();
?>