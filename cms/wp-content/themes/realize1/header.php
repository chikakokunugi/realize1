<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package realize1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>神戸・大阪・京都の建築全般（改修工事・リフォーム）REALIZE リアライズ1</title>
	<meta name="description" content="神戸・大阪・京都のビル・マンションの建築全般（改修工事・リフォーム）。
    性能や機能を向上させ安心性、安全性、建物の資産価値を維持・向上させるためREALIZE リアライズは現実化致します。">
    <meta name="keywords" content="神戸,建築全般,改修工事,リフォーム,大阪,京都,ビル,マンション">
    <meta name="author" content="REALIZE1 リアライズ1">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&amp;family=Roboto&amp;display=swap" rel="stylesheet"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"/>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
	  (function(d) {
		var config = {
		  kitId: 'grg6pye',
		  scriptTimeout: 3000,
		  async: true
		},
		h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	  })(document);
	</script>
	<?php wp_head(); ?>
</head>

<body>
<?php if (is_front_page() || is_home()): ?>
<div id="preloader">
  <video autoplay muted playsinline id="loadingVideo">
  <source src="/loading2.mp4" type="video/mp4" media="(min-width:541px)">
  <source src="/loading2_sp2.mp4" type="video/mp4" media="(max-width:540px)">
  </video>

</div>
<div id="mainContent" style="display: none;">
<?php endif; ?>
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
      <a href="<?php echo home_url(); ?>/">
       トップ
      </a>
     </li>
     <li>
      <a href="<?php echo home_url(); ?>/philosophy/">
       私たちの想い
      </a>
     </li>
     <li>
      <a href="<?php echo home_url(); ?>/business/">
       業務内容
      </a>
     </li>
     <li>
      <a href="<?php echo home_url(); ?>/company/">
       会社概要
      </a>
     </li>
		<li>
      <a href="<?php echo home_url(); ?>/record/">
       施工実績
      </a>
     </li>
     <li>
      <a href="<?php echo home_url(); ?>/contact/">
       お問い合わせ
      </a>
     </li>
     <li>
      <a href="<?php echo home_url(); ?>/privacy/">
       プライバシーポリシー
      </a>
     </li>
    </ul>
   </nav>
<!-- ヘッダー -->
<header class="header<?php if (!is_front_page() || !is_home()): ?> header_sub<?php endif; ?>">
    <div class="header-container">
        <div class="logo">
			<a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="株式会社REALIZE1" class="logo-img"></a>
        </div>
    </div>
</header>
