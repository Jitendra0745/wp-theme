<section class="post-detail-hero">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <div class="r-type-n-date">
               <?php
                     $terms = [];
                     $terms = get_the_terms(get_the_ID(), 'resource_type');
                     $term_names = wp_list_pluck($terms, 'name');
                     if (!empty($term_names)) {
                         echo '<span class="r-type">' . implode(", ", $term_names) . ' </span>';
                     }
                ?>
                <?php if(get_field('date')); { ?>
                  <span class="date"><?php the_field('date')?></span>
                <?php } ?>
            </div>
             <?php if(get_field('hero_heading')); { ?>
                <h1><?php the_field('hero_heading');?></h1>
              <?php } ?> 
            <!-- <div class="author-name">by Author Name</div> -->
          </div>
        </div>
        <div class="social-icons-head">
            <div class="social-container">
              <div class="social-icons-wrapper">
                <div class="social-links">
                  <ul class="social-icons">
                    <li>
                      <a href="javascript:void(0)"> <i class="icon-fb"></i> </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">
                        <i class="icon-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">
                        <i class="icon-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">
                        <i class="icon-upload"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <a
                  class="link-share"
                  href="javascript:void(0)"
                  aria-label="share links"
                >
                  <i class="icon-share"></i
                ></a>
              </div>
            </div>
        </div>
      </div>
      <div class="custom-container">
        <div class="featured-img">
        <?php if(get_field('hero_image')) { ?>
            <div class="left-animated-sec">
              <img src="<?php echo get_template_directory_uri();?>/html/app/assets/img/detail-img.png" alt="" />
            </div>
            <div class="featured-img-sec">
              <img src="<?php the_field('hero_image');?>" alt="" />
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <div class="blockquote">
               <?php if(get_field('event_date')); { ?>
                  <h4><?php the_field('event_date');?></h4>
               <?php } ?>
                <?php if(get_field('event_time')); { ?>
                  <h4><?php the_field('event_time');?></h4>
                <?php } ?>
                <?php if(get_field('event_location')) { ?>
                   <p>
                     Location:
                   </p>
                       <h4><?php the_field('event_location');?></h4>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
</section>