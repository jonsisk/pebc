<?php /* Template Name: Education Events */ ?>
<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/sidebar-educationevents.php'); ?>
<div id="innerMain">
	<div class="post">
		<?php if (have_posts()) : while (have_posts()) : the_post();
				the_content();
				echo '<div class="clear"></div>';
				wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink= %');
			endwhile; else : endif;
		?>
		<div class="otherevents">
			<?php /* Set category variable for other events loop */
			if (is_page('literacy')) {$eventcategory='ee-literacy';}
				elseif (is_page('coaching')) {$eventcategory='ee-coaching';}
				elseif (is_page('stem')) {$eventcategory='ee-stem';}
				elseif (is_page('lab-classroom-visits')) {$eventcategory='ee-lab';}
				elseif (is_page('leadership')) {$eventcategory='ee-leadership';}
			if (isset($eventcategory)) { 
				echo '<h3>Upcoming events</h3>'; 
				$otherevents = new wp_query( "category_name=$eventcategory");
				while ($otherevents->have_posts()) : $otherevents->the_post();?>
				<div class="plcat">
					<a href="<?php the_permalink();?>">
						<img src="<?php bloginfo('template_url');?>/images/<?php echo $eventcategory?>.png" />
						<h4><?php the_title();?></h4>
					</a>
					<p><?php echo get_post_meta($post->ID, 'date', true); ?></p>
					<?php the_excerpt();?>
					<p><a href="<?php the_permalink();?>">More info &raquo;</a></p>
					<div class="clear"></div>
				</div>
				<?php endwhile;
			}
			?>
		</div>
		<h4 style="text-align: center;">Bring PEBC's Institutes and Seminars to your school!</h4>
		<p style="text-align: center;"><a href="http://www.pebc.org/education-events/traveling-institutes-3/">Learn more about PEBC's Traveling Institutes</a></p>
		</div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>
</div><!--End of wrapper-->
</body>
</html>