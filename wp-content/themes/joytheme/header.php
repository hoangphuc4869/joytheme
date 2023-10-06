<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head() ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
    <title><?php the_title() ?></title>


</head>

<body>
    <header>
        <div class="header-pc">
            <svg class="mkdf-burger-svg-icon icon2" version="1.1" x="0px" y="0px" width="24.146px" height="22.417px"
                viewBox="0 0 24.146 22.417" enable-background="new 0 0 24.146 22.417" fill="#FFF">
                <g>
                    <g class="mkdf-burger-corner-1">
                        <polygon points="6.562,3.078 3.437,3.078 3.437,6.203 1.63,6.203 1.63,1.271 6.562,1.271 ">
                        </polygon>
                    </g>
                    <g class="mkdf-burger-corner-2">
                        <polygon
                            points="18.213,3.078 21.338,3.078 21.338,6.203 23.146,6.203 23.146,1.271 18.213,1.271 ">
                        </polygon>
                    </g>
                    <g class="mkdf-burger-corner-3">
                        <polygon points="6.562,19.463 3.437,19.463 3.437,16.338 1.63,16.338 1.63,21.271 6.562,21.271 ">
                        </polygon>
                    </g>
                    <g class="mkdf-burger-corner-4">
                        <polygon
                            points="18.213,19.463 21.338,19.463 21.338,16.338 23.146,16.338 23.146,21.271 18.213,21.271 ">
                        </polygon>
                    </g>
                    <circle cx="12.703" cy="11.093" r="3.636"></circle>
                </g>
            </svg>
            <div class="menu-mobile">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-2',
                    'menu_class' => 'mobile'
                ))
                ?>
            </div>
            <div class="main-menu">
                <div class="header_logo">
                    <a href="<?php the_permalink() ?>">
                        <img src="<?php echo get_field('header-logo','option')?>" alt="Invalid image">
                    </a>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'menu_class' => 'menu-pc'
                ))
                ?>
                <div class="right-menu">
                    <?php echo get_search_form()?>
                    <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                    <svg class="mkdf-burger-svg-icon icon1" version="1.1" x="0px" y="0px" width="24.146px"
                        height="22.417px" viewBox="0 0 24.146 22.417" enable-background="new 0 0 24.146 22.417"
                        fill="#FFF">
                        <g>
                            <g class="mkdf-burger-corner-1">
                                <polygon
                                    points="6.562,3.078 3.437,3.078 3.437,6.203 1.63,6.203 1.63,1.271 6.562,1.271 ">
                                </polygon>
                            </g>
                            <g class="mkdf-burger-corner-2">
                                <polygon
                                    points="18.213,3.078 21.338,3.078 21.338,6.203 23.146,6.203 23.146,1.271 18.213,1.271 ">
                                </polygon>
                            </g>
                            <g class="mkdf-burger-corner-3">
                                <polygon
                                    points="6.562,19.463 3.437,19.463 3.437,16.338 1.63,16.338 1.63,21.271 6.562,21.271 ">
                                </polygon>
                            </g>
                            <g class="mkdf-burger-corner-4">
                                <polygon
                                    points="18.213,19.463 21.338,19.463 21.338,16.338 23.146,16.338 23.146,21.271 18.213,21.271 ">
                                </polygon>
                            </g>
                            <circle cx="12.703" cy="11.093" r="3.636"></circle>
                        </g>
                    </svg>
                </div>
            </div>
        </div>

        <div class="layer">

        </div>
        <div class="side-nav">
            <div class="close">&times;</div>
            <div class="logo-slide-nav">
                <img src="<?php echo get_field('header-logo','option')?>" alt="Invalid image">
            </div>
            <div class="side-nav-text">
                Nulla consequat massa quis enim. Donec pede justo, fringilla vel aliquet nec eget arcu. In enim
                justo, rhoncus vitae.
            </div>
            <p>Info: <br>
                198 West 21th Street, <br>
                Suite 721 New York,<br>
                NY 10010
            </p>
            <div class="social-icon">
                <a href="#"> <i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a>
                <a href="#"><i class="fa-brands fa-vimeo-v" style="color: #ffffff;"></i></a>
                <a href="#"><i class="fa-brands fa-flickr" style="color: #ffffff;"></i></a>
                <a href="#">
                    <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                </a>
            </div>
        </div>

    </header>