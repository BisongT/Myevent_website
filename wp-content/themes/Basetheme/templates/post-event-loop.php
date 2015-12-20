<div class="col-lg-6">
   <h2 class="intro"><a href="<?php the_permalink();?>"><?php the_field('subheading');?></a></h2>

         <div>

            <div class="card">
                <div class="card-image">
                    <!-- <img class="img-responsive" src="http://www.audiovisualsvc.com/wp-content/gallery/avs-portfolio/imag0163.jpg"> -->
                   <?php the_post_thumbnail(); ?>
                  </div>

                  <div class="card-action">
                    <a href="<?php the_field('page_link'); ?>" target="new_blank">Contact us</a>
                </div>
             </div>
          </div>

</div>
