<div class="contentswrap">
	<?php if (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
	<?php get_sidebar('utility'); ?>
	<?php endif; ?>
<div class="posts">
	<div class="contentslist">
		<article>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="blogcontents">
			   <?php the_content(); ?>
			</div>
		</article>
	</div>
</div>
</div>
