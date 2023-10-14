<section class="horizontal-tab-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hr-tab-head">
                    <?php if (get_sub_field('component_heading')) { ?>
                        <h3><?php the_sub_field('component_heading'); ?></h3>
                        <?php } ?>
                        <div class="hr-tabs">
                            <?php if (have_rows('add_tab')) { ?>
                            <ul class="nav nav-pills " id="pills-tab" role="tablist">
                                <?php while (have_rows('add_tab')) {
                                    the_row() ?>
                                    <?php $image = '' ?>

                                    <?php if (get_sub_field('image')) { ?>
                                        <?php $image = get_sub_field('image'); ?>
                                    <?php } ?>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link <?php echo (get_row_index() == 1) ? 'active' : ''; ?>" data-bs-toggle="pill" data-bs-target="#hr-<?php echo get_row_index(); ?>" data-src="<?php echo $image; ?>"><?php the_sub_field('tab_label'); ?></button>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <?php while (have_rows('add_tab')) {
                                the_row() ?>
                                <div class="tab-pane fade listing-check <?php echo (get_row_index() == 1) ? 'active' : ''; ?> show" id="hr-<?php echo get_row_index(); ?>" tabindex="0">
                                    <?php if (get_sub_field('tab_content')) { ?>
                                        <?php the_sub_field('tab_content'); ?>
                                    <?php } ?>
                                    <div class="ep-btn">
                                        <?php common_link(get_sub_field('cta'), 'btn-secondary'); ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (have_rows('add_tab')) {
                $i = 0; ?>
                <div class="col-lg-5">
                    <?php while (have_rows('add_tab')) {
                        the_row() ?>
                        <?php if ($i == 0) { ?>
                            <?php if (get_sub_field('image')) { ?>
                                <div class="hr-tab-img">
                                    <img src="<?php the_sub_field('image'); ?>" alt="">
                                </div>
                            <?php } ?>
                        <?php } ?>
                    <?php $i++;
                    } ?>

                </div>
            <?php } ?>
        </div>
    </div>
</section>