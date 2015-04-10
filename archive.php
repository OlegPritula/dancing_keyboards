<?php get_header(); ?>
<!-- container start -->
	<div id="container" class="clearfix">
		<?php get_sidebars(); ?>
<!-- content start -->
		<div id="content" class="clearfix">
		<?php if(have_posts()) : ?>
                <div class="post_path"><?php _e('You are here:', 'dtheme'); ?><a href="<?php bloginfo('url'); ?>"><?php _e('Home', 'dtheme'); ?></a> &gt;<?php
		// If this is a category archive
		if (is_category()) {
			printf( __('Archive for the &#8216;<span>%1$s</span>&#8217; Category', 'dtheme'), single_cat_title('', false) );
		// If this is a tag archive
		} elseif (is_tag()) {
			printf( __('Posts Tagged &#8216;<span>%1$s</span>&#8217;', 'dtheme'), single_tag_title('', false) );
		// If this is a daily archive
		} elseif (is_day()) {
			printf( __('Archive for <span>%1$s</span>', 'dtheme'), get_the_time(__('F jS, Y', 'Cincinnati-themes')) );
		// If this is a monthly archive
		} elseif (is_month()) {
			printf( __('Archive for <span>%1$s</span>', 'dtheme'), get_the_time(__('F, Y', 'Cincinnati-themes')) );
		// If this is a yearly archive
		} elseif (is_year()) {
			printf( __('Archive for <span>%1$s</span>', 'dtheme'), get_the_time(__('Y', 'Cincinnati-themes')) );
		// If this is an author archive
		} elseif (is_author()) {
			_e('Author Archive', 'dtheme');
		// If this is a paged archive
		} elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
			_e('Blog Archives', 'dtheme');
		}
		?></div>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post">
				<div class="post_header_bg"><h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2></div>
                <div class="postmetadata"><?php _e('Posted in:', 'dtheme'); ?> <?php the_category(', ') ?> | <?php the_time('F jS, Y') ?></div>

                <div class="entry"><?php the_excerpt(); ?></div>
				<div class="endline"></div>
				<?php the_tags('<p class="tags"><strong>Tags:</strong> ', ', ', '</p>'); ?>
				<div class="bookmark"><?php include(TEMPLATEPATH . '/bookmark.php'); ?></div>
                <div class="read_comments"><a href="<?php comments_link(); ?>"><span>(<?php comments_number(__('No Responses', 'dtheme'), __('One Response', 'dtheme'), __('% Responses', 'dtheme')); ?>)</span></a></div>
                <?php if ( $user_ID ) : ?>
					<div class="edit_post"><?php edit_post_link(__('Edit this post', 'dtheme')); ?> (<?php _e('Logged in as', 'dtheme'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>)</div>
				<?php endif; ?>
			</div>
			<?php endwhile; ?>
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
					<div class="wp-pagenavi">
					<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'dtheme')) ?></div>
					<div class="alignright"><<?php previous_posts_link(__('Newer Entries &raquo;', 'dtheme')) ?></div>
					</div>
					<?php } ?>
		<?php else : ?>
		<div class="notfound"><p><?php _e('Sorry, no posts matched your criteria.', 'dtheme'); ?></p><p><?php _e('Try searching again... ', 'dtheme'); ?></p></div>
		<?php endif; ?>
		</div>
<!-- content end -->
	</div>
<!-- container end -->
<?php get_footer(); ?>