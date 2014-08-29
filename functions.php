<?php

if ( ! isset( $content_width ) ) $content_width = 700;
 
if ( ! function_exists( 'simplestyle_setup' ) ) :
 
function simplestyle_setup() {


}
endif;
add_action( 'after_setup_theme', 'simplestyle_setup' );

load_theme_textdomain( 'simplestyle', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );

// Stylesheets / Scripts

function simplestyle_style() {
 wp_register_style('simplestyle_style', get_stylesheet_uri(), array(), 1.1, 'all'); 
 wp_enqueue_style('simplestyle_style');	 
 
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action('wp_enqueue_scripts', 'simplestyle_style');

add_filter( 'use_default_gallery_style', '__return_false' );


// Filter for Untitled Articles
        
add_filter('the_title', 'simplestyle_title');
function simplestyle_title($title) {
	if ( $title == '' ) {
		return __( 'Untitled', 'simplestyle');
	} else {
		return $title;
	}
}

// Sidebar

register_sidebar(array(
'name' => __('Sidebar', 'simplestyle'),
'before_widget' => '<div id="sidebar-widget">',
'after_widget' => '</div>',
'before_title' => '<div class="sidebar-heading">',
'after_title' => '</div></p>',
));
      
      
// wp_title filter

function simplestyle_filter_wp_title( $title ) {
 $simplestyle_site_name = get_bloginfo( 'name' );
 $simplestyle_filtered_title = $simplestyle_site_name . $title;
 return $simplestyle_filtered_title;
}

add_filter( 'wp_title', 'simplestyle_filter_wp_title' );


// Custom Menus
 
function simplestyle_nav() {
    register_nav_menus(array(
        'header-nav' => 'Header Menu',
    ));
}
add_action('init', 'simplestyle_nav');


// Admin Styles

function simplestyle_admin_enqueue() {
 
   wp_enqueue_style( 'admin_style', get_template_directory_uri() . '/css/options.css', array(), null, 'all' );
}

add_action( 'admin_enqueue_scripts', 'simplestyle_admin_enqueue' );


add_action('admin_menu', 'simplestyle_create_menu');

function simplestyle_create_menu() {
   add_theme_page('Other Fimply Themes', 'Other Fimply Themes', 'edit_theme_options', 'fimplythemes', 'simplestyle_other_themes');

}


function simplestyle_other_themes () {
	locate_template( array( '/inc/other-themes.php' ), true );
}


// Comment Form

if ( ! function_exists( 'simplestyle_comment' ) ) :

function simplestyle_comment($comment, $args, $depth) {
$GLOBALS['comment'] = $comment;


if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'div';
			$add_below = 'div-comment';
		}
		
		
	switch ( $comment->comment_type ) :
		case '' :
	?>
	
	
	
<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">

		<?php if ( 'div' != $args['style'] ) : ?>
		<div class="comment">
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
		
	
		
		
		<div class="comment-box">
		<div class="comment-name"><?php printf(__('%s', 'simplestyle'), get_comment_author_link()) ?></div>
		<div class="comment-date"><?php
		
				printf( __('%1$s @ %2$s', 'simplestyle'), get_comment_date(),  get_comment_time()) ?></div>

		<div class="comment-text">
		<?php if ($comment->comment_approved == '0') : ?>
		<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'simplestyle') ?></em></br>
		<?php endif; ?>
		
		<?php comment_text(); ?>
		
		<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		
		<div class="comment-reply">
			
			</div>
			



<div class="comment-line"></div>
		</div></div></div></div>
		


	</div><div style="clear:both;"></div>
	
	

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'simplestyle' ); ?> <?php comment_author_link(); ?></p>
	<?php
			break;
	endswitch;
}
endif;


?>