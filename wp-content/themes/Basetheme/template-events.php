<?php
/**
 * Template Name: Events page
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  
<?php // WP_Query arguments

$args = array (
	'post_type'              => array( 'newsevents' ),

);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		
		debug(get_post());
		debug(get_post_meta(get_the_id()));

		




		} } else {
			echo 'no content';
		}
		
		// Restore original Post Data
		wp_reset_postdata();
		 ?>)

<?php endwhile; ?>
