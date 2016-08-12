<?php
/**
 * Template part for displaying page content for the belle difference.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="page-<?php the_ID(); ?>" <?php post_class("the-belle-difference"); ?>>
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
	<div class="row-2">
		<?php if(get_field("row_2_photo")):?>
			<div class="image wrapper"><img src="<?php echo wp_get_attachment_image_src(get_field("row_2_photo"),"full")[0];?>" alt="<?php echo get_post(get_field("row_2_photo"))->post_title;?>"></div><!--.image .wrapper-->
		<?php endif;?>
		<section class="testimonial">
			<?php $args = array('post_type'=>'testimonial','order'=>'ASC','orderby'=>'rand','posts_per_page'=>1);
			$query = new WP_Query($args);
			if($query->have_posts()):
				$query->the_post();?>
				<div class="quote wrapper">
                    <blockquote>
                        <?php echo get_the_content();?>
                    </blockquote>
                </div><!--.quote .wrapper-->
			<?php wp_reset_postdata();
			endif;?>
		</section><!--.testimonial-->
	</div><!-- .row-2 -->
	<section class="row-3">
		<?php if(get_field("row_3_title")):?>
            <header>
                <h1><?php echo get_field("row_3_title");?></h1>
            </header>
        <?php endif;?>
        <?php if(get_field("row_3_description")):?>
            <div class="copy">
                <?php echo get_field("row_3_description");?>
            </div><!--.copy-->
        <?php endif;?>
    </section><!-- .row-3 -->
	<?php if(get_field("row_4_description")):?>
        <section class="row-4">
            <div class="copy">
                <?php echo get_field("row_4_description");?>	
            </div>
        </section><!-- .row-4 -->
	<?php endif;?>
	<?php get_footer("page");?>
</article><!-- #post-## -->
