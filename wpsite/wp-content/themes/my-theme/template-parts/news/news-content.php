<h1>ニュース詳細情報</h1>
<article>
	<h2 class="title">
		<?php the_title(); ?>
	</h2>
	<?php while (have_posts()) : the_post(); ?>
		<p class="excerpt">
			<?php the_excerpt(); ?>
		</p>
		<div class="content">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
</article>