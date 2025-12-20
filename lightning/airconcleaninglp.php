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
      <source
        media="(max-width: 767px)"
        srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/mv_sp.avif"
        type="image/avif">
      <source
        media="(max-width: 767px)"
        srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/mv_sp.webp"
        type="image/webp">
      <source
        media="(max-width: 767px)"
        srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/mv_sp.jpg">

      <source
        srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/mv.avif"
        type="image/avif">
      <source
        srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/mv.webp"
        type="image/webp">

      <img
        src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/mv.jpg"
        alt="エアコンクリーニングなら株式会社トータルスマート"
        width="1920" height="800"
        fetchpriority="high"
        decoding="async">
    </picture>
  </div>

  <section class="lead sec -sm bg_blue">
    <div class="contents -md">
      <h2>
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/lead_txt_sp.png">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/lead_txt.png" alt="愛知県・岐阜県・三重県・静岡県なら最短当日・即日での訪問も可能です。" width="621" height="114" decoding="async">
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
                  <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/tel.avif" type="image/avif">
                  <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/tel.webp" type="image/webp">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/tel.png" alt="お電話でのご相談はこちら: 052-932-5450" width="355" height="90" decoding="async">
                </picture>
              </a>
            </div>
            <div class="header--btn-item">
              <a href="#contact" class="cv_button">
                <picture>
                  <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/mail.avif" type="image/avif">
                  <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/mail.webp" type="image/webp">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/mail.png" alt="メールでお問い合わせ" width="355" height="90" decoding="async">
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

  <section class="sign bg_skyblue">
    <div class="contents">
      <span class="sign--catch">こんなサインが出てきたら</span>
      <h2><span>エアコンクリーニング</span><br class="is-hidden_pc">のタイミングです</h2>
      <ul class="sign--list">
        <li><span>吹き出し口の黒い点々やホコリの塊</span>が目につくようになってきた</li>
        <li>スイッチを入れると、<span>カビっぽいニオイ・ホコリっぽさを感じる</span></li>
        <li><span>冷房／暖房の効きが前より悪くなった</span>気がして、設定温度を下げがち</li>
        <li>フィルター掃除はしているのに、<span>電気代の明細が年々高くなっている</span></li>
        <li>小さなお子さまやペットがいて、<span>エアコンの風やお部屋の空気が少し心配</span></li>
        <li><span>高い場所の作業や分解が不安</span>で、自分で中まで掃除するのは難しいと感じている</li>
      </ul>
    </div>
  </section>

  <section class="cvarea bg_blue">
    <div class="contents">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/cvarea_sp.png">
        <img class="cvarea--bg" src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/cvarea.png" alt="エアコンクリーニングならトータルスマートにお任せください" width="1366" height="618" decoding="async">
      </picture>
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
  </section>

  <section class="select sec">
    <div class="contents">
      <h2>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/select_logo.png" alt="株式会社トータルスマート" width="401" height="44" decoding="async">が<br>選ばれる<span>4</span>つの理由
      </h2>

      <ol>
        <li>
          <h3>
            確かな技術力・品質
          </h3>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/select_01.jpg" alt="" width="400" height="250" decoding="async">
          <p>エアコン本体を分解し、アルミフィン・送風ファン・ドレンパンなど自分では触れない内部まで徹底洗浄します。
            お掃除機能付きエアコンにも対応しているので、ご自宅の機種も安心してお任せください。</p>
        </li>
        <li>
          <h3>
            明確な料金体系
          </h3>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/select_02.jpg" alt="" width="400" height="250" decoding="async">
          <p>1台だけのご依頼から、複数台のご依頼まで、台数ごとのお得なセット料金をご用意しています。
            お掃除機能付きや室外機洗浄など、追加オプションも事前に料金をお伝えするため、当日になって突然金額が増えることはありません。</p>
        </li>
        <li>
          <h3>
            スピード対応
          </h3>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/select_03.jpg" alt="" width="400" height="250" decoding="async">
          <p>移動時間を含めたスケジュール調整がしやすく、繁忙期を除けば最短当日〜数日以内のご訪問が可能です。</p>
        </li>
        <li>
          <h3>
            安心・安全への配慮
          </h3>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/select_04.jpg" alt="" width="400" height="250" decoding="async">
          <p>作業中の思わぬトラブルにも備え、損害賠償保険に加入しています。
            室内はビニールシートでしっかり養生し、壁や床・家具に水や汚れが飛び散らないよう配慮して作業します。</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="case sec -sm">
    <div class="contents">
      <span class="sign--catch">エアコンクリーニングするとここまできれいになります</span>
      <h2 class="ttl">施工事例</h2>
      <div class="case--item">
        <h3>まさか、この空気を吸っていたなんて…</h3>
        <div class="case--inner">
          <p>長年蓄積されたホコリと汚れで、フィルターが完全に目詰まりしていました。<br>
            「最近、風がカビ臭い」「効きが悪い」と感じたら、<br class="is-hidden_sp">
            内部はもっと汚れているサインかもしれません。<br>
            プロの分解洗浄なら、ご家庭では落としきれない汚れもスッキリ除去。<br>
            アレルギー対策や、小さなお子様のいるご家庭にもおすすめです。</p>
          <div class="case--comparison">
            <div class="case--before">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/case_02.jpg" alt="" width="380" height="400" decoding="async">
              <p>BEFORE</p>
            </div>
            <div class="case--after">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/case_01.jpg" alt="" width="380" height="400" decoding="async">
              <p>AFTER</p>
            </div>
          </div>
        </div>
      </div>
      <div class="case--item">
        <h3>まさか、この空気を吸っていたなんて…</h3>
        <div class="case--inner">
          <p>長年蓄積されたホコリと汚れで、フィルターが完全に目詰まりしていました。<br>
            「最近、風がカビ臭い」「効きが悪い」と感じたら、<br class="is-hidden_sp">
            内部はもっと汚れているサインかもしれません。<br>
            プロの分解洗浄なら、ご家庭では落としきれない汚れもスッキリ除去。<br>
            アレルギー対策や、小さなお子様のいるご家庭にもおすすめです。</p>
          <div class="case--comparison">
            <div class="case--before">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/case_03.jpg" alt="" width="380" height="400" decoding="async">
              <p>BEFORE</p>
            </div>
            <div class="case--after">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/case_04.jpg" alt="" width="380" height="400" decoding="async">
              <p>AFTER</p>
            </div>
          </div>
        </div>
      </div>
      <div class="case--item">
        <h3>黄ばみを一掃してお店の好感度アップ！</h3>
        <div class="case--inner">
          <p>
            吹き出し口の黒カビや、全体的に茶色くくすんだ汚れは、<br class="is-hidden_sp">
            長年のホコリと油煙が原因です。<br>
            不潔な印象を与えるだけでなく、嫌なニオイの元凶にもなります。<br>
            プロの洗浄技術なら、パネルの裏側から徹底クリーニング。<br>
            お客様が心地よく過ごせる空間へと生まれ変わらせます。<br>
          </p>
          <div class="case--comparison">
            <div class="case--before">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/case_05.jpg" alt="" width="380" height="400" decoding="async">
              <p>BEFORE</p>
            </div>
            <div class="case--after">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/case_06.jpg" alt="" width="380" height="400" decoding="async">
              <p>AFTER</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="voice sec bg_skyblue">
    <div class="contents">
      <h2 class="ttl">お客様からの評価も頂いています</h2>
      <div class="voice--inner">
        <div class="voice--item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/voice_01.jpg" alt="" width="380" height="200" decoding="async">
          <div>
            <h3>オフィスの空気が一気に軽くなりました</h3>
            <span>名古屋市　IT企業　A様</span>
          </div>
          <p>クリーニング後は同じ設定温度でもムラなく冷え、
            会議室のこもったニオイも解消。<br>
            社員から「空気が変わった」と好評で、
            来客対応にも自信が持てるようになりました。</p>
        </div>
        <div class="voice--item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/voice_02.jpg" alt="" width="380" height="200" decoding="async">
          <div>
            <h3>「前より居心地がいい」と言われました</h3>
            <span>岐阜市　飲食店　I様</span>
          </div>
          <p>油煙まじりの風がサラッと変わり、客席の
            カビっぽさもなくなりました。営業前後の
            冷暖房効率も上がり、ピークタイムでも安定
            して快適な温度を保てています。</p>
        </div>
        <div class="voice--item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/voice_03.jpg" alt="" width="380" height="200" decoding="async">
          <div>
            <h3>「清潔感が増した」と評判です</h3>
            <span>四日市市　クリニック　T様</span>
          </div>
          <p>天井カセットを分解洗浄してもらったところ、
            見えない内部の汚れに驚きました。<br>
            クリーニング後は空気がすっきりし、
            患者様やスタッフからも好印象の声が
            増えています。</p>
        </div>

      </div>
    </div>
  </section>

  <section class="flow sec">
    <div class="contents">
      <h2 class="ttl">エアコンクリーニングの流れ</h2>
      <ol>
        <li>
          <span>
            STEP1
          </span>
          <div>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/flow_01.jpg" alt="" width="180" height="100" decoding="async">
            <dl>
              <dt>エアコンの分解</dt>
              <dd>パーツを分解して<br class="is-hidden_sp">
                いきます。</dd>
            </dl>
          </div>
        </li>
        <li>
          <span>
            STEP2
          </span>
          <div>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/flow_02.jpg" alt="" width="180" height="100" decoding="async">
            <dl>
              <dt>ホコリ除去</dt>
              <dd>ホコリや汚れを<br class="is-hidden_sp">
                除去します。</dd>
            </dl>
          </div>
        </li>
        <li>
          <span>
            STEP3
          </span>
          <div>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/flow_03.jpg" alt="" width="180" height="100" decoding="async">
            <dl>
              <dt>エアコン内部洗浄</dt>
              <dd>高圧洗浄機で<br class="is-hidden_sp">
                きれいにします。</dd>
            </dl>
          </div>
        </li>
        <li>
          <span>
            STEP4
          </span>
          <div>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/flow_04.jpg" alt="" width="180" height="100" decoding="async">
            <dl>
              <dt>パーツの汚れ除去</dt>
              <dd>分解したパーツも<br class="is-hidden_sp">
                洗浄します。</dd>
            </dl>
          </div>
        </li>
        <li>
          <span>
            STEP5
          </span>
          <div>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/airconimg/flow_05.jpg" alt="" width="180" height="100" decoding="async">
            <dl>
              <dt>最終確認</dt>
              <dd>正常に動くかの<br class="is-hidden_sp">
                最終確認をします。</dd>
            </dl>
          </div>
        </li>
      </ol>
    </div>
  </section>


  <section class="contact sec" id="contact">
    <div class="contents">
      <h2 class="ttl">お問い合わせフォーム</h2>
      <p>
        料金の目安を知りたい方・具体的な日程のご相談をされたい方は、<br class="is-hidden_sp">
        こちらのフォームからご連絡ください。<br>
        無料でお見積もり・ご提案いたします。
      </p>
      <?php echo apply_shortcodes('[contact-form-7 id="565" title="エアコンのクリーニングのフォーム"]'); ?>
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