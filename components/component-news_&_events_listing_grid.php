<?php
$resource_types_get = isset($_GET['resource_types']) && !empty(array_filter($_GET['resource_types'])) ? $_GET['resource_types'] : [];
$post_tag_get = isset($_GET['post_tag']) && !empty(array_filter($_GET['post_tag'])) ? $_GET['post_tag'] : [];
$keyword_get = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$order_by_get = isset($_GET['order_by']) ? $_GET['order_by'] : 'ASC';
$news_event = isset($_GET['choice']) ? $_GET['choice'] : 'news_&_event';
$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
$resource_types = get_terms(array('taxonomy' => 'resource_type', 'include' => get_sub_field('pre_filter_by_resource_type')));
$post_tags = get_terms(array('taxonomy' => 'post_type_tag', 'include' => get_sub_field('pre_filter_by_tag')));

if(($news_event) == 'news_&_event')  { 
$args = [
  'post_type' => array('event','news'),
  'posts_per_page' => 12,
  'paged' => $paged,
  'order' => $order_by_get,
]; 
} elseif($_GET['choice'] == 'news') { 
  $args = [
    'post_type' => array('news'),
    'posts_per_page' => 12,
    'paged' => $paged,
    'order' => $order_by_get,
  ]; 
} elseif($_GET['choice'] == 'event') {
  $args = [
    'post_type' => array('event'),
    'posts_per_page' => 12,
    'paged' => $paged,
    'order' => $order_by_get,
  ]; 
}
if (!empty($keyword_get)) {
  $args['s'] = $keyword_get;
}
if (!empty($resource_types_get)) {
  $tax_query[] = [
    'taxonomy' => 'resource_type',
    'terms' => $resource_types_get,
    'field' => 'slug',
    'operator' => 'IN',

  ];
} else {
    if (get_sub_field('pre_filter_by_resource_type')) {
      $tax_query[] = [
        'taxonomy' => 'resource_type',
        'terms'    => get_sub_field('pre_filter_by_resource_type'),
        'field' => 'term_id',
        'operator' => 'IN',
  
      ];
    }
  }
if (!empty($post_tag_get)) {
  $tax_query[] = [
    'taxonomy' => 'post_type_tag',
    'terms' => $post_tag_get,
    'field' => 'slug',
    'operator' => 'IN'
  ];
} else {
    if (get_sub_field('pre_filter_by_tag')) {
      $tax_query[] = [
        'taxonomy' => 'post_type_tag',
        'terms'    => get_sub_field('pre_filter_by_tag'),
        'field' => 'term_id',
        'operator' => 'IN',
      ];
    }
  }
if (!empty($tax_query)) {
  $args['tax_query'] = $tax_query;
}
$the_query = new WP_Query($args);
$start = $the_query->query_vars['posts_per_page'] * ($paged - 1) + 1;
$end = $start + $the_query->post_count - 1;
$total = $the_query->found_posts;
$str = $the_query->query_vars['paged'];
$totl = ceil($the_query->found_posts /12);
?>
<section class="listing-sec py-120 " id="filter-listing">
  <div class="filter-sec dark-bg">
    <div class="container">
      <form>
        <div class="filter-tab-head">
          <div class="tab-filter">
            <div class="filter-header">
              <?php if (get_sub_field('show_resource_type_filter') || get_sub_field('show_tags_filter')) {  ?>
                <h5 class="filter-by"> <?php echo esc_html__('Filter by:', 'axle'); ?> </h5>
              <?php } ?>
              <div class="filter-reset mob-reset">
                <?php if (!empty($resource_types_get) ||  !empty($post_tag_get) || !empty($keyword_get)) { ?>
                  <a href="<?php echo get_permalink(); ?>"><?php echo esc_html__('Reset Filter', 'axle'); ?> </a>
                <?php } ?>
              </div>
            </div>
            <div class="filter-head">
              <?php if (get_sub_field('show_resource_type_filter')) {  ?>
                <div class="form-group form-select">
                  <div class="filter-dropdown">
                    <p tabindex="0"> <?php echo esc_html__('Resource Type', 'axle'); ?></p>
                    <ul class="filter-dropdown-list">
                      <?php foreach ($resource_types as $resource_type) { ?>
                        <li>
                          <label value="<?php echo $resource_type->slug; ?>" class="has-value">
                            <input type="checkbox" class="remove-asset" tabindex="0" id="<?php echo $resource_type->slug; ?>" name="resource_types[]" value="<?php echo $resource_type->slug; ?>" onclick="this.form.submit();" <?php echo in_array($resource_type->slug, $resource_types_get) ? 'checked' : ''; ?> /><?php echo $resource_type->name; ?></label>
                        </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
              <?php } ?>  
              <?php if (get_sub_field('show_tags_filter')) {  ?>
                <div class="form-group form-select">
                  <div class="filter-dropdown">
                    <p tabindex="0"><?php echo esc_html__('Solutions Areas', 'axle'); ?></p>
                    <ul class="filter-dropdown-list">
                      <?php foreach ($post_tags as $post_tag) { ?>
                        <li>
                          <label value="<?php echo $post_tag->slug; ?>" class="has-value">
                            <input type="checkbox" class="remove-post-tag" tabindex="0" id="<?php echo $post_tag->slug; ?>" name="post_tag[]" value="<?php echo $post_tag->slug; ?>" onclick="this.form.submit();" <?php echo in_array($post_tag->slug, $post_tag_get) ? 'checked' : ''; ?> /><?php echo $post_tag->name; ?></label>
                        </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
              <?php } ?>
              <div class="form-group input-search">
                <input type="search" class="form-control" placeholder="Search" name="keyword" value="<?php echo $keyword_get; ?>" tabindex="0">
                <i class="icon-search"></i>
              </div>
              <?php if (!empty($resource_types_get) ||  !empty($post_tag_get) || !empty($keyword_get)) { ?>
                <div class="filter-reset">
                  <a href="<?php echo get_permalink(); ?>"><?php echo esc_html__('Reset Filter', 'axle'); ?> </a>
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="filteroption">
            <ul>
              <?php foreach ($resource_types as $key => $value) { ?>
                <?php if (in_array($value->slug, $resource_types_get)) { ?>
                  <li data-slug="<?php echo $value->slug ?>" class="remove-asset"><i class="icon-cross"></i>
                    <p><?php echo $value->name; ?></p>
                  </li>
                <?php } ?>
              <?php } ?>
              <?php foreach ($post_tags as $key => $value) { ?>
                <?php if (in_array($value->slug, $post_tag_get)) { ?>
                  <li data-slug="<?php echo $value->slug ?>" class="remove-post-tag"><i class="icon-cross"></i>
                    <p><?php echo $value->name ?></p>
                  </li>
                <?php } ?>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="custom-tabs listing-tab-cards">
          <div class="row m-0">
              <div class="recent-select">
                <select class="form-control" name="choice" onchange="this.form.submit()">
                  <option  <?php echo $news_event == 'news_&_event' ? 'selected' : ''; ?> value="news_&_event">News & Event</option>
                  <option  <?php echo $news_event == 'news' ? 'selected' : ''; ?> value="news">News</option>
                  <option  <?php echo $news_event == 'event' ? 'selected' : ''; ?> value="event">Event</option>
                </select>
              </div>
              <div class="recent-select">
                <select class="form-control" name="order_by" onchange="this.form.submit()">
                  <option <?php echo $order_by_get == 'DESC' ? 'selected' : ''; ?> value="DESC">Most Recent</option>
                  <option <?php echo $order_by_get == 'ASC' ? 'selected' : ''; ?> value="ASC"> Oldest to Newest</option>
                </select>
              </div>
              <div class="recent">
                <p> Showing <?php echo $start; ?>-<?php echo $end; ?> of <?php echo $total; ?></p>
              </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="listing-card-sec">
    <div class="container">
      <?php if ($the_query->have_posts()) { ?>
        <ul class="rc-card-head lc-head">
          <?php while ($the_query->have_posts()) {
            $the_query->the_post(); ?>
            <li>
              <div class="rc-card">
                <a href="<?php the_permalink(); ?>" class="invisible-anchor"></a>
                <div class="rc-card-img">
                <?php $date = get_field('event_date');  ?>
                <?php $today = get_field('date');  ?>
                <?php if ( $today > $date ) { ?>
                  <?php if( get_post_type() == 'event' ) { ?>
                      <span class="list-pill">Upcoming</span>
                  <?php } ?>  
                <?php } ?>
                    <?php if (has_post_thumbnail()) { ?>
                      <?php the_post_thumbnail(); ?>
                    <?php } ?>
                  </div>
              <div class="rc-card-desc">
                 <span class="eyebrow-text"><?php echo get_post_type_object(get_post_type())->labels->singular_name; ?> : <?php the_title(); ?></span>
                 <?php if(get_field('listing_description')) { ?>
                    <p><?php the_field('listing_description');?></p>
                  <?php } ?> 
                 <div class="rc-bottom">
                  <div class="rc-tags">
                     <?php
                    $terms = [];
                    $terms = get_the_terms(get_the_ID(), 'post_type_tag');
                    $term_names = wp_list_pluck($terms, 'name');
                    if (!empty($term_names)) {
                      echo '<span>' . implode(", ", $term_names) . '</span>';
                    }
                    ?>
                  </div>
                  <?php if( get_post_type() == 'news') { ?>
                   <?php $date = get_field('date'); 
                     $abc=date_create($date);
                     ?>
                     <p><?php echo date_format($abc,"F dS, Y");?></p>
                  <?php } ?> 
                  <?php if( get_post_type() == 'event' ) { ?>
                    <?php $date = get_field('date'); 
                     $abc=date_create($date);
                   ?>
                      <p><?php echo date_format($abc,"F dS, Y");?></p>
                  <?php } ?>
                </div>
                 
              </div>

              </div>
            </li>
       
          <?php } ?>
        </ul>
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
    </div>
  </div>
<?php } else { ?>
  <p class="no-results"><?php echo esc_html__('Not found', 'axle'); ?></p>
<?php } ?>
<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?>
</section>