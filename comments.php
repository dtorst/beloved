<div class="show-comments">
<div class="commentline"></div>
<div class="countcomments"><?php comments_number( '', ''. __( '1 Comment', 'simplestyle' ) .'', '% '. __( 'Comments', 'simplestyle' ) .'' ); ?></div>

				<?php wp_list_comments( array( 'callback' => 'simplestyle_comment' ) ); ?>
			
<?php paginate_comments_links(); ?>  
<div class="commentform"><?php

$comments_args = array (

'comment_field' => '<p class="comment-form-comment"><label for="comment">' . __( 'Comment', 'simplestyle' ) . '</label></br>
        <textarea id="comment" rows="8" name="comment" aria-required="true"></textarea></p>',

);


$comments_args['fields'] = array(
      
      'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name', 'simplestyle' ) . '</label> <span class="required">*</span></br>  <input id="author" name="author" type="text" value="" size="30" /></p>',

'email' => '<p class="comment-form-email"><label for="email">' . __( 'Email', 'simplestyle' ) . '</label>
 <span class="required">*</span></br> <input id="email" name="email" type="text" value="" size="30" /></p>',

'url' => '<p class="comment-form-url"><label for="url">' . __( 'Website', 'simplestyle' ) . '</label></br> <input id="url" name="url" type="text" value="" size="30" /></p>',
   
);

comment_form($comments_args);

 ?><div style="clear:both;"></div></div></div>