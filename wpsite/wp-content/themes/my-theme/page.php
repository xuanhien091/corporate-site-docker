<?php get_header(); ?>

<main class="home">
	<?php
	get_template_part('template-parts/common/navigation-menu');

	get_template_part('template-parts/home/section-feature');
	get_template_part('template-parts/home/section-plan');
	get_template_part('template-parts/home/section-news');
	?>
</main>

<?php get_footer(); ?>