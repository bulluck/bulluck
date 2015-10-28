<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
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

	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/normalize.min.css">
	<link href="http://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url');?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/editor-style.css">

	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
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
	<div class="topnav">
		<div class="globalNavi2">
			<?php wp_nav_menu(
			array(
			'container'  => 'nav',
			'container_class' => 'menu',
			'theme_location' => 'place_global2'
			)
			);?>
		</div>
		<a href="<?php echo site_url();?>">
			<span class="companyname">
						Bulluck
			</span>
		</a>
	</div>
