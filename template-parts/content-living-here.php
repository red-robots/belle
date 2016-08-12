<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="page-<?php the_ID(); ?>" <?php post_class("living-here"); ?>>
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
        <header><h2><?php if(get_field("row_2_title"))echo get_field("row_2_title");?></h2></header>
		<?php if(have_rows("groups")):?>
            <div id="container">
                <?php while(have_rows("groups")): the_row();?>
                    <section class="neighborhood-group item">
                        <?php if(get_sub_field("featured_image")):?>
                            <img src="<?php echo wp_get_attachment_image_src(get_sub_field("featured_image"),"full")[0];?>" alt="<?php echo get_post(get_sub_field("featured_image"))->post_title;?>">
                        <?php endif;?>
                        <?php if(get_sub_field("group_description")):?>
                            <div class="copy description">
                                <?php echo get_sub_field("group_description");?>
                            </div><!--.copy-->
                        <?php endif;?>
                        <div class="neighborhoods copy">
                            <?php if(get_sub_field("neighborhoods")):?>
                                <?php foreach(get_sub_field("neighborhoods") as $row):?>
                                    <?php if(isset($row['name'])):?>
                                        <p><?php echo $row['name'];?></p>
                                    <?php endif;?>
                                <?php endforeach;?>
                            <?php endif;?>
                        </div><!--.neighborhoods-->
                    </section>
                <?php endwhile;?>
            </div><!--#container-->
		<?php endif;?>
	</div><!-- .row-2 -->
	<?php get_footer("page");?>
</article><!-- #post-## -->
