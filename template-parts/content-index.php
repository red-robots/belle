<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(get_field("row_1_photo")):?>
		<img class="featured-image" src="<?php echo wp_get_attachment_image_src(get_field("row_1_photo"),"full")[0];?>" alt="<?php echo get_post(get_field("row_1_photo"))->post_title;?>">
	<?php endif;?>
	<div class="row-1">
		<header>
			<h1><?php echo get_field("row_1_title");?></h1>
		</header>
		<section class="copy">
			<?php echo get_field("row_1_description");?>
		</section><!--.copy-->
	</div><!-- .row-1 -->
	<div class="row-2">
		<?php if(get_field("row_2_photo")):?>
			<img src="<?php echo wp_get_attachment_image_src(get_field("row_2_photo"),"full")[0];?>" alt="<?php echo get_post(get_field("row_2_photo"))->post_title;?>">
		<?php endif;?>
		<section class="copy">
			<header>
				<h2><?php echo get_bloginfo("name");?></h2>
			</header>
			<?php echo get_field("row_2_description");?>
			<div class="link full-article">
				<?php echo get_field("row_2_link");?>	
			</div>
		</section><!--.copy-->
	</div><!-- .row-2 -->
	<section class="row-3">

	</section><!-- .row-3 -->
	<section class="row-4">

	</section><!-- .row-4 -->
	<section class="row-5">

	</section><!-- .row-5 -->
	<section class="row-6">

	</section><!-- .row-6 -->
</article><!-- #post-## -->
