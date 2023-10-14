<section class="basic-hero success-story-hero">
      <div class="basic-hero-bg">
        <img src="<?php echo get_template_directory_uri();?>/html/app/assets/img/success-herobg.png" alt=""> 
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="basic-banner-disc">
                   <?php if (function_exists('bcn_display_list')) { ?>
                     <nav class="breadcrumbs aos-init aos-animate" typeof="BreadcrumbList" aria-label="breadcrumb">
                       <ol class="breadcrumb">
                            <?php bcn_display_list(); ?>
                       </ol>
                     </nav>
                   <?php } ?>
                    <?php if(get_field('hero_heading')) { ?>
                        <h1><?php the_field('hero_heading');?></h1>
                    <?php } ?>
                    <?php if(get_field('hero_description')) { ?>
                        <p><?php the_field('hero_description');?></p>
                    <?php } ?>
                <div class="basic-cta">
                      <?php common_link(get_field('hero_cta'), 'btn-primary btn-white');?>
                </div>
            </div>
          </div>
        </div>
      </div>
</section>
