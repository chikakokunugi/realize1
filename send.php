<?php
session_start();
$form = $_SESSION['form'] ?? $_POST;

$to = "info@realize1-archit.jp";
$subject = "お問い合わせがありました";
$message = "以下の内容でお問い合わせがありました。

";
foreach ($form as $key => $value) {
  $message .= "{$key}：{$value}
";
}
$headers = "From: " . $form['email'];

mail($to, $subject, $message, $headers);

// 自動返信
$auto_subject = "お問い合わせありがとうございます";
$auto_message = "{$form['name']}様

この度はお問い合わせいただき、誠にありがとうございます。
以下の内容で受け付けいたしました。

";
foreach ($form as $key => $value) {
  $auto_message .= "{$key}：{$value}
";
}
$auto_message .= "
担当より改めてご連絡いたしますので、今しばらくお待ちください。";

mail($form['email'], $auto_subject, $auto_message, "From:info@realize1-archit.jp");

header("Location: complete.php");
exit;
?>