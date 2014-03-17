<?php
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return get_bloginfo( 'name' );
  }
  return $title;
}
?>
<?php
if ( ! function_exists( 'ashley_comment' ) ) :
/**
 * List comments.
 *
 * @return void
 */
function ashley_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div>
      	 <?php echo get_avatar($comment,$size='40'); ?>
      </div>
      <div class="reply small">
          <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
      <div class="comment-text">
         <?php echo get_comment_author_link(); ?> on <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?>
      	 <?php echo comment_text() ?>
      </div>
     </div>
	<?php  
}
endif;
?>
<?php
if ( ! function_exists( 'ashley_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @return void
 */
function ashley_paging_nav() {
	global $wp_query;
	global $paged;
	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<div class="pagination p">
		<?php if ( get_next_posts_link() ) : ?>
    		<span class="previous"><?php next_posts_link( '&laquo; Previous' ); ?></span>
    	<?php else : ?>
    		<span class="previous">&laquo; Previous</span>
    	<?php endif; ?>
    	<span class="page-numbers"><?php echo $paged.'/'.$wp_query->max_num_pages; ?></span>
    	<?php if ( get_previous_posts_link() ) : ?>
    		<span class="next"><?php previous_posts_link( 'Next &raquo;' )?></span>
    	<?php else : ?>
    		<span class="next">Next &raquo;</span>
    	<?php endif; ?>
    </div>
	<?php
}
endif;
?>
<?php
function ashley_register_menu() {
	register_nav_menu( 'primary', __( 'Navigation Menu' ) );
}
add_action( 'init', 'ashley_register_menu' );
?>