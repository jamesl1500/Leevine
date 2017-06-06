<div class="card baseComments white lighten-3">
    <div class="card-content">
        <h3>Post a comment</h3>
        <?php if(comments_open()) { ?>
            <?php if(get_option('comment_registration') && !$user_ID) { ?>
                <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
            <?php } else { ?>
                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                    <?php if($user_ID) { ?>
                        <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>

                    <?php } else { ?>
                        <label style="font-size: 1.0em;font-weight: 400;" for="author">Name <?php if($req) echo "(required)"; ?></label>
                        <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" />
                        <label style="font-size: 1.0em;font-weight: 400;" for="email">Mail (will not be published) <?php if($req) echo "(required)"; ?></label>
                        <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" />
                        <label style="font-size: 1.0em;font-weight: 400;" for="url">Website</label></p>
                        <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" />
                    <?php } ?>
                    <div class="input-field" style="padding-top: 10px;">
                        <textarea style="margin-bottom: 0px;" class="materialize-textarea" name="comment" id="comment"></textarea>
                        <label for="comment">Comment</label>
                    </div>
                    <div class="input-field">
                        <input  class="waves-effect waves-light btn" name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
                    </div>
                    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
                    <?php do_action('comment_form', $post->ID); ?>
                </form>
            <?php } ?>
        <?php } else { ?>

        <?php } ?>
    </div>
    <div class="card-content" style="border-top: 1px solid #eee;">
        <div class="innerCommentsHold">
            <?php if($comments) : ?>
                <ul>
                    <?php foreach($comments as $comment) : ?>
                        <li id="comment-<?php comment_ID(); ?>">
                            <?php if ($comment->comment_approved == '0') : ?>
                                <p>Your comment is awaiting approval</p>
                            <?php endif; ?>
                            <?php comment_text(); ?>
                            <cite><?php comment_type(); ?> by <?php comment_author_link(); ?> on <?php comment_date(); ?> at <?php comment_time(); ?></cite>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else : ?>
                <p>No comments</p>
            <?php endif; ?>
        </div>
    </div>
</div>