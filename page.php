<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	

<div class="blog-entry" <?php post_class(); ?>>



	<div class="page-header">
		<div class="page-title"><h4><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h4></div>

	</div><!--/page-header-->

	<?php the_content(); ?>

</div><!--/blog-entry-->


	<?php endwhile; ?> 
	<?php endif; ?>
		<footer>
	  <div class="clear"></div>
	  <div class="page-footer"></div>
	<?php get_footer(); ?>