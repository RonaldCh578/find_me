<!doctype html>
<html lang="en" id="html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <title>WORDPRESS</title>
    
</head>

<body>
   <!-- container -->
    <div>
        <!-- header -->
        <header>
            <nav class="nav">
                <div class="container-logo container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    
                    <a class="logo navbar-brand" href="/home"><span class="career-logo">Career</span><span class="finder-logo">Finder</span></a>
                    <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'language-container',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
                </div>

            </nav>
        </header>
        <!-- header -->