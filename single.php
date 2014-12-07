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

	<div class="blog-header">
	</div><!--/blog-header-->

	<?php the_content( __( '<br>read more', 'simplestyle' ) ); ?>

</div><!--/blog-entry-->

	<?php endwhile; ?> 
	<?php endif; ?>
	<br><br><br><br>
		<footer>
	 <div id="content-nav">


	 <?php next_posts_link('<h3 class="older">&lt;&lt; OLDER</h3>') ?>
	 
	 <?php previous_posts_link('<h3 class="newer">NEWER >></h3>'); ?>
	  <div class="clear"></div>
	<?php get_footer(); ?>