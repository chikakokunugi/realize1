<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: contact.php");
  exit;
}
$_SESSION['form'] = $_POST;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Realize One - 確認画面</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&amp;family=Roboto&amp;display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"/>
  <link href="style.css" rel="stylesheet"/>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }
form { padding: 10px;}
    .form-row {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .form-row label {
      width: 160px;
      font-weight: bold;
    }

    .form-row .required {
      color: red;
      margin-left: 5px;
    }

    .site-footer {
      background: #00B9EF;
      color: white;
      position: relative;
      z-index: 1;
      padding: 100px 20px 160px;
      margin-top: 200px;
    }

    .footer-inner {
      max-width: 700px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      gap: 20px;
    }

    .footer-box {
      flex: 1;
      text-align: center;
    }

    .btn_09 {
      display: inline-block;
      text-align: center;
      width: 200px;
      margin: 10px;
      padding: 1rem 2rem;
      font-weight: bold;
      font-size: 16px;
      background: linear-gradient(to top, rgb(5, 130, 174), #27acd9);
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
      transition: 0.3s ease;
    }

    .btn_09:hover {
      opacity: 0.7;
    }

    @media screen and (max-width: 600px) {
      .form-row {
        flex-direction: column;
        align-items: flex-start;
      }

      .form-row label {
        width: 100%;
        margin-bottom: 5px;
      }
    }

    .confirm-box {
      max-width: 700px;
      margin: 40px auto;
      padding-top: 20px;
      border-top: 1px solid #ccc;
      color: #555;
    }

    .form-row div.value {
      flex: 1;
      padding: 8px;
      border: 1px solid #ddd;
      background: #fafafa;
      white-space: pre-wrap;
    }

 body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }
  .blue-section img {
  	max-width: 100%;
 	 height: auto;
 	 width: auto;
  display: block;
  margin: 0 auto;
  max-width: 100%;
  height: auto;
	}
    
    section {
      padding: 40px 0;
    }
    section.message {
      background-color: #ffffff;
      padding: 80px 20px;
      text-align: center;
    }
  .blue-section img {
  	max-width: 100%;
 	 height: auto;
 	 width: auto;
  display: block;
  margin: 0 auto;
  max-width: 100%;
  height: auto;
	}
    
    .message img {
      max-width: 100%;
      height: auto;
      width: 300px;
    }

    section.blue-section {
      background-color: ;
      text-align: center;
      padding: 50px 20px;
    }



 .slidein-container {
  position: relative;
  z-index: 1; /* ← 手前に出す */
  max-width: 800px;
  margin: 0 auto;
  padding: 0 20px;
}

    .slidein-block {
      opacity: 0;
      transform: translateX(-50px);
      transition: all 0.8s ease-out;
    }

    .slidein-block.in-view {
      opacity: 1;
      transform: translateX(0);
    }

    .slidein-block img {
      height: auto;
      display: block;
    }
.js-fade {
  opacity: 0;
  transform: translateX(-50px);
}

.js-slide-right {
  opacity: 0;
  transform: translateX(50px);
}

  

    .site-footer {
      background: #00B9EF;
      color: white;
      position: relative;
      z-index: 1;
      padding: 100px 20px 160px;
margin-top:200px;
    }

    .footer-inner {
      max-width: 700px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      gap: 20px;
    }

    .footer-box {
      flex: 1;
      text-align: center;
    }

.btn_09.white {
  background: #fff;
  color: #27acd9;
  border: 2px solid #27acd9;
  text-decoration: none;
  display: inline-block;
  text-align: center;
  width: 200px;
  margin: 10px;
  padding: 1rem 0;
  font-weight: bold;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
  box-shadow: 0 2px 5px rgba(0, 0, 0, .1);
  transition: 0.3s ease;
}

.btn_09.white:hover {
  background: #f3faff;
}

  </style>
</head>
<body>
  <header>
    <img src="contact05.png" alt="会社ロゴ" style="width:100%">
    <div class="hamburger" id="hamburger">
      <div class="bar"></div><div class="bar"></div><div class="bar"></div><div class="bar"></div>
      <span>INDEX</span>
    </div>
    <nav class="nav-menu" id="navMenu">
      <div class="close-btn" id="closeBtn">×</div>
      <ul>
        <li><a href="index.html">トップ</a></li>
        <li><a href="philosophy.html">私たちの想い</a></li>
        <li><a href="business.html">業務内容</a></li>
        <li><a href="company.html">会社概要</a></li>
		      <li>
      <a href="record.html">
       施工実績
      </a>
     </li>
        <li><a href="contact.php">お問い合わせ</a></li>
     <li>
      <a href="privacy-policy.html">
       プライバシーポリシー
      </a>
     </li>
      </ul>
    </nav>
  </header>

  <section class="blue-section">
        <img src="contact04.png" alt="会社ロゴ">
  </section>

  <div class="confirm-box">
    <h2 style="text-align:center;">以下の内容でよろしければ送信してください</h2>
    <form action="send.php" method="post">
<?php
$labels = [
  'company' => '会社名',
  'department' => '部署名',
  'name' => 'お名前',
  'tel' => '電話番号',
  'fax' => 'FAX番号',
  'email' => 'メールアドレス',
  'email-confirm' => 'メールアドレス再入力',
  'message' => 'お問い合わせ内容'
];
$required = ['company', 'department', 'name', 'tel', 'email', 'email-confirm', 'message'];
foreach ($labels as $key => $label):
  $value = $_POST[$key] ?? '';
?>
  <input type="hidden" name="<?= htmlspecialchars($key) ?>" value="<?= htmlspecialchars($value) ?>">
  <div class="form-row">
    <label><?= $label ?><?php if (in_array($key, $required)) echo '<span class="required">※</span>'; ?></label>
    <div class="value"><?= nl2br(htmlspecialchars($value)) ?></div>
  </div>
<?php endforeach; ?>
      <div style="text-align: center;">
        <button type="submit" class="btn_09">送信</button>
　　　<a href="contact.php" class="btn_09 white">戻る</a>
      </div>
    </form>
  </div>

  <footer class="site-footer">
    <img alt="背景ロゴ" class="footer-bg" src="アセット 1.png"/>
    <div class="footer-inner">
      <div class="footer-box">
        <img alt="access icon" class="footer-icon" src="f-access.png"/>
        <div class="footer-label">ACCESS</div>
        <div class="footer-text">〒650-0034<br/>神戸市中央区京町80<br/>クリエイト神戸 3F</div>
      </div>
      <div class="footer-box"><a href="contact.php" style="color:white; text-decoration:none;">
        <img alt="contact icon" class="footer-icon" src="f-mail.png"/>
        <div class="footer-label">CONTACT US</div>
        <div class="footer-text">お問い合わせ</div></a>
      </div>
    </div>
  </footer>

  <script>
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("navMenu");
    const closeBtn = document.getElementById("closeBtn");
    hamburger.addEventListener("click", () => navMenu.classList.add("open"));
    closeBtn.addEventListener("click", () => navMenu.classList.remove("open"));
  </script>
</body>
</html>