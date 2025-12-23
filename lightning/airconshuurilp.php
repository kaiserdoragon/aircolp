<?php
/*
Template Name: エアコンの修理LP
*/
?>

<?php get_header(); ?>

<header class="header" itemscope itemtype="https://schema.org/Organization">
    <div class="contents">
        <div class="header--logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">
                <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/logo.avif" type="image/avif">
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/logo.webp" type="image/webp">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/logo.png"
                        alt="株式会社トータルスマート"
                        width="397" height="262"
                        fetchpriority="high"
                        decoding="async"
                        itemprop="logo">
                </picture>
            </a>
        </div>
        <div class="header--btns">
            <div class="header--btn-item">
                <a href="tel:052-932-5450" class="cv_button">
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/tel.avif" type="image/avif">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/tel.webp" type="image/webp">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/tel.png"
                            alt="お電話でのご相談はこちら: 052-932-5450"
                            width="355" height="90"
                            decoding="async">
                    </picture>
                </a>
            </div>
            <div class="header--btn-item">
                <a href="#contact" class="cv_button">
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/mail.avif" type="image/avif">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/mail.webp" type="image/webp">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/mail.png"
                            alt="メールでお問い合わせ"
                            width="355" height="90"
                            decoding="async">
                    </picture>
                </a>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="mv">
        <picture>
            <source
                media="(max-width: 767px)"
                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/cleaninglp/img/mv_sp.avif"
                type="image/avif">
            <source
                media="(max-width: 767px)"
                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/cleaninglp/img/mv_sp.webp"
                type="image/webp">
            <source
                media="(max-width: 767px)"
                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/cleaninglp/img/mv_sp.jpg">

            <source
                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/cleaninglp/img/mv.avif"
                type="image/avif">
            <source
                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/cleaninglp/img/mv.webp"
                type="image/webp">

            <img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/cleaninglp/img/mv.jpg"
                alt="エアコンクリーニングなら株式会社トータルスマート"
                width="1920" height="800"
                fetchpriority="high"
                decoding="async">
        </picture>
    </div>
    <section class="lead sec -sm bg_yellow">
        <div class="contents -md">
            <h2>
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/lead_txt_sp.png">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/lead_txt.png" alt="愛知県・岐阜県・三重県・静岡県なら最短当日・即日での訪問も可能です。" width="621" height="114" decoding="async">
                </picture>
            </h2>
            <div class="lead--inner">
                <h3>エアコンクリーニングのご予約・ご相談はこちら</h3>
                <div class="lead--txt">
                    <p>
                        <span>汚れ・カビ・ニオイ・効きの悪さ</span>が気になったら、<br>
                        まずはお電話でお気軽にご相談ください。
                    </p>
                    <div class="header--btns">
                        <div class="header--btn-item">
                            <a href="tel:052-932-5450" class="cv_button">
                                <picture>
                                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/tel.avif" type="image/avif">
                                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/tel.webp" type="image/webp">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/tel.png" alt="お電話でのご相談はこちら: 052-932-5450" width="355" height="90" decoding="async">
                                </picture>
                            </a>
                        </div>
                        <div class="header--btn-item">
                            <a href="#contact" class="cv_button">
                                <picture>
                                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/mail.avif" type="image/avif">
                                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/mail.webp" type="image/webp">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/mail.png" alt="メールでお問い合わせ" width="355" height="90" decoding="async">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="lead--supplement">
                まずはお電話にて事前に概算のお見積りをご案内いたします。<br>
                不当な追加料金や高額請求は一切ございませんので、安心してお問い合わせください。
            </p>
            <p class="lead--supplement -sm">
                ※設置状況（機種・汚れ具合・作業環境）により、<br class="is-hidden_sp">
                当日ご案内する金額が事前の概算見積りから変動する場合がございます。
            </p>
        </div>
    </section>
    <section class="contact sec" id="contact">
        <div class="contents">
            <h2 class="ttl">お問い合わせフォーム</h2>
            <p>
                エアコンの故障、今すぐ解決しませんか？<br>
                こちらの2〜3分で完了する簡単フォームです。<br>
                お急ぎの方は、お電話の方が早くご案内できます。
            </p>
            <div class="thanks--tel">
                <a href="tel:052-932-5450" class="cv_button">
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/tel.avif" type="image/avif">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/tel.webp" type="image/webp">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/shuurilp/img/tel.png"
                            alt="お電話でのご相談はこちら: 052-932-5450"
                            width="355" height="90"
                            decoding="async">
                    </picture>
                </a>
            </div>
            <?php echo apply_shortcodes('[contact-form-7 id="571" title="エアコンの修理のフォーム"]'); ?>
        </div>
    </section>
</main>

<div class="footer_btn_fixed" id="js_fixed-btn">
    <p class="footer_btn_fixed--tel"><a href="tel:052-932-5450">電話で予約する</a></p>
    <p class="footer_btn_fixed--mail"><a href="#contact">メールで無料見積り</a></p>
</div>

<footer class="footer">
    <div class="contents -md">
        <div>
            <div class="footer--logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/cleaninglp/img/logo_footer.avif" type="image/avif">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/cleaninglp/img/logo_footer.webp" type="image/webp">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/cleaninglp/img/logo_footer.png"
                            alt="株式会社トータルスマート"
                            width="397" height="84"
                            decoding="async"
                            itemprop="logo">
                    </picture>
                </a>
            </div>
            <div class="footer--info">
                <p>〒461-0002 愛知県名古屋市東区代官町16-17
                    <br>アーク代官町ビルディング2F
                </p>
                <p>TEL:052-932-5450</p>
                <p>FAX:052-932-5451</p>
            </div>
        </div>
        <div class="footer--catch">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/cleaninglp/img/footer_catch.jpg" alt="トータルスマート" width="357" height="349" decoding="async">
        </div>
    </div>
    <p class="footer--copy"><small>Copyright© 株式会社トータルスマート All Rights Reserved.</small></p>
</footer>

<?php get_footer(); ?>