<?php if (get_row_layout() == 'contact_form') {?>
    <section class="contact-form-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <div class="contact-form-disc listing-check">
                        <?php if(get_sub_field('heading')) { ?>
                            <h2><?php the_sub_field('heading');?></h2>
                        <?php } ?>
                        <?php if(get_sub_field('description')) { ?>
                            <?php the_sub_field('description');?>
                        <?php } ?>
                    </div>
                </div>
                    <div class="col-md-6 col-lg-5">
                    <div class="form-sec">

                    </div>
                </div>
            </div>
        </div>
        <div class="contactform-img">
          <img src="<?php echo get_template_directory_uri();?>/html/app/assets/img/contact-bg.png" alt="">
        </div>
    </section>
<?php } ?>