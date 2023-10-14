<?php $random = substr(md5(mt_rand()), 0, 7);?>
<section class="testimonial-sec" id="<?php echo md5(get_sub_field('anchor_id')); ?>">
    <div class="testimonial-sec-wrapper">
      <div class="container position-relative btn-sec">
          <div class="slider-btns feature-job-btn custom-silder-btn">
              <button class="slider-btns-prev-<?php echo $random;?> slick-prev" aria-label="prev"></button>
              <button class="slider-btns-next-<?php echo $random;?> slick-next" aria-label="next"></button>
          </div> 
      </div>
      <?php $testimonial = get_sub_field('select_testimonial');?>
        <?php if($testimonial) { ?>
            <ul class="testimonial-box-list" >         
                  <li>
                    <div class="testimonial-box-wrapper">
                      <div class="container">
                        <div class="testimonial-box">
                            <div class="testimonial-text">
                              <ul class="testimonial-txt-listing" data-key="<?php echo $random;?>" id="parent-<?php echo $random;?>" dir="rtl">
                                <?php foreach($testimonial as $post) { ?>
                                    <?php setup_postdata($post); ?>
                                    <li dir="ltr">
                                      <?php if(get_sub_field('component_heading')) { ?>    
                                        <h2><?php the_sub_field('component_heading');?></h2>
                                      <?php } ?>  
                                      <?php if(get_field('quote')) { ?>    
                                        <p class="desc"><?php the_field('quote');?></p>
                                      <?php } ?>  
                                      <?php if(get_field('quote') || get_field('title_company')) { ?>    
                                        <div class="testimonial-bottom">
                                          <?php if(get_field('name')) { ?>    
                                            <p class="name"><?php the_field('name');?></p>
                                          <?php  } ?>  
                                            <?php if(get_field('title_company')) { ?>    
                                            <p class="company"><?php the_field('title_company');?></p>
                                            <?php } ?>
                                        </div>
                                      <?php } ?>
                                    </li>
                                <?php } ?>
                              </ul>
                              <img src="<?php echo get_template_directory_uri();?>/html/app/assets/img/testimonial-bg.png" alt="" class="testimonial-bg" />
                            </div>
                            <div class="testimonial-img">
                              <ul class="testimonial-img-listing" id="child-<?php echo $random;?>" dir="rtl">
                                  <?php foreach($testimonial as $post) { ?>
                                  <?php setup_postdata($post); ?>
                                      <li dir="ltr">
                                        <?php if(get_field('image')) { ?>    
                                          <img src="<?php the_field('image');?>" alt="" />
                                        <?php } ?>
                                      </li>
                                  <?php } ?>
                                </ul>
                              </div>
                          </div>
                      </div>
                    </div>
                  </li>
            </ul>
        <?php } ?>
        <?php 
            // Reset the global post object so that the rest of the page works correctly.
      wp_reset_postdata(); ?>
      <div class="container position-relative tesimonial-dots-sec">
        <div class="tesimonial-dots" id="dots-<?php echo $random;?>" data-key="<?php echo $random;?>"></div>
      <div class="container">
    </div>
</section>
