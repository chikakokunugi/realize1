<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package realize1
 */

get_header();
?>


    <!-- ヒーローセクション -->
<section class="hero" id="hero">
    <div class="hero-image">
        <video autoplay muted loop playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/video/movie2.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay">
            <div class="hero-text-vertical">
                <p class="hero-text-small">リアライズワンは、</p>
                <p class="hero-text-small">資産価値高める</p>
                <p class="hero-text-small">想いを叶えます。</p>
                <p class="hero-text-small2">「みんなとともに」</p>
            </div>
<h1 class="hero-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/en_copy.svg" alt="Realize one ing the idea of “One for All” with K" class="logo-img"></h1>
        </div>
    </div>
</section>
<div class="video-wrapper_sp">
  <video autoplay="" muted="" loop="" playsinline="">
    <source src="/movie2.mp4" type="video/mp4">
  </video>
  <img src="/img/top-message02.png" alt="Overlay" class="overlay-text">
</div>
<div id="contents">
	

    <!-- What's Newセクション -->
    <section class="whats-new　slidein-block js-slide-right">
        <div class="container">
            <div class="section-header">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_s.png" alt="">
				<span class="section-label">[ お知らせ ]</span>
                <h2 class="section-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/h2_news.png" alt=""></h2>
            </div>
            <div class="news-content">
				<?php
				$args = array(
					'showposts' => -1,
					'posts_per_page' => 3,       // 表示件数
					'orderby' => 'date',
					'order' => 'desc',
				);
				query_posts($args); if(have_posts()):?>
				<ul>
				<?php while(have_posts()): the_post(); ?>
				<li><span><?php the_time("Y.m.d"); ?></span> <?php the_content(); ?></li>
				<?php endwhile; ?>
				<?php endif;?>
				<?php wp_reset_query(); ?>
				</ul>
            </div>
        </div>
    </section>
	

    <!-- 理念セクション -->
<section class="philosophy slidein-block js-fade" id="philosophy">

      <a href="<?php echo home_url(); ?>/philosophy/">
		 <div class="philosophy-wrapper">
        <div class="philosophy-text-box">
            <span class="section-label-jp">[ 私たちの想い ]</span>
            <h2 class="philosophy-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/h2_philosophy.png" alt=""></h2>
            <p class="philosophy-subtitle">みんなとともに</p>
        </div>
		<div class="philosophy-image-box">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_philosophy.png" alt="">
		</div>
    </div>
</a>
</section>
<section class="philosophy_sp slidein-block js-fade">
	<a href="<?php echo home_url(); ?>/philosophy/"><img src="/img/section-image02-0730.png" alt=""></a>
</section>

	
	

<!-- 事業内容セクション -->
<section class="business slidein-block js-slide-right" id="business">
    <a href="<?php echo home_url(); ?>/business/">
	<div class="business-wrapper">
        <div class="business-text-box">
            <span class="section-label-jp">[ 事業内容 ]</span>
            <h2 class="business-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/h2_business.png" alt=""></h2>
                    <ul class="business-list">
                        <li><span>◎</span>大規模修繕工事</li>
                        <li><span>◎</span>大規模改修工事</li>
                        <li><span>◎</span>リフォーム</li>
                    </ul>
        </div>
		<div class="business-image-box">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_business.png" alt="">
		</div>
    </div>
</a>
</section>
<section class="business_sp slidein-block js-slide-right" id="business">
    <a href="<?php echo home_url(); ?>/business/"><img src="/img/business-0730.png" alt=""></a>
</section>

<!-- 施工実績セクション -->
<section class="construction slidein-block js-fade" id="construction">
<a href="<?php echo home_url(); ?>/record/">
    <div class="construction-wrapper">
        <div class="construction-text-box">
            <span class="section-label-jp">[ 施工実績 ]</span>
            <h2 class="construction-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/h2_construction.png" alt=""></h2>
                    <ul class="construction-list">
                        <li><span>◎</span>外壁の修繕工事</li>
                        <li><span>◎</span>シーリング工事</li>
                        <li><span>◎</span>防水工事</li>
                        <li><span>◎</span>塗装工事</li>
                        <li><span>◎</span>給排水管等設備工事</li>
                        <li><span>◎</span>バリアフリー化</li>
                    </ul>
        </div>
		<div class="construction-image-box">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_construction.png" alt="">
		</div>
    </div>
</a>
</section>
<section class="construction_sp slidein-block js-fade">
    <a href="<?php echo home_url(); ?>/record/"><img src="/img/construction-0730.png" alt=""></a>
</section>
</div>

<?php
get_footer();
