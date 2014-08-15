<?php get_header(); ?>

<div class="container">
	
    <div class="row">
       
        <div class="<?php echo diarjolite_template('span') . " " . diarjolite_template('sidebar'); ?>">
        	
            <div class="row">
        
                <article <?php post_class(); ?> >
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    
                        <header>
							<!--BEGIN: PRODUCT THUMBNAIL-->
							<div class="product-thumb">
									<?php the_post_thumbnail( 'medium' ); ?>
							</div>
							<!--END: PRODUCT THUMBNAIL-->
					 
							<!--BEGIN: PRODUCT INFO-->
							<div class="product-info">
									<h1><?php the_title(); ?></h1> <!--Tiêu đề sản phẩm-->
									<p class="product-price">
											<?php echo "<strong>Giá:</strong> ". get_post_meta( $post->ID, 'wpcf-product-price', true ); ?>
									</p><!--Giá sản phẩm-->
					 
									<p class="product-status">
											<?php echo "<strong>Tình trạng:</strong> ";
													$product_status = get_post_meta( $post->ID, 'wpcf-product-status', true );
													if ($product_status == conhang) {
															echo "Còn hàng";
													} else { echo "Hết hàng"; }
											?>
							</p><!--Tình trạng sản phẩm-->
					 
									<div class="product-description">
											<?php echo get_post_meta( $post->ID, 'wpcf-product-description', true ); ?>
									</div><!--Mô tả sản phẩm-->
									
								<a href="#contact_form_pop" class="fancybox order-button">Đặt hàng</a>
								<div style="display:none" class="fancybox-hidden">
									<div id="contact_form_pop">
										<?php echo do_shortcode('[contact-form-7 id="51" title="form dat hang"]') ?>
									</div>
								</div>
									<!--a href="#" class="order-button">Đặt hàng</a-->
							</div>
							<!--BEGIN: PRODUCT INFO-->
					</header>
					 
					<div class="post-info">
							<?php the_content(); ?>
					</div>
            
                    
                        
                    <div style="clear:both"></div>
                    
                </article>
        
                <?php comments_template(); ?>

			</div>
        
        </div>

		<?php get_sidebar(); ?>

        <?php endwhile; get_template_part('pagination'); endif;?>
           
    </div>
    
</div>

<?php get_footer(); ?>