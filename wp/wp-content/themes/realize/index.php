<?php get_header(); ?>

<style>
    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
  overflow: hidden; /* ローディング中はスクロール禁止 */
background-color:#0082CD
    }

    section {
      padding: 40px 0;
    }

    section.message {
      background-color: #ffffff;
      padding: 80px 20px;
      text-align: center;
    }

    .message img {
      max-width: 100%;
      height: auto;
      width: 300px;
    }

    @media (max-width: 768px) {
      .message img {
        width: 50%;
      }
    }
    .slidein-container {
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
      width: 100%;
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

    section.blue-section {
      background-color: ;
      text-align: center;
      padding: 100px 20px;
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

.logo-sec {
   background-color: ;
      text-align: center;
      padding: 20px 20px 50px 20px;
}
.logo-sec2 {
   background-color: ;
      text-align: center;
      padding: 50px 20px 10px 20px;
}


    @media (max-width: 768px) {
      .blue-section img {
        width: 100%;    
max-width:100%
      }
   .blue-section  {
        width: 100%;    
max-width:100%;
margin:0;
padding:0;
}

.logo img {
 max-width:200px;
}

 .insta-icon img {
max-width: 30px;
padding-right:30px
}

  section.blue-section {
      background-color: ;
      text-align: center;
      padding: 10px 0px;
    }

    }

.logo-sec img {
  	max-width: 50px;
 	 height: auto;
 	 width: auto;
  display: block;
  margin: 0 auto;
  max-width: 100%;
  height: auto;
	}
.logo-sec2 img {
  	max-width: 50px;
 	 height: auto;
 	 width: auto;
  display: block;
  margin: 0 auto;
  max-width: 100%;
  height: auto;
	}

#preloader {
  position: fixed;
  top:0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #fff;/* or any fallback color */
  z-index: 9999;
}


#preloader video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}


.video-container {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.video-container video {
  width: 100%;
  height: auto;
  display: block;
}

.overlay-image {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 55%; /* お好みで調整 */
  transform: translate(-50%, -50%);
  pointer-events: none; /* 画像の上でも動画の操作を有効にする */
  max-width: 100%;
  height: auto;
}

.video-wrapper {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.video-wrapper video {
  width: 100%;
  height: auto;
  display: block;
}

.overlay-text {
  position: absolute;
  top: 50%; /* ← 少し下げて中央付近に */
  left: 50%;
  width: 40%; /* ← さらに一段階小さく */
  transform: translate(-50%, -50%);
  pointer-events: none;
  max-width: 100%;
  height: auto;
}

p {
color: white;
}
p span { border-bottom: solid 1px white;  margin-bottom: 10px;}
  </style>

<div id="preloader">
  <video autoplay muted playsinline id="loadingVideo">
    <source src="https://realize1-archit.jp/loading2.mp4" type="video/mp4">
  </video>
</div>

<div id="mainContent" style="display: none;">
  <header class="site-header">
   <div class="container header-inner">
    <div class="logo">
        <img src="https://realize1-archit.jp/header-logo.png" alt="会社ロゴ">
    </div>
  <!--  <a aria-label="Instagram" class="insta-icon" href="#"><img src="https://realize1-archit.jp/insta.png" alt="インスタグラム"> </a>-->
   </div>
   <div class="hamburger" id="hamburger">
    <div class="bar">
    </div>
    <div class="bar">
    </div>
    <div class="bar">
    </div>
    <div class="bar">
    </div>
    <span>
     INDEX
    </span>
   </div>
   <nav class="nav-menu" id="navMenu">
    <div class="close-btn" id="closeBtn">
     ×
    </div>
    <ul>
     <li>
      <a href="<?php echo home_url('/'); ?>">
       トップ、
      </a>
     </li>
     <li>
      <a href="<?php echo home_url('/philosophy/'); ?>">
       私たちの想い
      </a>
     </li>
     <li>
      <a href="<?php echo home_url('/business/'); ?>">
       業務内容
      </a>
     </li>
     <li>
      <a href="<?php echo home_url('/company/'); ?>">
       会社概要
      </a>
     </li>
		    <li>
      <a href="<?php echo home_url('/record/'); ?>">
       施工実績
      </a>
     </li>
     <li>
      <a href="https://realize1-archit.jp/contact.php">
       お問い合わせ
      </a>
     </li>
     <li>
      <a href="<?php echo home_url('/privacy-policy/'); ?>">
       プライバシーポリシー
      </a>
     </li>
    </ul>
   </nav>
  </header>
<div class="video-wrapper">
  <video autoplay muted loop playsinline>
    <source src="movie2.mp4" type="video/mp4">
  </video>
  <img src="https://realize1-archit.jp/top-message02.png" alt="Overlay" class="overlay-text">
</div>
  
  <section class="logo-sec2">
  <div class="slidein-container">
    <div class="slidein-block js-slide-right">
    <img src="https://realize1-archit.jp/logo.png" alt="Realize1 Logo">
    </div>
  </div>
  </section>

  <section class="logo-sec">
  <div class="slidein-container">
    <div class="slidein-block js-slide-right">
    <img src="https://realize1-archit.jp/new02.png" alt="Realize1 Logo"><br>
    <img src="https://realize1-archit.jp/new-txt03.png" alt="Realize1 Logo">
    </div>
  </div>
  </section>
<section><a href="philosophy.html">
  <div class="slidein-container">
    <div class="slidein-block js-fade">
		<div class="slidein-block js-fade">
  <picture>
    <!-- モバイル用画像（最大幅768pxまで） -->
    <source srcset="https://realize1-archit.jp/section-image02-0730.png" media="(max-width: 768px)">
    <!-- PC用画像（デフォルト） -->
    <img src="https://realize1-archit.jp/section-image02.png" alt="セクション全体画像">
  </picture>
</div>
    </div>
	  
	  
  </div>
</a></section>
<section><a href="business.html">
  <div class="slidein-container">
    <div class="slidein-block js-slide-right">
		  <picture>
    <!-- モバイル用画像（最大幅768pxまで） -->
    <source srcset="https://realize1-archit.jp/business-0730.png" media="(max-width: 768px)">
    <!-- PC用画像（デフォルト） -->
    <img src="https://realize1-archit.jp/business.png" alt="ビジネス">
  </picture>
    </div>
  </div>
</a></section>

<section><a href="record.html">
  <div class="slidein-container">
    <div class="slidein-block js-fade">
				  <picture>
    <!-- モバイル用画像（最大幅768pxまで） -->
    <source srcset="https://realize1-archit.jp/construction-0730.png" media="(max-width: 768px)">
    <!-- PC用画像（デフォルト） -->
    <img src="https://realize1-archit.jp/construction.png" alt="コンストラクション">
  </picture>
    </div>
  </div>
	</a></section>
	
	
  <footer class="site-footer">
   <img alt="背景ロゴ" class="footer-bg" src="https://realize1-archit.jp/アセット 1.png"/>
   <div class="footer-inner">
    <div class="footer-box">
     <img alt="access icon" class="footer-icon" src="https://realize1-archit.jp/f-access.png"/>
     <div class="footer-label">
      ACCESS
     </div>
     <div class="footer-text">
      〒650-0034
      <br/>
      神戸市中央区京町80
      <br/>
      クリエイト神戸 3F
     </div>
    </div>
    <div class="footer-box"><a href="contact.php" style="color:white; text-decoration:none;">
     <img alt="contact icon" class="footer-icon" src="https://realize1-archit.jp/f-mail.png"/>
     <div class="footer-label">
      CONTACT US
     </div>
     <div class="footer-text">
      お問い合わせ
     </div></a>
    </div>
   </div>
  </footer>
 </div>
<script>
// ハンバーガーメニュー制御
const hamburger = document.getElementById("hamburger");
const navMenu = document.getElementById("navMenu");
const closeBtn = document.getElementById("closeBtn");

hamburger.addEventListener("click", () => {
  navMenu.classList.add("open");
});

closeBtn.addEventListener("click", () => {
  navMenu.classList.remove("open");
});
</script>
<script>
function showOnScroll() {
  $('.js-fade').each(function () {
    const elemTop = $(this).offset().top;
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();
    if (scroll + windowHeight > elemTop + 50) {
      $(this).css({
        opacity: 1,
        transform: 'translateX(0)',
        transition: 'all 0.8s ease-out'
      });
    }
  });

  $('.js-slide-right').each(function () {
    const elemTop = $(this).offset().top;
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();
    if (scroll + windowHeight > elemTop + 50) {
      $(this).css({
        opacity: 1,
        transform: 'translateX(0)',
        transition: 'all 0.8s ease-out'
      });
    }
  });
}

window.addEventListener('DOMContentLoaded', function () {
  const preloader = document.getElementById('preloader');
  const mainContent = document.getElementById('mainContent');
  const video = document.getElementById('loadingVideo');

  const showMainContent = () => {
    preloader.style.display = 'none';
    mainContent.style.display = 'block';
    document.body.style.overflow = 'auto';

    // 必ずアニメーションを起動させる
    setTimeout(() => {
      showOnScroll(); // 一回目
    }, 100);
    setTimeout(() => {
      showOnScroll(); // 念押し二回目（100ms後）
    }, 500);

    // スクロール時にも反応
    window.addEventListener('scroll', showOnScroll);
  };

  video.addEventListener('ended', showMainContent);

  // 念のため5秒後にも表示（動画が再生されなかった場合の保険）
  setTimeout(() => {
    if (preloader.style.display !== 'none') {
      showMainContent();
    }
  }, 5000);
});
</script>
<?php get_footer(); ?>