<section id="<?php echo md5(get_sub_field('anchor_id')); ?>">
  <div class="two-expertise-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <?php if(get_sub_field('image')) { ?>
            <div class="expertise-promo-img">
              <img src="<?php the_sub_field('image');?>" alt="">
            </div>
          <?php } ?>
        </div>
        <div class="col-md-8">
          <div class="expertise-promo-disc">
            <?php if(get_sub_field('image')) { ?>
              <h3><?php the_sub_field('component_heading');?> </h3>
            <?php } ?>
            <?php if(have_rows('add_tab')) { ?>
            <div class="expertise-promo-tab">
              <ul class="nav nav-pills " id="pills-tab" role="tablist">
                <?php while(have_rows('add_tab')) { the_row();?>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link <?php echo (get_row_index() == 1) ? 'active' : ''; ?>" data-bs-toggle="pill" data-bs-target="#sft-<?php echo get_row_index(); ?>"><?php the_sub_field('tab_label');?></button>
                  </li>
                <?php } ?>
              </ul>
            </div>
            <?php } ?>
            <?php if(have_rows('add_tab')) { ?>
              <div class="tab-content" id="pills-tabContent">
              <?php while(have_rows('add_tab')) { the_row();?>
                <div class="tab-pane fade listing-check  <?php echo (get_row_index() == 1) ? ' show active' : ''; ?> " id="sft-<?php echo get_row_index(); ?>" tabindex="0">
                    <?php the_sub_field('tab_content'); ?>
                    <?php if(get_sub_field('tab_cta')) { ?>
                      <div class="ep-btn">
                        <?php common_link(get_sub_field('tab_cta'), 'btn-secondary'); ?>
                      </div>
                    <?php } ?>
                </div>
                <?php } ?>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>