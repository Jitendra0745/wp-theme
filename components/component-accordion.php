<section class="faq-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="section-title">
            <?php if( get_sub_field('component_heading')) { ?>  
              <h2><?php the_sub_field('component_heading');?></h2>
            <?php } ?>
            <?php if( get_sub_field('component_description')) { ?>    
              <p><?php the_sub_field('component_description');?></p>
            <?php } ?>
            <!-- <div class="section-cta">
              <a href="javascript:void(0)" class="btn-primary">call to action</a>
              <a href="javascript:void(0)" class="btn-ternary">learn more</a>
            </div> -->
          </div>
        </div>
        <div class="col-md-8">
          <?php if(have_rows('add_row')) { ?>
          <div class="accordion">
          <?php while(have_rows('add_row')) { the_row();?>
              <div class="accordion-box  <?php echo (get_row_index() == 2 ) ? 'open' : ''; ?>">
              <h2 class="accordion-header">
              <?php the_sub_field('section_heading');?>
                <i class="icon"></i>
              </h2>
              <div class="accordion-body">
              <?php if( get_sub_field('section_content')) { ?>    
               <p><?php the_sub_field('section_content');?></p>
              <?php } ?>

                <!-- <a href="javascript:void(0)" class="btn-secondary">Learn More</a> -->
              </div>
            </div>
            <?php } ?>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
</section>