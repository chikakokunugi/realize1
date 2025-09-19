<?php get_header(); ?>
<style>
    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
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

    section.blue-section {
      background-color: ;
      text-align: center;
      padding: 50px 20px 10px;
    }

   @media (max-width: 768px) {
    section.blue-section {
      background-color: ;
      text-align: center;
      padding: 30px 20px;
    }}

  .blue-section img {
  	max-width: 100%;
 	 height: auto;
 	 width: auto;
  display: block;
  margin: 0 auto;
  max-width: 100%;
  height: auto;
	}
    
   @media (max-width: 768px) {
.blue-section img {
  	width: 80%;
 	 height: auto;
 
  display: block;
  margin: 0 auto;
  max-width: 100%;
  height: auto;
	}}


section.philosophy-message {
  text-align: center;
  margin: -40px 20px -100px; /* ←ここを変更（-80px → -20px） */


    @media (max-width: 768px) {
      .message img {
        width: 50%;
      }
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

    .back-image{
      width: 100%;
      max-width: 1000px;
    }
.back-image {
  position: relative;
  text-align: center;
  margin-bottom: 0; /* ←ここでアーチの下に空間ができていれば削る */
  z-index: 0;
}

    .back-image img {
      width: 100%;
      max-width: 1000px;
      height: auto;
      display: block;
      margin: 0 auto;
    }

    .site-footer {
      background: #00B9EF;
      color: white;
      position: relative;
      z-index: 1;
      padding: 100px 20px 160px;
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

.footer-arch {
  position: relative;
  margin-top: -250px;
  z-index: 0; /* ← 背面へ */
  text-align: center;
}

.footer-arch img {
  width: 100%;
  max-width: 1500px;
  height: auto;
  display: block;
  margin: 0 auto  0px;
opacity:0.7;
}

    @media (max-width: 768px) {
    section.blue-section {
      background-color: ;
      text-align: center;
      padding: 50px 20px;
    }


.footer-arch {
  position: relative;
  margin-top: -20px;
  z-index: 0; /* ← 背面へ */
  text-align: center;
}

.footer-arch img {
  width: 100%;
  max-width: 1500px;
  height: auto;
  display: block;
  margin: 0 auto  0px;
opacity:0.8;
}



}
  </style>
  <header >
 <img src="https://realize1-archit.jp/philosophy.png" alt="会社ロゴ" style="width:100%">
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
       トップ
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
  <section class="blue-section">
  <div class="slidein-container">
    <div class="slidein-block js-fade">
    <img src="https://realize1-archit.jp/philophilo.png" alt="phi02">
    </div>
  </div>
  </section>

  <section class="blue-section">
  <div class="slidein-container">
    <div class="slidein-block js-fade">
    <img src="https://realize1-archit.jp/philo-txt.png" alt="phi02" style="max-width: 800px; width:100%!important">
    </div>
  </div>
  </section>

<section class="blue-section" style="padding:0!important">
  <div class="slidein-container">
    <div class="slidein-block js-fade">
      <img src="https://realize1-archit.jp/philo-bg-final.png" alt="建物画像">
    </div>
  </div>
</section>
 

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
 
  <script>
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
  $(function () {
    function showOnScroll() {
      // 左から
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

      // 右から
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

    $(window).on('scroll load', showOnScroll);
  });
</script>


<?php get_footer(); ?>