<?php
/**
 * The template for displaying Comments.
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments-area">
 
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'twentythirteen' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h2>
 
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
        </ol><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
    <?php
        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $fields =  array(
          'author' =>
            '<div class="comment-form-author controlgroup"><label for="author">' . __( 'Name', 'domainreference' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label> ' .
            '<div class="controls"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
            '" size="30"' . $aria_req . ' /></div></div>',

          'email' =>
            '<div class="comment-form-email controlgroup"><label for="email">' . __( 'Email', 'domainreference' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label> ' .
            '<div class="controls"><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
            '" size="30"' . $aria_req . ' /></div></div>',

          'url' =>
            '<div class="comment-form-url controlgroup"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
            '<div class="controls"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
            '" size="30" /></div></div>',
        );
        $comments_args = array(
            'class_form'=> 'comment-form restrict-small',
            // change the title of send button 
            'label_submit'=>'Submit',
            // change the title of the reply section
            'title_reply'=>'Comments',
            'class_submit'=>'btn basic',
            // remove "Text or HTML to be displayed after the set of comment fields"
            'comment_notes_before' => '',
            'comment_notes_after' => '',
            // redefine your own textarea (the comment body)
            'comment_field' => '<div class="comment-form-comment controlgroup"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><div class="controls"><textarea id="comment" name="comment" aria-required="true"></textarea></div></div>',
            'fields' => apply_filters( 'comment_form_default_fields', $fields ),
        );

comment_form($comments_args);?>
 
</div><!-- #comments -->