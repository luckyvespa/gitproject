<?php get_header(); ?>

<div id='main-content'>

	<p id="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

	<blockquote id="main-quote">We are able to do the work we do because of the quality of these widgets. <cite>- Frank James, Tick Tock Corp</cite></blockquote>

	<h2>Featured Widgets</h2>

	<ul id="featured-widgets">
		
		<?php query_posts("posts_per_page=1&post_type=page&post_parent=92"); the_post(); ?>
		
		<li>
			<h3><?php the_title(); ?></h3>
			<?php the_excerpt(); ?>
			<div class="image-and-button">
				<img src="<?php echo get_post_meta($post->ID, "product_regular", true); ?>" alt="Image of <?php the_title(); ?>" />
				<a href="<?php the_permalink(); ?>" class="button">View Product</a>
			</div>
		</li>
		
		<?php query_posts("posts_per_page=1&post_type=page&post_parent=94"); the_post(); ?>
		
		<li>
			<h3><?php the_title(); ?></h3>
			<?php the_excerpt(); ?>
			<div class="image-and-button">
				<img src="<?php echo get_post_meta($post->ID, "product_regular", true); ?>" alt="Image of <?php the_title(); ?>" />
				<a href="<?php the_permalink(); ?>" class="button">View Product</a>
			</div>
		</li>
	</ul>

	<br />

	<h2>Web Special<em> of the</em> Week</h2>

	<div class="coupon">
		Buy two sprockets get the third free!
	</div>
	
</div> <!-- END main-content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>