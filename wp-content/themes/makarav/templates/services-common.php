<?php
/*
Template Name: Services Common Section
*/
?>


<div class="col-lg-6 p-0">
    <div class="contact_div">
        <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" width="843" height="367" alt="">
        <div class="contact_txt">
            <h3><?=the_field('heading_1')?></h3>
            <p><?=the_field('long_text_1')?></p>
            <a href="<?= site_url('/contact-us/') ?>">
                <div class="primary-btn primary-btn1">Get a Free Quote Today!</div>
            </a>
        </div>
    </div>
</div>
<div class="col-lg-6 p-0">
    <div class="building_div">
        <h3><?=the_field('heading_2')?></h3>
        
        <?=the_field('long_text_2')?>
    </div>
</div>