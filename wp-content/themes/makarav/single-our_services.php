<?php
get_header();
?>
<main>
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
      <div class="line4"></div>
      <div class="line5"></div>

<!-- ========= banner ========= -->
<section class="banner inner_banner">
    <div class="banner_con">
        <h3>Find lucrative deals</h3>
        <h2>services</h2>
    </div>

    <img src="<?= get_template_directory_uri(); ?>/assets/img/banner_shape7.png" width="1248" height="1260" alt="" class="bnr_circle1">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/banner_shape8.png" width="1205" height="1785" alt="" class="bnr_circle2">

    <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/ib_shape1.png" width="688" height="532" alt="" class="inner_shape1">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/ib_shape2.png" width="496" height="286" alt="" class="inner_shape2">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/ib_shape3.png" width="788" height="642" alt="" class="inner_shape3">

    <div class="bnr_line1"></div>
    <div class="bnr_line2"></div>
    <div class="bnr_line3"></div>
    <div class="bnr_line4"></div>
    <div class="bnr_line5"></div>
</section>

<section class="inner_sec service_details_sec">
    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="29" viewBox="0 0 54 29" fill="none" class="serv_shape1">
        <path d="M1.52536 26.6478C6.99411 27.5272 14.0296 27.3094 18.3304 23.2674C20.8313 20.917 22.4593 17.8985 23.6338 14.456C24.502 11.9115 25.1805 9.12923 26.4377 6.81216C29.0049 2.08052 35.5461 1.63116 40.0855 2.1216C44.2516 2.5718 48.4882 2.72016 52.53 1.81914" stroke="#CC103C" stroke-width="2" stroke-linecap="square"></path>
    </svg>

    <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/inner_shape1.png" width="1042" height="2085" alt="" class="inner_sec_shape1">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/inner_shape2.png" width="402" height="357" alt="" class="inner_sec_shape2">

    <img src="<?= get_template_directory_uri(); ?>/assets/img/sec3_shape.png" width="579" height="1124" alt="" class="sd_shape">
    <div class="container-fluid">
        <div class="row m-0 align-items-center sd_row1">
            <div class="col-12">
                <h2><?= the_title() ?></h2>
                <div class="sd_img">
                    <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" width="1463" height="569" alt="">

                </div>
            </div>
        </div>
        <div class="row sd_row2 align-items-center g-md-5 g-3 m-0">
            <div class="col-lg-7 p-0">
                <div class="sd_con">
                    <?= the_content(); ?>
                </div>
            </div>
            <div class="col-lg-5 p-0">
                <div class="sd_img_con">
                    <div class="sd_img1">
                        <img src="<?= the_field('additional_image_1') ?>" width="543" height="622" alt="">
                    </div>
                    <div class="sd_img2">
                        <img src="<?= the_field('additional_image_2') ?>" width="129" height="163" alt="">
                    </div>
                    <div class="sd_img3">
                        <img src="<?= the_field('additional_image_3') ?>" width="187" height="237" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 p-0">
                <div class="contact_div">
                    <img src="<?= the_field('banner', 'option') ?>" width="843" height="367" alt="">
                    <div class="contact_txt">
                        <h3><?= the_field('heading_1', 'option') ?></h3>
                        <p><?= the_field('long_text_1', 'option') ?></p>
                        <a href="<?= site_url('/contact-us/') ?>">
                            <div class="primary-btn primary-btn1">Get a Free Quote Today!</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="building_div">
                    <h3><?= the_field('heading_2', 'option') ?></h3>

                    <?= the_field('long_text_2', 'option') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>