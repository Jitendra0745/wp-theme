<section class="wysiwag-sec listing" id="<?php echo md5(get_sub_field('anchor_id')); ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <?php if(get_sub_field('content')) {?>
              <?php the_sub_field('content'); ?>
        <?php }?>
      </div>
    </div>
  </div>
</section>
