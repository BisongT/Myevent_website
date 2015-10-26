<?php
/**
 * Template Name: Services page
 */
?>

 <div class="container">
        <img src="http://onehdwallpaper.com/wp-content/uploads/2014/10/Easter-Desktop-Backgrounds.jpg">
  
       </div>

    <br />
   <div class="container" style="text-align: center; margin-bottom: 0px;"><div><span><h2 class="intro"><strong>Our Services</strong></h2></span></div></div>
   <hr />
   <section class="container"><h3 class="intro_text"> We will make your dreams come true</h3></section>
    <hr />
    
              <div class="container-fluid">
  
                  <?php  if( have_rows('columns') ):


                      while ( have_rows('columns') ) : the_row(); ?>

                         <?php // Your loop code ?>
                   
                        <?php get_template_part('templates/aboutus-loop'); ?>

                    <?php endwhile; ?>

                  <?php else: ?>
                      
                    <?php echo "no rows found"; ?>


             <?php endif; ?>
           
        </div>