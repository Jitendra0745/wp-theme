<section class="hero">
      <div class="hero-bg">
        <img src="<?php echo get_template_directory_uri();?>/html/app/assets/img/dna-hero1.png" alt="">
      </div>
      <div class="hero-bg-circle">
        <img src="<?php echo get_template_directory_uri();?>/html/app/assets/img/bg-circle.png" alt="">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <?php if(get_field('hero_image')) { ?>
                <div class="hero-banner-img">
                <img src="<?php the_field('hero_image');?>" alt="">
                </div>
            <?php } ?>
          </div>
          <div class="col-md-8">
            <div class="hero-disc">
            <?php if(get_field('hero_heading')) { ?>
              <h1><?php the_field('hero_heading');?></h1>
            <?php } ?>  
            <?php if(get_field('hero_description')) { ?>
              <p><?php the_field('hero_description');?></p>
            <?php } ?>  
            <?php if(get_field('cta')) { ?>
              <div class="hero-btn">
                <?php common_link(get_field('cta'), 'btn-secondary'); ?>
              </div>
            <?php } ?>  
            </div>
          </div>
          <!-- <div class="col-md-6 ms-md-auto">
            <div class="hero-img">
              <img src="assets/img/hero.png" alt="">
            </div>
          </div> -->
        </div>
      </div>
    </section>