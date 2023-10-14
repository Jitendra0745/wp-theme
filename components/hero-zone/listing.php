<section class="basic-hero listing-hero">
  <div class="basic-hero-bg">
     <img src="<?php echo get_template_directory_uri(); ?>/html/app/assets/img/dna-green.png" alt="">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="basic-banner-disc">
          <?php if (function_exists('bcn_display_list')) { ?>
            <nav class="breadcrumbs" typeof="BreadcrumbList" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <?php bcn_display_list(); ?>
              </ol>
            </nav>
          <?php } ?>
          <?php if (get_field('hero_heading')) { ?>
              <h1><?php the_field('hero_heading'); ?></h1>
          <?php } ?>
          <?php if (get_field('hero_description')) { ?>
                    <p><?php the_field('hero_description'); ?></p>
            <?php } ?>
            <?php if (get_field('hero_cta')) { ?>
                <div class="basic-cta">
                    <?php common_link(get_field('hero_cta'), 'btn-secondary'); ?>
                </div>
            <?php } ?>
        </div>
      </div>
      <div class="col-md-6">
      <?php if (get_field('hero_image')) { ?>
        <div class="basic-hero-img">
          <img src="<?php the_field('hero_image'); ?>" alt="">
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>