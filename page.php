<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="blog-entry" <?php post_class(); ?>>
		<div class="blog-header">
			<ul class="header-elements">
				<li class="icon"><img src="img/icons/movement-icon.png" width="25" height="25" alt="Movement Icon"></li>
				<li class="tag"><h3><?php the_category(', '); ?></h3></li>
				<li class="date"><h3><?php the_date(); ?></h3></li>
				<li class="title"><h4><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h4></li>
			</ul>
		</div><!--/blog-header-->



		<?php the_content(); ?>

	</div><!--/blog-entry-->
	
	<div class="clear"></div>
	
	
	<div id="comments"><?php comments_template('', true); ?> </div>
		
	</div>
	<div id="border-bottom"></div>
	
	
	<?php endwhile; ?> 
	<?php endif; ?>
	
		
	<?php get_footer(); ?>