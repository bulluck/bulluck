<?php if (!is_page('webdev') and !is_page('webdev-2')): ?>
<?php get_header(); ?>
<?php endif; ?>
	<section id="contents">

		<?php if (is_page('biz_lineup')):?>
			<?php get_template_part('bizlineup'); ?>
		<?php elseif (is_page('corp_profile')):?>
			<?php get_template_part('corp-profile');?>
		<?php elseif (is_page('webdev')):?>
			<?php get_template_part('lp');?>
		<?php elseif (is_page('webdev-2')):?>
			<?php get_template_part('lp-alt');?>
		<?php elseif (is_page('support')):?>
			<?php get_template_part('support');?>
		<?php elseif (is_page('ad_agreement') or is_page('specified-commerce') or is_page('privacy-policy')): ?>
			<?php if (have_posts()):
                while (have_posts()):
                    the_post();
                 get_template_part('content-utility');
             endwhile;
         endif;?>
		<?php else:?>
		<?php if (have_posts()):
            while (have_posts()):
                the_post();
             get_template_part('content');
         endwhile;
     endif;
              ?>
		<?php endif; ?>
	</section>
	<?php if (!is_page_template('content')):?>
	<?php get_footer();?>
<?php endif; ?>
