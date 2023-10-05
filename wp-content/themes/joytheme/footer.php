<?php wp_footer() ?>
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-item">
                        <div class="f-title">
                            <?php echo get_field('footer1_title','option') ?>
                        </div>
                        <div class="f-content">
                            <p><?php echo get_field('footer1_text','option') ?>
                            </p>
                            <div class="f-title catchUs"><?php echo get_field('catch_us','options') ?></div>
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
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-item">
                        <div class="f-title">
                            Check out our Blog:
                        </div>
                        <div class="f-content">
                            <a href="#">
                                <div class="blog">
                                    <img src="https://overton.qodeinteractive.com/wp-content/uploads/2018/07/blog-1-img-1.jpg"
                                        alt="">
                                    <div class="blog-info">
                                        <div class="blog-name">World Traveler</div>
                                        <div class="blog-date">06. Jul 2018.</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="blog">
                                    <img src="https://overton.qodeinteractive.com/wp-content/uploads/2018/07/blog-1-img-1.jpg"
                                        alt="">
                                    <div class="blog-info">
                                        <div class="blog-name">World Traveler</div>
                                        <div class="blog-date">06. Jul 2018.</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="blog">
                                    <img src="https://overton.qodeinteractive.com/wp-content/uploads/2018/07/blog-1-img-1.jpg"
                                        alt="">
                                    <div class="blog-info">
                                        <div class="blog-name">World Traveler</div>
                                        <div class="blog-date">06. Jul 2018.</div>
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="footer-item">
                        <div class="f-title">
                            <?php echo get_field('footer-contact-title','option') ?>
                        </div>
                        <div class="f-content">
                            <?php
                                if(have_rows('mails', 'option')):
                                while(have_rows('mails', 'option')): the_row() ?>
                            <a href="mailto: <?php echo get_sub_field('mail')?>">
                                <?php echo get_sub_field('mail')?>
                            </a> <br>
                            <?php endwhile; endif; ?>

                            <?php
                                if(have_rows('phones', 'option')):
                                while(have_rows('phones', 'option')): the_row() ?>
                            <a href="tel: <?php echo get_sub_field('phone')?>">
                                <?php echo get_sub_field('phone')?>
                            </a> <br>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-item">
                        <div class="f-title">
                            <?php  echo get_field('map-text','option')?>
                        </div>
                        <div class="f-content">
                            <?php  echo get_field('map_link','option')?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="footer2">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4">
                    <?php
                    $repeater_field = get_field('mails','option');
                    if ($repeater_field): 
                        $first_item = $repeater_field[0]['mail'];
                     ?>
                    <a href="mailto: <?php echo $first_item?>">
                        <?php echo $first_item?>
                    </a>

                    <?php endif; ?>
                </div>
                <div class="col-lg-4 logo-footer">
                    <a href="<?php the_permalink() ?>">
                        <img src="<?php echo get_field('header-logo','option')?>" alt="Invalid image">
                    </a>
                </div>
                <div class="col-lg-4" style="color: #FFF;">
                    <?php  echo get_field('copy-right','option')?>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://kit.fontawesome.com/9e8a8858d4.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="<?php bloginfo('template_directory')?>/app.js"></script>


</body>

</html>