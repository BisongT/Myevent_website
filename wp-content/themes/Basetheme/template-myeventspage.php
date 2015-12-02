<?php
/**
 * Template Name:My Events page
 */
?>

<div class="container">
  <?php if(have_posts()):?>
    <?php while (have_posts()): the_post();?>
      <div class="col-lg-6">
        <?php get_template_part('content', 'page');?>
      </div>
     <?php endwhile; ?>
   <?php endif; wp_reset_postdata();?>
    <?php
      $myevents = new WP_Query(array(
        'post_type'       => array( 'newsevents' ),
        'events'          => get_field('taxonomy'),
     ));
    ?>
  <?php while($myevents->have_posts()) : $myevents->the_post(); ?>
  <div class="col-lg-4">
     <div class="thumbtitle group">
       <div class="thumbnail">
         <?php the_post_thumbnail('thumbnail'); ?>
       </div>
       <h4><?php the_title();?></h4>
    </div>
  </div>
<?php endwhile; ?>
</div><!--Container End-->
