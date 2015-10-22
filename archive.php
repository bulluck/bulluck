<?php get_header(); ?>
	<section id="contents">
		<div class="contentswrap">
			<?php if (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
			<div class="posts">
				<div class="contentslist">
					<?php if (!is_category('media')): ?>
						<header class="category-header">
							<h1><?php single_tag_title(); ?></h1>
						</header>
					<?php endif; ?>
					<?php if (is_category('media')):?>
						<div class="mediakv">
							<div class="mediatable">
								<div class="mediacell">
									<h1 class="mediakvh1">Bulluck Media</h1>
									<span class="mediakvspan">"Luck"を"Bull"しよう</span>
								</div>
							</div>
						</div>
					<?php endif; ?>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- 自社レスポンシブ白 -->
							<ins class="adsbygoogle"
							style="display:block"
							data-ad-client="ca-pub-6631134636456513"
							data-ad-slot="3312513581"
							data-ad-format="auto"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					<?php
                        $count =0;
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                            $count++;
                         get_template_part('content-archive');
                         if ($count==5):?>


						   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						   <!-- 自社レスポンシブ白 -->
							   <ins class="adsbygoogle"
							   style="display:block"
							   data-ad-client="ca-pub-6631134636456513"
							   data-ad-slot="3312513581"
							   data-ad-format="auto"></ins>
						   <script>
						   (adsbygoogle = window.adsbygoogle || []).push({});
						   </script>
						 <?php
                         $count =0;
                     endif;
                     endwhile;
                 endif;
                          ?>

			</div>
		<?php get_footer(); ?>
			</div>
		</div>

	</section>
