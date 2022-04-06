<?php
get_header();
get_template_part('template-parts/common/navigation-menu');
?>
<main class="single-post">
  <article class="container">
    <?php
    get_template_part('template-parts/news/news-content');
    ?>
  </article>
</main>

<?php get_footer(); ?>