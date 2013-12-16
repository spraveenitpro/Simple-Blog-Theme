<div id="side">
			<ul id="pages">
				<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
				<?php wp_list_pages('title_li=' ); ?>
				 
			</ul>
			
			<h3>Categories</h3>
			<ul id="categories">
				<?php wp_list_categories('show_count=0&title_li=&hide_empty=0&exclude=1' ); ?>
			</ul>
			
			<h3>Search</h3>
			
			<form method="get" id="search" action="<?php get_option('home' );  ?>">
				<fieldset>
					<input type="text" class="searchbar" name="s" id="s" />
					<input type="submit" class="searchbutton" value="Search" />
				</fieldset>
			</form>
			
			<h3>About</h3>
			
			<p><?php echo get_option('omr_about_excerpt'); ?><a href="<?php echo get_option('omr_about_link'); ?>">Read more&hellip;</a></p>
			
</div>