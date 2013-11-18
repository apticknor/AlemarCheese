<?php if ( post_password_required() ) : ?>
<div class="comments">
    <div class="userContent">
        <p>This post is password protected. Enter the password to view any comments</p>
    </div>
</div> <!-- // END comments (password protected) -->
<?php
        /* Stop the rest of comments.php from being processed,
         * but don't kill the script entirely -- we still have
         * to fully load the template.
         */
        return;
    endif;
?>

<?php // You can start editing here -- including this comment! ?>

<div class="comments">
<?php if ( have_comments() ) : ?>
    <div class="mod">
        <div class="mod-hd">
            <h3 class="hdg hdg_md">Comments (<?php comments_number('0','1','%'); ?>)</h3>
        </div>
        <div class="mod-bd">
            <ol>
                <?php
                    wp_list_comments('type=comment&callback=mytheme_comment&avatar_size=60');
                ?>
            </ol>
        </div>
    </div>
<?php endif;  ?>

    <div class="mod">
        <div class="mod-bd">
<?php
    comment_form(array(

    ));
?>
        </div>
    </div><!-- // END comments form -->

</div> <!-- // END comments -->