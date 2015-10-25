<?php get_header(); ?>
<section id="otoiawase">




<div class="contentsbody">
<h1 class="toi">
  <?php the_title(); ?>
</h1>


<span style="font-size:2rem;text-align:center;"><?php the_title(); ?></span>


<?php echo do_shortcode('[contact-form-7 id="69" title="お問い合わせフォーム"]'); ?>
<div class="otoiawasemail">

    <a href="mailto:info@bulluck.co.jp">
        <img alt="" src="<?php bloginfo('template_url');?>/images/mailbannar.png">
    </a>
</div>
</div>
</section>
