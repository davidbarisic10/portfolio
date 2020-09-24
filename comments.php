<div class="px-4 md:px-16 bg-gray-400 shadow-lg rounded-lg mt-4 mx-4 md:mx-16 py-4">
<?php if(comments_open()) : ?>
	<?php if(get_option('comment_registration') && !$user_ID) : ?>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if($user_ID) : ?>
				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
			<?php else : ?>
                <p class="my-4 text-xl">Feel free to leave me a reply!</p>
				<p class="flex flex-col my-4">
                    <label class="text-lg" for="author"><small>Full name <?php if($req) echo "(required)"; ?></small></label>
                    <input class="outline-none border border-teal-400 rounded bg-gray-300 py-1 px-2" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
                </p>
				<p class="flex flex-col my-4">
                <label class="text-lg" for="email"><small>Email (will not be published) <?php if($req) echo "(required)"; ?></small></label>
                <input class="outline-none border border-teal-400 rounded bg-gray-300 py-1 px-2" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
            </p>
				<p class="flex flex-col my-4">
                    <label class="text-lg" for="url"><small>Website</small></label>
                    <input class="outline-none border border-teal-400 rounded bg-gray-300 py-1 px-2" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
                </p>
			<?php endif; ?>
            <p>
                <label class="text-lg" for="comment"><small>Your comment</small></label>
                <textarea class="w-full outline-none border border-teal-400 rounded bg-gray-300 py-1 px-2" name="comment" id="comment" rows="10" tabindex="4"></textarea>
            </p>
			<p class="flex justify-center mt-4">
                <input class="bg-teal-400 py-2 px-4 text-white hover:bg-teal-500 transition duration-700 cursor-pointer rounded" name="submit" type="submit" id="submit" tabindex="5" value="Submit" />
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
			<?php do_action('comment_form', $post->ID); ?>
		</form>
	<?php endif; ?>
<?php else : ?>
	<p>The comments are closed.</p>
<?php endif; ?>

</div>
