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
            <nav class="row nav">
                <div class="col-2">
                    <p class="logo">Find.me</p>
                </div>
                <div class="col-8 d-flex">

                    <div class="input-group m-auto">
                        <input type="text" class="form-control search-bar" placeholder="Search something..." aria-label="Search something..." aria-describedby="button-submit">
                        <button class="btn search-btn" type="button" id="button-submit"><img src="<?php echo get_theme_file_uri( 'assets/search-icon.svg' ); ?>" alt="search-button"></button>
                    </div>

                    <div class="container-btn-employee">
                        <a class="employee-btn" href="#"><img src=" <?php echo get_theme_file_uri( 'assets/employee.svg' ); ?>" alt="employee button"></a>
                    </div>

                </div>

                <div class="col-2 d-flex justify-content-end">
                    <a class="user-btn" href="#">Username <img src=" <?php echo get_theme_file_uri( 'assets/user-icon.svg' ); ?> " alt="user button"></a>
                </div>

            </nav>
        </header>
        <!-- header -->