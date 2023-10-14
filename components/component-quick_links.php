<section class="multi-column-sec" id="<?php echo md5(get_sub_field('anchor_id')); ?>">
    <div class="container">
        <?php if(get_sub_field('component_heading')) { ?>
            <div class="section-title">
                <h2><?php the_sub_field('component_heading');?></h2>
            </div>
        <?php } ?>
        <?php if(have_rows('add_card')) { ?>
            <ul class="multi-column-card-head">
                <?php while(have_rows('add_card')) { the_row(); ?>
                    <li>
                    <?php 
                        $link = get_sub_field('cta');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            ?>
                            <a class="invisible-anchor" href="<?php echo esc_url( $link_url ); ?>" area-label="<?php echo $link_title ?>"></a>
                        <?php endif; ?>
                        <div class="multi-column-card">
                            <div class="multi-column-card-disc">
                                <?php if(get_sub_field('card_heading')) { ?>
                                    <h3><?php the_sub_field('card_heading');?></h3>
                                <?php } ?>
                                <?php if(get_sub_field('card_description')) { ?>
                                    <p><?php the_sub_field('card_description');?></p>
                                <?php } ?>
                                <?php if(get_sub_field('cta')) { ?>
                                    <?php common_link(get_sub_field('cta'), 'btn-arrow dark'); ?>
                                <?php } ?>
                            </div>
                            <div class="multi-column-card-bg-img">
                            <img src="<?php echo get_template_directory_uri();?>/html/app/assets/img/multi-bg.png" alt="">
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</section>
