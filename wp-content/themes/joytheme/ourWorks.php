<?php
/**
 * template name: Our works
 */
get_header()?>
<div class="portfolio container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
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
        <div class="col-lg-3 col-6">
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
        <div class="col-lg-3 col-6">
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
        <div class="col-lg-3 col-6">
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

<div class="ourWorkBrief">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 l-w">
                <div class="left-work">
                    <div class="l-w-title">
                        <?php echo get_field("work-title")?>
                    </div>
                    <div class="l-w-text">
                        <?php echo get_field("work-text")?>

                    </div>
                    <a class="learn-more"
                        href="<?php  echo get_field('work-link')?>"><?php  echo get_field('work-btn-text')?>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="r-work">
                    <img src="<?php echo get_field('our-work-img')?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer() ?>