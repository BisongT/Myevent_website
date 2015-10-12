<?php
/**
 * Template Name: Events page
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <div class="container"><?php get_template_part('templates/page', 'header'); ?></div>
  
  <div class="container">
<?php // WP_Query arguments

$args = array (
	'post_type'       => array( 'newsevents' ),

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
			echo 'no content';
		}
		
		// Restore original Post Data
		wp_reset_postdata();
		 ?>

<?php endwhile; ?>
</div>