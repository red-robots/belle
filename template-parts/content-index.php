<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row-1">
		<figure>
			<img src="<?php wp_get_attachment_image_src(get_field("row_1_photo"),"full")[0];?>" alt="<?php get_post(get_field("row_1_photo"))->post_title;?>">
		</figure>
		<header>
			<h1><?php the_title();?></h1>
		</header>
		<section class="copy">
			<?php echo get_field("row_1_description");?>
		</section><!--.copy-->
	</div><!-- .row-1 -->
	<section class="row-2">
		<figure>
			<img src="<?php wp_get_attachment_image_src(get_field("row_2_photo"),"full")[0];?>" alt="<?php get_post(get_field("row_2_photo"))->post_title;?>">
		</figure>
		<section class="copy">
			<?php echo get_field("row_2_description");?>
		</section><!--.copy-->
	</section><!-- .row-2 -->
	<section class="row-3">

	</section><!-- .row-3 -->
	<section class="row-4">

	</section><!-- .row-4 -->
	<section class="row-5">

	</section><!-- .row-5 -->
	<section class="row-6">

	</section><!-- .row-6 -->
</article><!-- #post-## -->
