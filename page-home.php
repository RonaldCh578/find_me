<?php get_header(); ?>

<section class="content-fluid min-height main-cont-home">

    <div class="row">
        <div class="col-12 head-home">
            <img src="<?php echo get_theme_file_uri( './assets/png/header-background.png' ); ?>" alt="header background">
            <div class="main-container-header">
                <h1>
                    FIND YOUR NEXT JOB… FAST!
                </h1>
                <h2>The best options. Good Salaries. Easy to apply.</h2>
                <form action="<?php echo home_url('/') ?>" method="GET">
                    <input type="text" name="s" placeholder="Career">
                    <button type="submit">Search</button>
                </form>
            </div>
    </div>

    <div class="row categories">
        <div class="col-12">
            <h2>Don't know where to start?</h2>
            <h3>Trending Searches</h3>
        </div>

        <div class="col-12 categories-container">
            <?php
                $categories = get_categories(array(
                    'orderby' => 'name',
                    'order' => 'ASC'
                ));

                if(!empty($categories)){
                    foreach($categories as $category){
                        echo '<a class="category" href="'. get_category_link($category->term_id) .'">'. $category->name .'</a>';
                    }
                }else{
                    echo '<h2>There are no categories yet</h2>';
                }
            ?>
        </div>

        <div class="col-12 all-options-btn">
            <a href="#">View all options</a>
        </div>
    </div>

</section>

<?php get_footer(); ?> 