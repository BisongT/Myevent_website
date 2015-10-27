<?php
/**
 * Template Name: Cat Event page
 */
?>

  <?php // class="container"><?php get_template_part('templates/page', 'header');?>

<div class="container">


      <section> <a href="<?php echo get_permalink($post->post_parent);?>" target="_self"><span class="labeltab">More Events</a></section>
         <!-- check css for section -->
      </div>

        <!--<div class="container" style="text-align: left; margin-bottom: 0px;"><div><span><h2><strong>Birthday Parties</strong></h2></span></div></div> -->

         <div class="container">
          <div class="col-md-12">
             <h2 class="intro"><?php the_title();?></h2>
            <div class="card">
                <div class="card-image">
                    <!-- <img class="img-responsive" src="http://www.audiovisualsvc.com/wp-content/gallery/avs-portfolio/imag0163.jpg"> -->
                   <?php the_post_thumbnail(); ?>
                  </div>

                  <div class="card-action">
                    <a href="<?php the_permalink(); ?>" target="new_blank"><?php the_title(); ?></a>
                </div>
             </div>
          </div>

               <div class="col-sm-2"></div>
             <?php /* ?>
                <div class="col-sm-3" style="background-color: rgb(224, 232, 240); margin-top: 15px;">
                   <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                     <i class="fa fa-map-marker fa-stack-2x fa-inverse"></i>
                      </span>
                      Location: <span style="font-weight: bold;">Enter adress here.</span> <br /><br />

                      <span class="p4" ><i class="fa fa-calendar fa-lg"></i></span>
                         Select Date: <span style="font-weight: bold;"> Make a booking</span>
                           <p class="p4" style="font-weight: bold;">Event Vendors:</p>
                           <p class="p4" =""> Photographer: Name of Photogrpher</p>
                           <p class="p4">Lighting & Rentals: Name of Rentals</p>
                           <p class="p4">Catering: Name of Catering company</p>  <br />

                 <div><?php the_post( ); ?> <!--<img src="http://cliparts.co/cliparts/kTK/n4G/kTKn4GXMc.jpg">--></div>

              </div>
         <?php */?>

       </div>

<div class="container">
<?php while (have_posts()) : the_post(); ?>
<?php // WP_Query arguments


// WP_Query arguments
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
