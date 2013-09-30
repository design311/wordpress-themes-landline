<?php if (!post_password_required()): ?>
	<?php if (have_comments()): ?>
		<h3><?php _e('Comments'); ?></h3>
		<ol class="commentlist">
			<?php wp_list_comments('short_ping=true'); ?>
		</ol>
		<?php paginate_comments_links(); ?>
	<?php endif ?>
	<?php comment_form(array('comment_notes_after' => '')); ?>
	<?php if (!is_page() && !comments_open()){
		_e('Comments are closed.');
	} ?>
<?php endif ?>