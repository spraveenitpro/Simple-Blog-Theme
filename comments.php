<?php 

	if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die('Please do not load this page directly');

	if (post_password_required()) { ?>

		<p class="nocomments">This Post is password Protected, Enter Password to view comments</p>
	<?php 
		return;
	}
?>


<div id="comments">
	<h3><?php comments_number('No Comments','1 Comment','% Comments' );   ?></h3>
	<?php if ( have_comments() ) :  ?>

		<ol class="commentlist">
			
			<?php wp_list_comments('avatar_size=71'&type='comment' );    ?>
			
		</ol>

		<div class="pagination">
				<p class="prev"><?php next_posts_link('Older Articles' ); ?></p>
				<p class="next"><?php previous_posts_link('Newer Articles'); ?></p>
		</div>

	<?php endif; ?>

	<?php if ( comments_open( )) :  ?>

		<div id="respond">
			<h3>leave a response</h3>

			<form action="<?php echo get_option('siteurl' ); ?>/wp-comments-post.php" method="post" id="commentform">
				
				<fieldset>

					<label for="author">Name:</label>
					<input type="text" name="author" id="author" value="<?php $comment_author; ?>" />

					<label for="email">Email:</label>
					<input type="text" name="email" id="email" value="<?php $comment_author_email; ?>" />
					
					<label for="url">Website:</label>
					<input type="text" name="url" id="url" value="<?php $comment_author_url; ?>" />

					<label for="comment">Comment:</label>
					<textarea name="comment" id="comment" cols="" rows=""></textarea>

					<input type="submit" class="contentsubmit" value="Submit" />
					<?php comment_id_fields(); ?>
					<?php do_action('comment_form',$post->ID); ?>


				</fieldset>

			</form>
			<p class="cancel"><?php cancel_comment_reply_link('Cancel Reply' ); ?></p>

		</div>

	<?php else : ?>
		<h3>Comments are Closed</h3>
	<?php endif; ?>

</div> <!-- Close Comments -->