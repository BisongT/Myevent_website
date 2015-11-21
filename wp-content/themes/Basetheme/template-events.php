<?php
/**
 * Template Name:All Events page
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php // class="container"><?php get_template_part('templates/page', 'header');?>

<div class="container">
        <img src="http://onehdwallpaper.com/wp-content/uploads/2014/10/Easter-Desktop-Backgrounds.jpg">

<div class="container" style="text-align: center; margin-bottom: 0px;"><div><span><h2 class="intro"><strong>Our Events</strong></h2></span></div></div>
   <hr />
   <section class="container"><h3 class="intro_text">We will make your dreams come true</h3></section>
<hr>

  <div class="container">
<?php // WP_Query arguments

	 //get_template_part('templates/post', 'event-loop');

//$terms = get_terms( 'events' );

//debug($terms);
 //if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
    //echo '<ul>';
     //foreach ( $terms as $term ) {
       //echo '<li>' . $term->name . '</li>';

     //}
     //echo '</ul>';
// }


$args = array( 'hide_empty' => 0 );

$terms = get_terms( 'events', $args );
//debug($terms);
if ( ( $terms) ) {
    $count = count( $terms);
    $i = 0;
    $term_list = '<ul class="intro">';
    foreach ( $terms as $term ) {
        $i++;
    	$term_list .= "<li>" .'<a href="' . get_term_link( $term ) . '" title="' . sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) . '">' . $term->name . '</a>'."</li>";
    	if ( $count != $i ) {
            $term_list .= ' &middot; ';
        }
        else {
            $term_list .= '</ul>';
        }
    }
    echo $term_list;
}

?>
<?php endwhile;?>


</div>
