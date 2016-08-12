<?php
/**
 * Template part for displaying page content for the property search.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="page-<?php the_ID(); ?>" <?php post_class("featured-listing"); ?>>
	<div class="row-1">
		<header>
			<h1><?php the_title();?></h1>
		</header>
		<section class="copy">
			<?php echo get_field("row_1_description");?>
		</section><!--.copy-->
	</div><!-- .row-1 -->
	<div class="row-2">
        <?php the_widget('idxqs_Widget','IDX : mylistings');?>
	</div>
	<section class="row-3">
		<div class="copy">
			<?php echo get_field("row_3_description");?>	
		</div>
	</section><!-- .row-3 -->
	<?php get_footer("page");?>
</article><!-- #post-## -->
