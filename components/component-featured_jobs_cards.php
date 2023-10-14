<?php $random = substr(md5(mt_rand()), 0, 7);?>
<section class="featured-job-block" id="<?php echo md5(get_sub_field('anchor_id')); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 featured-left-sec">
                <div class="section-title">
                    <?php if(get_sub_field('component_heading')) { ?>   
                        <h2><?php the_sub_field('component_heading'); ?></h2>
                        <?php } ?> 
                        <?php if(get_sub_field('component_description')) { ?>   
                        <p><?php the_sub_field('component_description'); ?></p>
                        <?php } ?> 
                        <?php if(get_sub_field('component_cta')){ ?>    
                        <?php common_link(get_sub_field('component_cta'), 'btn-primary'); ?>
                        <?php } ?>
                    <div class="featured-slider-btns custom-silder-btn d-md-none">
                        <button class="featured-btns-prev-<?php echo $random;?> slick-prev" aria-label="prev"></button>
                        <button class="featured-btns-next-<?php echo $random;?> slick-next" aria-label="next"></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 featured-right-sec">
              
                <?php if(have_rows('add_featured_job_card')) { $i = 0; ?>
                    <ul class="featured-job-listing" data-key="1">
                        <?php while(have_rows('add_featured_job_card')) { the_row(); ?>
                            <?php if( $i%3 == 0 || $i == 0) { ?>
                                <li>
                                    <div class="featured-job-list">
                                        <?php } ?>
                                            <div class="featured-job-wrapper">
                                                <div class="featured-job-box">
                                                    <span class="location"><?php the_sub_field('job_location'); $i++; ?></span>
                                                    <?php if(get_sub_field('job_title')) { ?>   
                                                        <h3><?php the_sub_field('job_title'); ?></h3>
                                                    <?php } ?>
                                                    <?php if(get_sub_field('job_description')) { ?>   
                                                        <p><?php the_sub_field('job_description'); ?></p>
                                                    <?php } ?>
                                                    <?php if(get_sub_field('cta')){ ?>    
                                                    <?php common_link(get_sub_field('cta'), 'btn-arrow'); ?>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        <?php if($i%3 == 0 || $i == 0) { ?>
                                    </div>
                                </li>
                            <?php } ?>                       
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</section>