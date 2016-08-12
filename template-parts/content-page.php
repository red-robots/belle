<?php
/**
 * Template part for displaying page content for the page template.
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
        <?php if(get_field("row_1_description")):?>
            <section class="copy">
                <?php echo get_field("row_1_description");?>
            </section><!--.copy-->
        <?php endif;?>
	</div><!-- .row-1 -->
    <?php if(get_field("row_2_description")):?>
        <section class="row-2">
            <div class="copy">
                <?php echo get_field("row_2_description");?>	
            </div>
        </section><!-- .row-3 -->
    <?php endif;?>
	<?php get_footer("page");?>
</article><!-- #post-## -->
