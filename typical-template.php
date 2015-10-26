<?php

/*
Template Name: Typical Source Template
 */

get_header();
?>
	<!-- typical content start -->
	<section class="container space clearfix">
		<div class="typical_content">
			<?php
				if (have_posts()) :
				while (have_posts()) : the_post();
					the_content();
				endwhile;
				else :
					echo '<p>No content found</p>';
				endif;
			?>
		</div>
		<div class="typical_img">
			<?php
				if (have_posts()) :
				while (have_posts()) : the_post();
					the_post_thumbnail('typical-thumbnail');
				endwhile;
				else :
					echo '<p>No content found</p>';
				endif;
			?>
		</div>
	</section><!-- typical content end -->

<?php
	get_footer();
?>