<?php

/**
 * Wp in Progress
 * 
 * @package Wordpress
 * @author WPinProgress
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

function diarjolite_thumbnail($id) {
	
	global $post;
	
	if ( ( (is_single()) || (is_page()) )  && (!is_page_template() ) ) {
	
		if ( '' != get_the_post_thumbnail() ) { 
		
		?>
		
			<div class="pin-container">
				<?php the_post_thumbnail($id); ?>
			</div>
		
		<?php } 

	} else {
	
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'blog');
		
		if (!empty($thumb)) :
		
	?>
		
		<div class="pin-container">
			<div class="overlay-image blog-thumb">
				
			<img src="<?php echo $thumb[0]; ?>" class="attachment-blog wp-post-image" alt="post image" title="post image"> 
			<a href="<?php echo get_permalink($post->ID); ?>" class="overlay link"></a>
				
			</div>
		</div>
			
	<?php
	
	endif;
	
	}

}

?>