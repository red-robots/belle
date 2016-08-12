<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="page-<?php the_ID(); ?>" <?php post_class("our-team"); ?>>
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
	<?php $args = array('post_type'=>'relator','order'=>'ASC','orderby'=>'menu_order','posts_per_page'=>-1);
	$query = new WP_Query($args);
	if($query->have_posts()):
		while($query->have_posts()):$query->the_post();?>
            <section class="relator">
                <header>
                    <h2><?php the_title();?></h2>
                    <div class="info">
                        <?php if(get_field("email")):?>
                            <span class="email">
                                <?php echo get_field("email");?>
                            </span>
                        <?php endif;?>
                        <?php if(get_field("phone_number")):?>
                            <span class="phone-number">
                                <?php echo get_field("phone_number");?>
                            </span>
                        <?php endif;?>
                    </div>
                </header>
                <div class="photo-copy wrapper clear-bottom">
                    <?php if(get_field("photo")):?>
                        <img src="<?php echo wp_get_attachment_image_src(get_field("photo"),"full")[0];?>" alt="<?php echo get_post(get_field("photo"))->post_title;?>">
                    <?php endif;?>
                    <?php if(get_field("description")):?>
                        <div class="copy">
                            <?php echo get_field("description");?>
                        </div><!--.copy-->
                    <?php endif;?>
                </div><!--.photo-copy .wrapper-->
            </section><!--.relator-->
        <?php endwhile;?>
    <?php wp_reset_postdata();
    endif;?>
    <?php get_footer("page");?>
</article><!-- #post-## -->
