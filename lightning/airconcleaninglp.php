<?php
/*
Template Name: エアコンのクリーニングLP
*/
?>
<?php get_header(); ?>

<header class="header" itemscope itemtype="https://schema.org/Organization">
    <div class="contents">
        <div class="header--logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">
                <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/logo.avif" type="image/avif">
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/logo.webp" type="image/webp">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/logo.png"
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
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/tel.avif" type="image/avif">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/tel.webp" type="image/webp">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/tel.png"
                            alt="お電話でのご相談はこちら: 052-932-5450"
                            width="355" height="90"
                            decoding="async">
                    </picture>
                </a>
            </div>
            <div class="header--btn-item">
                <a href="#contact" class="cv_button">
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/mail.avif" type="image/avif">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/mail.webp" type="image/webp">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/mail.png"
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
            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/mv.avif" type="image/avif">
            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/mv.webp" type="image/webp">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/mv.png"
                alt="エアコンクリーニングなら株式会社トータルスマート"
                width="1920" height="800"
                fetchpriority="high"
                decoding="async">
        </picture>
    </div>
</main>

<footer class="footer">
    <div class="contents -md">
        <div>
            <a href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">
                <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/logo_footer.avif" type="image/avif">
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/logo_footer.webp" type="image/webp">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/logo_footer.png"
                        alt="株式会社トータルスマート"
                        width="397" height="262"
                        fetchpriority="high"
                        decoding="async"
                        itemprop="logo">
                </picture>
            </a>
            <address>
                〒461-0002<br>
                愛知県名古屋市東区代官町16-17 アーク代官町ビルディング2F<br>
                TEL 052-932-5450　FAX 052-932-5451
            </address>
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/footer_catch.jpg" alt="" width="357" height="349" decoding="async">
        </div>
    </div>
    <p class="footer--copy"><small>Copyright© トータルスマート株式会社 All Rights Reserved.</small></p>
</footer>

<?php get_footer(); ?>