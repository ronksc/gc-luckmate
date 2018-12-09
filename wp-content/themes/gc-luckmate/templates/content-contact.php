<div class="container-fluid">
	<div class="row">
		<div class="page-hero">
			<?php
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
				$mobile_image = get_field('mobile_image', get_the_ID());
			?>
			
			<img src="<?=esc_url($featured_img_url)?>" class="img-responsive hidden-xs hidden-sm visible-md visible-lg">
			<img src="<?=esc_url($mobile_image['url'])?>" class="img-responsive visible-xs visible-sm hidden-md hidden-lg">
		</div>
	</div>
</div>
<div class="container">
	<div class="normal-content col-lg-10 col-lg-push-1">
		<div class="row two-column-img">
			<div class="col-md-7 col-md-push-5">
				<?php
					$google_map_embed = get_field('google_map_embed');
					
					echo $google_map_embed;
				?>
			</div>
			
			<div class="col-md-5 col-md-pull-7 contact-content-container">
				<?php					
					wp_reset_query(); // necessary to reset query
					while ( have_posts() ) : the_post();
						the_content();
					endwhile; // End of the loop.
				?>
			</div>
			
		</div>
	</div>
</div>