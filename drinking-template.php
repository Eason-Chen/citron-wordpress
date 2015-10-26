<?php

/*
Template Name: Drinking Method Template
 */

get_header();
?>
	<!-- drinking content start -->
	<section class="container space">
		<div class="drinking_conetent">
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
	</section><!-- drinking content end -->

	<!-- drinking method img start -->
	<section class="drinking_method"></section>
	<!-- drinking method img end -->

<?php
	get_footer();
?>