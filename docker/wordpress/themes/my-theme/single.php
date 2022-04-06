<h1>DETAIL</h1>
<?php get_header(); ?>
<div>
  <h1 class="title">
    <?php the_title(); ?>
  </h1>
  <?php while (have_posts()) : the_post(); ?>
    <p class="excerpt">
      <?php the_excerpt(); ?>
    </p>
    <div class="content">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>