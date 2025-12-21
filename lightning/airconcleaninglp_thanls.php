<?php
/*
Template Name: エアコンクリーニングのサンクスページ
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
  <section class="thanks sec -sm">
    <div class="contents -md">
      <h2 class="ttl">お問い合わせありがとうございます</h2>
      <p>
        お問い合わせありがとうございます。<br>
        このたびは、トータルスマート株式会社へお問い合わせ頂き誠にありがとうございます。<br>
        お送り頂きました内容を確認の上、2～3営業日以内に折り返しご連絡させて頂きます。<br>

        なお、お急ぎの場合は電話でもご相談を受け付けております。<br>
        052-932-5450までご遠慮なくご相談ください。
      </p>
      <div class="thanks--tel">
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

      <a class="thanks--back" href="<?php echo esc_url(home_url('/cleaninglp/')); ?>">ページのTOPに戻る</a>
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
            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/logo_footer.avif" type="image/avif">
            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/logo_footer.webp" type="image/webp">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/logo_footer.png"
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
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/footer_catch.jpg" alt="トータルスマート" width="357" height="349" decoding="async">
    </div>
  </div>
  <p class="footer--copy"><small>Copyright© 株式会社トータルスマート All Rights Reserved.</small></p>
</footer>

<?php get_footer(); ?>