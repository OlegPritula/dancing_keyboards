<?php get_header(); ?>
<!-- container start -->
	<div id="container" class="clearfix">
		<?php get_sidebars(); ?>
<!-- content start -->
		<div id="content" class="clearfix">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post">
				<div class="post_header_bg"><h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1></div>
                <div class="entry"><?php the_content(); ?></div>
				<div class="endline"></div>
				<?php wp_link_pages(array('before' => '<p><strong>'.__("Pages:", "dtheme").'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                <?php if ( $user_ID ) : ?>
					<div class="edit_post"><?php edit_post_link(__('Edit this post', 'dtheme')); ?> (<?php _e('Logged in as', 'dtheme'); ?>  <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>)</div>
				<?php endif; ?>
				<div class="bookmark"><?php include(TEMPLATEPATH . '/bookmark.php'); ?></div>
			</div>
			<?php endwhile; ?>
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
					<div class="wp-pagenavi">
					<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'dtheme')) ?></div>
					<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'dtheme')) ?></div>
					</div>
					<?php } ?>
		<?php else : ?>
		<div class="notfound"><p><?php _e('Sorry, no posts matched your criteria.', 'dtheme'); ?></p><p><?php _e('Try searching again... ', 'dtheme'); ?></p></div>
		<?php endif; ?>
		</div>
<!-- content end -->
	</div>
    <div class="end_line"></div>
<!-- container end -->
<?php get_footer(); ?>