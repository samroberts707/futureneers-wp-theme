<?php get_header(); ?>
<div class="banner">
  <div class="container">
    <h2><?php echo get_the_title(); ?></h2>
    <?php echo get_post_field('post_content', $post->ID); ?>
  </div>

</div>

<?php get_footer(); ?>