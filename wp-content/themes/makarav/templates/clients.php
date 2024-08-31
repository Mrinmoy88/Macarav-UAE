<?php
/*
Template Name: Clients
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
            <h3>Find our clients</h3>
            <h2>clients</h2>
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

    <section class="inner_sec client_sec">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/inner_shape1.png" width="1042" height="2085" alt="" class="inner_sec_shape1">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/inner_shape2.png" width="402" height="357" alt="" class="inner_sec_shape2">

        <img src="<?= get_template_directory_uri(); ?>/assets/img/sec3_shape.png" width="579" height="1124" alt="" class="op_shape">
        <div class="container-fluid">
            <div class="row m-0 justify-content-center">

                <?php if (have_rows('logo')) :
                    $counter = 1;
                    while (have_rows('logo')) : the_row();
                        $logo = get_sub_field('client_logo');

                ?>
                        <div class="col-lg-3 col-sm-4 col-6 cl_col p-1">
                            <div class="client_box">
                                <img src="<?= $logo ?>" alt="Brand Logo">
                            </div>
                        </div>
                <?php
                        $counter++;
                    endwhile;
                endif;
                ?>

            </div>
            <!-- <div class="pagination" style="display: block;">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M17.5964 17.9922L18.959 16.6296L14.5328 12.1937L18.959 7.75794L17.5963 6.3953L11.7979 12.1937L17.5964 17.9922Z" fill="#1C1C1C" />
                        <path d="M11.2272 17.9922L12.5898 16.6296L8.1637 12.1937L12.5898 7.75794L11.2272 6.3953L5.42877 12.1937L11.2272 17.9922Z" fill="#1C1C1C" />
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M14.8161 17.9922L16.1787 16.6296L11.7526 12.1937L16.1787 7.75794L14.8161 6.3953L9.01763 12.1937L14.8161 17.9922Z" fill="#1C1C1C" />
                    </svg>
                </a>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                ....
                <a href="#">10</a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M10.1068 6.39526L8.74414 7.7579L13.1703 12.1937L8.74414 16.6295L10.1068 17.9921L15.9052 12.1937L10.1068 6.39526Z" fill="#1C1C1C" />
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M6.87631 6.39526L5.51367 7.7579L9.93982 12.1937L5.51367 16.6295L6.87631 17.9921L12.6747 12.1937L6.87631 6.39526Z" fill="#1C1C1C" />
                        <path d="M13.2454 6.39526L11.8828 7.7579L16.309 12.1937L11.8828 16.6295L13.2454 17.9921L19.0439 12.1937L13.2454 6.39526Z" fill="#1C1C1C" />
                    </svg>
                </a>
            </div> -->
        </div>
    </section>

    <?php
    get_footer();
    ?>