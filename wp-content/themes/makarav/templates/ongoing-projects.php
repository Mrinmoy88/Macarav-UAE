<?php
/*
Template Name: Ongoing Projects
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
            <h3>Find lucrative projects</h3>
            <h2>projects</h2>
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

    <section class="inner_sec secFour ongoing_project">
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
                    <div class="col-md-6 p-0">
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
                    <div class="col-md-6 p-0">

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
                <a href="<?=site_url('/our-services/')?>">
                    <div class="primary-btn primary-btn1">
                        Our Services
                    </div>
                </a>
            </div>

        <?php endif; ?>
    </section>

    <?php
    get_footer();
    ?>