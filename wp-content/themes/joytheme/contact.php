<?php
/**
 * template name: Contact
 */
get_header()?>

<div class="contact-map">
    <?php echo get_field('map_link','option') ?>
</div>

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
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
                            <?php
                            if(have_rows('addresses','option')):
                            while(have_rows('addresses','option')): the_row() ?>
                            <a href="<?php echo get_sub_field('add_link') ?>"><?php echo get_sub_field('address') ?></a>
                            <br>
                            <?php endwhile; endif; ?>

                            <div class="social-icon">
                                <?php
                                if(have_rows('social_icons', 'option')):
                                while(have_rows('social_icons', 'option')): the_row() ?>
                                <a href="<?php echo get_sub_field('link') ?>">
                                    <?php echo get_sub_field('social_icon') ?>
                                </a>
                                <?php endwhile; endif; ?>
                            </div>

                        </div>
                        <div class="numbers col-lg-6">
                            <div class="number-title"><?php echo get_field('studio-number-text') ?></div>
                            <?php
                            if(have_rows('numbers','option')):
                            while(have_rows('numbers','option')): the_row() ?>
                            <a
                                href="tel: <?php echo get_sub_field('number') ?>"><?php echo get_sub_field('number') ?></a>
                            <br>
                            <?php endwhile; endif; ?>
                            <br>
                            <?php
                                if(have_rows('mails', 'option')):
                                while(have_rows('mails', 'option')): the_row() ?>
                            <a href="mailto: <?php echo get_sub_field('mail')?>">
                                <?php echo get_sub_field('mail')?>
                            </a> <br>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-contact">
                    <div class="form-heading">
                        <?php echo get_field('form-contact-heading-text')?>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="70d45bf" title="Contact form 1"]') ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer() ?>