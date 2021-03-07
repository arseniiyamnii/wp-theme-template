<?php
/*
Template Name: Главная страница
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>
<?php
 if ( get_the_post_thumbnail_url() ):
   $thumbnail = get_the_post_thumbnail_url();
   echo "<img src='$thumbnail' width='100%'></img>";
endif;
?>
<?php the_content(); ?>
<?php get_footer(); ?>
