<section class="image-gallery" id="<?php echo md5(get_sub_field('anchor_id')); ?>">
      <div class="container">
            <?php if( get_sub_field('component_heading')) { ?>  
                <div class="section-title">
                    <h2><?php the_sub_field('component_heading');?></h2>
                </div>
            <?php } ?>
        <div class="gallery-listing-sec">
            <?php if(have_rows('add_image')) { ?>
                <ul class="gallery-listing">
                    <?php while(have_rows('add_image')) { the_row();?>
                        <li>
                            <div class="image-card">
                                <?php if(get_sub_field('image')) { ?>
                                    <div class="gallery-img">
                                        <img src="<?php the_sub_field('image');?>" alt="">
                                    </div>
                                <?php } ?>    
                                <?php if( get_sub_field('image_caption')) { ?>  
                                    <div class="gallery-desc">
                                        <?php the_sub_field('image_caption');?>
                                    </div>
                                <?php } ?>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
      </div>
    </section>