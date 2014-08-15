	<aside>

		<?php get_search_form(); ?>
		
		<nav>
			<?php wp_nav_menu(array('menu' => 'Main Nav Menu')); ?>
		</nav>

		<div class="widget latest-post">

			<h4>Latest Post</h4>
			
			<?php query_posts("post_per_page=1"); the_post(); ?>

			<div class="sidebar-post">
				<p class="date"><?php the_date(); ?></p>
				<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				<p><?php the_excerpt(); ?></p>
			</div>
			
			<?php wp_reset_query(); ?>

		</div> <!-- END Latest Posts -->

		<div class="widget industry-news">

			<h4>Industry News</h4>
			
			<?php if (function_exists('fetch_feed')) { ?>
				
				<?php include_once(ABSPATH . WPINC . '/feed.php'); 
				
				      $feed = fetch_feed('http://www.topix.com/rss/business/manufacturing');
				
					  $limit = $feed->get_item_quantity(2);
					
					  $items = $feed->get_items(0, $limit);
					
					if (!$items) {
						
						echo "problem";
						
					} else {
						
						// everything's cool
						
						foreach ($items as $item) { ?>
							
							<div class="sidebar-post">
								<p class="date"><?php echo $item->get_date('F j, Y'); ?></p>
								<h5><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h5>
								<p><?php echo $item->get_content(); ?></p>
							</div>
						
					<?php } 
					
				    } ?>

			<?php } ?>

		</div> <!-- END Industry News -->
		
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>

		    <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
		
		<?php endif; ?>

	</aside>