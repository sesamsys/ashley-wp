<?php

get_header(); ?>

	<div class="content wrap">
		<?php if ( have_posts() ) : ?>

			<?php /* The Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<article>

			 <!-- Display the Title as a link to the Post's permalink. -->

			 <h2><a class="post-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

			 <!-- Display the Post's content in a div box. -->

			 <div class="post">
			   	<?php the_content(); ?>

				 <footer>
				 	<ul class="small">
				 		<!-- Display the date and time as well as a link to other posts by this posts author. -->
			 			<li><?php the_date(); ?> <?php the_time(); ?> by <?php the_author_posts_link(); ?></li>
			 			<!-- Display the number of comments. -->
			 			<li class="comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></li>
			 		</ul>
				 </footer>
			</div>

			</article>

			 <!-- Stop The Loop (but note the "else:"). -->

			<?php endwhile; ?>

			<!-- Load the comments for single posts and pages. -->

			<?php comments_template(); ?> 

			<!-- Load paging. -->

			<?php ashley_paging_nav(); ?> 

		<?php else : ?>

		 <!-- The very first "if" tested to see if there were any Posts to -->
		 <!-- display.  This "else" part tells what do if there weren't any. -->
		 <p>Oopsy-daisy, there are no posts to show!</p>

		<?php endif; ?>

	</div><!-- #content -->

<?php get_footer(); ?>