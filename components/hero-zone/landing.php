<section class="basic-hero">
    <?php if (get_field('hero_image')) { ?>
        <div class="basic-hero-img">
            <img src="<?php the_field('hero_image'); ?>" alt="">
        </div>
        <div class="basic-hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/html/app/assets/img/dna-green.png" alt="">
        </div>
    <?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <div class="basic-banner-disc">
                <?php if (function_exists('bcn_display_list')) { ?>
                    <nav class="breadcrumbs aos-init aos-animate" typeof="BreadcrumbList" aria-label="breadcrumb">
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
                <?php if (get_field('cta')) { ?>
                    <div class="basic-cta">
                        <?php common_link(get_field('cta'), 'btn-secondary'); ?>
                    </div>
                <?php } ?>
            </div>
            </div>
        </div>
    </div>
</section>
<?php if (get_field('anchor_menu')) { ?>
  <?php if (have_rows('components')) { ?>
    <div class="component-label">
      <div class="container">
        <div class="component-link-warpper">
          <ul class="component-label-links-sec">
            <?php while (have_rows('components')) {
              the_row(); ?>
              <?php if (get_sub_field('anchor_id')) { ?>
                <li class="component-label-link <?php echo get_row_index() == 1 ? 'active' : ''; ?>">
                  <a href="#<?php echo md5(get_sub_field('anchor_id')); ?>"><?php the_sub_field('anchor_id'); ?></a>
                </li>
              <?php } ?>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  <?php } ?>
<?php } ?>