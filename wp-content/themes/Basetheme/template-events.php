<?php
/**
 * Template Name: Events page
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
$terms = get_terms( 'events' );

debug($terms);




// no default values. using these as examples

// $args = array(
//     'orderby'           => 'name',
//     'order'             => 'ASC',
//     'hide_empty'        => false,
//     'exclude'           => array(),
//     'exclude_tree'      => array(),
//     'include'           => array(),
//     'number'            => '',
//     'fields'            => 'all',
//     'slug'              => '',
//     'parent'            => '',
//     'hierarchical'      => true,
//     'child_of'          => 0,
//     'childless'         => false,
//     'get'               => '',
//     'name__like'        => '',
//     'description__like' => '',
//     'pad_counts'        => false,
//     'offset'            => '',
//     'search'            => '',
//     'cache_domain'      => 'core'
// );

// $terms = get_terms('events', $args);

//debug($terms);
 //if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){

     // foreach ( $terms as $term ) {

     //    //echo '<li>' . $term->name . '</li>';

     //    echo  get_template_part('templates/post', 'event-loop');

     // }

// }


?>

<?php
//getting all pages
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

// Get the page as an Object
$page_id =  get_the_id();

// Filter through all pages and find Portfolio's children
$children = get_page_children( $page_id, $all_wp_pages );

// echo what we get back from WP to the browser
//echo '<pre>' . print_r( $children, true ) . '</pre>';

foreach ( $children as $child ) {
       // debug($child);
        echo  get_template_part('templates/post', 'event-loop');

     }

 ?>

<?php endwhile;?>

</div>
