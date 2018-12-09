<div class="container-fluid">
	<div class="row hero-container">
		<div class="hero-slider">
			<?php
			$hero_sliders = get_field('hero_slider');
			
			
			//$hero_sliders = get_field('relationship_field_name');

			if( $hero_sliders ): ?>
				<?php foreach( $hero_sliders as $hero_slider):
					//remove_filter('acf_the_content', 'wpautop');
					$title = get_field('title', $hero_slider);
					//add_filter('acf_the_content', 'wpautop');
					
					$text = get_field('text', $hero_slider);
					$featured_img_url = get_the_post_thumbnail_url($hero_slider); 
					$mobile_slide_image = get_field('mobile_slide_image', $hero_slider);
					
					echo '<div class="hero-slide-item">';
						echo '<div class="hero-image" style="background-image:url('.$mobile_slide_image['url'].');">';
							echo '<img src="'.$featured_img_url.'" class="img-responsive hidden-xs hidden-sm visible-md visible-lg" />';
						echo '</div>';
						echo '<div class="hero-content-wrapper">';
							echo '<div class="hero-content">';
								echo '<h2>'.$title.'</h2>';
								echo $text;
							echo '</div>';
						echo '</div>';
					echo '</div>';
				endforeach; 
			endif; ?>

		
			<!--<div class="hero-slide-item">
				<div class="hero-image" style="background-image:url(<?=get_stylesheet_directory_uri()?>/assets/img/home/SLIDE1.jpg);">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/home/SLIDE1.jpg" class="img-responsive hidden-xs hidden-sm visible-md visible-lg" />
				</div>
				<div class="hero-content-wrapper">
					<div class="hero-content">
						<h2>Trusted global<br />leading distributor<br />of high quality fishmeal</h2>
						<p>With over 35 years of trade experience, GC Luckmate Trading Ltd holds a strong presence in the Asian market.<br /><a href="#">Find out more</a></p>
					</div>
				</div>
			</div>
			<div class="hero-slide-item">
				<div class="hero-image" style="background-image:url(<?=get_stylesheet_directory_uri()?>/assets/img/home/SLIDE2.jpg);">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/home/SLIDE2.jpg" class="img-responsive hidden-xs hidden-sm visible-md visible-lg" />
				</div>
				<div class="hero-content-wrapper">
					<div class="hero-content">
						<h2>Trusted global<br />leading distributor<br />of high quality fishmeal</h2>
						<p>With over 35 years of trade experience, GC Luckmate Trading Ltd holds a strong presence in the Asian market.<br /><a href="#">Find out more</a></p>
					</div>
				</div>
			</div>
			<div class="hero-slide-item">
				<div class="hero-image" style="background-image:url(<?=get_stylesheet_directory_uri()?>/assets/img/home/SLIDE3.jpg);">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/home/SLIDE3.jpg" class="img-responsive hidden-xs hidden-sm visible-md visible-lg" />
				</div>
				<div class="hero-content-wrapper">
					<div class="hero-content">
						<h2>Trusted global<br />leading distributor<br />of high quality fishmeal</h2>
						<p>With over 35 years of trade experience, GC Luckmate Trading Ltd holds a strong presence in the Asian market.<br /><a href="#">Find out more</a></p>
					</div>
				</div>
			</div>
			<div class="hero-slide-item">
				<div class="hero-image" style="background-image:url(<?=get_stylesheet_directory_uri()?>/assets/img/home/SLIDE4.jpg);">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/home/SLIDE4.jpg" class="img-responsive hidden-xs hidden-sm visible-md visible-lg" />
				</div>
				<div class="hero-content-wrapper">
					<div class="hero-content">
						<h2>Trusted global<br />leading distributor<br />of high quality fishmeal</h2>
						<p>With over 35 years of trade experience, GC Luckmate Trading Ltd holds a strong presence in the Asian market.<br /><a href="#">Find out more</a></p>
					</div>
				</div>
			</div>
			<div class="hero-slide-item">
				<div class="hero-image" style="background-image:url(<?=get_stylesheet_directory_uri()?>/assets/img/home/SLIDE5.jpg);">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/home/SLIDE5.jpg" class="img-responsive hidden-xs hidden-sm visible-md visible-lg" />
				</div>
				<div class="hero-content-wrapper">
					<div class="hero-content">
						<h2>Trusted global<br />leading distributor<br />of high quality fishmeal</h2>
						<p>With over 35 years of trade experience, GC Luckmate Trading Ltd holds a strong presence in the Asian market.<br /><a href="#">Find out more</a></p>
					</div>
				</div>
			</div>-->
		</div>
		<ul class="slider-control">
			<li class="prev"><a href="javascript:;"></a></li>
			<li class="next"><a href="javascript:;"></a></li>
		</ul>
	</div>
</div>
<div class="container">
	<div class="col-lg-12 home-quote-wrapper">
		<div class="quote-text-wrapper">
			<div class="quote-text-content">
				<div class="row">
					<?php $quote_text = get_field('quote_text'); ?>
					<div class="col-xs-push-1 col-xs-10"><?=$quote_text;?></div>
				</div>
			</div>
		</div>
		
		<div class="row home-three-col-img">
			<?php
				if( have_rows('home_three_item') ):

					// loop through the rows of data
					while ( have_rows('home_three_item') ) : the_row();
				
						// display a sub field value
						$image = get_sub_field('image');
						$title = get_sub_field('title');
						$content = get_sub_field('content');
						
						echo '<div class="image-text-item col-md-4">';
							echo '<div class="image-container">';
								echo '<img src="'.$image.'" class="img-responsive" />';
							echo '</div>';
							echo '<div class="text-container">';
								echo '<h3>'.$title.'</h3>';
								echo $content;
							echo '</div>';
						echo '</div>';
				
					endwhile;
				
				endif;
			?>
		</div>
	</div>
</div>