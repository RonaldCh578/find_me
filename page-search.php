<?php get_header(); ?>

<section class="content-fluid min-height main-cont-search">
    <div class="row">
        <div class="col-sm-7 head-search">
            <div class="input-group m-auto">
                    <input type="text" class="form-control search-bar" placeholder="Career title" aria-label="Search something..." aria-describedby="button-submit">
                    <button class="btn search-btn d-flex justify-content-center align-items-center" type="button" id="button-submit">

                        <svg viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 20L15.514 15.506L20 20ZM18 9.5C18 11.7543 17.1045 13.9163 15.5104 15.5104C13.9163 17.1045 11.7543 18 9.5 18C7.24566 18 5.08365 17.1045 3.48959 15.5104C1.89553 13.9163 1 11.7543 1 9.5C1 7.24566 1.89553 5.08365 3.48959 3.48959C5.08365 1.89553 7.24566 1 9.5 1C11.7543 1 13.9163 1.89553 15.5104 3.48959C17.1045 5.08365 18 7.24566 18 9.5V9.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>

                    </button>
                </div>
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
                    <div class="col option"><a href="#">Graphic Design</a></div>
                    <div class="col option"><a href="#">UX Design</a></div>
                    <div class="col option"><a href="#">Web Development</a></div>
                    <div class="col option"><a href="#">Database management</a></div>
                    <div class="col option"><a href="#">Servers management</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-7 m-auto">
            <div class="row container-card-users">

            <?php
                get_template_part('includes/en/jobs');
            ?>

                <!-- CARD USER -->
                <a href="../jobdetail" class="cardLink">
                    <div class="row card-user">
                        <div class="col-sm-3 d-flex justify-content-center align-items-center">
                            <div class="container-photo">
                                <img src="<?php echo get_theme_file_uri( 'assets/png/google.png' ); ?>" alt="default image">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="info-user">
                                <h4>Career Title</h4>         
                                <b>
                                    <span>
                                        <span>Company Name</span>
                                        <span>|</span>
                                        <span>San José, SJ</span>
                                        <span>|</span>
                                        <span>Full Time</span>
                                    </span>
                                </b>
                                <p>Lorem ipsum dolor sit amet te te vero et et consequat in ipsum sit dolor no accusam tempor in eirmod nostrud veniam nonumy sea sit duo sit lorem ipsum gubergren ipsum ut ipsum liber amet te et no labore at justo consectetuer autem et diam amet in diam sed rebum nonumy voluptua</p>
                            </div>
                        </div>                        
                    </div>
                </a>                
                <!-- CARD USER -->

                <!-- CARD USER -->
                <a href="../jobdetail" class="cardLink">
                    <div class="row card-user">
                        <div class="col-sm-3 d-flex justify-content-center align-items-center">
                            <div class="container-photo">
                                <img src="<?php echo get_theme_file_uri( 'assets/png/amazon.png' ); ?>" alt="default image">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="info-user">
                                <h4>Career Title</h4>         
                                <b>
                                    <span>
                                        <span>Company Name</span>
                                        <span>|</span>
                                        <span>San José, SJ</span>
                                        <span>|</span>
                                        <span>Full Time</span>
                                    </span>
                                </b>
                                <p>Lorem ipsum dolor sit amet te te vero et et consequat in ipsum sit dolor no accusam tempor in eirmod nostrud veniam nonumy sea sit duo sit lorem ipsum gubergren ipsum ut ipsum liber amet te et no labore at justo consectetuer autem et diam amet in diam sed rebum nonumy voluptua</p>
                            </div>
                        </div>                        
                    </div>
                </a>                
                <!-- CARD USER -->

                <!-- CARD USER -->
                <a href="../jobdetail" class="cardLink">
                    <div class="row card-user">
                        <div class="col-sm-3 d-flex justify-content-center align-items-center">
                            <div class="container-photo">
                                <img src="<?php echo get_theme_file_uri( 'assets/png/google.png' ); ?>" alt="default image">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="info-user">
                                <h4>Career Title</h4>         
                                <b>
                                    <span>
                                        <span>Company Name</span>
                                        <span>|</span>
                                        <span>San José, SJ</span>
                                        <span>|</span>
                                        <span>Full Time</span>
                                    </span>
                                </b>
                                <p>Lorem ipsum dolor sit amet te te vero et et consequat in ipsum sit dolor no accusam tempor in eirmod nostrud veniam nonumy sea sit duo sit lorem ipsum gubergren ipsum ut ipsum liber amet te et no labore at justo consectetuer autem et diam amet in diam sed rebum nonumy voluptua</p>
                            </div>
                        </div>                        
                    </div>
                </a>                
                <!-- CARD USER -->

                <!-- CARD USER -->
                <a href="../jobdetail" class="cardLink">
                    <div class="row card-user">
                        <div class="col-sm-3 d-flex justify-content-center align-items-center">
                            <div class="container-photo">
                                <img src="<?php echo get_theme_file_uri( 'assets/png/amazon.png' ); ?>" alt="default image">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="info-user">
                                <h4>Career Title</h4>         
                                <b>
                                    <span>
                                        <span>Company Name</span>
                                        <span>|</span>
                                        <span>San José, SJ</span>
                                        <span>|</span>
                                        <span>Full Time</span>
                                    </span>
                                </b>
                                <p>Lorem ipsum dolor sit amet te te vero et et consequat in ipsum sit dolor no accusam tempor in eirmod nostrud veniam nonumy sea sit duo sit lorem ipsum gubergren ipsum ut ipsum liber amet te et no labore at justo consectetuer autem et diam amet in diam sed rebum nonumy voluptua</p>
                            </div>
                        </div>                        
                    </div>
                </a>                
                <!-- CARD USER -->

                <!-- CARD USER -->
                <a href="../jobdetail" class="cardLink">
                    <div class="row card-user">
                        <div class="col-sm-3 d-flex justify-content-center align-items-center">
                            <div class="container-photo">
                                <img src="<?php echo get_theme_file_uri( 'assets/png/google.png' ); ?>" alt="default image">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="info-user">
                                <h4>Career Title</h4>         
                                <b>
                                    <span>
                                        <span>Company Name</span>
                                        <span>|</span>
                                        <span>San José, SJ</span>
                                        <span>|</span>
                                        <span>Full Time</span>
                                    </span>
                                </b>
                                <p>Lorem ipsum dolor sit amet te te vero et et consequat in ipsum sit dolor no accusam tempor in eirmod nostrud veniam nonumy sea sit duo sit lorem ipsum gubergren ipsum ut ipsum liber amet te et no labore at justo consectetuer autem et diam amet in diam sed rebum nonumy voluptua</p>
                            </div>
                        </div>                        
                    </div>
                </a>                
                <!-- CARD USER -->

                <!-- CARD USER -->
                <a href="../jobdetail" class="cardLink">
                    <div class="row card-user">
                        <div class="col-sm-3 d-flex justify-content-center align-items-center">
                            <div class="container-photo">
                                <img src="<?php echo get_theme_file_uri( 'assets/png/amazon.png' ); ?>" alt="default image">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="info-user">
                                <h4>Career Title</h4>         
                                <b>
                                    <span>
                                        <span>Company Name</span>
                                        <span>|</span>
                                        <span>San José, SJ</span>
                                        <span>|</span>
                                        <span>Full Time</span>
                                    </span>
                                </b>
                                <p>Lorem ipsum dolor sit amet te te vero et et consequat in ipsum sit dolor no accusam tempor in eirmod nostrud veniam nonumy sea sit duo sit lorem ipsum gubergren ipsum ut ipsum liber amet te et no labore at justo consectetuer autem et diam amet in diam sed rebum nonumy voluptua</p>
                            </div>
                        </div>                        
                    </div>
                </a>                
                <!-- CARD USER -->
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?> 