<?php
/*
Template Name: Contact
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
            <h2>Contact Us</h2>
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

    <section class="inner_sec contact_sec">
        <svg xmlns="http://www.w3.org/2000/svg" width="54" height="29" viewBox="0 0 54 29" fill="none" class="contact_shape1">
            <path d="M1.52536 26.6478C6.99411 27.5272 14.0296 27.3094 18.3304 23.2674C20.8313 20.917 22.4593 17.8985 23.6338 14.456C24.502 11.9115 25.1805 9.12923 26.4377 6.81216C29.0049 2.08052 35.5461 1.63116 40.0855 2.1216C44.2516 2.5718 48.4882 2.72016 52.53 1.81914" stroke="#CC103C" stroke-width="2" stroke-linecap="square"></path>
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none" class="contact_shape2">
            <path d="M12.5344 18.3098L0.0267915 20.8276L9.8957 13.1374L6.77394 0.0269164L15.1873 10.4379L27.5747 6.77405L17.826 15.6103L20.8275 27.5748L12.5344 18.3098Z" fill="#FDABBE" />
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none" class="contact_shape3">
            <path d="M12.5344 18.3098L0.0267915 20.8276L9.8957 13.1374L6.77394 0.0269164L15.1873 10.4379L27.5747 6.77405L17.826 15.6103L20.8275 27.5748L12.5344 18.3098Z" fill="#90D0B2" />
        </svg>

        <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/inner_shape1.png" width="1042" height="2085" alt="" class="inner_sec_shape1">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/inner_shape2.png" width="402" height="357" alt="" class="inner_sec_shape2">

        <img src="<?= get_template_directory_uri(); ?>/assets/img/sec3_shape.png" width="579" height="1124" alt="" class="sd_shape">
        <div class="container-fluid">
            <div class="row m-0 contact_row">
                <div class="col-12">
                    <div class="heading">
                        <h2><span>We'd love</span></h2>
                        <h2 class="haed_h2">to hear from you</h2>
                    </div>
                </div>
                <div class="row align-items-center contact_row2 m-0 g-md-5 g-3">
                    <div class="col-lg-1">
                        <img src="<?= the_field('image_1') ?>" width="102" height="128" alt="" class="contact_img1">
                    </div>
                    <div class="col-lg-6">
                        <div class="contact_form">
                            <!-- <form class="form_design" action="" mathod="">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <input type="text" placeholder="Your Name *" name="name" required="">
                                    </div>
                                    <div class="col-6">
                                        <input type="email" placeholder="Your Email *" name="email" required="">
                                    </div>
                                    <div class="col-6">
                                        <input type="tel" placeholder="Your Phone Number *" name="phone" required="">
                                    </div>
                                    <div class="col-12">
                                        <textarea type="text" name="massage" placeholder="How can we help you ?" required=""></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div>
                                            <input type="checkbox" name="send_newsletter" id="send_newsletter" value="yes" />
                                            <label for="send_newsletter">Subscribe to the newsletter</label>
                                        </div>
                                    </div>
                                    <div class="co-12">
                                        <input type="submit" name="submit" class="primary-btn primary-btn1">
                                    </div>
                                    <div class="col-12">
                                        <p>By submitting this form, you’re allowing us to store the information you submit. Please read our <span>Privacy Policy</span> to learn more. </p>
                                    </div>
                                </div>
                            </form> -->
                            <?=do_shortcode('[contact-form-7 id="2447542" title="Contact form"  html_id="" html_class="form_design"]') ?>
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact_info">
                            <h2><?= the_field('text_2') ?></h2>
                            <p><?= the_field('text_1') ?></p>
                            <ul>
                                <li>
                                    <a href="tel: <?php the_field('phone', 'option'); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <g clip-path="url(#clip0_74_2359)">
                                                <path d="M20.1663 15.5098V18.2598C20.1674 18.5151 20.1151 18.7678 20.0128 19.0017C19.9105 19.2356 19.7605 19.4456 19.5724 19.6181C19.3843 19.7907 19.1622 19.9221 18.9203 20.0039C18.6785 20.0857 18.4222 20.1161 18.168 20.0931C15.3473 19.7866 12.6377 18.8227 10.2572 17.2789C8.04233 15.8715 6.16455 13.9938 4.75715 11.7789C3.20797 9.38753 2.24388 6.66484 1.94299 3.83143C1.92008 3.57794 1.95021 3.32246 2.03145 3.08125C2.11269 2.84004 2.24326 2.6184 2.41486 2.43042C2.58645 2.24244 2.79531 2.09225 3.02813 1.98941C3.26095 1.88657 3.51263 1.83334 3.76715 1.8331H6.51715C6.96202 1.82872 7.3933 1.98625 7.7306 2.27633C8.06791 2.56642 8.28822 2.96926 8.35049 3.40976C8.46656 4.28982 8.68182 5.15393 8.99215 5.9856C9.11549 6.31369 9.14218 6.67027 9.06907 7.01307C8.99596 7.35587 8.82611 7.67053 8.57965 7.91976L7.41549 9.08393C8.72041 11.3788 10.6206 13.279 12.9155 14.5839L14.0797 13.4198C14.3289 13.1733 14.6435 13.0035 14.9863 12.9303C15.3291 12.8572 15.6857 12.8839 16.0138 13.0073C16.8455 13.3176 17.7096 13.5329 18.5897 13.6489C19.0349 13.7117 19.4416 13.936 19.7323 14.2791C20.023 14.6222 20.1775 15.0602 20.1663 15.5098Z" stroke="#383838" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_74_2359">
                                                    <rect width="22" height="22" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p><?php the_field('phone', 'option'); ?></p>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto: <?php the_field('email_1', 'option'); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <path d="M20.1673 6.4165L11.9448 11.6415C11.6618 11.8188 11.3346 11.9128 11.0007 11.9128C10.6667 11.9128 10.3395 11.8188 10.0565 11.6415L1.83398 6.4165M3.66732 3.6665H18.334C19.3465 3.6665 20.1673 4.48732 20.1673 5.49984V16.4998C20.1673 17.5124 19.3465 18.3332 18.334 18.3332H3.66732C2.6548 18.3332 1.83398 17.5124 1.83398 16.4998V5.49984C1.83398 4.48732 2.6548 3.6665 3.66732 3.6665Z" stroke="#383838" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <p><?php the_field('email_1', 'option'); ?></p>
                                    </a>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                        <path d="M18.3327 9.16683C18.3327 14.6668 10.9993 20.1668 10.9993 20.1668C10.9993 20.1668 3.66602 14.6668 3.66602 9.16683C3.66602 7.22191 4.43863 5.35665 5.8139 3.98138C7.18917 2.60611 9.05443 1.8335 10.9993 1.8335C12.9443 1.8335 14.8095 2.60611 16.1848 3.98138C17.5601 5.35665 18.3327 7.22191 18.3327 9.16683Z" stroke="#383838" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.9993 11.9168C12.5181 11.9168 13.7493 10.6856 13.7493 9.16683C13.7493 7.64805 12.5181 6.41683 10.9993 6.41683C9.48057 6.41683 8.24935 7.64805 8.24935 9.16683C8.24935 10.6856 9.48057 11.9168 10.9993 11.9168Z" stroke="#383838" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <p><?php the_field('address', 'option'); ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <img src="<?= the_field('image_2') ?>" width="102" height="128" alt="" class="contact_img2">
                    </div>
                    <div class="col-lg-5">
                        <img src="<?= the_field('image_3') ?>" width="156" height="198" alt="" class="contact_img3">
                    </div>
                    <div class="col-lg-6">
                        <div class="map">
                            <?php the_field('map'); ?>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>
    </section>

    <?php
    get_footer();
    ?>