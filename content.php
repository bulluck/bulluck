<div class="contentswrap">
<?php if (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
<?php get_sidebar(); ?>
<?php endif; ?>
<div class="posts">
	<div class="contentslist">
		<article>
			<header class="entry-header">
				<?php if (has_tag()) :?>
					<?php
                the_tags('<div class="tags">', '</div><div class="tags">', '</div>');
                ?>
		  <?php endif;  ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="pubtime">
				   <time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="entry-date">
				   		<?php the_time(get_option('date_format')); ?>
				   </time>
				</div>
				<div class="viewcnt">
				<img class="viewsicon" alt="" src="<?php bloginfo('template_url');?>/images/views.png">
						<span class="viewspan"><?php if (function_exists('wpp_get_views')) {
    echo wpp_get_views(get_the_ID());
} ?> views</span>
				</div>
			</header>
			<div class="blogcontents">
			   <?php the_content(); ?>
			</div>
		</article>
	</div>
	<?php get_footer(); ?>
</div>
</div>
