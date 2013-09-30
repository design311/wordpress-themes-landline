<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title('&raquo;', 'true', 'right'); ?></title>
	<?php wp_head(); ?>
</head>
<?php
$background = '';
$attachmentArray = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumbnail');
$url = $attachmentArray[0];
if ($url) {
	$background = "style=\"background-image:url('$url');\"";
}

 ?>
<body <?php body_class(); echo $background; ?> >
	<div class="wrapper">
		<div class="header">
			<a href="<?php echo home_url(); ?>" class="title nolink"><?php echo bloginfo('name'); ?></a>
			<p class="description"><?php echo bloginfo('description'); ?></p>
			<div class="main-menu-container">
				<?php $main_menu = array(
						'theme_location'  => 'main',
						'depth'           => 1
					); ?>
				<?php wp_nav_menu( $main_menu ); ?>
			</div>
		</div>
		<div class="body">