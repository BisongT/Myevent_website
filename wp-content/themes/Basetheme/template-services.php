<?php
/**
 * Template Name: Services page
 */
?>



<?php while (have_posts()) : the_post(); ?>
  <div class="container"> <?php get_template_part('templates/page', 'header'); ?></div>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

 <div class="container">
    <div class="row">
        <!-- Card Projects -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="http://www.audiovisualsvc.com/wp-content/gallery/avs-portfolio/imag0163.jpg">
                    </div>

                     <div class="card-action">
                    <a href="event_contactus.html" target="new_blank">Contact us</a>
                </div>
            </div>
        </div>
    </div>
  </div>