<section id="sidebar">


	<div id="primary" class="widget-area">

		<ul>
			<?php
            $args = array(
              'orderby' => 'count',
              'order' => 'desc',
              'number' => 20
            );
            $tags = get_terms('post_tag', $args);
            foreach ($tags as $value) {
                echo '<li><a href="'. get_tag_link($value->term_id) .'">'. $value->name .' ('. $value->count .')</a></li>';
            }
            ?>
		</ul>
		<aside class="twitter-tl">

			<a class="twitter-timeline" href="https://twitter.com/bulluck_media" data-widget-id="654117554831556608">@bulluck_mediaさんのツイート</a>
		</aside>

		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- 自社レスポンシブ黒 -->
			<ins class="adsbygoogle"
			style="display:block"
			data-ad-client="ca-pub-6631134636456513"
			data-ad-slot="8859519589"
			data-ad-format="auto"></ins>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>


</section>
<!-- sidebar end -->
