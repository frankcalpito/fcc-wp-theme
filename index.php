<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-9 col-xs-12">
			<?php if ( ! have_posts() ) : ?>
				<h1>Not Found</h1>
				<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p>
			<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="post">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<div class="post-details">
						<div class="post-details-left">
							Posted on <strong><?php the_date(); ?></strong> by <span class="author"><?php the_author(); ?></span>  <span class="author">under<?php the_category(', '); ?></span>
						</div>
						<div class="post-details-right">
							<?php edit_post_link('Edit', '<span class="comment-count">  ' , '</span>'); ?>&nbsp;<span class="comment-count"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></span>
						</div>
					</div>

					<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
						<?php the_excerpt(); ?>
					<?php else : ?>
						<?php the_content('Read More'); ?>
					<?php endif; ?>

					<div class="dots"></div>
				</div><!-- post -->
			<?php endwhile; ?>

			<?php if ( $wp_query->max_num_pages > 1 ) : ?>
				<div id="older-posts"><?php next_posts_link('Older Posts'); ?></div>
				<div id="newer-posts"><?php previous_posts_link('Newer Posts'); ?></div>
			<?php else: ?>
				<div id="only-page">No newer/older posts</div>
			<?php endif; ?>
		</div>
		<div class="col-sm-3 col-xs-12">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>