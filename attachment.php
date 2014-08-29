<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="article" <?php post_class(); ?>>
    <?php if ( is_sticky() ) : ?><div class="post-title"><?php _e( 'Featured', 'simplestyle' ); ?></div><?php endif; ?>
	<h1><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h1>
	<div class="date"><?php the_date(); ?></div>
	
	 <?php 

$size = "large";
$icon = "false"; 

echo wp_get_attachment_image( $attachment_id, $size, $icon, '' ); ?>

 <p> <div class="alignleft"><?php previous_image_link('', ''. __( 'Previous image', 'elegantwhitepro' ) .'') ?></div><div class="alignright"><?php next_image_link( '', ''. __( 'Next image', 'elegantwhitepro' ) .'' ); ?> </div>  </p>    
   
  <div id="clear"></div>
  
  	
	<div id="comments"><?php comments_template('', true); ?> </div>
			
	</div>
	<div id="border-bottom"></div>
	
	
	<?php endwhile; ?> 
	<?php endif; ?>
	
		
	<?php get_footer(); ?>