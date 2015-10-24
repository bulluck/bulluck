<?php get_header(); ?>


<section id="contact">
    <div class="wrapnormal" style="padding-bottom:0;">
        <div class="formcontentsbody">
        <h3 class="boxtitle">Contact</h3>
        <h4>お問い合わせはコチラへ</h4>
    </div>
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
