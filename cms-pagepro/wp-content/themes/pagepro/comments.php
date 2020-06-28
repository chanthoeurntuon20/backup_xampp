<h3 class = "mt-5 text-center">Comments</h3>
<div class="container">
    <div class="row">
        <div class="col-sm-6 result-comment">
            <?php 
                $args = array(
                    'walker'=>null,
                    'max_depth'=>'',
                    'style'=>'ol',
                    'callback'=>null,
                    'end-callback'=>null,
                    'type'=>'all',
                    'reply_text'=>'<button class = "btn btn-info">Reply</button>',
                    'page'=>'',
                    'per_page'=>'',
                    'avatar_size'=>'60',
                    'reverse_top_level'=>null,
                    'reverse_children'=>'',
                    'format'=>'html5',
                    'short_ping'=>false,
                    'echo'=>true
                );
        ?>
        <?php  wp_list_comments($args,$comments); ?>

    </div>
    <div class="col-sm-6 comment">
        <?php 
            $form_args = array(
                'label_submit'=>'Send Comment',
                'title_reply'=>'Write a Reply or Comment',
                'Comment_note_after'=>'',
                'Comment_filed'=>'<p class = "Comment-form-comment">'
            );
            comment_form($form_args);
        ?>
     </div>
    </div>
</div>