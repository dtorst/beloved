<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	

<div class="blog-entry" <?php post_class(); ?>>
	<div class="blog-header">
	</div><!--/blog-header-->
	

	
	<?php the_content( __( '<br><u>Read more</u>', 'simplestyle' ) ); ?>

</div><!--/blog-entry-->
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
			
	<?php endwhile; ?> 
	<?php endif; ?>
	<br><br><br><br>
		<footer>
	 <div id="content-nav">
	
	 <?php next_posts_link('<h3 class="older">&lt;&lt; OLDER</h3>') ?>
	 
	 <?php previous_posts_link('<h3 class="newer">NEWER >></h3>'); ?>
	  <div class="clear"></div>
	<?php get_footer(); ?>