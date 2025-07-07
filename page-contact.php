<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if (!class_exists('PHPMailer\\PHPMailer\\PHPMailer')) {
  require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
  require_once ABSPATH . WPINC . '/PHPMailer/SMTP.php';
  require_once ABSPATH . WPINC . '/PHPMailer/Exception.php';
}

$page_flag = 0;
$clean = array();
$error = array();
$labels = ['お名前', 'メールアドレス', '電話番号', 'お問い合わせ種別', 'お問い合わせ内容'];

if (!empty($_POST)) {
  foreach ($_POST as $key => $value) {
    $clean[$key] = htmlspecialchars($value, ENT_QUOTES);
  }
}

if (!empty($clean['btn_confirm'])) {
  $page_flag = 1;
} elseif (isset($_POST["recaptchaResponse"]) && !empty($_POST["recaptchaResponse"])) {
  $secret_key = "6LdPBysqAAAAAI0ugM9FrCHF03WXthP1jogw5nB-";
  $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response={$_POST['recaptchaResponse']}");
  $reCAPTCHA = json_decode($verifyResponse);
  if (!$reCAPTCHA->success) {
    $page_flag = 3;
  } else {
    $page_flag = 2;

    // PHPMailer設定
    $mail = new PHPMailer(true);
    try {
      $mail->isSMTP();
      $mail->Host = 'mail1025.onamae.ne.jp';
      $mail->SMTPAuth = true;
      $mail->Username = 'contact@wadaiko-shin.com';
      $mail->Password = 'wadaiko-shin0606';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port = 465;
      $mail->CharSet = 'UTF-8';
      $mail->Encoding = 'base64';
      $mail->setFrom('contact@wadaiko-shin.com', '和太鼓衆SHIN');
      $mail->addAddress($clean['email']);
      $mail->addBCC('info.wadaiko.shin@gmail.com');
      $mail->Subject = 'お問い合わせありがとうございます';
      $mail->Body = "この度は、お問い合わせ頂き誠にありがとうございます。\n\n";

      $i = 0;
      foreach ($clean as $key => $value) {
        if (!empty($value) && $key !== 'recaptchaResponse' && $key !== 'agree') {
          $mail->Body .= (isset($labels[$i]) ? "{$labels[$i]}: " : "") . "$value\n";
          $i++;
        }
      }

      $mail->send();
      $page_flag = 2;
    } catch (Exception $e) {
      error_log("PHPMailerエラー: " . $mail->ErrorInfo);
      $page_flag = 3;
    }
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
        <?php
        $i = 0;
        foreach ($clean as $key => $value):
          if ($key !== 'btn_confirm'):
        ?>
            <?php if ($key !== 'agree' && !empty($value)): ?>
              <div class="conf_wrap">
                <label class="conf_label"><?= $labels[$i]; ?></label>
                <p class="conf_textarea"><?= $value; ?></p>
              </div>
            <?php endif; ?>
            <input type="hidden" name="<?= $key; ?>" value="<?= $value; ?>">
        <?php
            $i++;
          endif;
        endforeach;
        ?>

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
      </form>
    </div>

  <?php elseif ($page_flag === 3) : ?>

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
            <span><?= $labels[0]; ?></span>
            <p class="error-text">※<?= $labels[0]; ?>を入力してください。</p>
          </div>
        </div>

        <div class="input-area">
          <span class="required" data-validated="OK">必須</span>
          <div class="label">
            <input type="email" placeholder=" " name="email" value="<?= backVal('email'); ?>" class="has-value">
            <span><?= $labels[1]; ?></span>
            <p class="error-text">※<?= $labels[1]; ?>を入力してください。</p>
            <p class="error-text-mail">※正しい形式で入力してください。</p>
          </div>
        </div>

        <div class="input-area">
          <span class="required" data-validated="OK">必須</span>
          <div class="label">
            <input type="tel" inputmode="numeric" placeholder=" " name="phone" value="<?= backVal('phone'); ?>" class="has-value">
            <span><?= $labels[2]; ?></span>
            <p class="error-text">※<?= $labels[2]; ?>を半角数字10〜11桁（ハイフン有無どちらでも可）で入力してください。</p>
          </div>
        </div>

        <div class="input-area">
          <span class="required" data-validated="OK">必須</span>
          <div class="label select-box">
            <select name="content-type" class="has-value">
              <option value="0">選択してください</option>
              <?php
              $options = ['ご相談', '演奏依頼', '楽曲提供依頼', '指導依頼', 'その他'];
              foreach ($options as $o):
              ?>
                <option value="<?= $o ?>" <?= backVal('content-type', 'selected', $o); ?>><?= $o ?></option>
              <?php endforeach; ?>
            </select>
            <span><?= $labels[3]; ?></span>
            <p class="error-text">※<?= $labels[3]; ?>を選択してください。</p>
          </div>
        </div>

        <div class="input-area">
          <span class="required" data-validated="OK">必須</span>
          <div class="label">
            <textarea name="content" rows="8" placeholder=" " class="has-value"><?= backVal('content'); ?></textarea>
            <span><?= $labels[4]; ?></span>
            <p class="error-text">※<?= $labels[4]; ?>を入力してください。</p>
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