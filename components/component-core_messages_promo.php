<?php $random = substr(md5(mt_rand()), 0, 7);?>
<section class="core-msg-sec" id="<?php echo md5(get_sub_field('anchor_id')); ?>">
    <div class="container">
      <div class="row">
        <div class="col-md-6 core-animation-sec">
          <div class="core-msg-animation-sec">
            <ul class="core-animation-listing" id="corechild-<?php echo $random;?>">
              <li>
                <div class="animation-sec">
                  <img src="<?php echo get_template_directory_uri();?>/html/app/assets/img/core-msg.png" alt="">
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 ms-auto">
          <div class="core-msg-wrap">
            <?php if(have_rows('add_core_message')); { ?>
                <ul class="core-msg-text-listing" data-key="<?php echo $random;?>" id="coreparent-<?php echo $random;?>">
                    <?php while(have_rows('add_core_message')) { the_row();?>
                      <li><?php the_sub_field('core_message');?></li>
                    <?php } ?>
                </ul>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
</section>