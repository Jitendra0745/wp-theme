<?php if (get_row_layout() == 'leadership_grid') {?>
  <section class="leadership-listing" id="<?php echo md5(get_sub_field('anchor_id')); ?>">
      <div class="container">
        <?php if (get_sub_field('component_heading')); { ?>
          <div class="section-title">
            <h2><?php the_sub_field('component_heading'); ?></h2>
          </div>
        <?php } ?>
              <?php $featured_posts = get_sub_field('add_people');
                if ($featured_posts) { ?>
                    <ul class="row">
                        <?php foreach( $featured_posts as $post ) {  setup_postdata($post);?>
                          <li class="col-md-6 col-lg-3">
                            <div class="leadership-card">
                                <a href="javascript:void(0)" class="invisible-anchor plus-icon" data-bs-toggle="modal"
                                  data-bs-target="#leaderdetailModal" data-target_id="ld-<?php the_ID();?>" aria-label="modal-open">
                                </a>
                                <?php if(get_field('image')) { ?>
                                  <div class="leader-img-box">
                                    <img src="<?php the_field('image'); ?>" alt="" />
                                  </div>
                                <?php } ?>
                                <?php if(get_field('name') || get_field('social_link') || get_field('position')) { ?>
                                  <div class="leader-desc">
                                  <?php if(get_field('name')) { ?>
                                    <h3>
                                      <?php the_field('name') ?>
                                      <a href="<?php the_field('social_link'); ?>" aria-label="linkedin" target="_blank"><i class="icon-linkedin" data-url="linkedin"></i></a>
                                    </h3>
                                  <?php } ?>  
                                  <?php if(get_field('position')) { ?>
                                    <p><?php the_field('position'); ?></p>
                                  <?php } ?>
                                  </div>
                                <?php } ?>
                              </div>
                          </li>
                      <?php }  wp_reset_postdata(); ?>
                    </ul>
                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="leaderdetailModal">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="leader-popup-box " role="document">
                              <div class="popup-btns">
                                <a href="javascript:void(0)" class="side-round-btn-left"></a>
                                <a href="javascript:void(0)" class="side-round-btn-right"></a>
                                <a type="button" class="cross" data-bs-dismiss="modal" aria-label="Close"></a>
                              </div>
                              <ul class="leadership-slider">
                              <?php foreach( $featured_posts as $post ) { setup_postdata($post);?>
                                <li class="leadership-card-sec" id="ld-<?php the_ID();?>">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="leader-img-box">
                                          <img src="<?php the_field('image'); ?>" alt="">
                                      </div>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="leader-desc-box">
                                        <div class="leader-desc-head">
                                          <?php if(get_field('name')) { ?>
                                            <h3 class="name">
                                              <?php the_field('name'); ?>
                                                <?php if(get_field('social_link')) { ?>
                                                    <a href="<?php the_field('social_link'); ?>" target="_blank"><i class="icon-linkedin"></i></a>
                                                <?php } ?>
                                            </h3>
                                          <?php } ?>
                                          <?php if(get_field('position') || get_field('social_link')) { ?>
                                            <?php if(get_field('position')) { ?>
                                              <p>
                                                <?php if(get_field('social_link')) { ?>
                                                  <a href="<?php the_field('social_link'); ?>" target="_blank"><i class="icon-linkedin"></i></a>
                                                <?php } ?>
                                                <?php the_field('position'); ?>
                                              </p>
                                            <?php } ?>
                                          <?php } ?>
                                        </div>
                                        <?php if(get_field('description')) { ?>
                                          <div class="leader-desc">
                                            <p><?php the_field('description'); ?></p>
                                          </div>
                                        <?php } ?>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                          <?php } ?>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                <?php } wp_reset_postdata();?>

         <!-- <ul class="card-pagination">
         </ul> -->
    </div>
  </section>
<?php  } ?>
