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
			echo '<div class="nourish-icon"></div>';
					} else if ( in_category( '2')) {
			echo '<div class="movement-icon"></div>';
					} else if ( in_category('5')) {
			echo '<div class="yonder-icon"></div>';
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
	<footer>
		<div id="content-nav">
			<h3 class="newer"><a href="">&lt;&lt; NEWER</a></h3>
			<h3 class="older"><a href="">OLDER >></a></h3>
		</div><!--/content-nav -->
	<?php get_footer(); ?>