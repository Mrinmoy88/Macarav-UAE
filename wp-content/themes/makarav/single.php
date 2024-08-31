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
		<h3>Find our daily blogs</h3>
		<h2>Blog</h2>
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

<section class="op_details inner_sec">
	<svg xmlns="http://www.w3.org/2000/svg" width="54" height="29" viewBox="0 0 54 29" fill="none" class="pd_shape1">
		<path d="M1.52536 26.6478C6.99411 27.5272 14.0296 27.3094 18.3304 23.2674C20.8313 20.917 22.4593 17.8985 23.6338 14.456C24.502 11.9115 25.1805 9.12923 26.4377 6.81216C29.0049 2.08052 35.5461 1.63116 40.0855 2.1216C44.2516 2.5718 48.4882 2.72016 52.53 1.81914" stroke="#CC103C" stroke-width="2" stroke-linecap="square"></path>
	</svg>

	<img src="<?= get_template_directory_uri(); ?>/assets/img/inner/inner_shape1.png" width="1042" height="2085" alt="" class="inner_sec_shape1">
	<img src="<?= get_template_directory_uri(); ?>/assets/img/inner/inner_shape2.png" width="402" height="357" alt="" class="inner_sec_shape2">

	<img src="<?= get_template_directory_uri(); ?>/assets/img/sec3_shape.png" width="579" height="1124" alt="" class="op_details_shape">
	<div class="container-fluid">
		<div class="row m-0">
			<div class="col-lg-9">
				<div class="pd_con">
					<h2><?= the_title() ?></h2>
					<div class="op_img">

						<img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" width="1002" height="569" alt="">
					</div>
					<div class="text-left">
						<b>Posted By:</b> <?= get_the_date(); ?> 
						<!-- <br>
						<b>Date:</b> <?= get_the_date(); ?> -->
					</div>
					<br>


					<?= the_content(); ?>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="category">
					<h2>Other Blogs</h2>
					<div class="faq">
						<div class="faq-item">
							<?php
							$counter = 1;
							// Define the query arguments
							$args = array(

								"post_type" => "post",
								'posts_per_page' => 8, // Number of posts per page
								"order" => "ASC",
								'orderby' => 'date',  // Sort by title
								'post__not_in' => array($current_post_id), // Exclude the current post

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
									<details>

										<summary>
											<h3><?php the_title(); ?></h3>
										</summary>
										<div class="text-center">&nbsp; <b> Posted By: </b>
											<div class=""><?php echo ucwords(get_the_author()); ?></div> &nbsp;
											<div class=""><?= get_the_date(); ?></div> <br />

										</div>


									</details>
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
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>