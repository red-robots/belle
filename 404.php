<?php
/**
 *
 * This is the template that displays 404 pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php get_sidebar();?>
		<main id="main" class="site-main" role="main">
			<?php get_template_part("/template-parts/content","404");?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
