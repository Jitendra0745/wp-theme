<?php if (get_row_layout() == '50_50_component') {?>
    <section class="fifty-fifty-sec <?php echo (get_sub_field('background_color')) == 'plum' ? 'dark-bg' : ''?>"id="<?php echo md5(get_sub_field('anchor_id')); ?>" >
        <div class="container">
            <ul class="fifty-fifty-head">
                <li class="row ff-card dark-bg <?php echo (get_sub_field('image_position')) == 'right' ? '' : 'disc-left'?>">
                    <div class="col-md-6 ">
                        <div class="ff-media">
                            <?php if(get_sub_field('media') == 'image') { ?> 
                              <img src="<?php the_sub_field('image');?>" alt="">
                            <?php } elseif(get_sub_field('media') == 'video') { ?> 
                              <div class="ff-video">
                                <a href="<?php the_sub_field('video'); ?>" class="play-btn" data-lity></a>
                                <a href="<?php the_sub_field('video'); ?>"class="video-link-img" data-lity>
                                  <img class="thumb-img" src="" alt="" />
                                </a>
                              </div>
                            <?php } ?> 
                          </div>   
                      </div>
                    <div class="col-md-6 ff-disc-head">
                       <div class="ff-cont">
                            <?php if (get_sub_field('heading')) { ?>
                              <h4><?php the_sub_field('heading'); ?></h4>
                            <?php } ?>
                            <?php if (get_sub_field('description')) { ?>
                              <?php the_sub_field('description'); ?>
                            <?php } ?>
                            <div class="ff-btn">
                                <?php common_link(get_sub_field('cta_1'),'btn-secondary'); ?>
                                <?php common_link(get_sub_field('cta_2'),'btn-arrow'); ?>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
<?php } ?>

