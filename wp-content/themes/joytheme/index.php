<?php
/**
 * template name: Home
 */
get_header()?>
<div class="slider-heading">
    <?php
    if(have_rows('slider-heading')):
    while(have_rows('slider-heading')): the_row() ?>
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
    <?php endwhile; endif; ?>

</div>
<?php get_footer() ?>