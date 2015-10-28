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
	<?php if (is_page('support')):?>
	<div id="conv-tag">
	<!-- Google Code for お問い合わせぺージコンバージョン数 Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 941213421;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "lgaCCLLa62AQ7Y3nwAM";
	var google_remarketing_only = false;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" id="conversion-img" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/941213421/?label=lgaCCLLa62AQ7Y3nwAM&guid=ON&script=0"/>
	</div>
	</noscript>
	</div>
<?php endif;?>
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
