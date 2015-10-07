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

<?php get_template_part('');?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page-header'); ?>
  <?php get_template_part('templates/content-page'); ?>
  <?php ?>
<?php endwhile; ?>
