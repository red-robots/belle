<?php
/**
 * Template part for displaying page content for the 404.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="page-<?php the_ID(); ?>" <?php post_class("page-404"); ?>>
	<div class="row-1">
		<header>
			<h1>404</h1>
		</header>
        <section class="copy">
            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below?'); ?></p>
        </section><!--.copy-->
	</div><!-- .row-1 -->
	<section class="row-2">
        <nav class="sitemap"><?php wp_nav_menu( array( 'theme_location'=>'sitemap' ) ); ?></nav>
	</section>
    <?php get_footer("page");?>
</article><!-- #post-## -->
