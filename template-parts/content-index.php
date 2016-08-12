<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="page-<?php the_ID(); ?>" <?php post_class("index"); ?>>
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
        <?php if(get_field("row_3_title")):?>
            <header>
                <h2><?php echo get_field("row_3_title");?></h2>
                <?php if(get_field("row_3_link")):?>
                    <span><?php echo get_field("row_3_link");?></span>
                <?php endif;?>
            </header>
        <?php endif;?>
        <div class="davis-farrell">
			<?php echo do_shortcode('[idx mylistings="1" n="3"]');?>
        </div><!--davis-farrell-->
	</section><!-- .row-3 -->
	<div class="row-4">
		<section class="facebook-feed">
			<?php echo do_shortcode("[custom-facebook-feed]");?>
		</section><!--.facebook-feed-->
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
			<?php $post = get_post(51);
            setup_postdata($post);
			endif;?>
		</section><!--.testimonial-->
	</div><!-- .row-4 -->
	<section class="row-5">
		<div class="hashtag">
			<?php if(get_field("row_5_hashtag")) echo get_field("row_5_hashtag");?>
		</div><!--.hastag-->
		<div class="instagram-feed">
			<?php echo do_shortcode("[instagram-feed]");?>
		</div><!--.instagram-feed-->
	</section><!-- .row-5 -->
	<?php get_footer("page");?>
</article><!-- #post-## -->
