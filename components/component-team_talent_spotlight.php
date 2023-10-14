<section class="team-talent-block" id="<?php echo md5(get_sub_field('anchor_id')); ?>">
    <div class="container">
        <?php if(get_sub_field('component_heading') || get_sub_field('component_description')) { ?>
            <div class="section-title">
                <?php  if(get_sub_field('component_heading')) { ?>
                    <h2><?php the_sub_field('component_heading');?></h2>
                <?php } ?>
                <?php  if(get_sub_field('component_description')) { ?>
                    <p><?php the_sub_field('component_description');?></p>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <div class="team-list-sec">
        <?php
        $featured_posts = get_sub_field('add_people');
        if( $featured_posts ): ?>
            <ul class="team-list">
                <?php foreach( $featured_posts as $post ): 
                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>
                    <li>
                        <div class="team-card">
                            <?php if(get_field('image') || get_field('name')) { ?>
                                <div class="team-image">
                                    <?php if(get_field('image')) { ?>
                                        <img src="<?php the_field('image');?>" alt="">
                                    <?php  } ?>
                                    <?php if(get_field('name')) { ?>
                                        <h3 class="name"><?php the_field('name');?></h3>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <div class="team-desc-wrap">
                                <div class="team-desc">
                                    <div class="cross-btn">
                                        <i class="i-cross"></i>
                                    </div>
                                    <?php if(get_field('name')) { ?>
                                        <h3 class="name"><?php the_field('name');?></h3>
                                    <?php } ?>
                                    <?php if(get_field('position')) { ?>
                                        <span class="designation"><?php the_field('position');?></span>
                                    <?php } ?>
                                    <?php if(get_field('description')) { ?>
                                        <p><?php the_field('description');?></p>
                                    <?php } ?>
                                    <?php if(get_field('social_link')) { ?>
                                        <?php common_link(get_field('social_link'), 'btn-secondary'); ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
         <?php endif; ?>
    </div>
</section>