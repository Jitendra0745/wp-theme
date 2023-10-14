<section class="two-column-wysiwyg" id="link5-<?php echo md5(get_sub_field('anchor_id')); ?>">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
        <div class="wysiwyg-sec listing">
          <?php if (get_sub_field('left_column_content')) { ?>
             <?php the_sub_field('left_column_content'); ?>
          <?php } ?>
         </div>
        </div>
        <div class="col-md-7">
          <div class="wysiwyg-sec listing">
          <?php if (get_sub_field('right_column_content')) { ?>
            <?php the_sub_field('right_column_content'); ?>
         <?php } ?>
          </div>
        </div>
      </div>
    </div>
</section>
