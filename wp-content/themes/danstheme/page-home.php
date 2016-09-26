<?php /* Template Name: Home */  ?>

<?php get_header(); ?>


<div class="home-left" style="background-image: url('<?php the_field('feature_image'); ?>');">

 <div class="photo-credit">
  <p>Photo Credit: <a href="<?php the_field('photo_link'); ?>"><?php the_field('photo_credit'); ?></a>
  </p>
</div>

</div>

<div class="home-right">
 <div class="innerWrapper">
  <?php // Start the loop ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <h1><?php the_title(); ?></h1>
  <p><?php the_content(); ?></p>

<?php endwhile; // end the loop?>
<div class="social">
  <?php if( have_rows('social') ): ?>

  <ul class="slides">

    <?php while( have_rows('social') ): the_row(); 

    // vars
    $name = get_sub_field('name');
    $icon = get_sub_field('icon');
    $link = get_sub_field('url');

    ?>

     <li><a href="<?php echo $link; ?>" target="_blank" alt="<?php echo $name; ?>"><i class="fa <?php echo $icon; ?>  fa-2x" aria-hidden="true"></i></a></li>

  <?php endwhile; ?>

</ul>

<?php endif; ?>

</div>

</div> <!-- innerWrapper -->
</div>
