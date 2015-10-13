<?php
/**
 * Template Name: About Us page
 */
?>

      <div class="container">
         <img src="https://unsplash.it/980/237?image=815">
  
       </div>
       <br />
   <div class="container" style="text-align: center; margin-bottom: 0px;"><div><span><h2 class="intro"><strong>About Us</strong></h2></span></div></div>
   <hr />
   <section class="container"><h3 class="intro_text">We will make your dreams come true</h3></section>
<hr>

  <?php //get_template_part('templates/page', 'header'); ?>
       
             

             <?php  if( have_rows('columns') ):


                      while ( have_rows('columns') ) : the_row(); ?>

                         <?php // Your loop code ?>
                   
                        <?php get_template_part('templates/aboutus-loop'); ?>

                    <?php endwhile; ?>

              <?php else: ?>
                      
                    <?php echo "no rows found"; ?>


             <?php endif; ?>
           


   <?php //get_template_part('templates/content', 'page'); ?> 


