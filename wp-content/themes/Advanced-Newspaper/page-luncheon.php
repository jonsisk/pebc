<?php /* Template Name: Luncheon */ ?>
<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/sidebar-luncheon.php'); ?>
<div id="innerMain">
	<div class="post">
		<?php if (have_posts()) : while (have_posts()) : the_post();
				the_content();
				echo '<div class="clear"></div>';
				wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink= %');
			endwhile; else : endif;
		?>
		</div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>
</div><!--End of wrapper-->
</body>
</html>