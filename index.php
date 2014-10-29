<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	

<div class="blog-entry" <?php post_class(); ?>>
	<div class="blog-header">
	</div><!--/blog-header-->

<?php the_post_thumbnail(); ?>

		<ul class="header-elements">
			<li class="icon">
				<?php
					if ( in_category( '3')) {
			echo '<img src="wp-content/themes/beloved/img/icons/nourish.png" width="30" height="30" alt="Nutrition Icon">';
					} else if ( in_category( '2')) {
			echo '<img src="wp-content/themes/beloved/img/icons/move.png" width="30" height="30" alt="Movement Icon">';
					} else if ( in_category('5')) {
			echo '<img src="wp-content/themes/beloved/img/icons/yonder.png" width="30" height="30" alt="Inspiration Icon">';
					}
				 ?>
			</li>
			<li class="tag"><h3><?php the_category(', '); ?></h3></li>
			<li class="date"><h3><?php the_date(); ?></h3></li>
			<li class="title"><h4><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h4></li>
		</ul>

	<?php the_content( __( '<br>read more', 'simplestyle' ) ); ?>

</div><!--/blog-entry-->

	<?php endwhile; ?> 
	<?php endif; ?>
	<br><br><br><br>
		<footer>
	 <div id="content-nav">


<h3 class="newer">&lt;&lt; NEWER</h3>
<h3 class="older">OLDER >></h3>
<!-- killing this for now, until we have enough content to constitute -->
	
	 <?php next_posts_link('<h3 class="older">&lt;&lt; OLDER</h3>') ?>
	 
	 <?php previous_posts_link('<h3 class="newer">NEWER >></h3>'); ?>
	  <div class="clear"></div>
	<?php get_footer(); ?>