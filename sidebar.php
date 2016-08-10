<?php
/**
 * The sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */
?>

<aside id="main-sidebar" class="left-column" role="complementary">
	<?php if(get_field("logo","option")):?>
		<a href="<?php echo get_bloginfo("url");?>"><img class="logo" src="<?php echo wp_get_attachment_image_src(get_field("logo","option"),"full")[0];?>" alt="<?php echo get_bloginfo("name");?> logo"></a>
	<?php endif;?>
	<div class="mobile bars">
		<i class="fa fa-bars"></i>
	</div>
	<nav class="primary">
		<?php wp_nav_menu( array( 'theme_location'=>'primary' ) ); ?>
	</nav>
	<div class="separator"></div>
	<div class="info">
		<?php if(get_field("telephone_1","option")):?>
			<div class="telephone-1"><?php echo get_field("telephone_1","option");?></div>
		<?php endif;?>
		<?php if(get_field("telephone_2","option")):?>
			<div class="telephone-2"><?php echo get_field("telephone_2","option");?></div>
		<?php endif;?>
		<?php if(get_field("telephone_3","option")):?>
			<div class="telephone-3"><?php echo get_field("telephone_3","option");?></div>
		<?php endif;?>
		<?php if(get_field("email","option")):?>
			<div class="email"><?php
				$full_email = get_field("email","option");
				$index = strpos($full_email,'@');
				if($index):
					if(substr($full_email,0,$index+1))echo "<span>".substr($full_email,0,$index+1)."</span>";
					if(substr($full_email,$index+1))echo "<span>".substr($full_email,$index+1)."</span>";
				endif;
			?></div>
		<?php endif;?>
	</div>
	<div class="social">
		<?php get_template_part("/template-parts/social");?>
	</div>
	<div class="mobile menu">
		<nav class="mobile-primary">
			<?php wp_nav_menu( array( 'theme_location'=>'primary' ) ); ?>
		</nav>
		<div class="mobile-social">
			<?php get_template_part("/template-parts/social");?>
		</div>
	</div>
</aside><!-- #secondary -->
