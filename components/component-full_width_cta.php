<section class="fwc-sec" id="<?php echo md5(get_sub_field('anchor_id')); ?>">
    <div class="fwc-img">
        <img src="<?php echo get_template_directory_uri();?>/html/app/assets/img/fwc.png" alt="">
    </div>
    <div class="container">
        <div class="fwc-cont">
            <div class="section-title">
                <?php if(get_sub_field('heading')){ ?>    
                    <h2><?php the_sub_field('heading');?></h2>
                <?php  } ?>
                <?php if(get_sub_field('description')){ ?>    
                    <p><?php the_sub_field('description');?></p>
                <?php  } ?>
            </div>
            <?php if(get_sub_field('cta')){ ?>    
                <div class="fwc-cta">
                    <?php common_link(get_sub_field('cta'), 'btn-secondary'); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>