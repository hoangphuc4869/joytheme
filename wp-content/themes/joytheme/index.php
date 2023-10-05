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
            <div class="swiper-slide">
                <div class="slide">
                    <img src="<?php  echo get_sub_field('img')?>" alt="invalid img">
                    <div class="contentBox">
                        <div class="contentBox-heading"><?php  echo get_sub_field('name')?></div>
                        <div class="cBText">
                            <?php  echo get_sub_field('des')?>
                        </div>
                        <button class="learn-more"><a
                                href="<?php  echo get_sub_field('link')?>"><?php  echo get_sub_field('learn_more')?></a></button>
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
<?php get_footer() ?>