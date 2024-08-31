<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package makarav
 */

?>



<!-- ========= footer ========= -->
<footer>
	<div class="ftr_top">
		<div class="bg_img">
			<img src="<?= get_template_directory_uri(); ?>/assets/img/ftr_bg.png" width="1920" height="679" alt="">
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-12">
					<div class="ftr-con">
						<a href="index.html">
							<img src="<?php the_field('footer_logo', 'option'); ?>" width="272" height="82" alt="">
						</a>
						<p><?php the_field('footer_text', 'option'); ?></p>
						<div class="social_icon_div">
							<a href="<?php the_field('fb', 'option'); ?>" class="social_icon" target="_blank">
								<svg class="svg-inline--fa fa-facebook-f fa-icon" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
									<path fill="currentColor" d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"></path>
								</svg>
							</a>
							<a href="<?php the_field('in', 'option'); ?>" class="social_icon" target="_blank">
								<svg class="svg-inline--fa fa-linkedin-in fa-icon" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
									<path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
								</svg>
							</a>
							<a href="<?php the_field('insta', 'option'); ?>" class="social_icon" target="_blank">
								<svg class="svg-inline--fa fa-instagram fa-icon" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
									<path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
								</svg>
							</a>
							<a href="<?php the_field('x', 'option'); ?>" class="social_icon" target="_blank">
								<svg class="svg-inline--fa fa-x-twitter fa-icon" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="x-twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
									<path fill="currentColor" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
								</svg>
							</a>
							<a href="<?php the_field('yt', 'option'); ?>" class="social_icon" target="_blank">
								<svg class="svg-inline--fa fa-youtube fa-icon" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
									<path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
								</svg>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-12">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="ftr_item ftr_item1">
								<h4>Quick Links</h4>


								<?php
								wp_nav_menu(array(
									'theme_location'  => 'menu-2',
									'container'       => 'ul',
									'menu_class'      => '',
									'li_class'        => '',
									'a_class'         => ''
								));
								?>


							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="ftr_item ftr_item2">
								<h4>Call us</h4>
								<ul>
									<li>
										<a href="tel: <?php the_field('phone_2', 'option'); ?>">
											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
												<g clip-path="url(#clip0_74_6853)">
													<path d="M18.3334 14.0999V16.5999C18.3344 16.832 18.2868 17.0617 18.1939 17.2744C18.1009 17.487 17.9645 17.6779 17.7935 17.8348C17.6225 17.9917 17.4206 18.1112 17.2007 18.1855C16.9809 18.2599 16.7479 18.2875 16.5168 18.2666C13.9525 17.988 11.4893 17.1117 9.32511 15.7083C7.31163 14.4288 5.60455 12.7217 4.32511 10.7083C2.91676 8.53426 2.04031 6.05908 1.76677 3.48325C1.74595 3.25281 1.77334 3.02055 1.84719 2.80127C1.92105 2.58199 2.03975 2.38049 2.19575 2.2096C2.35174 2.03871 2.54161 1.90218 2.75327 1.80869C2.96492 1.7152 3.19372 1.6668 3.42511 1.66658H5.92511C6.32953 1.6626 6.7216 1.80582 7.02824 2.06953C7.33488 2.33324 7.53517 2.69946 7.59177 3.09992C7.69729 3.89997 7.89298 4.68552 8.17511 5.44158C8.28723 5.73985 8.31149 6.06401 8.24503 6.37565C8.17857 6.68729 8.02416 6.97334 7.80011 7.19992L6.74177 8.25825C7.92807 10.3445 9.65549 12.072 11.7418 13.2583L12.8001 12.1999C13.0267 11.9759 13.3127 11.8215 13.6244 11.755C13.936 11.6885 14.2602 11.7128 14.5584 11.8249C15.3145 12.107 16.1001 12.3027 16.9001 12.4083C17.3049 12.4654 17.6746 12.6693 17.9389 12.9812C18.2032 13.2931 18.3436 13.6912 18.3334 14.0999Z" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												</g>
												<defs>
													<clipPath id="clip0_74_6853">
														<rect width="20" height="20" fill="white" />
													</clipPath>
												</defs>
											</svg>
											<?php the_field('phone_2', 'option'); ?></a>
									</li>
									<!-- <li>
										<a href="tel: +91 33-6501-1518">
											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
												<g clip-path="url(#clip0_74_6853)">
													<path d="M18.3334 14.0999V16.5999C18.3344 16.832 18.2868 17.0617 18.1939 17.2744C18.1009 17.487 17.9645 17.6779 17.7935 17.8348C17.6225 17.9917 17.4206 18.1112 17.2007 18.1855C16.9809 18.2599 16.7479 18.2875 16.5168 18.2666C13.9525 17.988 11.4893 17.1117 9.32511 15.7083C7.31163 14.4288 5.60455 12.7217 4.32511 10.7083C2.91676 8.53426 2.04031 6.05908 1.76677 3.48325C1.74595 3.25281 1.77334 3.02055 1.84719 2.80127C1.92105 2.58199 2.03975 2.38049 2.19575 2.2096C2.35174 2.03871 2.54161 1.90218 2.75327 1.80869C2.96492 1.7152 3.19372 1.6668 3.42511 1.66658H5.92511C6.32953 1.6626 6.7216 1.80582 7.02824 2.06953C7.33488 2.33324 7.53517 2.69946 7.59177 3.09992C7.69729 3.89997 7.89298 4.68552 8.17511 5.44158C8.28723 5.73985 8.31149 6.06401 8.24503 6.37565C8.17857 6.68729 8.02416 6.97334 7.80011 7.19992L6.74177 8.25825C7.92807 10.3445 9.65549 12.072 11.7418 13.2583L12.8001 12.1999C13.0267 11.9759 13.3127 11.8215 13.6244 11.755C13.936 11.6885 14.2602 11.7128 14.5584 11.8249C15.3145 12.107 16.1001 12.3027 16.9001 12.4083C17.3049 12.4654 17.6746 12.6693 17.9389 12.9812C18.2032 13.2931 18.3436 13.6912 18.3334 14.0999Z" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												</g>
												<defs>
													<clipPath id="clip0_74_6853">
														<rect width="20" height="20" fill="white" />
													</clipPath>
												</defs>
											</svg>
											<?php the_field('phone', 'option'); ?></a>
									</li> -->
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="ftr_item ftr_item2">
								<h4>Write us</h4>
								<ul>
									<li>
										<a href="mailto: <?php the_field('email_1', 'option'); ?>">
											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
												<path d="M16.6666 3.33325H3.33329C2.41282 3.33325 1.66663 4.07944 1.66663 4.99992V14.9999C1.66663 15.9204 2.41282 16.6666 3.33329 16.6666H16.6666C17.5871 16.6666 18.3333 15.9204 18.3333 14.9999V4.99992C18.3333 4.07944 17.5871 3.33325 16.6666 3.33325Z" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M18.3333 5.83325L10.8583 10.5833C10.601 10.7444 10.3036 10.8299 9.99996 10.8299C9.69636 10.8299 9.3989 10.7444 9.14163 10.5833L1.66663 5.83325" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<?php the_field('email_1', 'option'); ?></a>
									</li>
									<!-- <li>
										<a href="mailto: <?php the_field('email_2', 'option'); ?>">
											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
												<path d="M16.6666 3.33325H3.33329C2.41282 3.33325 1.66663 4.07944 1.66663 4.99992V14.9999C1.66663 15.9204 2.41282 16.6666 3.33329 16.6666H16.6666C17.5871 16.6666 18.3333 15.9204 18.3333 14.9999V4.99992C18.3333 4.07944 17.5871 3.33325 16.6666 3.33325Z" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M18.3333 5.83325L10.8583 10.5833C10.601 10.7444 10.3036 10.8299 9.99996 10.8299C9.69636 10.8299 9.3989 10.7444 9.14163 10.5833L1.66663 5.83325" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<?php the_field('email_2', 'option'); ?></a>
									</li> -->
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="ftr_item ftr_item2 ftr_item3">
								<h4>Write us</h4>
								<p><?php the_field('company_name', 'option'); ?></p>
								<ul>
									<li>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M20 10C20 16 12 22 12 22C12 22 4 16 4 10C4 7.87827 4.84285 5.84344 6.34315 4.34315C7.84344 2.84285 9.87827 2 12 2C14.1217 2 16.1566 2.84285 17.6569 4.34315C19.1571 5.84344 20 7.87827 20 10Z" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<?php the_field('address', 'option'); ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ftr_btm">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-6 col-12">
					<div class="ftr-left">
						<p><?php the_field('copyright', 'option'); ?></p>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="ftr-right">
						<!-- <a href="#">Privacy Policy</a>
						<a href="#">Terms & Conditions</a>
						<a href="#">Refund & Cancellation Policy</a> -->
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-3',
							'container'      => '', // No container
							'items_wrap'     => '%3$s', // No <ul> wrapper
							'walker'         => new Simple_Link_Walker(),
						));
						?>

					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- =============== Footer =============== -->

</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollTrigger/1.0.6/ScrollTrigger.min.js" integrity="sha512-+LXqbM6YLduaaxq6kNcjMsQgZQUTdZp7FTaArWYFt1nxyFKlQSMdIF/WQ/VgsReERwRD8w/9H9cahFx25UDd+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js" integrity="sha512-UU0D/t+4/SgJpOeBYkY+lG16MaNF8aqmermRIz8dlmQhOlBnw6iQrnt4Ijty513WB3w+q4JO75IX03lDj6qQNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="<?= get_template_directory_uri(); ?>/assets/js/script.js"></script>


<?php wp_footer(); ?>
</body>

</html>