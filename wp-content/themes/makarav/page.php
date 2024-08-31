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
             <h3>Makarav UAE</h3>
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
               <div class="row g-5 m-0 align-items-center">
                 
                  <div class="col-lg-12">
                     <div class="ap_txt">
                        <h2><?=the_title()?></h2>
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

     

<?php 
get_footer();
?>