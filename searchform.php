<form method="get" action="<?php bloginfo('url'); ?>">
					<input name="s" type="text" class="searchtext" id="s" value="<?php _e('Search', 'dtheme'); ?>" onblur="if (this.value == '') {this.value = '<?php _e('Search', 'dtheme'); ?>';}" onfocus="if (this.value == '<?php _e('Search', 'dtheme'); ?>') {this.value = '';}" />
					<input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" id="searchsubmit" alt="Search" value="" />
				</form>