<?php
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<aside class="comments">
	<?php if ( have_comments() ) : ?>
		<ol class="comments">
			<?php wp_list_comments('type=comment&callback=ashley_comment'); ?>
		</ol>
	<?php endif; // have_comments() ?>
</aside>