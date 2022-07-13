<?php get_header(); ?>

<?php
        // Start the loop.
        while ( have_posts() ) : the_post();
    ?>


<section class="content-fluid min-height main-cont-jobdetail">
    
    <div class="row">
        <div class="col-sm-7 head-jobdetail">
            <div class="row">
                <div class="col-6">
                    <h1><?php the_title(); ?></h1>
                    <p>
                        <span><?php the_field('company_name'); ?></span>
                        <span>|</span>
                        <span><?php the_field('city'); ?></span>
                        <span>|</span>
                        <span><?php the_field('type'); ?></span>
                    </p>
                </div>
                <div class="col-6">
                    <a href="#" class="applynow-btn">Apply Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row job-details">        
        <div class="col-12">
            <h2>Job Details</h2>
            <hr>
        </div>
        <div class="row job-details-width">
            <div class="col-12">
                <h3 class="job-detail-h3"><p><?php the_field('tittle_about_company'); ?></p></h3>
                <p><?php the_field('about_company'); ?></p>
            </div>
            
            <div class="col-12">
                <h3 class="job-detail-h3"><p><?php the_field('tittle_job_description'); ?></p></h3>
                <p><?php the_field('job_description'); ?></p>
            </div>
            
            <div class="col-12">
                <h3 class="job-detail-h3"><p><?php the_field('tittle_requirements'); ?></p></h3>
                <p><?php the_field('requirements'); ?></p>
            </div>
        </div>
    </div>

</section>

    <?php
        // End the loop.
        endwhile;
    ?>

<?php get_footer(); ?> 