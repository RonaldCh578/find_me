<?php get_header(); ?>

<section class="content-fluid min-height main-cont-home">

    <div class="row">
        <div class="col-12 head-home">
            <img src="<?php echo get_theme_file_uri( './assets/png/header-background.png' ); ?>" alt="header background">
            <div class="main-container-header">
                <h1>
                    ENCUENTRA TU SIGUEINTE TRABAJO… RAPIDO!
                </h1>
                <h2>Las mejores opciones. Buenos salarios. Fácil de aplicar.</h2>
                <form action="<?php echo home_url('/es/') ?>">
                    <input type="text" name="search" placeholder="Carrera">
                    <button type="submit">Search</button>
                </form>
            </div>
    </div>

    <div class="row categories">
        <div class="col-12">
            <h2>¿No sabes por donde empezar?</h2>
            <h3>Busquedas en tendencia</h3>
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
                    echo '<h2>No hay categorías aún</h2>';
                }
            ?>
        </div>
        
    </div>

</section>

<?php get_footer(); ?> 