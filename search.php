<?php get_header(); ?>

<div id="main">
	<div id="content">
		
	<?php if(have_posts()) : ?>

	<h2 class="title">Search Results for <?php the_search_query(); ?></h2>

	<?php while (have_posts()) : the_post(); ?>

		<div <?php post_class() ; ?>>

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<?php if(has_post_thumbnail()) { ?>

						<a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail(); ?></a>

					<?php } else { ?>

						<a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php bloginfo('template_url'); ?></a>

					<?php } ?> 

					<?php the_content(''); ?>
					<div class="post-info">
						<ul>
							<li class="date"><?php the_time('jS F Y');   ?></li>
							<li class="category">Posted in <?php the_category(', '); ?></li>
							<li class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></li>
						</ul>
					</div>	

			</div>
		<?php endwhile; ?>

		<div class="pagination">
			<p class="prev"><?php next_posts_link('Older Articles' ); ?></p>
			<p class="next"><?php previous_posts_link('Newer Articles'); ?></p>
		</div>

	<?php else: ?>

		<div class="nothing">
			<h2>Nothing Found</h2>
			<p>Sorry , What you are looking is not here !!</p>
			<p><a href="<?php echo get_option('home' ); ?>">Return to Home Page</a></p>
		</div>

    <?php endif; ?>
		

	</div> <!-- End Content   -->
	<?php get_sidebar(); ?>
</div> <!-- End Main   -->


<?php get_footer(); ?>