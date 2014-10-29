<?php get_header(); ?>
<div class="positioner"><div class="top"><span style="font-size:18pt !important;">^</span><br>UP</div></div>

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
<ul id="content-nav">
<li style="padding:5px 0px 0px 10px;float:left;display:block;height:30px;width:110px;"><?php previous_posts_link('<h3 style="color:#585858;"><< NEWER</h3>'); ?></li>
<li style="width:550px;height:30px;float:left;"><?php if(function_exists('wp_paginate')) {
    wp_paginate();
}
else {

}
?></li>
<li style="padding:5px 0px 0px 0px;float:right;display:block;height:30px;width:110px;"><?php next_posts_link('<h3 style="color:#585858;">OLDER >></h3>') ?></li>

		</ul><!--/content-nav -->
		<div class="clear"></div>
	<?php get_footer(); ?>