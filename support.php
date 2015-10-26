<?php get_header(); ?>
<section id="otoiawase">




<div class="contentsbody">
<div class = "toitop">
<h1 class="toi">
  <?php the_title(); ?>
</h1>



<p>お問い合わせ・ご質問・無料相談のお申し込みは下記のフォームまたはラインにてご連絡ください。24時間以内にご返信いたします。
</p>



<h2 class="toi2">無料相談について
</h2>
<p>
無料相談では、過去の実績、現状の売上、現状の実施策などについて、ヒアリングさせていただきます。それらを元に数ヶ月でどれくらいの受注数を目指すのかを具体的にお話しさせて頂く流れとなっております。
</p>

<h2 class="toi2">お時間のあるときにお気軽にご連絡ください
</h2>

<p>朝7時〜夜11時の間で無料相談を受け付けております。ご準備頂くものは特にございませんので、お気軽にご連絡ください。
</p>

<div  class = "osiuri" >無料相談時に強引な勧誘を行うことは一切ございません。Bulluckに興味を持っていただけましたら、お気軽にお問い合わせください。
</div>


</div>


<section id="contact">
    <?php if (!wp_is_mobile()): ?>
        <div class="lineQR">
            <div class="icon">
                <img alt="LINEアイコン" src="<?php bloginfo('template_url');?>/images/LINE_icon.png" width="100">
            </div>
            <div class="linetable" id="line">
                <div class="linetblcell" style="vertical-align:top;">
                    <p style="margin:0 auto;font-size:2rem;">
                        a. LINE QRコード
                    </p>
                    <img alt="Line QRcode" src="<?php bloginfo('template_url');?>/images/line_qrcode.png">
                    <p style="margin:0 auto;">LINEアプリの<br>「その他」>「友だち追加」>「QRコード」</p>
                </div>
                <div>
                        <p style="font-size:2rem;margin-top:10%;">
                            ：<br>
                            ：<br>
                            OR<br>
                            ：<br>
                            ：<br>
                        </p>
                </div>
                <div class="linetblcell" style="vertical-align:top;">
                    <p style="margin:0 auto;font-size:2rem;">
                        b. LINE ID検索
                    </p>
                    <p style="margin:10% auto;font-size:2rem;font-weight:bold;color:#1B1464;">
                            @yrd9480x
                    </p>
                    <p>
                        LINEアプリの<br>「その他」>「友だち追加」>「ID検索」
                    </p>
                </div>
            </div>
        </div>
    <?php endif; ?>
        <div class="mailform" id="mail">
            <div class="icon">
                <img alt="メールアイコン" src="<?php bloginfo('template_url');?>/images/mail.png">
            </div>

                    <p>
                        問い合わせフォームはこちら
                    </p>
                    <?php echo do_shortcode('[contact-form-7 id="69" title="お問い合わせフォーム"]'); ?>
                    <p>
                        メールアドレスはこちら
                    </p>
                    <a style="font-size:2rem;text-decoration:none;" href="mailto:info@bulluck.co.jp">
                            info@bulluck.co.jp
                    </a>

        </div>
        </div>
    </div>
</section>



<?php echo do_shortcode('[contact-form-7 id="69" title="お問い合わせフォーム"]'); ?>
<div class="otoiawasemail">

    <a href="mailto:info@bulluck.co.jp">
        <img alt="" src="<?php bloginfo('template_url');?>/images/mailbannar.png">
    </a>
</div>
</div>
</section>
