<section class="inline-cta-sec" id="<?php echo md5(get_sub_field('anchor_id')); ?>">
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto">
              <div class="inline-cta">
                <div class="cta-img">
                  <img src="<?php the_sub_field('image');?>" alt="">
                </div>
                <div class="cta-description">
                       <?php if(get_sub_field('heading')) { ?>   
                           <h2><?php the_sub_field('heading'); ?></h2>
                        <?php } ?>
                       <?php if(get_sub_field('cta')){ ?>    
                         <?php common_link(get_sub_field('cta'), 'btn-secondary'); ?>
                       <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
</section>