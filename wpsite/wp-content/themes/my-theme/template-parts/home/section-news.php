<section class="news">
  <div class="container">
    <div>
      <h1>NEWS</h1>
      <?php
      if (have_posts()) :
        get_template_part('template-parts/news/news-latest');
      else :
        get_template_part('template-parts/news/news-none', 'none');
      endif;
      ?>
      <a href="/news">View all</a>
    </div>
  </div>
</section>