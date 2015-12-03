<?php
/**
 * Template Name: Occasions Template
 */
?>

<?php //while (have_posts()) : the_post(); ?>
<?php //endwhile; ?>

<div class="container">
    <?php
      $args = array('post_type' => 'occasions');
      $query = new WP_Query($args);
      while ($query -> have_posts()): $query -> the_post();

      get_template_part();

     ?>

     <h2 class="intro"><?php the_title(); ?></h2>

<?php endwhile; ?>
</div>
