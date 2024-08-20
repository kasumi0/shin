<?php get_header(); ?>

<main>
  <section class="hero">
    <h1 data-ja="ご依頼形態">Contents</h1>
    <img src="<?= get_template_directory_uri(); ?>/img/hero/2.jpg.webp" alt="">
  </section>

  <div class="layout">
    <nav>
      <ul class="local-nav">
        <li>
          <a href="#theater">舞台公演</a>
        </li>
        <li>
          <a href="#live">出張演奏</a>
        </li>
        <li>
          <a href="#trial">楽器体験・<span>ワークショップ</span></a>
        </li>
        <li>
          <a href="#lesson">チーム指導</a>
        </li>
        <li>
          <a href="#provider">楽曲提供</a>
        </li>
      </ul>
    </nav>

    <div class="main">
      <section class="theater" id="theater" data-id="0">
        <h2>舞台公演</h2>
        <h3>SHINの全てを込めた<br>壮大な舞台の総合演出</h3>
        <div class="body">
          <p>
            和楽器 × エレクトーンが奏でる、新しい和のアートとして総合舞台演出をした、下記の和太鼓衆SHINのオリジナル演目の中からお選びいただけます。さらにダンサー等が加わることでパフォーマンス性が底上げされたステージもございます。<br>
            また、新たなステージを共同開催していただけるパートナー様も募集しております。
          </p>
          <div class="original">
            <h4>オリジナル演目</h4>
            <ul>
              <li>
                Revival-復活-
                <a href="https://youtu.be/EUMu93Z1ujA?si=gJw7dBcDE8tdO9MS" class="try" target="_blank" rel="noopener noreferrer">
                  <span>舞台の様子</span>
                  <i class="fa-brands fa-youtube"></i>
                </a>
              </li>
              <li>
                BlueSoul-金青の未陸-
                <a href="https://youtu.be/BM5ecZq_CpI?si=VH0Zdb1XJaqMMaPQ" class="try" target="_blank" rel="noopener noreferrer">
                  <span>舞台の様子</span>
                  <i class="fa-brands fa-youtube"></i>
                </a>
              </li>
              <li>『伝』オーストラリア挑戦の軌跡</li>
            </ul>
          </div>
          <a href="<?= esc_url(home_url('/project/')) . '#report'; ?>" class="link-btn">
            『伝』について
            <span class="material-symbols-outlined">
              arrow_right_alt
            </span>
          </a>
        </div>
        <dl>
          <div class="row">
            <dt>場所</dt>
            <dd>劇場、コンサートホール、ドーム、ライブハウス、学校、宴会場など</dd>
          </div>
          <div class="row">
            <dt>編成</dt>
            <dd>
              奏者4～5名、ダンサー1～10名<br>
              ※構成メンバーや演目は内容により異なります
            </dd>
          </div>
          <div class="row">
            <dt>時間</dt>
            <dd>1時間～1時間半</dd>
          </div>
          <div class="row">
            <dt>必要エリア</dt>
            <dd>
              例）SHIN5人 横8m×縦5m<br>
              例）ダンサー含め15人 横15m×縦10m<br>
              ※要相談 ※出演者数や演目により異なります
            </dd>
          </div>
        </dl>
        <img src="<?= get_template_directory_uri(); ?>/img/contents/1.jpg.webp" alt="">
      </section>

      <section class="live" id="live" data-id="1">
        <h2>出張演奏</h2>
        <h3>和楽器の素晴らしさを伝えながら<br>イベントを盛り上げます</h3>
        <p class="body">
          テーマパーク・学校・企業・施設・ホテル・地域などのイベントを、魂を込めた和太鼓演奏やオリジナル楽曲で盛り上げます！楽器体験を追加することも可能で、親子で参加したりなどさらに思い出に残る体験を提供できます。<br>
          記念式典や音楽鑑賞会、お祭りはもちろん、学校公演では和太鼓部の子どもたちと共演したり、単発指導なども承っております。
        </p>
        <dl>
          <div class="row">
            <dt>場所</dt>
            <dd>ホール、ライブハウス、イベント会場、学校体育館、宴会場、商業施設、公共施設、福祉施設、神社など</dd>
          </div>
          <div class="row">
            <dt>編成</dt>
            <dd>
              奏者4～5名<br>
              ※構成メンバーや演目は毎回異なります
            </dd>
          </div>
          <div class="row">
            <dt>時間</dt>
            <dd>30分～1時間</dd>
          </div>
          <div class="row">
            <dt>必要エリア</dt>
            <dd>
              例）横8m×縦5m<br>
              ※要相談 ※出演者数や演目により異なります
            </dd>
          </div>
        </dl>
        <img src="<?= get_template_directory_uri(); ?>/img/contents/2.jpg.webp" alt="">
      </section>

      <section class="trial" id="trial" data-id="2">
        <h2>楽器体験・ワークショップ</h2>
        <h3>たくさんの人が<br>和楽器に触れる機会を</h3>
        <p class="body">
          イベント会場などで和楽器体験ブースを開いたり学校に出向いて体験会を開いたりいたします。触れ合いや体験を通して、楽しいイベント作りや学びに貢献します。<br>
          楽器例：長胴太鼓、締太鼓、平同太鼓、団扇太鼓、パーランクル、エイサー太鼓、手拍子(チャッパ)、チャンチキ(摺鉦)など。
        </p>
        <dl>
          <div class="row">
            <dt>場所</dt>
            <dd>お祭り、マルシェ、神社、学校(イベントや部活)、イベント会場など</dd>
          </div>
          <div class="row">
            <dt>編成</dt>
            <dd>
              奏者3～5名<br>
              ※構成メンバーは毎回異なります
            </dd>
          </div>
          <div class="row">
            <dt>時間</dt>
            <dd>30分～1時間</dd>
          </div>
          <div class="row">
            <dt>必要エリア</dt>
            <dd>
              例）横3m×縦3m<br>
              ※要相談 ※楽器の種類や個数により異なります
            </dd>
          </div>
        </dl>
        <img src="<?= get_template_directory_uri(); ?>/img/contents/3.jpg.webp" alt="">
      </section>

      <section class="lesson" id="lesson" data-id="3">
        <h2>チーム指導</h2>
        <h3>SHINのメンバーが直接指導に伺う<br>特別なレッスン</h3>
        <p class="body">
          基礎、リズム練習、1 曲演奏など、内容はレベルに応じて対応いたします。
        </p>
        <dl>
          <div class="row">
            <dt>場所</dt>
            <dd>学校、文化会館、公民館、市民館、公共施設など</dd>
          </div>
          <div class="row">
            <dt>編成</dt>
            <dd>
              指導者数 1 ～ 2名<br>
              ※指導メンバーは内容により異なります
            </dd>
          </div>
          <div class="row">
            <dt>時間</dt>
            <dd>
              30分 ～ 1 時間半 / 回<br>
              例 1 ）単発：1 時間半～<br>
              例 2 ）短期：1, 2回 / 月、1 時間 / 回<br>
              例 3 ）長期：15回 / 年、1 時間 / 回
            </dd>
          </div>
          <div class="row">
            <dt>必要エリア</dt>
            <dd>
              例）横3m × 縦3m<br>
              ※要相談 ※生徒数や楽器の個数により異なります
            </dd>
          </div>
        </dl>
        <img src="<?= get_template_directory_uri(); ?>/img/contents/6.jpg" alt="">
      </section>

      <section class="provider" id="provider" data-id="4">
        <h2>楽曲提供</h2>
        <h3>和楽器を含む編成の<br>オリジナル楽曲・編曲を提供いたします</h3>
        <p class="body">
          ジャンルを問わず、和太鼓・篠笛・尺八・その他和楽器・エレクトーンなどSHINの楽器編成の中で、オリジナル楽曲を制作し提供いたします。<br>
          既存の楽曲に合わせた和太鼓のリズムの作曲、既存の和太鼓リズムに合わせた篠笛の作曲、楽曲の音源提供など、ご要望に合わせて承ります。
        </p>
        <img src="<?= get_template_directory_uri(); ?>/img/contents/5.jpg.webp" alt="">
      </section>

      <div class="other">
        <div class="lead">
          その他、月に一度1枠50分の個人レッスン（24枠、どなたでも申込可）を開催したり、エレクトーンワークショップ、エレクトーン出張レッスンもございます。エレクトーンに関してはメンバー太田英美のオフィシャルサイトもご参照ください。
        </div>
        <a href="https://otaemi.jp" target="_blank" rel="noopener noreferrer">
          太田英美Official Site
          <span class="material-symbols-outlined">
            open_in_new
          </span>
        </a>
      </div>

    </div>
  </div>

  <?php get_template_part('template-parts/cta'); ?>

</main>

<?php get_footer(); ?>