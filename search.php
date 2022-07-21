<?php get_header(); ?>

<section class="content-fluid min-height main-cont-search">
    <div class="row">
        <div class="col-sm-7 head-search">
            <?php 
                if(pll_current_language() == 'en'){
            ?>
                <form action="<?php echo home_url('/'); ?>" method="GET">
            <?php
                }else{
            ?>
                <form action="<?php echo home_url('/es/'); ?>" method="GET">
            <?php
                }
            ?>
                <div class="input-group m-auto">
                    <input type="text" class="form-control search-bar" name="s" placeholder="Career title" aria-label="Search something..." aria-describedby="button-submit">
                    <button class="btn search-btn d-flex justify-content-center align-items-center" type="submit" id="button-submit">

                        <svg viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 20L15.514 15.506L20 20ZM18 9.5C18 11.7543 17.1045 13.9163 15.5104 15.5104C13.9163 17.1045 11.7543 18 9.5 18C7.24566 18 5.08365 17.1045 3.48959 15.5104C1.89553 13.9163 1 11.7543 1 9.5C1 7.24566 1.89553 5.08365 3.48959 3.48959C5.08365 1.89553 7.24566 1 9.5 1C11.7543 1 13.9163 1.89553 15.5104 3.48959C17.1045 5.08365 18 7.24566 18 9.5V9.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>

                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-11 d-flex container-categories">
            <div class="row select-box">
                <div id="txt-select-box">

                    <p>Graphics & Design</p>
                    <svg viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.96198 10.4986L0.344074 2.43792C-0.436938 1.48951 0.197807 5.40673e-07 1.38312 5.40673e-07L14.6189 5.40673e-07C14.8842 -0.00024182 15.1439 0.0810009 15.367 0.234C15.59 0.386999 15.767 0.605269 15.8766 0.862671C15.9863 1.12007 16.024 1.4057 15.9852 1.68533C15.9464 1.96497 15.8328 2.22677 15.658 2.43939L9.04008 10.4972C8.91056 10.6551 8.75084 10.7817 8.57162 10.8684C8.39241 10.9551 8.19786 11 8.00103 11C7.8042 11 7.60965 10.9551 7.43044 10.8684C7.25122 10.7817 7.0915 10.6551 6.96198 10.4972V10.4986Z" fill="currentColor"/>
                    </svg>

                </div>
                <div class="options-container">
                    <?php
                        $categories = get_categories(array(
                            'orderby' => 'name',
                            'order' => 'ASC'
                        ));

                        if(!empty($categories)){
                            foreach($categories as $category){
                                echo '<div class="option"><a href="'. get_category_link($category->term_id) .'">'. $category->name .'</a></div>';
                            }
                        }else{
                            echo '<h2>There are no categories yet</h2>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-7 m-auto">
            <div class="row container-card-users">

            <?php
                $s=get_search_query();
                $args = array(
                        's' =>$s, 
						'lang' => pll_current_language()
                );
                // The Query
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) {
                    _e('<h2 class="search_results">Results for: '.get_query_var('s'). '</h2>');
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
            ?>
                <!-- CARD USER -->
                <a href="<?php the_permalink(); ?>" class="cardLink">
                    <div class="row card-user">
                        <div class="col-sm-3 d-flex justify-content-center align-items-center">
                            <div class="container-photo">
                                <img src="<?php echo $featured_img_url ?>" alt="<?php the_title(); ?>">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="info-user">
                                <h4><?php the_title(); ?></h4>         
                                <b>
                                    <span>
                                        <span><?php the_field('company_name'); ?></span>
                                        <span>|</span>
                                        <span><?php the_field('city'); ?></span>
                                        <span>|</span>
                                        <span><?php the_field('type'); ?></span>
                                    </span>
                                </b>
                                <p><?php the_field('about_company'); ?></p>
                            </div>
                        </div>                        
                    </div>
                </a>               
                <!-- CARD USER -->
            <?php
                }
            }else{
            ?>
                <h2>Nothing Found</h2>
            <?php } ?> 
            
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?> 