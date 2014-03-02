<?php

get_header(); ?>

	<div class="content wrap">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<article>

			 <!-- Display the Title as a link to the Post's permalink. -->

			 <h2><a class="post-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


			 <!-- Display the Post's content in a div box. -->

			 <div class="post">
			   	<?php the_content(); ?>

				 <footer>
				 	<!-- Display the date in the date format configured in WP options and a link to other posts by this posts author. -->

			 		<?php the_date(); ?> <?php the_time(); ?> by <?php the_author_posts_link(); ?>

				 </footer>
			</div>

			</article>


			 <!-- Stop The Loop (but note the "else:" - see next line). -->

			<?php endwhile; ?>

			<div class="pagination p">
				<?php if ($paged == $wp_query->max_num_pages) : { echo "<span class=\"previous\">&laquo; Previous</span>";} endif; ?>
            	<span class="previous"><?php next_posts_link( '&laquo; Previous' ); ?></span>
            	<span class="page-numbers"><?php echo $paged.'/'.$wp_query->max_num_pages; ?></span>
            	<span class="next"><?php previous_posts_link( 'Next &raquo;' )?></span>
            	<?php if ($paged == 1) : { echo "<span class=\"next\">Next &raquo;</span>";} endif; ?>
          	</div>

		<?php else : ?>

		 <!-- The very first "if" tested to see if there were any Posts to -->
		 <!-- display.  This "else" part tells what do if there weren't any. -->
		 <p>Oopsy-daisy, there are no posts!</p>

		<?php endif; ?>

	</div><!-- #content -->

<?php get_footer(); ?>