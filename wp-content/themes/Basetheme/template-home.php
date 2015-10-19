<?php
/**
 * Template Name: Home Template
 */
?>
<?php /* ?>
<!DOCTYPE  html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/skin.css">
    <title>Welcome to Events Home</title>
</head>
<?php */ ?>

<?php get_template_part('templates/carousel');?>

<?php while (have_posts()) : the_post(); ?>
  <section class="container-fluid">
    <div class="page-header">
      <a href="<?php the_field('page_link');?>"><h1 class="intro">Events</h1> </a>
  	</div>
  </section>>
   
   <div class="container" class="intro_text"><?php get_template_part('templates/content-page'); ?>

   </div>
  <?php ?>
<?php endwhile; ?>
