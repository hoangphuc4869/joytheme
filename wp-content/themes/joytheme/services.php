<?php
/**
 * template name: Services
 */
get_header()?>

<div class="services-page">
    <?php 
  $args = array(
    'posts_per_page' => -1,
    'post_type'      => 'post',
    'cat'       => 'ser'
  );
  $the_query = new WP_Query( $args );
?>
    <?php if( $the_query->have_posts() ): ?>
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="service-page">
        <div class="col-lg-6 s-img">
            <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100'))?>
        </div>
        <div class="col-lg-6 service-content">
            <div class="service-title"><?php echo str_replace(':','<br />',get_the_title()); ?></div>
            <div class="service-text"><?php the_excerpt();?></div>

            <a class="learn-more" href="<?php the_permalink();?>">learn more</a>

        </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>



    <!-- <?php
    if(have_rows('services')):
    while(have_rows('services')): the_row() ?>
    <div class="service-page">
        <div class="col-lg-6 s-img">
            <img src="<?php  echo get_sub_field('img')?>" alt="">
        </div>
        <div class="col-lg-6 service-content">
            <div class="service-title"><?php  echo get_sub_field('title')?></div>
            <div class="service-text"><?php  echo get_sub_field('des')?></div>
            <button class="learn-more">
                <a href="<?php  echo get_sub_field('link')?>"><?php  echo get_sub_field('text_btn')?></a>
            </button>
        </div>
    </div>
    <?php endwhile; endif; ?> -->

</div>



<?php get_footer() ?>