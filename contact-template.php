<?php

/*
Template Name: Contact Template
 */

get_header();
?>
	<!-- contact content start -->
	<section class="container space clearfix">
		<div class="contact_conetent">
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
		<div class="contact_form">
			<?php
			$contactPost = new WP_Query('cat=1&posts_per_page=1');

			if ($contactPost->have_posts()) :
				while ($contactPost->have_posts()) : $contactPost->the_post();
					the_content();
				endwhile;

				else :
					echo '<p>No content found</p>';
				endif;

				wp_reset_postdata();
			?>
		</div>
	</section><!-- contact content end -->
<?php
	get_footer();
?>