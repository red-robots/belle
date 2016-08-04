<?php
/**
 * Template part for displaying social icons
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>
<ul>
	<?php if(get_field("facebook_link","option")):?>
		<li class="facebook"><a href="<?php echo get_field("facebook_link","option");?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
	<?php endif;?>
	<?php if(get_field("instagram_link","option")):?>
		<li class="instagram"><a href="<?php echo get_field("instagram_link","option");?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
	<?php endif;?>
</ul>