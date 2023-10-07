<?php
/**
 * template name: Services
 */
get_header()?>

<div class="services-page">
    <?php
    if(have_rows('services')):
    while(have_rows('services')): the_row() ?>
    <div class="service-page">
        <div class="col-lg-6 s-img">
            <img src="<?php  echo get_sub_field('img')?>" alt="">
        </div>
        <div class="col-lg-6 service-content">
            <div class="service-title"><?php  echo get_sub_field('title')?></div>
            <div class="service-text"><?php  echo get_sub_field('des')?></div>

            <a class="learn-more" href="<?php  echo get_sub_field('link')?>"><?php  echo get_sub_field('text_btn')?></a>

        </div>
    </div>
    <?php endwhile; endif; ?>
</div>



<?php get_footer() ?>