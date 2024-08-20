  <footer>
    <div class="f-contents">
      <a href="<?= esc_url(get_home_url()); ?>" class="logo">
        <img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="">
      </a>

      <nav class="f-menu">
        <h2>menu</h2>
        <ul>
          <li class="f-has-sub">
            <a href="<?= esc_url(home_url('/about/')); ?>" data-ja="SHINとは">about</a>
            <ul class="f-sub">
              <li><a href="<?= esc_url(home_url('/supporter/')); ?>">サポーターズクラブ</a></li>
              <li><a href="<?= esc_url(home_url('/project/')); ?>">オーストラリアプロジェクト</a></li>
              <li><a href="<?= esc_url(home_url('/goods/')); ?>">グッズ</a></li>
            </ul>
          </li>
          <li>
            <a href="<?= esc_url(home_url('/contents/')); ?>" data-ja="ご依頼形態">contents</a>
          </li>
          <li>
            <a href="<?= esc_url(home_url('/school/')); ?>" data-ja="和太鼓教室 -巴-">school</a>
          </li>
          <li>
            <a href="<?= esc_url(get_home_url()) . '/schedule'; ?>" data-ja="演奏予定">schedule</a>
          </li>
          <li>
            <a href="<?= esc_url(get_home_url()) . '/news'; ?>" data-ja="お知らせ">news</a>
          </li>
          <li>
            <a href="<?= esc_url(home_url('/contact/')); ?>" data-ja="お問い合わせ">contact</a>
          </li>
        </ul>
      </nav>

      <nav class="sns">
        <h2>follow me</h2>
        <ul>
          <li>
            <a href="https://www.instagram.com/wadaikosyu_shin?igsh=N3c0d2l4MGhmZHht&utm_source=qr" target="_blank" rel="noopener noreferrer">
              <i class="fa-brands fa-instagram"></i>
              <span>Instagram</span>
            </a>
          </li>
          <li>
            <a href="https://youtube.com/@wadaikoshin?si=wNwPlEzEvxCyQmyz" target="_blank" rel="noopener noreferrer">
              <i class="fa-brands fa-youtube"></i>
              <span>YouTube</span>
            </a>
          </li>
          <li>
            <a href="https://lin.ee/KAATw9k" target="_blank" rel="noopener noreferrer">
              <i class="fa-brands fa-line"></i>
              <span>LINE</span>
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/share/fjU6wMWqZxto4BH3/?mibextid=LQQJ4d" target="_blank" rel="noopener noreferrer">
              <i class="fa-brands fa-facebook"></i>
              <span>Facebook</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <a href="<?= esc_url(home_url('/privacy/')); ?>" class="privacy">プライバシーポリシー</a>
    <p class="copyright">Copyright©和太鼓衆Shin All Rights Reserved</p>
  </footer>
  </body>

  </html>
  <?php wp_footer(); ?>