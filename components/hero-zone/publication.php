<section class="post-detail-hero publication-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="r-type-n-date">
                <span class="r-type"><?php echo get_post_type_object(get_post_type())->labels->singular_name; ?></span>
                <?php if(get_field('date')) { ?>
                    <span class="date"><?php the_field('date'); ?></span>
                <?php } ?>
                </div>
                <?php if(get_field('hero_heading')) { ?>
                    <h1><?php the_field('hero_heading');?></h1>
                <?php } ?>
                <?php if(get_field('author')) { ?>
                    <div class="author-name"><?php the_field('author');?></div>
                <?php } ?>
            </div>
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
    <div class="custom-container">
        <div class="featured-img publication-hero">
            <div class="left-animated-sec">
                <!-- <img src="assets/img/detail-img.png" alt="" /> -->
                <?php 
                    $link = get_field('download_cta');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn-secondary" download="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
            </div>
            <!-- <div class="featured-img-sec">
                <img src="assets/img/testimonial-img.png" alt="" />
            </div> -->
            <div class="featured-img-sec publication-hero-img">
                <img src="<?php echo get_template_directory_uri();?>/html/app/assets/img/pulication-banner.png" alt="" />
            </div>
        </div>
    </div>
</section>