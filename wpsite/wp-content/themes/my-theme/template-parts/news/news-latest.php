<div class="latest-posts">
  <?php
  $query = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'orderby' => 'ID',
    'order' => 'DESC'
  ));
  while ($query->have_posts()) : $query->the_post();
  ?>
    <article class="article">
      <h2><?php the_title() ?></h2>
      <p><?php the_excerpt() ?></p>
      <a href="<?php the_permalink() ?>">Read more</a>
    </article>
  <?php endwhile;
  wp_reset_query(); ?>
</div>