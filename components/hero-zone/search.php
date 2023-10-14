<section class="basic-hero search-hero">
      <div class="basic-hero-img">
        <img src="<?php echo get_template_directory_uri();?>/html/app/assets/img/hero.png" alt="" />
      </div>
      <div class="basic-hero-bg">
        <img src="<?php echo get_template_directory_uri();?>/html/app/assets/img/dna-green.png" alt="" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="basic-banner-disc">
                 <?php if(get_field('search_heading','option')); { ?>
                     <h1><?php the_field('search_heading','option');?></h1>
                 <?php } ?>
                 <?php if(get_field('search_description','option')); { ?>
                     <p><?php the_field('search_description','option');?></p>
                 <?php } ?>
            </div>
          </div>
        </div>
      </div>
</section>