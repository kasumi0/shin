<?php get_header(); ?>

<main>
  <section class="hero">
    <h1 data-ja="和太鼓・篠笛教室-巴-">School</h1>
    <img src="<?= get_template_directory_uri(); ?>/img/school/7.jpg.webp" alt="">
  </section>

  <div class="container">
    <section class="top">
      <h2 data-en="Our Statement" class="vertical-h2"><span>「巴」の理念</span>私たちの思い</h2>
      <ul>
        <li>
          <h3>「和太鼓」を通じて<br>自分らしく輝けることを願って</h3>
          <p class="lead">
            障がいを持つ子もそうでない子も、全ての人が「和太鼓」を通じて自分らしく輝き、夢や希望を持つきっかけになればと 2000
            年に和太鼓「巴」を発足。日本伝統の精神や所作、挨拶や礼儀を大切にしながら日々の稽古に励んでいます。
          </p>
        </li>
        <li>
          <h3>「 豊かな未来への学び 」</h3>
          <p class="lead">
            地域のイベントや教育機関・介護施設などでの演奏活動を積極的に行い、舞台人としての成長だけでなく “豊かな未来への学び” 活動を実施しています。<br>
            また、クラス編成では障がいや年齢などでは区別をせず、色々な個性をもった者同士が一緒に稽古に励む中で共に学び、互いの違いを認め、手を取り合ってあたたかい心を育んでいます。
          </p>
        </li>
        <li>
          <h3>広い視野と柔軟な心で<br>困難に立ち向かえる強さを</h3>
          <p class="lead">
            一人ひとりに秘められた能力は無限で可能性の塊です。
            講師を務める和太鼓衆 SHIN は、彼らに潜在する個性豊かな能力を引き出し、広い視野と柔軟な心で困難に立ち向かう強い心の成長を願い指導にあたっています。
          </p>
        </li>
      </ul>
    </section>

    <div class="slick-infinite">
      <img src="<?= get_template_directory_uri(); ?>/img/school/4.jpg.webp" alt="" class="skip-lazy">
      <img src="<?= get_template_directory_uri(); ?>/img/school/5.jpg.webp" alt="" class="skip-lazy">
      <img src="<?= get_template_directory_uri(); ?>/img/school/6.jpg.webp" alt="" class="skip-lazy">
      <img src="<?= get_template_directory_uri(); ?>/img/school/8.jpg.webp" alt="" class="skip-lazy">
      <img src="<?= get_template_directory_uri(); ?>/img/school/9.jpg.webp" alt="" class="skip-lazy">
      <img src="<?= get_template_directory_uri(); ?>/img/school/10.jpg.webp" alt="" class="skip-lazy">
      <img src="<?= get_template_directory_uri(); ?>/img/school/11.jpg.webp" alt="" class="skip-lazy">
      <img src="<?= get_template_directory_uri(); ?>/img/school/12.jpg.webp" alt="" class="skip-lazy">
      <img src="<?= get_template_directory_uri(); ?>/img/school/13.jpg.webp" alt="" class="skip-lazy">
    </div>

    <section class="instructor">
      <div class="inner">
        <h2 data-en="Instructor" class="vertical-h2">講師</h2>
        <div class="body">
          <p>和太鼓衆SHIN</p>
          <ul class="name">
            <li>塩崎 智由（代表）</li>
            <li>永田 香織</li>
          </ul>
        </div>
        <a href="<?= esc_url(home_url('/about/')); ?>#member" class="link-btn">
          プロフィールを見る
          <span class="material-symbols-outlined">
            arrow_right_alt
          </span>
        </a>
      </div>
    </section>

    <section class="outline">
      <h2 data-en="Outline" class="vertical-h2">教室概要</h2>
      <dl class="main-dl">
        <div class="row">
          <dt>時間</dt>
          <dd>
            <dl class="sub-dl">
              <div class="row">
                <dt>初級（2歳～中学生）</dt>
                <dd>60分</dd>
              </div>
              <div class="row">
                <dt>中級（中学生～20代）</dt>
                <dd>70分</dd>
              </div>
              <div class="row">
                <dt>大人クラス</dt>
                <dd>60分</dd>
              </div>
            </dl>
          </dd>
        </div>
        <div class="row">
          <dt>クラス</dt>
          <dd>
            <dl class="sub-dl">
              <div class="row">
                <dt>大人対象篠笛</dt>
                <dd>和奏 -わかな- / 空奏 -そなた-</dd>
              </div>
              <div class="row">
                <dt>大人対象和太鼓</dt>
                <dd>和奏 -わかな- / 空奏 -そなた- / 陽奏 -ひなた-</dd>
              </div>
              <div class="row">
                <dt>子ども対象和太鼓</dt>
                <dd>刈谷初・中級 / 碧南初・中級 / 北部初・中級</dd>
              </div>
              <div class="row">
                <dt>大人・子ども対象篠笛</dt>
                <dd>煌奏 -きらな-</dd>
              </div>
            </dl>
          </dd>
        </div>
        <div class="row">
          <dt>内容</dt>
          <dd>基礎、リズム練習、曲練習、礼儀作法 など</dd>
        </div>
      </dl>
    </section>

    <section class="lesson">
      <div class="h2-wrapper">
        <h2 data-en="Lesson Schedule">教室スケジュール</h2>
      </div>
      <div class="table-area">
        <dl>
          <div class="date">
            <dt>月曜日</dt>
            <dd class="main-row">
              <dl class="sub-dl">
                <dt>煌奏 -きらな-</dt>
                <dd>
                  <span class="type">篠笛</span>
                  <span class="time">19:00 - 20:00</span>
                  <span class="location">刈谷市一里山町</span>
                </dd>
              </dl>
            </dd>
          </div>

          <div class="date">
            <dt>火曜日</dt>
            <div class="main-row">
              <dd>
                <dl class="sub-dl">
                  <dt>和奏 -わかな-</dt>
                  <div class="sub-inner">
                    <dd>
                      <span class="type">篠笛</span>
                      <span class="time">14:00 - 15:00</span>
                      <span class="location">刈谷市富士見町</span>
                    </dd>
                    <dd>
                      <span class="type">和太鼓</span>
                      <span class="time">15:00 - 16:00</span>
                      <span class="location">刈谷市富士見町</span>
                    </dd>
                  </div>
                </dl>
              </dd>
              <dd>
                <dl class="sub-dl">
                  <dt>刈谷初級</dt>
                  <dd>
                    <span class="type">和太鼓</span>
                    <span class="time">18:10 - 19:10</span>
                    <span class="location">刈谷市野田町</span>
                  </dd>
                </dl>
              </dd>
              <dd>
                <dl class="sub-dl">
                  <dt>刈谷中級</dt>
                  <dd>
                    <span class="type">和太鼓</span>
                    <span class="time">19:30 - 20:40</span>
                    <span class="location">刈谷市野田町</span>
                  </dd>
                </dl>
              </dd>
            </div>
          </div>

          <div class="date">
            <dt>水曜日</dt>
            <div class="main-row">
              <dd>
                <dl class="sub-dl">
                  <dt>空奏 -そなた-</dt>
                  <div class="sub-inner">
                    <dd>
                      <span class="type">篠笛</span>
                      <span class="time">14:00 - 15:00</span>
                      <span class="location">碧南市鶴見町</span>
                    </dd>
                    <dd>
                      <span class="type">和太鼓</span>
                      <span class="time">15:00 - 16:00</span>
                      <span class="location">碧南市鶴見町</span>
                    </dd>
                  </div>
                </dl>
              </dd>
              <dd>
                <dl class="sub-dl">
                  <dt>碧南初級</dt>
                  <dd>
                    <span class="type">和太鼓</span>
                    <span class="time">17:30 - 18:30</span>
                    <span class="location">碧南市鶴見町</span>
                  </dd>
                </dl>
              </dd>
              <dd>
                <dl class="sub-dl">
                  <dt>碧南中級</dt>
                  <dd>
                    <span class="type">和太鼓</span>
                    <span class="time">18:45 - 19:55</span>
                    <span class="location">碧南市鶴見町</span>
                  </dd>
                </dl>
              </dd>
            </div>
          </div>

          <div class="date">
            <dt>木曜日</dt>
            <dd class="main-row">
              <dl class="sub-dl">
                <dt>陽奏 -ひなた-</dt>
                <dd>
                  <span class="type">和太鼓</span>
                  <span class="time">16:00 - 17:30</span>
                  <span class="location">刈谷市若松町</span>
                </dd>
              </dl>
            </dd>
          </div>

          <div class="date">
            <dt>金曜日</dt>
            <div class="main-row">
              <dd>
                <dl class="sub-dl">
                  <dt>北部初級</dt>
                  <dd>
                    <span class="type">和太鼓</span>
                    <span class="time">18:00 - 19:00</span>
                    <span class="location">刈谷市一里山町</span>
                  </dd>
                </dl>
              </dd>
              <dd>
                <dl class="sub-dl">
                  <dt>北部中級</dt>
                  <dd>
                    <span class="type">和太鼓</span>
                    <span class="time">19:15 - 20:25</span>
                    <span class="location">刈谷市一里山町</span>
                  </dd>
                </dl>
              </dd>
            </div>
          </div>
        </dl>
        <p class="note">※和奏、空奏、陽奏は基本大人対象クラス、煌奏は子どもと大人対象クラス、それ以外は子ども対象クラスになります。</p>
      </div>

    </section>

    <section class="other">
      <ul class="titles">
        <li class="switchTarget">
          <h2>イベントでの演奏</h2>
        </li>
        <li class="switchTarget">
          <h2>発表会</h2>
        </li>
        <li class="switchTarget">
          <h2>個人レッスン</h2>
        </li>
      </ul>

      <ul class="cards">
        <li class="switchImage selected">
          <h2 class="sp">イベントでの演奏</h2>
          <img src="<?= get_template_directory_uri(); ?>/img/school/1.jpg.webp" alt="">
          <p class="lead">
            月に何度か、愛知県内のイベントに出演したり、教育機関や介護施設で演奏を行っています。<br>
            演奏後には和太鼓を体験していただくこともあり、和太鼓を通して交流する時間を作っています。
          </p>
        </li>
        <li class="switchImage">
          <h2 class="sp">発表会</h2>
          <img src="<?= get_template_directory_uri(); ?>/img/school/2.jpg.webp" alt="">
          <p class="lead">
            年に一度の、1,000人ホールで行う発表会です。<br>
            初級クラス・中級クラス・大人クラスの全クラスと、塩崎が指導するチームが集まり、講師（和太鼓衆 SHIN）主宰のもと音響照明効果を用いた一つの舞台を作り上げます。
          </p>
        </li>
        <li class="switchImage">
          <h2 class="sp">個人レッスン</h2>
          <img src="<?= get_template_directory_uri(); ?>/img/school/3.jpg.webp" alt="">
          <p class="lead">
            月に一度、決められた日に受けることができるプライベートレッスン（先着順・複数人可）です。<br>
            一日に24枠あり、一枠50分間という限られた時間の中で、その人に合った指導を行うことで一気に成長することができます。<br>
            ※巴に入会していない方もお申込み可
          </p>
        </li>
      </ul>
    </section>

    <section class="instagram">
      <a href="https://www.instagram.com/tomoe___shin?igsh=MWFpNDdkcjc5NWc0Zg%3D%3D&utm_source=qr" target="_blank" rel="noopener noreferrer">
        和太鼓・篠笛教室 -巴-<br>
        Instagram
        <i class="fa-brands fa-instagram"></i>
      </a>
    </section>
  </div>
</main>

<?php get_footer(); ?>