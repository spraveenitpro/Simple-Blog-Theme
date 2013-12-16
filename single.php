<?php get_header(); ?>

<div id="main">
	<div id="content">

		<?php if(have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ; ?>>

				<h2><?php the_title(); ?></h2>

					<?php if(has_post_thumbnail()) { ?>

						<a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail(); ?></a>

					<?php } else { ?>

						<a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php bloginfo('template_url'); ?></a>

					<?php } ?> 

					<?php the_content(''); ?>
					 

			</div>
		<?php comments_template() ; ?>
		<?php endwhile; ?>

	 
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