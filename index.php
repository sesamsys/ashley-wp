<?php

get_header(); ?>

	<div class="content wrap">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			 <!-- Display the Title as a link to the Post's permalink. -->

			 <h3><a class="post-title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>


			 <!-- Display the Post's content in a div box. -->

			 <div class="post">
			   	<?php the_content(); ?>

				 <footer>
				 	<!-- Display the date in the date format configured in WP options and a link to other posts by this posts author. -->

			 		<?php the_time() ?> by <?php the_author_posts_link() ?>

				 </footer>

			</div> <!-- closes the first div box -->


			 <!-- Stop The Loop (but note the "else:" - see next line). -->

			<?php endwhile; ?>

		<?php else : ?>

		 <!-- The very first "if" tested to see if there were any Posts to -->
		 <!-- display.  This "else" part tells what do if there weren't any. -->
		 <p>Oopsy-daisy, there are no posts!</p>

		<?php endif; ?>

	</div><!-- #content -->

<?php get_footer(); ?>