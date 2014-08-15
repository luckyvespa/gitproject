<?php
/*
Template Name: Shop
*/
	get_header(); 
	diarjolite_header_content();

?> 

<div class="container content">
	
    <div class="row">
       
        <div class="<?php echo diarjolite_template('span') . " " . diarjolite_template('sidebar'); ?>">
        	
            <div class="row">
        
                <article <?php post_class(); ?> >
                
                    <?php
  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query('showposts=6&post_type=san-pham'.'&paged='.$paged);
  $count = 0;
 
  while ($wp_query->have_posts()) : $wp_query->the_post(); $count++;
?>
 
  <?php //Tạo biến chèn class 'thrid' vào mỗi 3 bài viết.
        if ($count == 3) {
                $p3 = 'thrid';
                $count = 0;
        } else { $p3 = ''; }
  ?>
 
				  <div <?php post_class($p3); ?> id="product-<?php the_ID(); ?>">
								<?php the_post_thumbnail( array('class' => 'product-thumb') ); ?>
								<a href="<?php the_permalink(); ?>"><h3 class="product-title"><?php the_title(); ?></h3></a>
								<div class="info">
										<p style="margin-top: 5px;"><?php echo get_post_meta( $post->ID, 'wpcf-product-price', true ); ?></p>
										<p class="product-status">
												<?php
														$product_status = get_post_meta( $post->ID, 'wpcf-product-status', true );
														if ($product_status == conhang) {
																echo "<strong style='color:green;'>Còn hàng</strong>";
														} else { echo "<strong style='color:red;'>Hết hàng</strong>"; }
												?>
										</p><!--Tình trạng sản phẩm-->
										<a class="order-button" href="<?php the_permalink();?>">Xem chi tiết</a>
								</div>
				  </div>
				 
				<?php endwhile; ?>
				 
				<nav>
					<?php previous_posts_link('&laquo; Mới hơn') ?>
					<?php next_posts_link('Cũ hơn &raquo;') ?>
				</nav>
				 
				<?php
				  $wp_query = null;
				  $wp_query = $temp;  // Reset
				?>
            
                </article>
        
                <?php comments_template(); ?>

			</div>
        
        </div>

		<?php get_sidebar(); ?>

    </div>
    
</div>

<?php get_footer(); ?>