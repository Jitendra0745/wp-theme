<?php $random = substr(md5(mt_rand()), 0, 7);?>
<section class="sucess-story-comp" id="<?php echo md5(get_sub_field('anchor_id')); ?>">
    <div class="container">
        <div class="row">
                <div class="col-md-8">
                    <?php if(get_sub_field('component_eyebrow_text')) { ?>
                        <div class="eyebrow-txt">
                            <span><?php the_sub_field('component_eyebrow_text');?></span>
                        </div>
                    <?php } ?>
                    <?php if(get_sub_field('component_heading')) { ?>
                        <h2><?php the_sub_field('component_heading');?></h2>
                    <?php } ?>  
                    <?php if(have_rows('add_success_story')) { ?>
                        <ul class="sucess-story-listing" id="parent-<?php echo $random;?>" data-key="<?php echo $random;?>" dir="rtl">
                            <?php while(have_rows('add_success_story')) { the_row(); ?>
                                <li dir="ltr">
                                    <div class="sucess-story-box">
                                        <div class="sucess-story-txt">
                                            <?php if(get_sub_field('heading')) { ?>
                                                <h3><?php the_sub_field('heading');?></h3>
                                            <?php } ?>
                                            <?php if(get_sub_field('description')) { ?>
                                                <?php the_sub_field('description');?>
                                            <?php } ?>
                                                <?php if(have_rows('add_stat')) { ?>
                                                    <ul class="sucess-story-stats">
                                                        <?php while(have_rows('add_stat')) { the_row(); ?>
                                                            <li>
                                                            <?php if(get_sub_field('stat')) { ?>
                                                                <h4 class="stats-num"><?php the_sub_field('stat');?></h4>
                                                            <?php } ?>
                                                                <?php if(get_sub_field('stat_description')) { ?>
                                                                    <p><?php the_sub_field('stat_description');?></p>
                                                                <?php  } ?>    
                                                            </li>
                                                        <?php } ?>    
                                                    </ul>
                                                <?php  } ?>
                                            <div class="cta-sec">
                                                <?php common_link(get_sub_field('cta_1'), 'btn-primary'); ?>
                                                <?php common_link(get_sub_field('cta_2'), 'btn-arrow'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
                <?php if(have_rows('add_success_story')) { ?>
                 <div class="col-md-4">
                    <ul class="sucess-story-listing-img" id="child-<?php echo $random;?>"  dir="rtl">
                        <?php while(have_rows('add_success_story')) { the_row(); ?>
                            <li>
                                <?php if(get_sub_field('image')) { ?>
                                    <div class="sucess-story-img">
                                        <img src="<?php the_sub_field('image'); ?>" alt="">
                                    </div>
                                <?php } ?>
                            </li>
                        <?php } ?>    
                    </ul>
                </div>
             <?php } ?>    
        </div>
    </div>
</section>