<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="page-<?php the_ID(); ?>" <?php post_class("page-template"); ?>>
	<div class="row-1">
		<header>
			<h1><?php the_title();?></h1>
		</header>
		<section class="copy">
			<?php echo get_field("row_1_description");?>
		</section><!--.copy-->
	</div><!-- .row-1 -->
	<section class="row-2">
		<?php if(get_field("row_2_photo")):?>
			<figure>
				<img src="<?php wp_get_attachment_image_src(get_field("row_2_photo"),"full")[0];?>" alt="<?php get_post(get_field("row_1_photo"))->post_title;?>">
			</figure>
		<?php endif;?>
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
	<?php get_footer("page");?>
</article><!-- #post-## -->
