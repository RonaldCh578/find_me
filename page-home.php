<?php get_header(); ?>

<section class="content-fluid min-height main-cont-home">

    <div class="row">
        <div class="col-12 head-home">
            <div class="header-img">
                <img src="<?php echo get_theme_file_uri( 'assets/png/header-background.png' ); ?>" alt="header">
            </div>
            <div class="main-container-header">
                <h1>
                    FIND YOUR NEXT JOB… FAST!
                </h1>
                <h2>The best options. Good Salaries. Easy to apply.</h2>
                <form action="#">
                    <input type="text" name="search">
                    <button type="submit">Search</button>
                </form>
            </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h2>DON'T KNOW WHERE TO START?</h2>
            <h3>TRENDING SEARCHES</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 d-flex container-categories">
            <div class="options-container">
                <div class="col category"><a href="#">Graphics & Design</a></div>
                <div class="col category"><a href="#">Digital Marketing</a></div>
                <div class="col category"><a href="#">Video & Animation</a></div>
                <div class="col category"><a href="#">Music & Audio</a></div>
                <div class="col category"><a href="#">Programming</a></div>
                <div class="col category"><a href="#">Others</a></div>
            </div>
        </div>
    </div>

    

    <div class="row">
        <div class="col-12">
            <a href="#" target="_blank" rel="noopener noreferrer">View all options</a>
        </div>
    </div>

</section>

<?php get_footer(); ?> 