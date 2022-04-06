<h1>POST LIST</h1>
<?php get_header();

if (have_posts()) :
  get_template_part('template-parts/news-list');
else :
  get_template_part('template-parts/news-list', 'none');
endif;

get_footer();
