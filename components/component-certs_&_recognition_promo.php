<section class="partner-logo" id="<?php echo md5(get_sub_field('anchor_id')); ?>">
    <div class="container">
        <div class="row">
            <?php if(get_sub_field('component_heading')) { ?>
                <div class="section-title">
                    <h2><?php the_sub_field('component_heading');?></h2>
                </div>
            <?php } ?>
        </div>
        <div class="slider-sec">
            <?php if(have_rows('add_image')) { ?>
                <ul class="logo-slider">
                    <?php while(have_rows('add_image')) { the_row(); ?>
                        <li>
                            <?php if(get_sub_field('image')) { ?>
                                <a href="javascript:void(0)">
                                    <img src="<?php the_sub_field('image');?>" alt="" />
                                </a>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
    </div>
</section>