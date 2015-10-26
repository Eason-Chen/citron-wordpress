<?php
	get_header();
?>
	<!-- home content starat -->
	<section class="home_wrapper">
		<div class="container">
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
	</section><!-- home content end -->

<?php
	get_footer();
?>