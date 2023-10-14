<section class="rc-sec" id="<?php echo md5(get_sub_field('anchor_id')); ?>">
    <div class="container">
        <div class="section-title">
        <?php if(get_sub_field('heading')) { ?>    
            <h2><?php the_sub_field('heading');?></h2>
        <?php  } ?>    
        <?php if(get_sub_field('cta')) { ?>    
            <?php common_link(get_sub_field('cta'), 'btn-arrow'); ?>
        <?php } ?>
        </div>
        <?php
        $args = array(
            'post_type' => array('post','people','customer_success_s','news','event','testimonial','publication'),
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'order' => 'DESC',
        );
        if (get_sub_field('select_posts') == 'manually') {
            $args['post__in'] = get_sub_field('select_post_manually');
        } else {
            if (get_sub_field('select_post_dynamically') == 'resource_type') {
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'resource_type',
                        'field'    => 'term_id',
                        'terms'    => get_sub_field('resource_type'),
                    )
                );
            } elseif (get_sub_field('select_post_dynamically') == 'tag') {
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'post_type_tag',
                        'field'    => 'term_id',
                        'terms'    => get_sub_field('tag'),
                    )
                );
            } else  {
                if (get_sub_field('select_post_dynamically') == 'by_cpt') {
                    $asset_types_filter = empty(get_sub_field('select_post_by_cpt')) ? ['post','people','customer_success_s','news','event','testimonial','publication'] : get_sub_field('select_post_by_cpt');                
                        $args = array(
                          'post_type' => $asset_types_filter,
                          'post_status' => 'publish',
                          'posts_per_page' => -1,
                          'order' => 'DESC',
                        );
                      }     
            }
        }
        $loop = new WP_Query($args); ?>
        <div class="related-resource-list-cont">
            <?php if ($loop->have_posts()) { ?>            
                <ul class="rc-card-head rc-slider">
                    <?php while ($loop->have_posts()) { $loop->the_post(); ?>
                        <li>
                            <div class="rc-card">
                                <a href="<?php the_permalink();?>" class="invisible-anchor" ></a>
                                    <?php if (has_post_thumbnail()) { ?>  
                                        <div class="rc-card-img">     
                                            <?php the_post_thumbnail();?>
                                        </div>
                                    <?php } else { ?>
                                        <div class="rc-card-img">     
                                            <img src="<?php the_field('image');?>" alt="" />
                                        </div>
                                    <?php } ?>    
                                <div class="rc-card-desc">
                                    <?php
                                    $terms = [];
                                    $terms = get_the_terms(get_the_ID(), 'resource_type');
                                    $term_names = wp_list_pluck($terms, 'name');
                                    if (!empty($term_names)) {
                                        echo '<span class="eyebrow-text">' . implode(", ", $term_names) . ' </span>';
                                    }
                                    ?>
                                    <h3><?php the_title();?></h3>
                                </div>
                            </div>
                        </li>
                    <?php } ?>    
                </ul>
            <?php } ?>  
            <?php 
            // Reset the global post object so that the rest of the page works correctly.
      wp_reset_postdata(); ?>  
        </div>
    </div>
</section>