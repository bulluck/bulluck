<div class="footerwrap">
	<div class="cbodynomargin">
		<div class="formcontentsbody">
		<p>ご訪問いただき、ありがとうございます。</p>
		</div>
		<div class="boxhalf aligncenter">
			<span class="footerspan">Bulluck</span>
			<p>
				Beyond Your Imagination
			</p>
		</div>
		<div class="boxhalf aligncenter">
			<span class="footerspan">Bulluck ICT Solutions</span>
			<p>
				Explore the Frontiers
			</p>
		</div>
		<?php wp_nav_menu(
            array(
            'container' => 'div',
            'container_class' => 'utility',
            'theme_location' => 'footer_menu',
            )
            );?>
		<div class="copyright">
			<span>Copyright&copy; Bulluck Co.,Ltd. All Rights Reserved. 2015</span>
		</div>
	</div>
</div>

<?php wp_footer();?>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/modernizr-custom.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/jquery.slicknav.js"></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69111486-1', 'auto');
  ga('send', 'pageview');

</script>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script src="<?php bloginfo('template_url'); ?>/js/func.js"></script>

</body>
</html>
