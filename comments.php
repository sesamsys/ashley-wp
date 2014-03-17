<?php
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<aside id="comments" class="comments">
	<?php if ( have_comments() ) : ?>
		<ol class="comments">
			<?php wp_list_comments('short_ping=true&type=all&callback=ashley_comment'); ?>
		</ol>
	<?php endif; // have_comments() ?>

	<?php 

	$comments_args = array(
		// remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
    );

	comment_form( $comments_args ); 

	?>

</aside>