<?php
/**
 * Template Name: Cat Event page
 */
?>

  <?php // class="container"><?php get_template_part('templates/page', 'header');?>

<div class="container">
        <img src="http://onehdwallpaper.com/wp-content/uploads/2014/10/Easter-Desktop-Backgrounds.jpg">
</div>
<div class="container" style="text-align: center; margin-bottom: 0px;"><div><span><h2 class="intro"><strong>Our Events</strong></h2></span></div></div>
   <hr />
   <section class="container"><h3 class="intro_text">We will make your dreams come true</h3></section>

<hr>

  <div class="container">


<?php while (have_posts()) : the_post(); ?>
<?php // WP_Query arguments


// WP_Query arguments put everything you want displayed within the array ($args)
$args = array (
	'post_type'       => array( 'newsevents' ),
    'events'          => get_field('taxonomy'),

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
