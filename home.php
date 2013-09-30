<?php get_header(); ?>

<?php // any code included here occurs before the wordpress loop and is always displayed ?>

<?php if (have_posts()) : ?>

	<?php // if there are posts to display, process any code included here only once ?>
	<?php // display any code output from this region above the entire set of posts ?>

	<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class(); ?>>
			<?php // loop through posts and process each according to the code specified here ?>
			<?php // process any code included in this region before the content of each post ?>

			<a href="<?php the_permalink(); ?>" class="title nolink"><?php the_title('<h1>','</h1>'); ?></a>
			<?php the_excerpt(); ?> <?php // this function displays the content of each post ?>

			<?php // process any code included in this region after the content of each post ?>
			<div class="clear"></div>
			<div class="post-meta-date"><?php _e('Published on:'); ?> <a href="<?php the_permalink(); ?>"><?php the_time(get_option('date_format')); ?></a></div>
		</div>
	<?php endwhile; ?>

	<?php // stop the post loop and process any code included here only once ?>
	<?php // any code output will be displayed below the entire set of posts ?>
	<div class="navigation">
		<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
		<div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
	</div>
	
<?php else : ?>

	<?php // if there are no posts to display, process any code that is included here ?>
	<?php // the output of any code included here will be displayed instead of posts ?>

<?php endif; ?>

<?php // any code included here occurs after the wordpress loop and is always displayed ?>

<?php get_footer(); ?>