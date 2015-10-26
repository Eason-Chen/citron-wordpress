<?php

/*
Template Name: Water Source Template
 */

get_header();
?>
	<!-- manufactured content start -->
	<section class="container space">
		<?php
			if (have_posts()) :
			while (have_posts()) : the_post();
				the_post_thumbnail('water-thumbnail');
			endwhile;
			else :
				echo '<p>No content found</p>';
			endif;
		?>
		<div class="manufactured-content">
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
	</section><!-- manufactured content end -->

<?php
	get_footer();
?>