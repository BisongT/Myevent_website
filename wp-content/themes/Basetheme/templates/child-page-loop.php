<div class="col-lg-6">

   <?php //<?php the_title(); ?>
   <h3 class="intro"><a href="<?php the_permalink();?>"><?php the_field('subheading');?></a></h3>

         <div>

            <div class="card">
                <div class="card-image">
                    <!-- <img class="img-responsive" src="http://www.audiovisualsvc.com/wp-content/gallery/avs-portfolio/imag0163.jpg"> -->
                   <?php the_child_thumbnail(); ?>
                  </div>
                
                  <div class="card-action">
                    <a href="<?php the_field('page_link'); ?>" target="new_blank"><?php the_title( );?></a>
                </div>
             </div>
          </div>

</div>
