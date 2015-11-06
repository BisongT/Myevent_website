<?php
/**
 * Template Name: Cat Event page
 */
?>

<div class="container">

  <?php while (have_posts()) : the_post(); ?>
     <?php // WP_Query arguments
        // WP_Query arguments
      $args = array (
       'post_type' => array( 'newsevents' ),
       'events'  => get_field('taxonomy'),
       );

      // The Query
      $query = new WP_Query( $args );

     // The Loop
    if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
    $query->the_post();

 get_template_part('templates/post', 'event-loop');

 }
 }

 else {
 echo 'no posts';
 }

 // Restore original Post Data
 wp_reset_postdata();
 ?>

 <?php endwhile;?>



</div>
