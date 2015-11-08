<?php get_header(); ?>
<section id="otoiawase">
<div class="contentsbody">
<div class = "toitop">
<h1 class="toi">
  <?php the_title(); ?>
</h1>
<p>お問い合わせ・ご質問・無料相談のお申し込みは下記のフォームまたはラインにてご連絡ください。24時間以内にご返信いたします。
</p>

<div class="toitoi">
<h2 class="toi1-1">《期間限定》20000円分のオプション無料お試し券プレゼントキャンペーン実施中!
</h2>

<div class="coupwrapper">
  <img class="coup" alt="coupon" src="http://bulluck.co.jp/wp-content/themes/bulluck/images/coupon.png">
</div>

<div class="toi1-2">キャンペーン期間に、下記フォームよりメールorラインをご登録頂いた方に、もれなく20000円分のオプション無料お試し券をプレゼント致します。
  <br>
  《条件》
  <br>
  ・キャンペーン期間中にメールorラインにてお問い合わせ/見積もり等のご連絡を頂いた方
  <br>
    ぜひこの機会に投資のご検討をしてみてください。
    <br>
    <br>※キャンペーンは予告無く終了する場合がございます。ご利用予定の方はお早めにお問い合わせください。
</div>
</div>



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
    <?php else:  ?>
      <div class="lineQR">
          <div class="icon">
              <img alt="LINEアイコン" src="<?php bloginfo('template_url');?>/images/LINE_icon.png" width="100">
          </div>
          <div class="linetable" id="line">
             <p style="margin:0 auto;">ラインからのお問い合わせはこちら
             <br>ワンクリックでご連絡いただけます。</p>
             <a href="https://line.me/ti/p/%40yrd9480x">
              <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_lines.png" />
             </a>


          </div>
      </div>
    <?php endif; ?>
        <div class="mailform" id="mail">
            <div class="icon">
                <img alt="メールアイコン" src="<?php bloginfo('template_url');?>/images/mail.png">
            </div>
                    <p>
                        フォームからのお問い合わせはこちら
                    </p>
                    <?php echo do_shortcode('[contact-form-7 id="69" title="お問い合わせフォーム"]'); ?>
                    <p>
                        メールアドレスはこちら
                    </p>
                    <a style="font-size:2rem;text-decoration:none;" href="mailto:info@bulluck.co.jp">
                            info@bulluck.co.jp
                    </a>

        </div>





   <div class="toitop2">

<div class="kozin1">個人情報の利用について
</div>


<div class="kozin3">
株式会社Bulluck（以下当社）は、コンサルティング、サイト開発等にお申し込みいただいた方の個人情報につきましては、適法かつ公正な方法で取得を行うとともに、以下に従い適切に利用、管理、保護させていただきます。
</div>


<div class="kozin2">【利用目的】
</div>
<div class="kozin3">ご本人によりご提供いただいたり、その他の方法により取得した個人情報は、以下に列挙した目的やその他予め明示いたしました利用目的の範囲内でのみ利用いたします。法により例外と認めている場合を除き、その目的の範囲を超えて個人情報を利用する場合は、事前にご本人に利用目的についてご了解をいただきます。ご本人のご了解がいただけない場合、当社は利用目的を超えた個人情報の利用をいたしません。
</div>


<div class="kozin3">
1．各種会員制サービスの登録の確認やサービスを提供する為<br>
2．お客様へのお申し込み内容の確認その他必要事項の連絡を行う為<br>
3．お客様からのお問い合わせ等に円滑に対応する為<br>
4．その他前述の各種業務に伴う業務実施の為<br>
</div>


<div class="kozin2">【営業活動の目的での個人情報の利用】
</div>

<div class="kozin3">
1．当社のコンサルティング事業及びこれに付随する各種事業（それらに付随して提供するサービスを含む）ならびにその他当社の事業におけるサービス提供、宣伝物・印刷物の送付、電話等による営業案内、関連するアフターサービスに利用する為。<br>
2．当社のコンサルティング事業及びこれに付随する各種事業（それらに付随して提供するサービスを含む）ならびに当社の事業における市場調査・商品開発に利用する為。<br>
3．当社以外の第三者から受託して行なう当該第三者の宣伝物・印刷物の送付、電話等による営業案内に利用する為。
</div>


<div class="kozin2">
【第三者提供、委託（預託）について】
</div>
<div class="kozin3">お申し込み時にいただきました個人情報は、法令等に基づく場合を除き、原則として第三者に対して提供はいたしませんが、当社が事前に調査した上で契約しました業務委託先企業に預託することがございます。
</div>

<div class="kozin2">【任意性】
</div>

<div class="kozin3">個人情報の提供はお客様の任意となりますが、必要となる情報（氏名・メールアドレス等）をご提供いただけない場合は、申し込み手続きおよび上記内容を行うことができなくなる場合があります。
</div>

<div class="kozin2">【お問い合わせ窓口】
</div>

<div class="kozin3">お客様の個人情報に関する確認・訂正、追加、停止又は削除・個人情報の取扱いに関するお問い合わせ<br>
株式会社Bulluck ： info@bulluck.co.jp
</div>
</div>


  </div>
    </div>
</section>
<div class="otoiawasemail">

    <a href="mailto:info@bulluck.co.jp">
        <img alt="" src="<?php bloginfo('template_url');?>/images/mailbannar.png">
    </a>
</div>

</div>
