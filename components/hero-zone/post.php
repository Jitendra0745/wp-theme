<section class="post-detail-hero">
    <div class="container">
      <div class="row <?php  echo (get_field('gated')) ? 'd-none' : ''; ?>">
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
            <?php if(get_field('date')) { ?>
              <span class="date"><?php the_field('date'); ?></span>
            <?php } ?>
          </div>
          <?php if(get_field('hero_heading'))  { ?>
            <h1><?php the_field('hero_heading'); ?></h1>
          <?php } ?>
          <?php if(get_field('author'))  { ?>
            <div class="author-name"><?php the_field('author'); ?></div> 
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="custom-container <?php echo (get_field('gated')) ? 'd-none' : ''; ?>">
      <?php if(get_field('hero_image')) { ?>  
        <div class="featured-img">
          <div class="left-animated-sec">
            <img src="<?php echo get_template_directory_uri();?>/html/app/assets/img/detail-img.png" alt="" />
          </div>
          <div class="featured-img-sec">
              <img src="<?php the_field('hero_image');?>" alt="" />
          </div>
        </div>
      <?php } ?>
    </div>
    <!-- <div class="custom-container <?php echo (get_field('gated')) ? '' : 'd-none'; ?>">
      <div class="featured-img publication-hero">
        <div class="left-animated-sec">

          <a href="javacript:void(0)" class="btn-secondary" download="">
            Download PDF</a>
        </div>
        <div class="featured-img-sec publication-hero-img">
          <img src="<?php echo get_template_directory_uri();?>/html/app/assets/img/pulication-banner.png" alt="" />
        </div>
      </div>
    </div> -->
  </section>


