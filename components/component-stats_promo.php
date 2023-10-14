<section class="stats-sec" id="test2-<?php echo md5(get_sub_field('anchor_id')); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title">
                <?php if(get_sub_field('component_heading')) { ?>   
                    <h2><?php the_sub_field('component_heading'); ?></h2>
                <?php } ?>    
                    <img src="<?php echo get_template_directory_uri();?>/html/app/assets/img/color-shape.png" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <?php if(have_rows('add_stat')) { ?>
                    <ul class="stats-card-head">
                        <?php while(have_rows('add_stat')) { the_row();?>
                            <li>
                                <div class="stats-card">
                                    <?php if(get_sub_field('statistic')) { ?>   
                                    <h3>                                    
                                        <span class="counter" data-to-number="200"><?php the_sub_field('statistic'); ?></span> <span><?php the_sub_field('statistic_suffix'); ?></span>
                                    </h3>
                                    <?php } ?>
                                    <?php if(get_sub_field('description')) { ?>   
                                        <p><?php the_sub_field('description'); ?></p>
                                    <?php } ?>
                                </div>
                            </li>
                        <?php } ?>    
                    </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</section>