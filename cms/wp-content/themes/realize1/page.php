<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package realize1
 */

get_header();
?>
<div id="Title01">
<img src="<?php the_field('title_img'); ?>" alt="<?php the_title(); ?>">
</div><!-- #Title01-->

<div id="BlockPage01" class="<?php echo get_post_field('post_name'); ?>">
<div id="BlockPage01Inner">
<div id="Title02" class="slidein-block js-fade">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_s.png" alt="">
<h3>[ <?php the_title(); ?> ]</h3>
<h4><img src="<?php echo get_template_directory_uri(); ?>/assets/img/h4_<?php echo get_post_field('post_name'); ?>.png" alt=""></h4>
</div><!-- #Title02-->
	
	<?php the_content(); ?>

</div><!-- #BlockPage01Inner-->
</div><!-- #BlockPage01-->

<?php
get_footer();
