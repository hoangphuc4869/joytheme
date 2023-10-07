<?php
/**
 * template name: About us
 */
get_header()?>

<div class="about-us-img img-fluid">
    <img src="<?php echo get_field('about-us-img') ?>" alt="">
</div>

<div class="about-us-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="brief-history">
                    <div class="b-h-title">
                        <?php echo get_field('brief-history-title') ?>
                    </div>
                    <p> <?php echo get_field('brief-text') ?></p>
                    <button class="learn-more">
                        <a href="<?php  echo get_field('brief-link')?>"><?php  echo get_field('brief-btn')?></a>
                    </button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="studio-info">
                    <div class="studio-title">
                        <?php echo get_field('studio-title') ?>
                    </div>
                    <div class="studio-text">
                        <?php echo get_field('studio-text') ?>
                    </div>
                    <div class="studio-add d-flex flex-wrap">
                        <div class="address col-lg-6">
                            <div class="add-title"><?php echo get_field('studio-address-text') ?></div>
                            <?php echo get_field('studio-address') ?>
                        </div>
                        <div class="numbers col-lg-6">
                            <div class="number-title"><?php echo get_field('studio-info-text') ?></div>
                            <?php echo get_field('studio-number') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="process">
    <div class="container">
        <div class="row">
            <?php
            if(have_rows('processes')):
            while(have_rows('processes')): the_row() ?>
            <div class="col-lg-3 col-6">
                <div class="circle-process">
                    <div class="value">
                        <span><?php echo get_sub_field('process') ?></span>
                        <div class="value-name"><?php echo get_sub_field('name') ?></div>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>

        </div>
    </div>
</div>



<?php get_footer() ?>