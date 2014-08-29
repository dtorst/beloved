<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- original markup
<div class="article" <?php post_class(); ?>>
    <?php /* if ( is_sticky() ) : ?><div class="post-title"><?php _e( 'Featured', 'simplestyle' ); ?></div><?php endif; ?>
	<h1><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h1>
	<div class="date"><?php the_date(); ?></div>
	
	<?php the_content( __( 'read more ...', 'simplestyle' ) ); ?>
	
	<div class="clear"></div>
	
	 <?php wp_link_pages('before=<div class="tags"><span class="tags">Pages</span><span class="link-pages">&after=</span></div>'); ?>
	
	<div id="comments"><?php comments_template('', true); */ ?> </div>
			
	</div>
	<div id="border-bottom"></div>
-->
<div class="blog-entry" <?php post_class(); ?>>
	<div class="blog-header">
		<ul class="header-elements">
			<li class="icon">
				<?php
					if ( in_category( '3')) {
			echo '<img src="http://mapsandlegends.co/beloved/wp-content/themes/beloved/img/icons/nutrition-icon.png" width="25" height="25" alt="Nutrition Icon">';
					} else if ( in_category( '2')) {
			echo '<img src="http://mapsandlegends.co/beloved/wp-content/themes/beloved/img/icons/movement-icon.png" width="25" height="25" alt="Movement Icon">';
					} else if ( in_category('5')) {
			echo '<img src="http://mapsandlegends.co/beloved/wp-content/themes/beloved/img/icons/inspiration-icon.png" width="25" height="25" alt="Inspiration Icon">';
					}
				 ?>
			</li>
			<li class="tag"><h3><?php the_category(', '); ?></h3></li>
			<li class="date"><h3><?php the_date(); ?></h3></li>
			<li class="title"><h4><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h4></li>
		</ul>
	</div><!--/blog-header-->
	

	
	<?php the_content( __( '<br><u>Read more</u>', 'simplestyle' ) ); ?>
	
</div><!--/blog-entry-->	
	
	<?php endwhile; ?> 
	<?php endif; ?>
		<br><br><br><br>
		<footer>
	 <div id="content-nav">
		
	<?php get_footer(); ?>