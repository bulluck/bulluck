<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<title>
		<?php
			global $page, $paged;
			if (is_search ()) :
			wp_title ( '', true, 'left' );
			echo '｜';
			else :
			wp_title ( '｜', true, 'right' );
			endif;
			bloginfo ( 'name' );
			if (is_front_page ()) :
			echo '｜';
			bloginfo ( 'description' );
			endif;
			if ($paged >= 2 || $page >= 2) :
			echo '｜' . sprintf ( '%sページ', max ( $paged, $page ) );
			endif;
		?>
	</title>

	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/normalize.min.css">
	<link href="http://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url');?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">


	<?php wp_head();?>
</head>
<body <?php body_class(); ?> id="body-top">
	<!-- Google Code for ライン Conversion Page
	In your html page, add the snippet and call
	goog_report_conversion when someone clicks on the
	chosen link or button. -->
	<script type="text/javascript">
	/* <![CDATA[ */
	goog_snippet_vars = function() {
	var w = window;
	w.google_conversion_id = 941213421;
	w.google_conversion_label = "hkylCNmS2WAQ7Y3nwAM";
	w.google_remarketing_only = false;
	}
	// DO NOT CHANGE THE CODE BELOW.
	goog_report_conversion = function(url) {
	goog_snippet_vars();
	window.google_conversion_format = "3";
	window.google_is_call = true;
	var opt = new Object();
	opt.onload_callback = function() {
	if (typeof(url) != 'undefined') {
	window.location = url;
	}
	}
	var conv_handler = window['google_trackConversion'];
	if (typeof(conv_handler) == 'function') {
	conv_handler(opt);
	}
	}
	/* ]]> */
	</script>
	<script type="text/javascript"
	src="https://www.googleadservices.com/pagead/conversion_async.js">
	</script>

	<!-- Google Code for メール Conversion Page
	In your html page, add the snippet and call
	goog_report_conversion when someone clicks on the
	chosen link or button. -->
	<script type="text/javascript">
	/* <![CDATA[ */
	goog_snippet_vars = function() {
	var w = window;
	w.google_conversion_id = 941213421;
	w.google_conversion_label = "yx52CJKZ2WAQ7Y3nwAM";
	w.google_remarketing_only = false;
	}
	// DO NOT CHANGE THE CODE BELOW.
	goog_report_conversion = function(url) {
	goog_snippet_vars();
	window.google_conversion_format = "3";
	window.google_is_call = true;
	var opt = new Object();
	opt.onload_callback = function() {
	if (typeof(url) != 'undefined') {
	window.location = url;
	}
	}
	var conv_handler = window['google_trackConversion'];
	if (typeof(conv_handler) == 'function') {
	conv_handler(opt);
	}
	}
	/* ]]> */
	</script>
	<script type="text/javascript"
	src="//www.googleadservices.com/pagead/conversion_async.js">
	</script>

	<p id="page-top">
		<a href="#wrap">PAGE TOP</a>
	</p>
		<div class="wrapnormal" style="padding:0">
			<div class="kvbox">
				<header class="topbar">
					<div class="heading">
						<h4 class="description">
							<?php bloginfo('description');?>
						</h4>
						<hgroup class="headtitle">
							<a href="#body-top">
								<h1>
									Bulluck ICT Solutions
								</h1>
							</a>
						<span>produced by Bulluck</span>
						</hgroup>
						<a class="linebannar">
							<img alt="" src="<?php bloginfo('template_url');?>/images/bullexitbtn.png" onClick="goog_report_conversion('https://line.me/ti/p/%40yrd9480x')">
						</a>
						<div class="globalNavi">

							<?php wp_nav_menu(
								array(
								'container'  => 'nav',
								'container_class' => 'menu',
								'theme_location' => 'place_global'
								)
								);?>
						</div>

					</div>
				</header>
				<div class="kvbn">
					<?php if (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
									<span class="consulspan">経営コンサルタントによる</span>
										<div class="kvbntext">

                      <h3>
												<span class="kvspanstrong">90%</span>以上のお客様の売上を<span class="kvspanstrong">3ヶ月</span>で<span class="kvspanstrong">3倍</span>にした
                      </h3>
											<h3><span class="kvtexth3">「</span><span class="kvtexth3 kvstrong">受注率</span><span class="kvtexth3">にコミットする」</span></h3><h3 class="kvtexth3">Webサイト開発</h3>
                    </div>
				<?php elseif (function_exists('wp_is_mobile') && wp_is_mobile()) :?>
					<div class="kvbntext_sp">
						<h3>
							<span class="kvspanstrong">90%</span>以上のお客様の売上を<span class="kvspanstrong">3ヶ月</span>で<span class="kvspanstrong">3倍</span>にした
						</h3>
						<h3><span class="kvtexth3">「</span><span class="kvtexth3 kvstrong">受注率</span><span class="kvtexth3">にコミットする」</span></h3><h3 class="kvtexth3">Webサイト開発</h3>
                    </div>
				<?php endif; ?>
				<?php if(!wp_is_mobile()):?>
					<a href="#line">
							<img alt="" src="<?php bloginfo('template_url');?>/images/bullexitbtn.png" onClick="goog_report_conversion('#line')">
					</a>
				<?php else:?>
					<a>
						<img alt="" src="<?php bloginfo('template_url');?>/images/bullexitbtn.png" onClick="goog_report_conversion('https://line.me/ti/p/%40yrd9480x')">
					</a>
				<?php endif;?>

				</div>
			</div>
		</div>
