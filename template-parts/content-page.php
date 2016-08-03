<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("page"); ?>>
	<div class="row-1">
		<header>
			<h1><?php the_title();?></h1>
		</header>
		<section class="copy">
			<?php echo get_field("row_1_description");?>
		</section><!--.copy-->
	</div><!-- .row-1 -->
	<section class="row-2">
		<figure>
			<img src="<?php wp_get_attachment_image_src(get_field("row_2_photo"),"full")[0];?>" alt="<?php get_post(get_field("row_1_photo"))->post_title;?>">
		</figure>
		<!--insert testimonial here-->
	</section><!-- .row-2 -->
	<section class="row-3">
		<header>
			<h1><?php echo get_field("row_3_title");?></h1>
		</header>
		<div class="copy">
			<?php echo get_field("row_3_description");?>
		</div><!--.copy-->
	</section><!-- .row-3 -->
	<section class="row-4">
		<div class="copy">
			<?php echo get_field("row_4_description");?>	
		</div>
	</section><!-- .row-4 -->
</article><!-- #post-## -->
