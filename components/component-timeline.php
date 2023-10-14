<?php $random = substr(md5(mt_rand()), 0, 7);?>
<section class="timeline" id="<?php echo md5(get_sub_field('anchor_id')); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-title">
                    <?php if(get_sub_field('component_heading')) { ?>   
                        <h2><?php the_sub_field('component_heading'); ?></h2>
                    <?php } ?> 
                    <?php if(get_sub_field('component_description')) { ?>   
                        <p><?php the_sub_field('component_description'); ?></p>
                    <?php } ?> 
                </div>              
                <div class="year-desc">
                    <?php if(get_sub_field('yyyy-yyyy')) { ?>
                        <h3><?php the_sub_field('yyyy-yyyy'); ?></h3>
                    <?php } ?> 
                    <?php if(get_sub_field('sub-description')) { ?>
                        <p><?php the_sub_field('sub-description'); ?></p>
                    <?php } ?> 
                </div>
                <div class="timeline-slider">  
                    <?php if(have_rows('add_year')) { ?>
                        <ul class="year-desc-listing" id="child-<?php echo $random;?>">
                            <?php while(have_rows('add_year')) { the_row();?>
                                <li>
                                    <div class="year-desc-card">
                                        <?php if(get_sub_field('year')) { ?>
                                            <?php $date = get_sub_field('year');
                                            $date2 = date("Y", strtotime($date)); ?>
                                            <h4 class="year d-none d-lg-block">  <?php echo $date2; ?></h4>
                                        <?php } ?> 
                                        <?php if(get_sub_field('description')) { ?>
                                            <p><?php the_sub_field('description'); ?></p>
                                        <?php } ?>                                  
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                        <ul class="year-listing" id="parent-<?php echo $random;?>" data-key="<?php echo $random;?>">
                            <?php while(have_rows('add_year')) { the_row();?>
                                <li>
                                    <?php if(get_sub_field('year')) { ?>   
                                        <div class="year-card">
                                        <?php $date = get_sub_field('year');
                                        $date2 = date("Y", strtotime($date)); ?>
                                            <P><?php echo $date2; ?></p>
                                        </div>
                                    <?php } ?> 
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="timeline-dots" id="dots-<?php echo $random;?>" data-key="<?php echo $random;?>"></div>
                <div class="timeline-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/html/app/assets/img/timeline-back.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>