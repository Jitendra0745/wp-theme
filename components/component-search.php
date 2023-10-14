<section class="search-results-sec">
   <?php
       global $wp_query;
       $total_results = $wp_query->found_posts;
       $the_query = new WP_Query($args);
       $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
       $str = max(1, $wp_query->query_vars['paged']);
       $totl = ceil($wp_query->found_posts / 9);
    ?>
      <div class="searchoption-head dark-bg">
        <div class="container">
          <form class="searchoption">
            <input type="search" name="s" placeholder="Search" value="<?php the_search_query(); ?>" />
            <i class="icon-search"></i>
            <input type="submit" />
          </form>
        </div>
      </div>
      <div class="container">
        <!-- <div class="search-num">
            <p class="total-search">36 Results for</p>
            <p class="search-value">COPY</p>
          </div> -->
        <ul class="search-results">
            <?php if (have_posts()) { ?>
                <?php while (have_posts()) { the_post(); ?>
                    <li class="search-card-head">
                        <div class="search-card">
                            <div class="search-card-disc">
                                <?php
                                    $terms = [];
                                    $terms = get_the_terms(get_the_ID(), 'resource_type');
                                    $term_names = wp_list_pluck($terms, 'name');
                                    if (!empty($term_names)) {
                                        echo '<span>' . implode(",", $term_names) . '</span>';
                                } ?>
                                <a href="<?php the_permalink(); ?>">
                                    <h5><?php the_title(); ?></h5>
                                </a>
                                <?php if (get_field('listing_description')) { ?>
                                    <p><?php the_field('listing_description'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            <?php } else { ?>
                <span><?php echo esc_html__('No results found', 'axle'); ?></span>
            <?php } ?>
        </ul>
        <?php if ($totl > 1) { ?>
          <div class="card-pagination">
               <?php
                   $big = 999999999; // need an unlikely integer
                   echo paginate_links(array(
                   'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                   'format' => '?paged=%#%',
                   'current' => max(1, get_query_var('paged')),
                   'total' => $the_query->max_num_pages
                   ));
                 ?>
          </div>
        <?php } ?>
      </div>
</section>