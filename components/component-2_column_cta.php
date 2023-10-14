<section class="two-column-cta-section "id="<?php echo md5(get_sub_field('anchor_id')); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="two-column-left-discreption">
                    <div class="section-title">
                        <?php if(get_sub_field('left_heading')) { ?>
                            <h2><?php the_sub_field('left_heading');?></h2>
                        <?php } ?>
                        <?php if(get_sub_field('left_description')) { ?>
                            <p><?php the_sub_field('left_description');?></p>
                        <?php  }?>
                        <?php if(get_sub_field('left_cta')) { ?>
                            <div class="two-column-ctas aos-init">
                                <?php common_link(get_sub_field('left_cta'), 'btn-primary'); ?>
                            </div>
                        <?php } ?>    
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="two-column-right-discreption">
                    <div class="section-title">
                    <?php if(get_sub_field('right_heading')) { ?>
                        <h2><?php the_sub_field('right_heading');?></h2>
                    <?php } ?>
                    <?php if(get_sub_field('right_description')) { ?>
                        <p><?php the_sub_field('right_description');?></p>
                    <?php } ?>
                    <?php if(get_sub_field('right_cta')) { ?>
                        <div class="two-column-ctas aos-init">
                            <?php common_link(get_sub_field('right_cta'), 'btn-secondary'); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>