<?php get_header();?>

<section id="companykv">
    <div class="companykv">
        <div class="companykvtext">
          <div class="compinnercell">
            <span class="section-title">想像を超えよう。</span>
            <p>
              Beyond your imagination.
            </p>

          </div>
        </div>
    </div>
</section>
<section id="identity">
    <div class="wrapnormal bulluckexp">
        <h2 class="section-title">ブラックとは？</h2>
        <p>
            ブラックは、webサイト開発/スマホアプリ開発/メディア広告/株式投資を行う株式会社です。
        </p>
        <p>
            名前の由来は、bull(雄牛=突き上げる/暴騰)×luck(運)からなる造語です。
        </p>
        <p>
            「突き上げるような幸運を持っている会社であり続ける」という意味を込めて、Bulluckと名付けました。
        </p>
        <p>
            株式会社BulluckはBeyond your imagination.のもと、皆様の事業を理想に近づけるお手伝いを致します。
        </p>
    </div>

</section>
<section id="updates">
  <div class="wrapnormal">
  <h2 class="section-title">
    新着 Bulluck media
  </h2>

  <ul class="card-list">
      <?php
      $cardlist = get_posts(array(
        'category_name' => 'media',
        'posts_per_page' => 8,
        'orderby' => date,
      ));
      foreach ($cardlist as $post):
        setup_postdata($post);?>

      <li class="top-card-element">
        <div class="card-thumbnail">

        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
        <div class="card-tag">

          <?php if (has_tag()) :
                  the_tags('<div class="tags">', '</div><div class="tags">', '</div>');
                endif;  ?>
        </div>
        </div>
        <div class="contentsmain-card">
        <span>
          <?php the_time('Y年n月j日') ?>
        </span>
        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
        </div>

      </li>
      <?php endforeach;
      wp_reset_postdata(); ?>
  </ul>
  </div>
</section>
<section id="bulluckimgs">
    <div class="wrapblack bulluckexp" style="padding:0">
        <div class="clearfix">

            <div class="bulluckimgsbox1 bulluckimgsbox">
                <a href="<?php echo site_url();?>/corp_profile/">
                    <span>会社概要</span>
                </a>
            </div>
            <div class="bulluckimgsbox2 bulluckimgsbox">
                <a href="<?php echo site_url();?>/biz_lineup/">
                    <span>事業内容</span>
                </a>

            </div>
            <div class="bulluckimgsbox3 bulluckimgsbox">
                <a href="<?php echo site_url();?>/archives/category/media/">
                    <span>メディア</span>
                </a>

            </div>
            <div class="bulluckimgsbox4 bulluckimgsbox">
                <a href="<?php echo site_url();?>/webdev/#contact">
                    <span>サポート</span>
                </a>
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>
