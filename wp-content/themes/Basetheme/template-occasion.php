<?php
/**
 * Template Name: Occasions Template
 */
?>

<?php //while (have_posts()) : the_post(); ?>
<?php //endwhile; ?>


<div class="container">
    <?php
      $args = array(
        'post_type' => array('occasions'),
          'myoccasions' => get_field('taxonomy')
      );
      $query = new WP_Query($args);
      while ($query -> have_posts()): $query -> the_post();
      //debug($args);
      get_template_part('templates/post', 'event-loop');

     ?>
<?php endwhile; ?>
</div>
