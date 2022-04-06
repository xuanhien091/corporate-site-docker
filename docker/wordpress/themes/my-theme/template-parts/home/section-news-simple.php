<h1>NEWS</h1>
<?php
if (have_posts()) :
  get_template_part('template-parts/news/news-content');
else :
  get_template_part('template-parts/news/news-none', 'none');
endif;

?>

<a href="/news">View all</a>