<?php
/**
 * Template Name: Living Here
 *
 * This is the template that displays all pages by default.
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
		<div class="main-footer wrapper right-column">
			<main id="main" class="site-main" role="main">
				<?php get_template_part("/template-parts/content","living-here");?>
			</main><!-- #main -->
			<?php get_footer("page");?>
		</div><!--.main-footer-wrapper-->
	</div><!-- #primary -->
<?php get_footer();