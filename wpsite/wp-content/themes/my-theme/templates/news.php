<?php

/**
 * Template name: News
 */

get_header();
get_template_part('template-parts/common/navigation-menu');
?>
<main class="news">
	<div class="container">
		<h1>NEWS</h1>
		<?php
		get_template_part('template-parts/news/news-list');
		?>
	</div>
</main>

<?php get_footer(); ?>