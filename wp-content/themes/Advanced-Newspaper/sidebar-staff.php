<div id="wideSidebar">
<div id=SideNavMenu>
<?php wp_nav_menu( array('depth' => '1', 'theme_location' => 'Staff_Cat_Nav', 'container' => false)); ?>
</div>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('staffwidget') ) : ?>				
	<?php endif; ?>	
	<?php
		if(file_exists(TEMPLATEPATH . '/ads/innerpage_350x250/'.$currentcat.'.php') && (is_single() || is_category())) {
			include_once(TEMPLATEPATH . '/ads/innerpage_350x250/'.$currentcat.'.php');
		}
		else {
			include_once(TEMPLATEPATH . '/ads/innerpage_350x250.php');
		}
	?>
</div>
