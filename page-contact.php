<?php
// 変数の初期化
$page_flag = 0;
$clean = array();
$error = array();

// サニタイズ
if (!empty($_POST)) {
  foreach ($_POST as $key => $value) {
    $clean[$key] = htmlspecialchars($value, ENT_QUOTES);
  }
}

if (!empty($clean['btn_confirm'])) {

  $page_flag = 1;
} elseif (isset($_POST["recaptchaResponse"]) && !empty($_POST["recaptchaResponse"])) {

  // ここにシークレットキーを入れて下さい
  $secret_key = "6LdPBysqAAAAAI0ugM9FrCHF03WXthP1jogw5nB-";
  $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response=$_POST[recaptchaResponse]");
  $reCAPTCHA = json_decode($verifyResponse);
  if (!$reCAPTCHA->success) {
    $page_flag = 3;
  } else {
    $page_flag = 2;

    // 変数とタイムゾーンを初期化
    $header = null;
    $auto_reply_subject = null;
    $auto_reply_text = null;
    $admin_reply_subject = null;
    $admin_reply_text = null;

    // 運営側へ送るメール
    $to = "info.wadaiko.shin@gmail.com";

    date_default_timezone_set('Asia/Tokyo');

    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $header = "MIME-Version: 1.0\n";
    $header .= "Content-Type: text/plain; charset=UTF-8\n";
    $header .= "Content-Transfer-Encoding: base64\n";
    $header .= "From:" . mb_encode_mimeheader('和太鼓衆SHIN', 'UTF-8') . "<$to>\n";
    $header .= "Reply-To:" . mb_encode_mimeheader('和太鼓衆SHIN', 'UTF-8') . "<$to>\n";

    // 件名を設定
    $auto_reply_subject = 'お問い合わせありがとうございます。';

    // 本文を設定
    $auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。\n下記の内容でお問い合わせを受け付けました。\n\n";
    $auto_reply_text .= "お問い合わせ日時：" . date("Y/m/d H:i") . "\n";
    $auto_reply_text .= "お名前：" . $clean['your-name'] . "\n";
    $auto_reply_text .= "メールアドレス：" . $clean['email'] . "\n";
    $auto_reply_text .= "電話番号：" . $clean['phone'] . "\n";
    $auto_reply_text .= "お問い合わせ種別：" . $clean['content-type'] . "\n";
    $auto_reply_text .= "お問い合わせ内容：" . $clean['content'] . "\n";
    $auto_reply_text .= "\n和太鼓衆SHIN";

    // 自動返信メール送信
    mb_send_mail($clean['email'], $auto_reply_subject, $auto_reply_text, $header);

    // 運営側へ送るメールの件名
    $admin_reply_subject = 'お問い合わせを受け付けました。';

    // 本文を設定
    $admin_reply_text = "SHINオフィシャルサイトから下記の内容でお問い合わせがありました。\n\n";
    $admin_reply_text .= "お問い合わせ日時：" . date("Y/m/d H:i") . "\n";
    $admin_reply_text .= "お名前：" . $clean['your-name'] . "\n";
    $admin_reply_text .= "メールアドレス：" . $clean['email'] . "\n";
    $admin_reply_text .= "電話番号：" . $clean['phone'] . "\n";
    $admin_reply_text .= "お問い合わせ種別：" . $clean['content-type'] . "\n";
    $admin_reply_text .= "お問い合わせ内容：" . $clean['content'];

    // 管理者へメール送信
    mb_send_mail($to, $admin_reply_subject, $admin_reply_text, $header);
  }
}
?>

<?php get_header(); ?>

<main>
  <section class="hero">
    <h1 data-ja="お問い合わせ">Contact</h1>
    <img src="<?= get_template_directory_uri(); ?>/img/hero/7.jpg.webp" alt="">
  </section>

  <?php if ($page_flag === 1) : ?>

    <div class="container">
      <ol class="progress in-conf">
        <li class="done">入力</li>
        <li class="done">確認</li>
        <li>完了</li>
      </ol>

      <form class="conf_form" method="post" action="" id="inquiry">
        <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
        <div class="conf_wrap">
          <label class="conf_label">お名前</label>
          <p class="conf_input"><?= $clean['your-name']; ?></p>
        </div>
        <div class="conf_wrap">
          <label class="conf_label">メールアドレス</label>
          <p class="conf_input"><?= $clean['email']; ?></p>
        </div>
        <div class="conf_wrap">
          <label class="conf_label">電話番号</label>
          <p class="conf_input"><?= $clean['phone']; ?></p>
        </div>
        <div class="conf_wrap">
          <label class="conf_label">お問い合わせ種別</label>
          <p class="conf_textarea"><?= $clean['content-type']; ?></p>
        </div>
        <div class="conf_wrap">
          <label class="conf_label">お問い合わせ内容</label>
          <p class="conf_textarea"><?= $clean['content']; ?></p>
        </div>

        <p class="conf-lead">この内容で送信してもよろしいですか？</p>

        <div class="button_wrap">
          <button name="btn_back">
            <span class="material-symbols-outlined">
              undo
            </span>
            戻る
          </button>
          <div class="btn-wrapper">
            <input type="submit" name="btn_submit" id="sendBtn" value="送信する">
            <span class="material-symbols-outlined">
              forward_to_inbox
            </span>
          </div>
        </div>
        <input type="hidden" name="your-name" value="<?= $clean['your-name']; ?>">
        <input type="hidden" name="email" value="<?= $clean['email']; ?>">
        <input type="hidden" name="phone" value="<?= $clean['phone']; ?>">
        <input type="hidden" name="content-type" value="<?= $clean['content-type']; ?>">
        <input type="hidden" name="content" value="<?= $clean['content']; ?>">
        <input type="hidden" name="agree" value="<?= $clean['agree']; ?>">
      </form>
    </div>

  <?php
  elseif ($page_flag === 3) :
  ?>

    <p class="error">
      <span class="material-symbols-outlined">
        error
      </span>
      認証エラー
    </p>

  <?php elseif ($page_flag === 2) : ?>

    <div class="container">
      <ol class="progress in-conf">
        <li class="done">入力</li>
        <li class="done">確認</li>
        <li class="done">完了</li>
      </ol>

      <div class="complete-box">
        <h2>
          <span class="material-symbols-outlined">
            mark_email_read
          </span>
          お問い合わせ送信完了
        </h2>
        <p class="complete-text">
          後ほど担当者よりご連絡いたしますので、今しばらくお待ちくださいませ。
        </p>
        <a class="complete-link" href="<?= esc_url(get_home_url()); ?>">
          <span class="material-symbols-outlined">
            home
          </span>
          トップページへ戻る
        </a>
      </div>
    </div>

  <?php else : ?>

    <?php
    function backVal($id, $type = 'text', $val = null)
    {
      global $clean;
      return $type === 'text'
        ? (empty($clean[$id]) ? null : $clean[$id])
        : ((!empty($clean[$id]) && $clean[$id] === $val) ? $type : null);
    }
    ?>

    <p class="lead">
      下記入力フォームに必要事項をご記入のうえ、「内容を確認する」ボタンをクリックしてください。<br>
      後ほど、メールまたはお電話で折り返しご連絡させていただきます。
    </p>

    <div class="container">
      <ol class="progress">
        <li class="done">入力</li>
        <li>確認</li>
        <li>完了</li>
      </ol>

      <form name="contact-form" action="" method="post">
        <div class="input-area">
          <span class="required" data-validated="OK">必須</span>
          <div class="label">
            <input type="text" placeholder=" " name="your-name" value="<?= backVal('your-name'); ?>" class="has-value">
            <span>お名前</span>
            <p class="error-text">※お名前を入力してください。</p>
          </div>
        </div>

        <div class="input-area">
          <span class="required" data-validated="OK">必須</span>
          <div class="label">
            <input type="email" placeholder=" " name="email" value="<?= backVal('email'); ?>" class="has-value">
            <span>メールアドレス</span>
            <p class="error-text">※メールアドレスを入力してください。</p>
            <p class="error-text-mail">※正しい形式で入力してください。</p>
          </div>
        </div>

        <div class="input-area">
          <span class="required" data-validated="OK">必須</span>
          <div class="label">
            <input type="tel" inputmode="numeric" placeholder=" " name="phone" value="<?= backVal('phone'); ?>" class="has-value">
            <span>電話番号</span>
            <p class="error-text">※電話番号を半角数字10〜11桁（ハイフン有無どちらでも可）で入力してください。</p>
          </div>
        </div>

        <div class="input-area">
          <span class="required" data-validated="OK">必須</span>
          <div class="label select-box">
            <select name="content-type" class="has-value">
              <option value="0">選択してください</option>
              <option value="ご相談" <?= backVal('content-type', 'selected', 'ご相談'); ?>>ご相談</option>
              <option value="演奏依頼" <?= backVal('content-type', 'selected', '演奏依頼'); ?>>演奏依頼</option>
              <option value="楽曲提供依頼" <?= backVal('content-type', 'selected', '楽曲提供依頼'); ?>>楽曲提供依頼</option>
              <option value="指導依頼" <?= backVal('content-type', 'selected', '指導依頼'); ?>>指導依頼</option>
              <option value="その他" <?= backVal('content-type', 'selected', 'その他'); ?>>その他</option>
            </select>
            <span>お問い合わせ種別</span>
            <p class="error-text">※お問い合わせ種別を選択してください。</p>
          </div>
        </div>

        <div class="input-area">
          <span class="required" data-validated="OK">必須</span>
          <div class="label">
            <textarea name="content" rows="8" placeholder=" " class="has-value"><?= backVal('content'); ?></textarea>
            <span>お問い合わせ内容</span>
            <p class="error-text">※お問い合わせ内容を入力してください。</p>
          </div>
        </div>

        <div class="input-area">
          <span class="required" data-validated="OK">必須</span>
          <div class="label">
            <div class="agree">
              <div class="check-box">
                <input type="checkbox" name="agree" value="1" <?= backVal('agree', 'checked', '1'); ?> class="has-value">
              </div>
              <p><a href="<?= esc_url(home_url('/privacy/')); ?>">プライバシーポリシー</a>に同意の上、送信ください。</p>
            </div>
            <p class="error-text">※プライバシーポリシーへの同意が必要です。</p>
          </div>
        </div>

        <div class="btn-wrapper">
          <input type="submit" name="btn_confirm" value="内容を確認する" disabled>
          <span class="material-symbols-outlined">
            check_circle
          </span>
        </div>
      </form>

    </div>

  <?php endif; ?>

</main>

<?php get_footer(); ?>