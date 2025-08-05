<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Realize One - Header</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&amp;family=Roboto&amp;display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"/>
  <link href="style.css" rel="stylesheet"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
  <style>
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

.contact-form {
  max-width: 700px;
  margin: 0 auto;
  font-family: sans-serif;
  border-top: 1px solid #ccc;
  padding: 20px 10px;
color: #555;
}

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

.form-row input,
.form-row textarea {
  flex: 1;
  padding: 8px;
  border: 1px solid #ddd;
  font-size: 16px;
  width: 100%;
  box-sizing: border-box;
}

/* レスポンシブ対応：スマホ時は縦並び */
@media screen and (max-width: 600px) {
  .form-row {
    flex-direction: column;
    align-items: flex-start;
  }

  .form-row label {
    width: 100%;
    margin-bottom: 5px;
  }

  .form-row input,
  .form-row textarea {
    width: 100%;
  }
}

.contact-form {
  max-width: 700px;
  margin: 0 auto;
  font-family: sans-serif;
  border-top: 1px solid #ccc;
  padding-top: 20px;
}

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

.form-row input,
.form-row textarea {
  flex: 1;
  padding: 8px;
  border: 1px solid #ddd;
  font-size: 16px;
  width: 100%;
  box-sizing: border-box;
}

/* レスポンシブ対応：スマホ時は縦並び */
@media screen and (max-width: 600px) {
  .form-row {
    flex-direction: column;
    align-items: flex-start;
  }

  .form-row label {
    width: 100%;
    margin-bottom: 5px;
  }

  .form-row input,
  .form-row textarea {
    width: 100%;
  }
}


.btn_09 {
  display: block;
  text-align: center;
  vertical-align: middle;
  width: 200px;
  margin: 50px auto;
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


  </style>
</head>
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
    <div class="">
      <div class="">
        <img src="contact04.png" alt="会社ロゴ">
      </div>
    </div>
  </section>
  <form class="contact-form" action="confirm.php" method="post">
    <?php function val($key) {
      return isset($_SESSION['form'][$key]) ? htmlspecialchars($_SESSION['form'][$key]) : '';
    } ?>
    <div class="form-row">
      <label for="company">会社名<span class="required">※</span></label>
      <input type="text" id="company" name="company" required value="<?php echo val('company'); ?>">
    </div>

    <div class="form-row">
      <label for="department">部署名<span class="required">※</span></label>
      <input type="text" id="department" name="department" required value="<?php echo val('department'); ?>">
    </div>

    <div class="form-row">
      <label for="name">お名前<span class="required">※</span></label>
      <input type="text" id="name" name="name" required value="<?php echo val('name'); ?>">
    </div>

    <div class="form-row">
      <label for="tel">電話番号<span class="required">※</span></label>
      <input type="tel" id="tel" name="tel" required value="<?php echo val('tel'); ?>">
    </div>

    <div class="form-row">
      <label for="fax">FAX番号</label>
      <input type="text" id="fax" name="fax" value="<?php echo val('fax'); ?>">
    </div>

    <div class="form-row">
      <label for="email">メールアドレス<span class="required">※</span></label>
      <input type="email" id="email" name="email" required value="<?php echo val('email'); ?>">
    </div>

    <div class="form-row">
      <label for="email-confirm">メールアドレス<br>再入力<span class="required">※</span></label>
      <input type="email" id="email-confirm" name="email-confirm" required value="<?php echo val('email-confirm'); ?>">
    </div>

    <div class="form-row">
      <label for="message">お問い合わせ内容<span class="required">※</span></label>
      <textarea id="message" name="message" rows="5" required><?php echo val('message'); ?></textarea>
    </div>

    <button type="submit" class="btn_09">送信</button>
  </form>

  <footer class="site-footer">
    <img alt="背景ロゴ" class="footer-bg" src="アセット 1.png"/>
    <div class="footer-inner">
      <div class="footer-box">
        <img alt="access icon" class="footer-icon" src="アセット 2.png"/>
        <div class="footer-label">ACCESS</div>
        <div class="footer-text">〒650-0034<br/>神戸市中央区京町80<br/>クリエイト神戸 3F</div>
      </div>
      <div class="footer-box">
        <img alt="contact icon" class="footer-icon" src="アセット 2.png"/>
        <div class="footer-label">CONTACT US</div>
        <div class="footer-text">お問い合わせ</div>
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

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const form = document.querySelector('.contact-form');
      const email = document.getElementById('email');
      const emailConfirm = document.getElementById('email-confirm');

      form.addEventListener('submit', function (e) {
        if (email.value !== emailConfirm.value) {
          alert('メールアドレスが一致していません。');
          e.preventDefault();
        }
      });
    });
  </script>
</body>
</html>