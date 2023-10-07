<?php
/**
 * template name: Home
 */
get_header()?>
<div class="slider-heading">
    <div class="swiper HeadingSwiper">
        <div class="swiper-wrapper">
            <?php
            if(have_rows('slider-heading')):
            while(have_rows('slider-heading')): the_row() ?>
            <div class="swiper-slide overflow-hidden">
                <div class="slide">
                    <img src="<?php  echo get_sub_field('img')?>" alt="invalid img">
                    <div class="contentBox  ">
                        <div class="contentBox-heading animate__animated animate__bounceInRight">
                            <?php  echo get_sub_field('name')?></div>
                        <div class="cBText animate__animated animate__bounceInRight animate__delay-1s">
                            <?php  echo get_sub_field('des')?>
                        </div>
                        <a class="learn-more animate__animated animate__bounceInRight animate__delay-1s"
                            href="<?php  echo get_sub_field('link')?>"><?php  echo get_sub_field('learn_more')?></a>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="swiper-button-next heading-next"><img
                src="https://overton.qodeinteractive.com/wp-content/uploads/2018/08/right_nav.svg" alt=""></div>
        <div class="swiper-button-prev heading-prev"><img
                src="https://overton.qodeinteractive.com/wp-content/uploads/2018/08/left_nav.svg" alt=""></div>
        <div class="swiper-pagination pag-heading"></div>
    </div>


</div>
<div class="heading-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="s-title">
                    <?php echo get_field('service-text')?>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <?php
                if(have_rows('services')):
                while(have_rows('services')): the_row() ?>
                    <div class="col-lg-4 col-6">
                        <div class="service">
                            <img src="<?php echo get_sub_field('img') ?> " alt="">
                            <a href="<?php echo get_sub_field('link') ?>">
                                <div class="service-name"><?php echo get_sub_field('service_name') ?></div>
                            </a>
                            <div class="service-des"><?php echo get_sub_field('service_des') ?></div>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <a href="<?php echo get_field('p1_link')?>">
                <div class="port-item">
                    <img src="<?php echo get_field('p1-img')?>" alt="" class="img-fluid">
                    <div class="port-content">
                        <p><?php echo get_field('p1-text')?></p>
                        <p><?php echo get_field('p1-text2')?></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="<?php echo get_field('p2_link')?>">
                <div class="port-item">
                    <img src="<?php echo get_field('p2-img')?>" alt="" class="img-fluid">
                    <div class="port-content">
                        <p><?php echo get_field('p2-text')?></p>
                        <p><?php echo get_field('p2-text2')?></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6">
            <a href="<?php echo get_field('p3_link')?>">
                <div class="port-item">
                    <img src="<?php echo get_field('p3-img')?>" alt="" class="img-fluid">
                    <div class="port-content">
                        <p><?php echo get_field('p3-text')?></p>
                        <p><?php echo get_field('p3-text2')?></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6">
            <a href="<?php echo get_field('p4_link')?>">
                <div class="port-item">
                    <img src="<?php echo get_field('p4-img')?>" alt="" class="img-fluid">
                    <div class="port-content">
                        <p><?php echo get_field('p4-text')?></p>
                        <p><?php echo get_field('p4-text2')?></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="<?php echo get_field('p5_link')?>">
                <div class="port-item">
                    <img src="<?php echo get_field('p5-img')?>" alt="" class="img-fluid">
                    <div class="port-content">
                        <p><?php echo get_field('p5-text')?></p>
                        <p><?php echo get_field('p5-text2')?></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="<?php echo get_field('p6_link')?>">
                <div class="port-item">
                    <img src="<?php echo get_field('p6-img')?>" alt="" class="img-fluid">
                    <div class="port-content">
                        <p><?php echo get_field('p6-text')?></p>
                        <p><?php echo get_field('p6-text2')?></p>
                    </div>
                </div>
            </a>
        </div>

    </div>

</div>

<div class="reviews">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="53px" height="36px" viewBox="0 0 53 36" enable-background="new 0 0 53 36" xml:space="preserve">
        <g>
            <g>
                <g>
                    <path fill="#fff"
                        d="M14.154,2.116c6.434,0,11.673,5.236,11.673,11.674c0,6.734-6.286,16.013-11.524,20.654h-7.78
                        c1.945-2.994,3.739-6.287,4.786-9.58c-5.985-1.047-8.826-6.136-8.826-11.074C2.482,7.352,7.716,2.116,14.154,2.116z">
                    </path>
                </g>
            </g>
            <g>
                <g>
                    <path fill="#fff"
                        d="M39.2,2.116c6.433,0,11.672,5.236,11.672,11.674c0,6.734-6.286,16.013-11.525,20.654h-7.78
                        c1.947-2.994,3.74-6.287,4.787-9.58c-5.986-1.047-8.827-6.136-8.827-11.074C27.526,7.352,32.762,2.116,39.2,2.116z">
                    </path>
                </g>
            </g>
        </g>
    </svg>
    <div class="swiper HeadingSwiper review-slider">
        <div class="swiper-wrapper">
            <?php
            if(have_rows('reviews')):
            while(have_rows('reviews')): the_row() ?>
            <div class="swiper-slide">
                <div class="review">
                    <div class="review-content">
                        <?php echo get_sub_field('review')?>
                    </div>
                    <div class="reviewer"><?php echo get_sub_field('reviewers')?></div>
                    <div class="reviewer-job"><?php echo get_sub_field('reviewer_job')?></div>
                </div>
            </div>

            <?php endwhile; endif; ?>

        </div>
        <div class="swiper-pagination  pag-heading pag-review"></div>
    </div>




</div>

<div class="customer-slider">
    <div class="swiper customerSlider">
        <div class="swiper-wrapper">
            <?php
            if(have_rows('client-imgs')):
            while(have_rows('client-imgs')): the_row() ?>
            <div class="swiper-slide cus">
                <img src="<?php echo get_sub_field('img')?>" alt="">
            </div>
            <?php endwhile; endif; ?>

        </div>
    </div>
</div>

<div class="whatWeDo">
    <div class="wwd-container d-flex justify-content-center align-items-center flex-wrap">
        <div class="col-lg-6">
            <div class="wwd-text">
                <div class="wwd-text-title">
                    <?php echo get_field('WWD-title') ?>
                </div>
                <p>
                    <?php echo get_field('WWD-text') ?>
                </p>
                <ul>
                    <?php
                    if(have_rows('dos')):
                    while(have_rows('dos')): the_row() ?>
                    <li><?php echo get_sub_field('do') ?></li>
                    <?php endwhile; endif; ?>
                </ul>
                <a class="learn-more"
                    href="<?php  echo get_field('link-wwd')?>"><?php  echo get_field('learn-more-what-we-do')?>
                </a>
            </div>
        </div>
        <div class="col-lg-6 overflow-hidden">
            <div class="wwd-img">
                <img src="<?php echo get_field('wwd-img') ?>" alt="">
            </div>
        </div>
    </div>

</div>

<div class="whatWeDo ourWork">

    <div class="wwd-container d-flex justify-content-center align-items-center flex-wrap">
        <div class="col-lg-6 overflow-hidden">
            <div class="wwd-img">
                <img src="<?php echo get_field('ourWork-img') ?>" alt="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="wwd-text">
                <div class="wwd-text-title">
                    <?php echo get_field('ourWork-title') ?>
                </div>
                <p class="ourwork-first">
                    <?php echo get_field('ourWork-text') ?>
                </p>
                <p>
                    <?php echo get_field('ourwork-text2') ?>
                </p>

                <a class="learn-more"
                    href="<?php  echo get_field('link-our-work')?>"><?php  echo get_field('learn-more-our-work')?>
                </a>
            </div>
        </div>

    </div>

</div>

<div class="meet-minds">
    <div class="container">
        <div class="m-m-title">
            <?php echo get_field('meet-creative-people-title')?>
        </div>
        <div class="row">
            <?php
        if(have_rows('creative-people')):
        while(have_rows('creative-people')): the_row() ?>

            <div class="col-lg-4">
                <div class="creative-people">
                    <div class="people-things">
                        <img src="<?php echo get_sub_field('people-img')?>" alt="" class="img-fluid">
                        <div class="peo-info">
                            <div class="people-name"><?php echo get_sub_field('people-name')?></div>
                            <div class="people-job"><?php echo get_sub_field('people-job')?></div>
                        </div>
                    </div>
                    <div class="people-social">
                        <?php
                                if(have_rows('people-social')):
                                while(have_rows('people-social')): the_row() ?>
                        <a href="<?php echo get_sub_field('link') ?>">
                            <?php echo get_sub_field('icon') ?>
                        </a>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>

            <?php endwhile; endif; ?>

        </div>
    </div>
</div>

<?php get_footer() ?>