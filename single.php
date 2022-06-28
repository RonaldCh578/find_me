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
                        <span>Company Name</span>
                        <span>|</span>
                        <span>San José, SJ</span>
                        <span>|</span>
                        <span>Full Time</span>
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
                <h3 class="job-detail-h3">ABOUT THE COMPANY:</h3>
                <p><?php the_content(); ?></p>
            </div>
            <div class="col-12">
                <h3 class="job-detail-h3">JOB DESCRIPTION:</h3>
                <p><?php the_content(); ?></p>
            </div>
            <div class="col-12">
                <h3 class="job-detail-h3">REQUIREMENTS:</h3>
                <ul>
                    <li>Bachelor`s Degree in Web Design or related field.</li>
                    <li>7 years of experience in User Experience Research User Experience Design.</li>
                    <li>A passion for research and an ability to ask smart probing questions.</li>
                    <li>Quantitative research experience a plus.</li>
                    <li>Experience using a variety of software platforms to create sitemaps workflows wire frames concepts and prototypes.</li>
                    <li>Ability to translate ideas into concepts and testable prototypes.</li>
                </ul>
            </div>
        </div>
    </div>

</section>

    <?php
        // End the loop.
        endwhile;
    ?>

<?php get_footer(); ?> 