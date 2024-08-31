<?php
/*
Template Name: Our Services
*/
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

    <section class="inner_sec service_sec">
        <svg xmlns="http://www.w3.org/2000/svg" width="54" height="29" viewBox="0 0 54 29" fill="none" class="service_shape1">
            <path d="M1.52536 26.6478C6.99411 27.5272 14.0296 27.3094 18.3304 23.2674C20.8313 20.917 22.4593 17.8985 23.6338 14.456C24.502 11.9115 25.1805 9.12923 26.4377 6.81216C29.0049 2.08052 35.5461 1.63116 40.0855 2.1216C44.2516 2.5718 48.4882 2.72016 52.53 1.81914" stroke="#788795" stroke-width="2" stroke-linecap="square" />
        </svg>

        <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/inner_shape1.png" width="1042" height="2085" alt="" class="inner_sec_shape1">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/inner_shape2.png" width="402" height="357" alt="" class="inner_sec_shape2">

        <img src="<?= get_template_directory_uri(); ?>/assets/img/sec3_shape.png" width="579" height="1124" alt="" class="sp_shape">
        <div class="container-fluid">
            <div class="row m-0 align-items-center service_row1">
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="heading">
                        <h2><span>Our</span></h2>
                        <h2 class="haed_h2">Work Area</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-12">
                    <p><?= the_content(); ?></p>
                </div>
            </div>
            <div class="row align-items-center service_row2 g-md-5 g-3">
                <?php
                $counter = 1;
                // Define the query arguments
                $args = array(

                    "post_type" => "our_services",
                    'posts_per_page' => -1, // Number of posts per page
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
                        if ($counter % 2 != 0) {
                ?>

                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="service_box">
                                    <div class="serv_head">
                                        <a href="<?php the_permalink(); ?>">
                                            <h3><?php the_field('styled_title') ?></h3>
                                        </a>
                                        <a href="<?php the_permalink(); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <path d="M8.75 8.75H21.25M21.25 8.75V21.25M21.25 8.75L8.75 21.25" stroke="#0C2F4F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                    <p><?php the_field('short_description') ?></p>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="serv_img">
                                            <img src="<?php echo $featured_image[0]; ?>" width="422" height="297" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="service_box service_box1">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="serv_img">
                                            <img src="<?php echo $featured_image[0]; ?>" width="422" height="297" alt="">
                                        </div>
                                    </a>
                                    <div class="serv_head">
                                        <a href="<?php the_permalink(); ?>">
                                            <h3><?php the_field('styled_title') ?></h3>
                                        </a>
                                        <a href="<?php the_permalink(); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <path d="M8.75 8.75H21.25M21.25 8.75V21.25M21.25 8.75L8.75 21.25" stroke="#0C2F4F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                    <p><?php the_field('short_description') ?></p>
                                </div>
                            </div>
                <?php
                        }
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

    <?php
    get_footer();
    ?>