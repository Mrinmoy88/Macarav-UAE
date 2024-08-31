<?php 
/*
Template Name: About
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
             <h3><?=the_field('heading_1')?></h3>
             <h2>about</h2>
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
 
      <section class="ap_secOne">
         <div class="container-fluid">
            <div class="ap_secOne_con">
               <div class="row g-md-5 g-4 m-0 align-items-center">
                  <div class="col-lg-6">
                     <div class="ap_img">
                        <!-- <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/ap1.png" width="686" height="868" alt=""> -->
                        <?php the_post_thumbnail(); ?>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="ap_txt">
                        <h2><?=the_field('heading_2')?></h2>
                        <?=the_content()?>
                        <a href="<?php echo site_url('/ongoing-projects/') ?>">
                           <div class="primary-btn primary-btn1">View All Our Projects</div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="ap_secTwo">
         <img src="<?= get_template_directory_uri(); ?>/assets/img/sec3_shape.png" width="579" height="1124" alt="" class="sec3_shape">
         <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/inner_shape1.png" width="1042" height="2085" alt="" class="sec_shape1">
         <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/inner_shape2.png" width="402" height="357" alt="" class="sec_shape2">
         <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/inner_shape3.png" width="486" height="357" alt="" class="sec_shape3">

         <div class="container-fluid">
            <div class="heading">
               <h2><span>Making</span></h2>
               <h2 class="haed_h2">customers <br>for life</h2>
            </div>
            <div class="row ap_secTwo_row1">
               <div class="col-lg-4">
                  <div class="ap2_img1">
                     <img src="<?=the_field('image_1')?>" width="129" height="163" alt="">
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="ap_secTwo_img1">
                     <img src="<?=the_field('image_2')?>" width="684" height="785" alt="">
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="ap_secTwo_txt1">
                     <h3>Our Mission</h3>
                     <p><?=the_field('our_mission')?></p>
                     <a href="<?php echo site_url('/ongoing-projects/') ?>">
                        <div class="primary-btn primary-btn1">View All Our Projects</div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row  ap_secTwo_row2">
               <div class="col-lg-3 o-3">
                  <div class="ap_secTwo_txt2">
                     <h3>Our Vision</h3>
                     <p><?=the_field('our_vision')?></p>
                     <a href="<?php echo site_url('/ongoing-projects/') ?>">
                        <div class="primary-btn primary-btn1">View All Our Projects</div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-5 o-2">
                  <div class="ap_secTwo_img2">
                     <img src="<?=the_field('image_3')?>" width="684" height="785" alt="">
                  </div>
               </div>
               <div class="col-lg-4 o-1">
                  <div class="ap2_img2">
                     <img src="<?=the_field('image_4')?>" width="129" height="163" alt="">
                  </div>
               </div>
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