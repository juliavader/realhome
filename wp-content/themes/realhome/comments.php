
<div class="container">
<?php
$args = array(
    // args here
);

// The Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );

// Comment Loop

if ( $comments ) :?>
    <?php foreach ($comments as $comment) :;?>
        <div class="commentlist row bg-light p-5">
    <div class="col-4">
        <div class="comment-img ">
        <?php echo get_avatar($comment->comment_author_IP); ?>
        </div>
        <h5 class="pt-4"><?php echo $comment->comment_author; ?></h5>
    </div>
    <div class="col">
        <p> <?php echo $comment->comment_content; ?></p>
        <p><span class="font-weight-bold"><?php comment_date('n-j-Y') ;?></span> / <?php comment_reply_link() ;?></p>
    </div>
        </div>
    <?php endforeach ;?>




<?php  else :?>


<?php endif  ?>

    <?php
    $args = array(
        'fields' => apply_filters(
            'comment_form_default_fields', array(
                'author' =>'<div class="comment-body d-flex"><p class="comment-form-author">' . '<input id="author" placeholder="Nom" name="author" type="text" value="' .
                    esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
                    ( $req ? '<span class="required">*</span>' : '' )  .
                    '</p>'
            ,
                'email'  => '<p class="comment-form-email">' . '<input id="email" placeholder="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . $aria_req . ' />'  .
                    ( $req ? '<span class="required">*</span>' : '' )
                    .
                    '</p></div> ',
            )
        ),
        'comment_field' => '<p class="comment-form-comment">' .
            '<textarea id="comment" name="comment" placeholder="Votre commentaire" cols="45" rows="8" aria-required="true"></textarea>' .
            '</p>',
        'comment_notes_after' => '',
        'title_reply' => '<div class="crunchify-text pt-3 pb-3"> <h5> Laissez un commentaire </h5></div>'
    );

    comment_form($args);
    ;?>



</div>
