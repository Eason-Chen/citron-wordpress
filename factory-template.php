<?php

/*
Template Name: Factory Source Template
 */

get_header();
?>
	<!-- factory content start -->
	<section class="container space">
		<div class="factory_content">
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
	</section><!-- factory content end -->

<?php
	get_footer();
?>