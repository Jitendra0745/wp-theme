<section class="feature-grid-sec" id="<?php echo md5(get_sub_field('anchor_id')); ?>">
        <div class="container">
          <div class="section-title">
              <?php if(get_sub_field('heading')); { ?>
                 <h2><?php the_sub_field('heading');?></h2>
              <?php } ?>
              <?php if(get_sub_field('description')); { ?>
                 <p><?php the_sub_field('description');?></p>
              <?php } ?>
          </div>
          <?php if(have_rows('add_row')); { ?>
             <ul class="row">
                   <?php while(have_rows('add_row')) { the_row();?>
                       <li class="col-md-6 col-lg-4">
                           <div class="feature-card">
                             <div class="feature-card-img">
                               <a href="javascript:void(0)">
                                <?php if(get_sub_field('icon')); { ?>
                                  <img src="<?php the_sub_field('icon');?>" alt="" />
                                <?php }?>
                               </a>
                             </div>
                              <?php if(get_sub_field('heading')); { ?>
                                <h4><?php the_sub_field('heading');?></h4>
                              <?php } ?>
                              <?php if(get_sub_field('description')); { ?>
                                <p><?php the_sub_field('description');?></p>
                              <?php } ?>
                             <?php if(get_sub_field('cta')){ ?>    
                               <?php common_link(get_sub_field('cta'), 'btn-arrow'); ?>
                             <?php } ?>
                           </div>
                       </li>
                   <?php } ?>
             </ul>
          <?php } ?>
        </div>
</section>