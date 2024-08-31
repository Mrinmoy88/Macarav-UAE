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
<section class="banner">
    <div class="banner_con">
        <h2><?php the_field('text_1') ?></h2>
        <h1><?php the_field('text_2') ?></h1>
        <img src="<?php the_field('banner') ?>" width="1129" height="752" alt="">
    </div>

    <div class="bnr_txt">
        <p><?php the_field('text_3') ?></p>
        <a href="#"><svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
            </svg></a>
    </div>

    <div class="bnr_btn">
        <a href="<?php echo site_url('/ongoing-projects/') ?>">
            <div class="primary-btn primary-btn1">Our Projects</div>
        </a>
    </div>

    <img src="<?= get_template_directory_uri(); ?>/assets/img/banner_shape7.png" width="1248" height="1260" alt="" class="bnr_circle1">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/banner_shape8.png" width="1205" height="1785" alt="" class="bnr_circle2">

    <img src="<?= get_template_directory_uri(); ?>/assets/img/banner_shape1.png" width="496" height="286" alt="" class="cloud1">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/banner_shape1.png" width="496" height="286" alt="" class="cloud2">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/banner_shape2.png" width="779" height="586" alt="" class="cloud3">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/banner_shape3.png" width="1119" height="646" alt="" class="cloud4">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/banner_shape4.png" width="1119" height="646" alt="" class="cloud5">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/banner_shape4.png" width="1119" height="646" alt="" class="cloud6">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/banner_shape5.png" width="1119" height="646" alt="" class="cloud7">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/banner_shape6.png" width="690" height="399" alt="" class="cloud8">

    <img src="<?= get_template_directory_uri(); ?>/assets/img/bird1.png" width="44" height="17" alt="" class="bird1">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/bird2.png" width="19" height="9" alt="" class="bird2">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/bird3.png" width="26" height="7" alt="" class="bird3">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/bird4.png" width="25" height="12" alt="" class="bird4">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/bird5.png" width="21" height="7" alt="" class="bird5">

    <div class="bnr_line1"></div>
    <div class="bnr_line2"></div>
    <div class="bnr_line3"></div>
    <div class="bnr_line4"></div>
    <div class="bnr_line5"></div>
</section>

<section class="secOne">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/shape1.png" width="28" height="28" alt="" class="shape1">
    <svg xmlns="http://www.w3.org/2000/svg" width="66" height="32" viewBox="0 0 66 32" fill="none" class="shape2">
        <path d="M64.5206 2C59.0041 9.44499 52.8257 13.4652 44.2933 13.4652C41.8415 13.4653 37.7913 13.1849 35.0991 11.0134C33.2348 9.50979 34.9091 7.51409 35.9164 6.53669C38.6197 3.91376 46.3789 3.05943 43.3016 9.44499C35.1477 26.3649 20.4955 33.3142 2 29.2302" stroke="#6C99C1" stroke-width="2" stroke-linecap="square" />
    </svg>
    <div class="container-fluid">
        <div class="secOne_con">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/sec1_shape.png" width="579" height="1124" alt="" class="secOne_img">
            <?php if (have_rows('brand_logo')) :
                $counter = 1;
                while (have_rows('brand_logo')) : the_row();
                    $logo = get_sub_field('logo');

            ?>
                    <div class="secOne_box secOne_box<?= $counter ?>">
                        <img src="<?= esc_url($logo); ?>" width="109" height="60" alt="<?= esc_attr($logo_alt); ?>">
                    </div>
            <?php
                    $counter++;
                endwhile;
            endif;
            ?>
            <a href="<?php echo site_url('/contact-us/') ?>">
                <div class="primary-btn">Contact Us Now</div>
            </a>
        </div>
    </div>
</section>

<section class="secTwo">
    <div class="bg_shape"></div>
    <img src="<?= get_template_directory_uri(); ?>/assets/img/sec2_shape1.png" width="571" height="357" alt="" class="sec2_cloud">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/sec2_shape2.png" width="571" height="357" alt="" class="sec2_shape">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 col-12">
                <div class="heading">
                    <h2><span>Our</span></h2>
                    <h2 class="haed_h2">Work Area</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-12">
                <div class="secTwo_txt">
                    <p><?php the_field('workarea_text') ?></p>
                    <a href="<?php echo site_url('/ongoing-projects/') ?>">
                        <div class="primary-btn primary-btn1">Discover Our Projects </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="secCon">
            <?php
            $counter = 1;
            // Define the query arguments
            $args = array(

                "post_type" => "our_services",
                'posts_per_page' => 6, // Number of posts per page
                "order" => "ASC",
                'orderby' => 'date',  // Sort by title

            );

            // Instantiate a new WP_Query
            $query = new WP_Query($args);

            // Check if there are any posts
            if ($query->have_posts()) {
                // Start the loop
                while ($query->have_posts()) {
                    $query->the_post();
                    $featured_image = wp_get_attachment_image_src(
                        get_post_thumbnail_id(
                            get_the_ID()
                        ),
                        "full"
                    );
                    // Display post content as needed
            ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="secBox secBox<?= $counter ?>">
                            <h3><?php the_field('styled_title') ?></h3>
                            <p><?php the_field('short_description') ?></p>
                            <a href="<?php the_permalink(); ?>" class="sec_box_btn"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                                    <path d="M13.3047 11.0681L25.4892 13.8589M25.4892 13.8589L22.6983 26.0434M25.4892 13.8589L10.5139 23.2526" stroke="#0C2F4F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg></a>
                            <img src="<?php echo $featured_image[0]; ?>" width="360" height="298" alt="" class="sec2_img">
                        </div>
                    </a>

            <?php
                    $counter++;
                }
                // Restore global post data
                wp_reset_postdata();
            } else {
                // Display a message if no posts are found
                echo 'No projects found.';
            }
            ?>

        </div>
    </div>
</section>

<section class="secThree">
    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="29" viewBox="0 0 54 29" fill="none" class="shape3">
        <path d="M1.52536 26.6478C6.99411 27.5272 14.0296 27.3094 18.3304 23.2674C20.8313 20.917 22.4593 17.8985 23.6338 14.456C24.502 11.9115 25.1805 9.12923 26.4377 6.81216C29.0049 2.08052 35.5461 1.63116 40.0855 2.1216C44.2516 2.5718 48.4882 2.72016 52.53 1.81914" stroke="#0C2F4F" stroke-width="2" stroke-linecap="square" />
    </svg>
    <div class="container-fluid">
        <div class="secThree_con">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/sec3_shape.png" width="579" height="1124" alt="" class="sec3_shape">
            <div class="secThree_txt">
                <div class="sec3_head">About Us</div>
                <h2><?php the_field('about_us_text_1') ?> <span><img src="<?php the_field('about_us_text_small_image') ?>" alt="image"></span> <?php the_field('about_us_text_2') ?></h2>
                <a href="<?php echo site_url('/about/') ?>">
                    <div class="primary-btn primary-btn1">Discover More</div>
                </a>
            </div>
            <img src="<?php the_field('about_us_section_image_1') ?>" width="129" height="163" alt="" class="sec3_img1">
            <img src="<?php the_field('about_us_section_image_2') ?>" width="134" height="169" alt="" class="sec3_img2">
        </div>
    </div>
</section>

<section class="secFour">
    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="29" viewBox="0 0 54 29" fill="none" class="shape4">
        <path d="M1.52536 26.6478C6.99411 27.5272 14.0296 27.3094 18.3304 23.2674C20.8313 20.917 22.4593 17.8985 23.6338 14.456C24.502 11.9115 25.1805 9.12923 26.4377 6.81216C29.0049 2.08052 35.5461 1.63116 40.0855 2.1216C44.2516 2.5718 48.4882 2.72016 52.53 1.81914" stroke="#CC103C" stroke-width="2" stroke-linecap="square" />
    </svg>
    <?php
    $counter = 1;
    // Define the query arguments
    $args = array(
        'post_type' => 'ongoing_projects',
        'posts_per_page' => 6, // Number of posts per page
        'order' => 'ASC',
        'orderby' => 'date',  // Sort by date
    );

    // Instantiate a new WP_Query
    $query = new WP_Query($args);

    // Initialize an array to store post data
    $posts_data = array();

    // Check if there are any posts
    if ($query->have_posts()) {
        // Start the loop
        while ($query->have_posts()) {
            $query->the_post();

            // Collect post data
            $posts_data[] = array(
                'title' => get_the_title(),
                'image' => wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0],
                'description' => get_the_excerpt(), // or get_the_content() for full content
                'slug' => get_post_field('post_name', get_the_ID()),
                'link' => get_permalink(),
                'address' => get_field('address')
            );

            $counter++;
        }

        // Restore global post data
        wp_reset_postdata();
    } else {
        // Display a message if no posts are found
        echo 'No projects found.';
    }
    ?>

    <?php if (!empty($posts_data)) : ?>

        <div class="container-fluid">
            <div class="row m-0">
                <div class="col-md-6 col-12 p-0">
                    <div class="heading">
                        <h2><span>Our</span></h2>
                        <h2 class="haed_h2">Ongoing
                            Projects</h2>
                    </div>
                    <div class="secFour_img_con1">
                        <a href="<?= esc_url($posts_data[0]['link']); ?>">
                            <div class="secFour_img secFour_img1">
                                <img src="<?= esc_url($posts_data[0]['image']); ?>" width="684" height="785" alt="<?= esc_attr($posts_data[0]['title']); ?>">
                                <div class="secFour_txt">
                                    <h3><?= esc_html($posts_data[0]['title']); ?></h3>
                                    <h4><?= esc_html($posts_data[0]['address']); ?></h4>
                                </div>
                            </div>
                        </a>
                        <a href="<?= esc_url($posts_data[1]['link']); ?>">
                            <div class="secFour_img secFour_img2">
                                <img src="<?= esc_url($posts_data[1]['image']); ?>" width="400" height="500" alt="<?= esc_attr($posts_data[1]['title']); ?>">
                                <div class="secFour_txt">
                                    <h3><?= esc_html($posts_data[1]['title']); ?></h3>
                                    <h4><?= esc_html($posts_data[1]['address']); ?></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-12 p-0">

                    <a href="<?= esc_url($posts_data[2]['link']); ?>">
                        <div class="secFour_img secFour_img3">
                            <img src="<?= esc_url($posts_data[2]['image']); ?>" width="686" height="785" alt="<?= esc_attr($posts_data[2]['title']); ?>">
                            <div class="secFour_txt">
                                <h3><?= esc_html($posts_data[2]['title']); ?></h3>
                                <h4><?= esc_html($posts_data[2]['address']); ?></h4>
                            </div>
                        </div>
                    </a>

                    <a href="<?= esc_url($posts_data[3]['link']); ?>">
                        <div class="secFour_img secFour_img4">
                            <img src="<?= esc_url($posts_data[3]['image']); ?>" width="557" height="661" alt="<?= esc_attr($posts_data[3]['title']); ?>">
                            <div class="secFour_txt">
                                <h3><?= esc_html($posts_data[3]['title']); ?></h3>
                                <h4><?= esc_html($posts_data[3]['address']); ?></h4>
                            </div>
                        </div>
                    </a>

                    <a href="<?= esc_url($posts_data[4]['link']); ?>">
                        <div class="secFour_img secFour_img5">
                            <img src="<?= esc_url($posts_data[4]['image']); ?>" width="286" height="356" alt="<?= esc_attr($posts_data[4]['title']); ?>">
                            <div class="secFour_txt">
                                <h3><?= esc_html($posts_data[4]['title']); ?></h3>
                                <h4><?= esc_html($posts_data[4]['address']); ?></h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>

<section class="secFive">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/testi_img.png" width="579" height="1124" alt="" class="secFive_img">
    <div class="container-fluid">
        <div class="row m-0">
            <?php if (have_rows('client_feedback')) :
                $counter = 1;
                $flag1 = false; // For heading in the first column
                $flag2 = false; // For opening the second column
                $flag3 = false; // For closing the second column
                while (have_rows('client_feedback')) : the_row();
                    $dp = get_sub_field('dp');
                    $description = get_sub_field('description');
                    $name = get_sub_field('name');
                    $profile = get_sub_field('profile');
                    $co = get_sub_field('co');

                    if ($counter <= 2) {
                        if (!$flag1) : ?>
                            <div class="col-lg-6 p-0">
                                <div class="heading">
                                    <h2><span>Our</span></h2>
                                    <h2 class="haed_h2">Clients Feedback</h2>
                                </div>
                                <?php $flag1 = true; ?>
                            <?php endif; ?>

                            <div class="testi_box testi_box<?= $counter ?>">
                                <p>“<?= $description ?>”</p>
                                <div class="client_name_box">
                                    <img src="<?= $dp ?>" width="65" height="65" alt="">
                                    <div class="client_txt">
                                        <h4><?= $name ?></h4>
                                        <h5><?= $profile ?>, <span><?= $co ?></span></h5>
                                    </div>
                                </div>
                            </div>

                            <?php if ($counter == 2) : ?>
                            </div>
                        <?php endif; ?>
                        <?php } else {
                        if (!$flag2) : ?>
                            <div class="col-lg-6 p-0">
                                <?php $flag2 = true; ?>
                            <?php endif; ?>

                            <div class="testi_box testi_box<?= $counter ?>">
                                <p>“<?= $description ?>”</p>
                                <div class="client_name_box">
                                    <img src="<?= $dp ?>" width="65" height="65" alt="">
                                    <div class="client_txt">
                                        <h4><?= $name ?></h4>
                                        <h5><?= $profile ?>, <span><?= $co ?></span></h5>
                                    </div>
                                </div>
                            </div>

                            <?php if (get_row_index() == count(get_field('client_feedback'))) : ?>
                            </div>
                        <?php endif; ?>
                    <?php } ?>
                    <?php $counter++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="secSix">
    <div class="container-fluid">
        <div class="heading">
            <h2><span>Our</span></h2>
            <h2 class="haed_h2">Latest Blog</h2>
        </div>
        <div class="row">
            <?php
            $counter = 1;
            // Define the query arguments
            $args = array(

                "post_type" => "post",
                'posts_per_page' => 4, // Number of posts per page
                "order" => "ASC",
                'orderby' => 'date',  // Sort by title

            );

            // Instantiate a new WP_Query
            $query = new WP_Query($args);

            // Check if there are any posts
            if ($query->have_posts()) {
                // Start the loop
                while ($query->have_posts()) {
                    $query->the_post();
                    $featured_image = wp_get_attachment_image_src(
                        get_post_thumbnail_id(
                            get_the_ID()
                        ),
                        "full"
                    );
                    // Display post content as needed
                    if ($counter != 2) {
            ?>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <a href="<?php the_permalink(); ?>">
                                <div class="blog_box1 <?php if ($counter == 3) {?> blog_box3 <?php }?>">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="d-flex">
                                        <div class="b-date"><?= get_the_date(); ?></div>
                                        <div class="b-name"> <?php echo ucwords(get_the_author()); ?></div>
                                    </div>
                                    <p><?= substr(get_the_content(), 0, 100) . '...'; ?></p>
                                    <a class="b-btn" href="<?php the_permalink(); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                            <path d="M8.75 8.75H21.25M21.25 8.75V21.25M21.25 8.75L8.75 21.25" stroke="#444444" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <a href="<?php the_permalink(); ?>">
                                <div class="blog_box2">
                                    <img src="<?php echo $featured_image[0]; ?>" width="399" height="388" alt="">
                                    <div class="bb2_txt">
                                        <h3><?php the_title(); ?></h3>
                                        <div class="bb2_btn">
                                            <div class="d-flex">
                                                <div class="b2-date"><?= get_the_date(); ?></div>
                                                <div class="b2-name"><?php echo ucwords(get_the_author()); ?></div>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="b2-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                    <path d="M8.75 8.75H21.25M21.25 8.75V21.25M21.25 8.75L8.75 21.25" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>

            <?php
                    $counter++;
                }
                // Restore global post data
                wp_reset_postdata();
            } else {
                // Display a message if no posts are found
                echo 'No Blogs found.';
            }
            ?>

        </div>
        <a href="<?php echo site_url('/all-blogs/') ?>" class="secSix_btn">
            <div class="primary-btn primary-btn1">Discover More</div>
        </a>
    </div>
</section>

<?php
get_footer();
?>