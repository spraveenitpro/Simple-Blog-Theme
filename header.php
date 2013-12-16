
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php wp_title('&laquo;',true,'right' );   ?> <?php bloginfo('name' );   ?></title>

<link href="<?php bloginfo('stylesheet_url' );   ?>" rel="stylesheet" />

<!--[if IE 6]>
	<link href="<?php bloginfo('template_url') ?>/css/ie6.css" rel="stylesheet" />
<![endif]-->

<?php if (is_singular() ) wp_enqueue_script('comment-reply' );  ?>

<script src="<?php bloginfo('template_url' ); ?>js/scripts.js"></script>

<!-- WP generated Header -->
<?php wp_head(); ?>
<!-- End WP generated Header -->
</head>

<body>

<div id="container">
	<div id="header">
		<h1><a href="<?php echo get_option('home' );   ?>"> 
		<?php if ( !get_option('omr_logo_url' )) { ?>
			<img src="<?php bloginfo('template_url' );  ?>/img/logo.png" alt="Return to the homepage" id="logo" />
			<?php } else {  ?>
			<img src="<?php echo get_option('omr_logo_url' ); ?>" alt="Return to the homepage" id="logo" />
			<?php } ?>
		</a></h1>
		
		<ul id="subscribe">
			<li class="rss"><a href="<?php bloginfo('rss2_url');   ?>">Subscribe by RSS</a></li>
			<li class="twitter"><a href="<?php get_option('omr_twitter_url');   ?>">Follow on Twitter</a></li>
		</ul>
	</div>