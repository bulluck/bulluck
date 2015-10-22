<?php get_header('top');?>
<section id="trouble">
    <div class="trouble-alt">
        <div class="contentsbody">
            <h3 class="boxtitle">Webサイト制作でお困りではありませんか？</h3>
            <h4>Bulluck ICT Solutionsで解決できます。</h4>
        </div>
    </div>
    <div class="contactbannars">
        <?php if (function_exists('wp_is_mobile') && wp_is_mobile()) :?>
            <p>
                LINEからのお問い合わせはこちら
                <br>（ワンクリックでご連絡いただけます。）
            </p>
            <a href="https://line.me/ti/p/%40yrd9480x"><img height="36" border="0" alt="友だち追加数" src="http://biz.line.naver.jp/line_business/img/btn/addfriends_ja.png"></a>

            <a href="#contact">
                <img class="contactbannarsimg" alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
            </a>
            <?php elseif (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
                <table class="contactbannartbl">
                    <tr style="border-top:none;">
                        <td style="font-size:2rem;color:#1B1464;text-align:left;font-weight:bold;padding:3rem;">
                            経営コンサルタントが<br>無料でご相談を承ります。
                        </td>
                        <td>
                            <a href="#line">
                                <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_lines.png" />
                            </a>
                            <a href="#mail">
                                <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
                            </a>
                        </td>
                    </tr>
                </table>

                <?php endif; ?>
    </div>
</section>
<section  id="features">
    <div class="wrapnormal">
        <div class="contentsbody">
            <h3 class="boxtitle">Bulluck ICT Solutionsの<br><span style="font-size:3rem;font-weight:bold;">5</span>つの<span style="font-size:3rem;font-weight:bold;">特徴</span></h3>
        </div>
    <?php if (wp_is_mobile()): ?>
        <div class="contentsbody">
            <div class="box row1 servicebox">
                <h3 class="tokutyouheadding">
                    <span class="tokutyouspan">1.</span>受注率特化!リスティング広告にも最適！
                </h3>
                <img alt="" src="<?php bloginfo('template_url');?>/images/feature1.png" />
                <p>
                    リスティング広告にも対応した、マーケティングに最適なWebサイトを設計します。
                </p>
            </div>
            <div class="box row1 servicebox">
                <h3 class="tokutyouheadding"><span class="tokutyouspan">2.</span>Webマーケティング標準装備</h3>
                <img alt="" src="<?php bloginfo('template_url');?>/images/feature2.png" />
                <p>
                    経営コンサルタントがマーケティング戦略を落とし込んだ売り上げの立ちやすいWebサイトを作ります。
                </p>
            </div>
            <div class="box row1 servicebox">
                <h3 class="tokutyouheadding"><span class="tokutyouspan">3.</span>開発時SEO対策標準装備</h3>
                <img alt="" src="<?php bloginfo('template_url');?>/images/feature3.png" />
                <p>
                    最先端の技術力で開発時にSEO対策を施します。機密性の高いご依頼でもご安心いただけます。
                </p>
            </div>
            <div class="box row2 servicebox">
                <h3 class="tokutyouheadding">
                    <span class="tokutyouspan">4.</span>更新サポート標準装備
                </h3>
                <img alt="" src="<?php bloginfo('template_url');?>/images/feature4.png" />
                <p>
                    更新サポート標準装備で納品後の更新も安心です。文言変更など、小さな変更もご対応致します。
                </p>
            </div>
            <div class="box row2 servicebox">
                <h3 class="tokutyouheadding">
                    <span class="tokutyouspan">5.</span>経営コンサル不要!圧倒的な費用対効果!
                </h3>
                <img alt="" src="<?php bloginfo('template_url');?>/images/feature5.png" />
                <p>
                    経営コンサルタントに依頼するよりも低コストで圧倒的成果を実現します。
                </p>
            </div>
        </div>
    <?php else: ?>
        <div class="contentsbody">
            <div class="tokutyoudiv">
                <div class="box70">
                    <h3 class="tokutyouheadding"><span class="tokutyouspan">1.</span>受注率特化！リスティング広告にも最適！</h3>
                    <p class="tokutyoup">リスティング広告にも対応した、マーケティングに最適なWebサイトを設計します。</p>
                </div>
                <div class="box30">
                    <img alt="" src="<?php bloginfo('template_url');?>/images/tokutyou1.png">
                </div>
            </div>
            <div class="tokutyoudiv">

                <div class="box30">
                    <img alt="" src="<?php bloginfo('template_url');?>/images/tokutyou2.png">
                </div>
                <div class="box70">
                    <h3 class="tokutyouheadding"><span class="tokutyouspan">2.</span>Webマーケティング標準装備！</h3>
                    <p class="tokutyoup">経営コンサルタントがマーケティング戦略を落とし込んだ売上の立ちやすいWebサイトを作ります。</p>
                </div>
            </div>
            <div class="tokutyoudiv">
                <div class="box70">
                    <h3 class="tokutyouheadding"><span class="tokutyouspan">3.</span>SEO対策標準装備！</h3>
                    <p class="tokutyoup">開発時に基本的なSEO対策を標準で装備しております。本格的なSEO対策もご用意しております。</p>
                </div>
                <div class="box30">
                    <img alt="" src="<?php bloginfo('template_url');?>/images/tokutyou3.png">
                </div>
            </div>

            <div class="tokutyoudiv">

                <div class="box30">
                    <img alt="" src="<?php bloginfo('template_url');?>/images/tokutyou4.png">
                </div>
                <div class="box70">
                    <h3 class="tokutyouheadding"><span class="tokutyouspan">4.</span>更新サポート標準装備！</h3>
                    <p class="tokutyoup">更新サポートを標準装備しておりますので、納品後も安心です。文言の変更など小さな変更もご対応致します。</p>
                </div>
            </div>
            <div class="tokutyoudiv">
                <div class="box70">
                    <h3 class="tokutyouheadding"><span class="tokutyouspan">5.</span>経営コンサル不要！圧倒的費用対効果！！</h3>
                    <p class="tokutyoup">経営コンサルタントに依頼するよりも低コストで圧倒的な成果を実現いたします。</p>
                </div>
                <div class="box30">
                    <img alt="" src="<?php bloginfo('template_url');?>/images/tokutyou5.png">
                </div>
            </div>
        </div>
    <?php endif;?>

    </div>
    <div class="contactbannars">
        <?php if (function_exists('wp_is_mobile') && wp_is_mobile()) :?>
            <p>
                LINEからのお問い合わせはこちら
                <br>（ワンクリックでご連絡いただけます。）
            </p>
            <a href="https://line.me/ti/p/%40yrd9480x"><img height="36" border="0" alt="友だち追加数" src="http://biz.line.naver.jp/line_business/img/btn/addfriends_ja.png"></a>
            <a href="#contact">
                <img class="contactbannarsimg" alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
            </a>
            <?php elseif (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
                <table class="contactbannartbl">
                    <tr style="border-top:none;">
                        <td style="font-size:2rem;color:#1B1464;text-align:left;font-weight:bold;padding:3rem;">
                            経営コンサルタントが<br>無料でご相談を承ります。
                        </td>
                        <td>
                            <a href="#line">
                                <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_lines.png" />
                            </a>
                            <a href="#mail">
                                <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
                            </a>
                        </td>
                    </tr>
                </table>

                <?php endif; ?>
    </div>

</section>
<section id="reason">
    <div class="wrapbrown">
        <div class="contentsbody">
            <h3 class="boxtitle">経営コンサルタントが作るWebサイト</h3>
            <h4>売上が伸びる理由：ブラックロジックとは？</h4>
        </div>
        <div class="formcontentsbody">
            <?php if (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>

            <div class="box70">
                <h4 class="alignleft">通常の経営コンサルティングは地上戦と空中戦！？</h4>
                <p>
                    2時間で40万円のコンサルティングフィーを頂く経営コンサルタントが行う戦略は大きく分けて2つあり、
                    一つは地上戦(リアルマーケティング：ちらしやDMなど)、もう一つは空中戦（Webマーケティング）です。
                    配分する労力でいうと、8割をリアルマーケティングに割き、残りの2割をWebマーケティングに割きます。
                </p>
            </div>
            <div class="box30">
                <img alt="" src="<?php bloginfo('template_url');?>/images/nakamoto_bulluck_logic1.png">
            </div>
            <div class="box30">
                <img alt="" src="<?php bloginfo('template_url');?>/images/nakamoto_bulluck_logic.png">
            </div>
            <div class="box70">
                <h4 class="alignleft">2割の原因が8割に結果を生んでいる！？</h4>
                <p>
                    しかし、肝心の成果、つまり売り上げは、総売上の8割がWebマーケティングの集客から成ります。
                    労力を割いているリアルマーケティングからの売上は2割にとどまります。
                    つまり、2割の原因(Webマーケティング)が8割の結果(売上)を生んでいることになります。
                    これはパレートの法則でも説明されますが、非常に効率が悪いのです。
                </p>
            </div>
            <div class="box70">
                <h4 class="alignleft">今後の趨勢は！？</h4>
                <p>
                    今後、スマホシフトへの流れを加味すると、このWebへの比重はさらに増加します。
                    これは時代の趨勢であり、流れに抗うことはすなわち会社の死を意味します。
                    そこで、成果の薄い8割の地上戦を廃止し、成果の出易い2割のWebマーケティングに資金を集中することで、
                    効率性と売り上げの向上を図ることに成功しました。さらに、
                     Webのマーケティング戦略の大部分はWebサイトに織り込むことが可能です。
                     そこで、サイト構築の段階からマーケティング戦略をHPに落とし込むことで、
                     低コストで成果の出易いWebサイトの制作を実現しました。
                </p>
            </div>
            <div class="box30">
                <img alt="" src="<?php bloginfo('template_url');?>/images/nakamoto_bulluck_logic3.png">
            </div>
        <?php elseif (function_exists('wp_is_mobile') && wp_is_mobile()) :?>
            <div class="box30">
                <img alt="" src="<?php bloginfo('template_url');?>/images/nakamoto_bulluck_logic1.png">
            </div>
            <div class="box70">
                <h4 class="alignleft">通常のコンサルティングは地上戦と空中戦！？</h4>
                <p>
                    2時間で30万円のコンサルティングフィーを頂く経営コンサルタントが行う戦略は大きく分けて2つあり、
                    一つは地上戦(リアルマーケティング：ちらしやDMなど)、もう一つは空中戦（Webマーケティング）です。
                    配分する労力でいうと、8割をリアルマーケティングに割き、残りの2割をWebマーケティングに割きます。
                </p>
            </div>

            <div class="box30">
                <img alt="" src="<?php bloginfo('template_url');?>/images/nakamoto_bulluck_logic.png">
            </div>
            <div class="box70">
                <h4 class="alignleft">2割の原因が8割に結果を生んでいる！？</h4>
                <p>
                    しかし、肝心の成果、つまり売り上げは、総売上の8割がWebマーケティングの集客から成ります。
                    労力を割いているリアルマーケティングからの売上は2割にとどまります。
                    つまり、2割の原因(Webマーケティング)が8割の結果(売上)を生んでいることになります。
                    これはパレートの法則でも説明されますが、非常に効率が悪いのです。
                </p>
            </div>
            <div class="box30">
                <img alt="" src="<?php bloginfo('template_url');?>/images/nakamoto_bulluck_logic3.png">
            </div>
            <div class="box70">
                <h4 class="alignleft">今後の趨勢は！？</h4>
                <p>
                    今後、スマホシフトへの流れを加味すると、このWebへの比重はさらに増加します。
                    これは時代の趨勢であり、流れに抗うことはすなわち会社の死を意味します。
                    そこで、成果の薄い8割の地上戦を廃止し、成果の出易い2割のWebマーケティングに資金を集中することで、
                    効率性と売り上げの向上を図ることに成功しました。さらに、
                     Webのマーケティング戦略の大部分はWebサイトに織り込むことが可能です。
                     そこで、サイト構築の段階からマーケティング戦略をHPに落とし込むことで、
                     低コストで成果の出易いWebサイトの制作を実現しました。
                </p>
            </div>
        <?php endif; ?>

        </div>

    </div>
    <div class="contactbannars">
        <?php if (function_exists('wp_is_mobile') && wp_is_mobile()) :?>
            <p>
                LINEからのお問い合わせはこちら
                <br>（ワンクリックでご連絡いただけます。）
            </p>
            <a href="https://line.me/ti/p/%40yrd9480x"><img height="36" border="0" alt="友だち追加数" src="http://biz.line.naver.jp/line_business/img/btn/addfriends_ja.png"></a>

            <a href="#contact">
                <img class="contactbannarsimg" alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
            </a>
            <?php elseif (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
                <table class="contactbannartbl">
                    <tr style="border-top:none;">
                        <td style="font-size:2rem;color:#1B1464;text-align:left;font-weight:bold;padding:3rem;">
                            経営コンサルタントが<br>無料でご相談を承ります。
                        </td>
                        <td>
                            <a href="#line">
                                <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_lines.png" />
                            </a>
                            <a href="#mail">
                                <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
                            </a>
                        </td>
                    </tr>
                </table>

                <?php endif; ?>
    </div>

</section>
<section id="service">
    <div class="wrapnormal">
        <div class="contentsbody">
            <h3 class="boxtitle">サービス内容</h3>
        </div>
        <div class="contentsbody">
            <div class="box servicebox">
                <h4>業種別マーケティング特化型<br>サイト設計・戦略		</h4>
                <img alt="" src="<?php bloginfo('template_url');?>/images/marketing.png" />
                <p>経営コンサルタントがマーケティング特化した文言・レイアウト・デザインの設計致します。マーケティングに詳しくない方でもご安心ください。</p>
            </div>
            <div class="box servicebox">
                <h4>開発	<br><br>	</h4>
                <img alt="" src="<?php bloginfo('template_url');?>/images/develop.png" />
                <p>
                    常に技術を磨いている弊社のエンジニアがご希望通りのサイトを制作いたします。
                </p>
            </div>
            <div class="box servicebox">
                <h4>更新も安心!<br>プランサポートパック</h4>
                <img alt="" src="<?php bloginfo('template_url');?>/images/circle_heart.png" />
                <p>
                    サイトの更新、修正などを無料で代行いたします。<br><small>※毎月3箇所（作業時間1時間程度）まで</small>
                </p>
            </div>
        </div>
    </div>
    <div class="contactbannars">
        <?php if (function_exists('wp_is_mobile') && wp_is_mobile()) :?>
            <p>
                LINEからのお問い合わせはこちら
                <br>（ワンクリックでご連絡いただけます。）
            </p>
            <a href="https://line.me/ti/p/%40yrd9480x"><img height="36" border="0" alt="友だち追加数" src="http://biz.line.naver.jp/line_business/img/btn/addfriends_ja.png"></a>

            <a href="#contact">
                <img class="contactbannarsimg" alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
            </a>
            <?php elseif (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
                <table class="contactbannartbl">
                    <tr style="border-top:none;">
                        <td style="font-size:2rem;color:#1B1464;text-align:left;font-weight:bold;padding:3rem;">
                            経営コンサルタントが<br>無料でご相談を承ります。
                        </td>
                        <td>
                            <a href="#line">
                                <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_lines.png" />
                            </a>
                            <a href="#mail">
                                <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
                            </a>
                        </td>
                    </tr>
                </table>

                <?php endif; ?>
    </div>
</section>
<section id="price">
    <div class="wrapbrown">
        <div class="contentsbody">
            <h3 class="boxtitle">料金プラン</h3>
        </div>
        <div class="contentsbody">
            <div class="tablewrap">
                <h4>プラン内訳</h4>
                <table class="plantable" style="margin-bottom: 0;">
                    <tr style="font-size:1rem">
                        <th colspan="2"  style="font-size:1rem">
                            プラン
                        </th>
                        <th>
                            <span style="font-size:1.5rem">クイック</span><br>プラン
                        </th>
                        <th>
                            <span style="font-size:1.5rem">ライト</span><br>プラン
                        </th>
                        <th class="standardplan"  style="font-weight:bold;border-top:1px solid #E80076;border-right: 3px solid #E80076;background:#E80076;">
                            <span style="font-size:1.5rem">マーケ特化</span><br>プラン
                        </th>
                        <th>
                            <span style="font-size:1.5rem">プレミアム</span><br>プラン
                        </th>
                        <th>
                            <span style="font-size:1.5rem">LP</span><br>プラン
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            概要
                        </th>
                        <td class="abst">
                            できるだけ安価に簡単なサイトを作りたい方用のプラン</td>
                        <td class="abst">
                            パンフレット代わりに自社ホームページを作りたい方用のプラン
                        </td>
                        <td class="standardplan abst">
                            商品販売も兼ねたマーケティング特化型のホームページを作りたい方用のプラン
                        </td>
                        <td class="abst">
                            まとめサイト・バズサイトなど、独自の仕様にカスタマイズしたい方用のプラン</td>
                        <td class="abst">商品を売ることに特化した、一枚仕立てのページを作りたい方用のプラン</td>
                    </tr>

                    <tr>
                        <th rowspan="3" class="th_vertical" style="background:#1b0bbf;">対応デバイス</th><th>PC用サイト</th><td>98,000円</td><td>158,000円</td><td class="standardplan">198,000円</td><td>298,000円〜</td><td>80,000円</td>
                    </tr>
                    <tr>
                        <th>スマホ用サイト</th><td>98,000円</td><td>158,000円</td><td class="standardplan">198,000円</td><td>248,000円〜</td><td>80,000円</td>
                    </tr>
                    <tr>
                        <th style="background:#E80076;"><span style="color:#fff;padding:0.2rem;;font-weight:bold;">レスポンシブデザイン</span><br><span style="font-size:0.6rem;">PC/スマホ/タブレット<br>対応サイト</span></th>
                        <td style="font-weight:bold;font-size:1.2rem;">178,000円</td><td style="font-weight:bold;font-size:1.2rem;">258,000円</td><td class="standardplan" style="color:#E80076;font-weight:bold;font-size:2rem;">378,000円</td><td style="font-weight:bold;font-size:1.2rem;">498,000円〜</td><td style="font-weight:bold;font-size:1.2rem;">159,000円</td>
                    </tr>
                    <tr>
                        <th class="th_vertical" style="background:#1b0bbf;">管理費</th>
                        <th><span style="font-size:1rem;font-weight:bold;">プランサポート</span><br>
                            <span style="font-size:0.6rem;">独自ドメイン・サーバー<br>・修正サポート<br>
                            (月3箇所作業1時間相当)<br>・バックアップ<br>・独自ドメインメール10アカウント付</span></th>
                        <td  style="font-weight:bold;font-size:1.2rem;">3,980円/月</td><td style="font-weight:bold;font-size:1.2rem;">3,980円/月</td><td class="standardplan" style="color:#E80076;font-weight:bold;font-size:1.2rem;">3,980円/月</td><td style="font-weight:bold;font-size:1.2rem;">4,980円/月</td><td style="font-weight:bold;font-size:1.2rem;">1,980円/月</td>
                    </tr>
                    <tr>
                        <th rowspan="2" style="background:#1b0bbf;" class="th_vertical">基本仕様</th>
                        <th>ページ総数(テンプレート)</th><td>６ページまで</td><td>15ページまで</td><td class="standardplan" style="color:#E80076;font-weight:bold;font-size:1.2rem;">35ページまで</td><td>カスタム</td><td>―</td>
                    </tr>
                    <tr>
                        <th>デザインページ</th>
                        <td><img alt="" src="<?php bloginfo('template_url');?>/images/crossmark.png"></td><td><img alt="" src="<?php bloginfo('template_url');?>/images/crossmark.png"></td><td class="standardplan" style="border-bottom: 3px solid #E80076;">トップページ１枚</td><td>カスタム</td><td>―</td>
                    </tr>
                </table>
                <small style="text-align: right;display: block;">注:価格はすべて税抜き価格です。　※の箇所から２つ選択。</small>

</div>

                <!-- <h4>お見積りシミュレータ</h4>
                <div class="tablewrap">
                    <form name="calcprice">
                        <table class="plantable">
                            <tr>
                                <th>
                                    プラン<br><span style="color:red;">※選択必須</span>
                                </th>
                                <td class="bottom-bordered">
                                    <label>
                                        <input onclick="ttlValue()" type="radio" name="plan" id="standardplan" checked="checked" value="0">スタンダードブラン</label>
                                    <td class="bottom-bordered">
                                        <label>
                                            <input onclick="ttlValue()" type="radio" name="plan" value="0" id="quickplan">クイックプラン</label>
                                    </td>
                                    <td class="bottom-bordered">
                                        <label>
                                            <input onclick="ttlValue()" type="radio" name="plan" value="0" id="premiumplan">プレミアムプラン</label>
                                    </td>
                                    <td class="bottom-bordered">
                                        <label>
                                            <input onclick="ttlValue()" type="radio" name="plan" value="0" id="LPplan">LPプラン</label>
                                    </td>
                            </tr>
                            <tr>
                                <th>
                                    対応デバイス<br><span style="color:red;">※選択必須</span>
                                </th>
                                <td class="bottom-bordered">
                                    <input onclick="ttlValue()" type="radio" name="divice" value="0" id="PCsite">PCサイト</td>
                                <td class="bottom-bordered">
                                    <input onclick="ttlValue()" type="radio" name="divice"  id="spsite" value="0">スマホサイト</td>
                                <td class="bottom-bordered">
                                    <input onclick="ttlValue()" type="radio" name="divice" id="responsivesite" value="0">PC/スマホ対応<br>(レスポンシブ)</td>
                                    <td class="bottom-bordered"></td>
                            </tr>
                            <tr>
                                <th rowspan="6">
                                    5,000円均一オプション
                                </th>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">問い合わせバナー</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">事務所バナー</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">画像３枚セット</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">商圏バナー</td>
                            </tr>
                            <tr>

                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">その他バナー</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">5つの特徴コンテンツ</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">利用料金コンテンツ</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">他社との違いコンテンツ</td>
                            </tr>
                            <tr>

                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">サービス内容コンテンツ</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">実績一覧コンテンツ</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">一押しバナー</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">ダウンロードフォーム</td>
                            </tr>
                            <tr>

                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">Googleカレンダー</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">Google Maps</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">Googleアナリティクス設置</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">コンテンツ追加</td>
                            </tr>
                            <tr>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">アメブロ連動</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">ツイッター連動</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">メディアブログ付加</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">Facebook連動</td>
                            </tr>
                            <tr>
                                <td class="bottom-bordered">
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">スライドショー機能</td>
                                <td class="bottom-bordered">
                                    <input onclick="ttlValue()" type="checkbox" name="option1" value="5000">その他</td>
                                <td class="bottom-bordered"></td>
                                <td class="bottom-bordered"></td>
                            </tr>
                            <tr>
                                <th rowspan="3">
                                    その他オプション
                                </th>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option2" value="10000">テンプレート1ページ追加</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option2" value="30000">スライドデザイン3枚セット</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option2" value="20000">ページデザインカスタマイズ</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option2" value="35000">Wordpress実装</td>
                            </tr>
                            <tr>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option2" value="30000">初期文章編集/10p</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option2" value="50000">初期文章作成/10p</td>

                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option2" value="50000">最速5日納品</td>
                                <td>
                                    <input onclick="ttlValue()" type="checkbox" name="option2" value="50000">戦略Pro(個別戦略立案)</td>
                            </tr>
                            <tr>

                                <td class="bottom-bordered">
                                    <input onclick="ttlValue()" type="checkbox" name="option2" value="80000">トップページをLPに変更</td>
                                <td class="bottom-bordered"></td>
                                <td class="bottom-bordered"></td>
                                <td class="bottom-bordered"></td>

                            </tr>
                            <tr>
                                <th rowspan="2">戦略オプション
                                    <br>（同時申し込みで10%オフ）</th>
                                <td>
                                    <input  onclick="ttlValue()" type="checkbox" name="option3" value="0" id="listingad">リスティング広告運用</td>
                                <td>
                                    <input  onclick="ttlValue()" type="checkbox" name="option3" value="0" id="fbad">Facebook広告運用</td>
                                <td>
                                    <input  onclick="ttlValue()" type="checkbox" name="option3" value="0" id="youtubead">Youtube広告運用</td>
                                <td>
                                    <label>
                                        <input  onclick="ttlValue()" type="checkbox" name="option3" value="0" id="marketingmail">マーケティングに関する
                                        <br>メール / LINE
                                        <br>コンサルティング</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bottom-bordered">
                                    <input  onclick="ttlValue()" type="checkbox" name="option3" value="0" id="webconsul">Webコンサルティング</td>
                                <td class="bottom-bordered">
                                    <input  onclick="ttlValue()" type="checkbox" name="option3" value="0" id="wm_strong">Webマーケティング強化<br>・構築プロジェクト</td>
                                    <td class="bottom-bordered"></td>
                                    <td class="bottom-bordered"></td>

                            </tr>
                            <tr>
                                <th rowspan="2" style="text-align:center;">管理オプション</th>
                                <td>
                                    <input  onclick="ttlValue()" type="checkbox" name="option4" value="0" id="lentalserver">レンタルサーバー
                                    <br>＋CMS
                                    <br>＋独自ドメイン</td>
                                <td>
                                    <input  onclick="ttlValue()" type="checkbox" name="option4" value="0" id="serverowner">専用サーバー
                                    <br>＋CMS
                                    <br>＋独自ドメイン</td>
                                <td>
                                    <input  onclick="ttlValue()" type="checkbox" name="option4" value="0" id="safepack">安心パックPro
                                    <br>(月に修正10箇所無料)
                                    <br>
                                    <small>※作業時間3時間相当、
                                        <br>バナー制作は対象外</small>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input  onclick="ttlValue()" type="checkbox" name="option4" id="seopro">SEO対策Pro</td>
                                <td>
                                    <input  onclick="ttlValue()" type="checkbox" name="option4" id="credit">クレジット決済機能</td>
                                    <td></td>
                                    <td></td>

                            </tr>
                    </table>
                    合計金額：<INPUT type="text" name="result" size="10">
                    月額費用：<INPUT type="text" name="result2" size="10">

                    <input type="button" onclick="chkAll_form(false)" value="チェック全解除" />
                    </form>
                </div>
 -->
        </div>
    </div>
        </div>


    </div>
    <div class="contactbannars">
        <?php if (function_exists('wp_is_mobile') && wp_is_mobile()) :?>
            <p>
                LINEからのお問い合わせはこちら
                <br>（ワンクリックでご連絡いただけます。）
            </p>
            <a href="https://line.me/ti/p/%40yrd9480x"><img height="36" border="0" alt="友だち追加数" src="http://biz.line.naver.jp/line_business/img/btn/addfriends_ja.png"></a>

            <a href="#contact">
                <img class="contactbannarsimg" alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
            </a>
            <?php elseif (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
                <table class="contactbannartbl">
                    <tr style="border-top:none;">
                        <td style="font-size:2rem;color:#1B1464;text-align:left;font-weight:bold;padding:3rem;">
                            経営コンサルタントが<br>無料でご相談を承ります。
                        </td>
                        <td>
                            <a href="#line">
                                <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_lines.png" />
                            </a>
                            <a href="#mail">
                                <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
                            </a>
                        </td>
                    </tr>
                </table>

                <?php endif; ?>
    </div>
</section>
<section id="voices">
    <div class="wrapnormal">
        <div class="contentsbody">
            <h3 class="boxtitle">利用者の声</h3>
            <div class="box30">
                <img alt="" src="<?php bloginfo('template_url');?>/images/lady1.png">
                <h4>Ａ社様</h4>
            </div>
            <div class="box70">
                <p class="voiceheading">早速効果が出始めました</p>
                    <p>
                      Ｗebマーケティングのご支援をしていただきました。
                     どの業界・業態でも、今や、ネットからの集客は当たり前になっていると思います。
                      ですが、事業者サイドの私たちはまだまだWebマーケティングに無知でした。
                      ブラック様からご提案いただいたのは、パソコンだけでなく、スマホ・タブレットからも綺麗に見える
                      ホームページのリニューアルです。
                      ブラック様いわく、現在では、SNS等のソーシャルメディアからの集客が最も効果的ということでしたので、
                      SNSやアメブロとの連動もお願いしました。
                      こちらの効果も出始めてきたところです。
                      営業マン１人を雇用する費用対効果を考慮すると、ブラックさんのコンサル費用は格安かと思います。
                </p>
            </div>
        </div>
        <div class="contentsbody">
            <?php if (function_exists('wp_is_mobile') && wp_is_mobile()) :?>
                <div class="box30">
                    <img alt="" src="<?php bloginfo('template_url');?>/images/boy2.png">
                    <h4>Ｂ社様</h4>
                </div>

            <div class="box70">

                <p class="voiceheading">50万円ほどの投資でしたが、2ヶ月で投資回収に成功しました</p>
                    <p>
                    以前は、高額な割に、効果の薄いリスティング広告を行っていました。
                    ブラックさんに相談したところ、ターゲットユーザーの選定が甘いことが原因でした。
                    その際、効果的なWeb製作と運用をご提案いただきましたが、やはり出費は抑えたい気持ちもありました。</p>
                    <p>

                    ブラックさんの強みとして、コンサルタントによる圧倒的な提案力があることだと思います。
                    Web制作費・運用費に投資をすることにより、売上アップへの効果を丁寧に説明していただき、納得しました。
                    また、Webサイトにおいても、バナーの意味や画像配置の根拠を一つ一つ説明してくださり、納得の行くものを作っていただけました。
                    その結果、問い合わせ数が2ヶ月で2.5倍に増えるという劇的な効果がありました。</p>
                    <p>
                    ただのWeb制作会社とは全く違います。値段も相場より安く、本当に相談して良かったと思います。
                </p>
            </div>
        <?php elseif (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
            <div class="box70">

              <p class="voiceheading">50万円ほどの投資でしたが、2ヶ月で投資回収に成功しました</p>
                  <p>
                  以前は、高額な割に、効果の薄いリスティング広告を行っていました。
                  ブラックさんに相談したところ、ターゲットユーザーの選定が甘いことが原因でした。
                  その際、効果的なWeb製作と運用をご提案いただきましたが、やはり出費は抑えたい気持ちもありました。</p>
                  <p>

                  ブラックさんの強みとして、コンサルタントによる圧倒的な提案力があることだと思います。
                  Web制作費・運用費に投資をすることにより、売上アップへの効果を丁寧に説明していただき、納得しました。
                  また、Webサイトにおいても、バナーの意味や画像配置の根拠を一つ一つ説明してくださり、納得の行くものを作っていただけました。
                  その結果、問い合わせ数が2.5倍に増えるという劇的な効果がありました。</p>
                  <p>
                  ただのWeb制作会社とは全く違います。効果的なWebコンサルティングをしてくれました。
                  本当に相談して良かったと思います。
              </p>
            </div>
            <div class="box30">
                <img alt="" src="<?php bloginfo('template_url');?>/images/boy2.png">
                <h4>B社様</h4>
            </div>
        <?php endif; ?>
        </div>

    </div>
    <div class="contactbannars">
        <?php if (function_exists('wp_is_mobile') && wp_is_mobile()) :?>
            <p>
                LINEからのお問い合わせはこちら
                <br>（ワンクリックでご連絡いただけます。）
            </p>
            <a href="https://line.me/ti/p/%40yrd9480x"><img height="36" border="0" alt="友だち追加数" src="http://biz.line.naver.jp/line_business/img/btn/addfriends_ja.png"></a>
            <a href="#contact">
                <img class="contactbannarsimg" alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
            </a>
            <?php elseif (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
                <table class="contactbannartbl">
                    <tr style="border-top:none;">
                        <td style="font-size:2rem;color:#1B1464;text-align:left;font-weight:bold;padding:3rem;">
                            経営コンサルタントが<br>無料でご相談を承ります。
                        </td>
                        <td>
                            <a href="#line">
                                <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_lines.png" />
                            </a>
                            <a href="#mail">
                                <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
                            </a>
                        </td>
                    </tr>
                </table>

                <?php endif; ?>
    </div>
</section>

<!-- <section id="works">
    <div class="wrapnormal">
        <div class="contentsbody">
            <h3 class="boxtitle">実績一覧</h3>
            <img src="" alt="" />
        </div>

    </div>
    <div class="contactbannars">
        <?php if (function_exists('wp_is_mobile') && wp_is_mobile()) :?>
            <p>
                LINEからのお問い合わせはこちら
                <br>（ワンクリックでご連絡いただけます。）
            </p>
            <a href="http://line.me/ti/p/%40yrd9480x">
                <img class="contactbannarsimg" alt="友だち追加" src="http://biz.line.naver.jp/line_business/img/btn/addfriends_en.png">
            </a>
            <a href="#contact">
                <img class="contactbannarsimg" alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
            </a>
            <?php elseif (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
                <table class="contactbannartbl">
                    <tr style="border-top:none;">
                        <td style="font-size:2rem;color:#1B1464;text-align:left;font-weight:bold;padding:3rem;">
                            経営コンサルタントが<br>無料でご相談を承ります。
                        </td>
                        <td>
                        <a href="#line">
                            <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_lines.png" />
                        </a>
                        <a href="#mail">
                            <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
                        </a>
                        </td>
                    </tr>
                </table>

                <?php endif; ?>
    </div>

</section> -->
<section id="flow">
    <div class="wrapbrown">
        <div class="contentsbody">
            <h3 class="boxtitle">問い合わせから納品までの流れ</h3>
            <div class="box">
                <img alt="" src="<?php bloginfo('template_url');?>/images/nakamoto_1iraisoushin.png">
            </div>
            <div class="box">
                <img alt="" src="<?php bloginfo('template_url');?>/images/nakamoto_2hearing.png">
            </div>
            <div class="box">
                <img alt="" src="<?php bloginfo('template_url');?>/images/nakamoto_3senryaku.png">
            </div>
            <div class="box">
                <img alt="" src="<?php bloginfo('template_url');?>/images/nakamoto_4mitsumori.png">
            </div>
            <div class="box">
                <img alt="" src="<?php bloginfo('template_url');?>/images/nakamoto_5seisaku.png">
            </div>
            <div class="box">
                <img alt="" src="<?php bloginfo('template_url');?>/images/nakamoto_6nouhin.png">
            </div>

        </div>

    </div>
</section>
<section id="qanda">
    <div class="wrapnormal">
        <div class="contentsbody">
            <h3 class="boxtitle">よくある質問</h3>
            <div class="qa">
                <div class="question">
                    <p class="box80">
                        申し込みから納品まではどれくらいかかりますか。
                    </p>
                    <div class="box20">
                        <img alt="" src="<?php bloginfo('template_url');?>/images/question.png" >
                    </div>
                </div>
                <div class="answer">
                    <div class="box20">
                        <img alt="" src="<?php bloginfo('template_url');?>/images/answer.png" >
                    </div>
                    <p class="box80">
                        ブラックでは、最短14日で納品いたします。ただし、お申込み状況等により、変動する場合もございます。お急ぎの方は、お問い合わせの際にその旨ご相談いただけると幸いです。
                    </p>
                </div>
            </div>
                <div class="qa">
                    <div class="question">
                        <p class="box80">
                            納品されるファイルはどの様な形式でしょうか。
                        </p>
                        <div class="box20">
                            <img alt="" src="<?php bloginfo('template_url');?>/images/question.png" >
                        </div>
                    </div>
                    <div class="answer">
                        <div class="box20">
                            <img alt="" src="<?php bloginfo('template_url');?>/images/answer.png" >
                        </div>
                        <p class="box80">
                            基本的には、データをサーバー上にアップして納品致します。デザインデータでの納品をご希望の場合は、別途2万円にてお受けしております。
                        </p>
                    </div>
                </div>
                <div class="qa">
                    <div class="question">
                        <p class="box80">
                            ドメインとサーバーは自社で取得済みなのですが、管理費はどうなりますか？
                        </p>
                        <div class="box20">
                            <img alt="" src="<?php bloginfo('template_url');?>/images/question.png" >
                        </div>
                    </div>
                    <div class="answer">
                        <div class="box20">
                            <img alt="" src="<?php bloginfo('template_url');?>/images/answer.png" >
                        </div>
                        <p class="box80">
                            サーバーとドメインを自社で取得済みの会社様は、管理費であるプランサポートの月額から1000円分を差し引いたお値段でご利用いただけます。
                        </p>
                    </div>
                </div>
                <div class="qa">
                    <div class="question">
                        <p class="box80">
                            制作完了後の修正は可能でしょうか。
                        </p>
                        <div class="box20">
                            <img alt="" src="<?php bloginfo('template_url');?>/images/question.png" >
                        </div>
                    </div>
                    <div class="answer">
                        <div class="box20">
                            <img alt="" src="<?php bloginfo('template_url');?>/images/answer.png" >
                        </div>
                        <p class="box80">
                            プランサポートには月に3箇所(作業1h分)の修正/更新が標準装備でついております。お気軽にご連絡ください。
                            また、安心サポートPro(月に5箇所作業時間3h分)などの修正更新パックもご用意しております。こちらもご検討ください。
                        </p>
                    </div>
                </div>
                <div class="qa">
                    <div class="question">
                        <p class="box80">
                            制作に関してはどこまで相談可能でしょうか。
                        </p>
                        <div class="box20">
                            <img alt="" src="<?php bloginfo('template_url');?>/images/question.png" >
                        </div>
                    </div>
                    <div class="answer">
                        <div class="box20">
                            <img alt="" src="<?php bloginfo('template_url');?>/images/answer.png" >
                        </div>
                        <p class="box80">
                            ターゲットになる市場やマーケティング戦略の相談から、弊社の過去の実績などを元に、御社に最適なサイトをマーケティング視点でご提案致します。LP制作だけでなく、販売数・成約率の向上に真剣に向き合います。
                        </p>
                    </div>
                </div>
        </div>
    </div>
    <div class="contactbannars">
        <?php if (function_exists('wp_is_mobile') && wp_is_mobile()) :?>
            <p>
                LINEからのお問い合わせはこちら
                <br>（ワンクリックでご連絡いただけます。）
            </p>
            <a href="https://line.me/ti/p/%40yrd9480x"><img height="36" border="0" alt="友だち追加数" src="http://biz.line.naver.jp/line_business/img/btn/addfriends_ja.png"></a>

            <a href="#contact">
                <img class="contactbannarsimg" alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
            </a>
            <?php elseif (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
                <table class="contactbannartbl">
                    <tr style="border-top:none;">
                        <td style="font-size:2rem;color:#1B1464;text-align:left;font-weight:bold;padding:3rem;">
                            経営コンサルタントが<br>無料でご相談を承ります。
                        </td>
                        <td>
                            <a href="#line">
                                <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_lines.png" />
                            </a>
                            <a href="#mail">
                                <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
                            </a>
                        </td>
                    </tr>
                </table>

                <?php endif; ?>
    </div>
</section>
<section id="contact">
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
                    <?php if (!is_mobile()): ?>
                        <p style="font-size:2rem;margin-top:10%;">
                            ：<br>
                            ：<br>
                            OR<br>
                            ：<br>
                            ：<br>
                        </p>
                    <?php elseif (is_mobile()): ?>
                        <p style="font-size:2rem;margin-top:10%;">
                            OR<br>
                        </p>
                    <?php endif; ?>

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
<div class="contactbannars">
    <?php if (function_exists('wp_is_mobile') && wp_is_mobile()) :?>
        <p>
            LINEからのお問い合わせはこちら
            <br>（ワンクリックでご連絡いただけます。）
        </p>
        <a href="https://line.me/ti/p/%40yrd9480x"><img height="36" border="0" alt="友だち追加数" src="http://biz.line.naver.jp/line_business/img/btn/addfriends_ja.png"></a>

        <a href="#contact">
            <img class="contactbannarsimg" alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
        </a>
        <?php elseif (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
            <table class="contactbannartbl">
                <tr style="border-top:none;">
                    <td style="font-size:2rem;color:#1B1464;text-align:left;font-weight:bold;padding:3rem;">
                        経営コンサルタントが<br>無料でご相談を承ります。
                    </td>
                    <td>
                        <a href="#line">
                            <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_lines.png" />
                        </a>
                        <a href="#mail">
                            <img alt="" src="<?php bloginfo('template_url');?>/images/bullexit_mails.png" />
                        </a>
                    </td>
                </tr>
            </table>

            <?php endif; ?>
</div>

<?php get_footer();?>
