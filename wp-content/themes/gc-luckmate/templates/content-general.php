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
<?php
	// check if the flexible content field has rows of data
	if( have_rows('page_content') ):
	
		// loop through the rows of data
		while ( have_rows('page_content') ) : the_row();
			//echo 'page_content<br>';
			
			//print_r( get_sub_field('page_content'));
			if ( get_row_layout() == 'normal_content' ):
				//echo 'normal_content<br>';
				echo '<div class="container">';
				echo '<div class="normal-content col-lg-10 col-lg-push-1">';
				//if ( get_row_layout() == 'content_item' ):
				if( have_rows('content_item') ):
					//echo 'content_item<br>';
					
					while ( have_rows('content_item') ) : the_row();
						
						//Intro text
						if( get_row_layout() == 'intro_text' ):
							$text = get_sub_field('text');
							echo '<h3 class="intro-text">'.$text.'</h3>';
						endif;
						
						// HTML content
						if( get_row_layout() == 'html_content' ):
							$text = get_sub_field('text');
							echo $text;							
						endif;
						
						//Title
						if( get_row_layout() == 'title' ):
							$text = get_sub_field('text');
							echo '<h2>'.$text.'</h2>';							
						endif;
						
						//Quote
						if( get_row_layout() == 'quote' ):
							$text = get_sub_field('text');
							echo '<div class="quote-text-wrapper">';
								echo '<div class="quote-text-content">';
									echo '<div class="row">';
										echo '<div class="col-xs-push-1 col-xs-10">'.$text.'</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						endif;
						
						//left_logo_right_text
						if( get_row_layout() == 'left_logo_right_text' ):
							$content = get_sub_field('content');
							
							if( have_rows('content') ):
							
								while ( have_rows('content') ) : the_row();
								
									$image = get_sub_field('image');
									
									$text = get_sub_field('text');
									
									echo '<div class="row logo-item">';
										echo '<div class="col-md-2 logo-container">';
											echo '<img src="'.$image['url'].'" class="img-responsive">';
										echo '</div>';
										echo '<div class="col-md-10 logo-content">';
											echo $text;
										echo '</div>';
									echo '</div>';
								
								endwhile;									
							
							endif;
							
						endif;
						
						//Two Image
						if( get_row_layout() == 'two_images' ):
						
							$images = get_sub_field('images');
							if( $images ):
								echo '<div class="row two-column-img">';
									foreach( $images as $image ):
									echo '<div class="col-md-6">';
										echo '<img src="'.$image['url'].'" class="img-responsive">';
									echo '</div>';
									endforeach;
								echo '</div>';
							endif; 		
													
						endif; 
						
						//left_text_right_image
						if( get_row_layout() == 'left_text_right_image' ):
							$image = get_sub_field('image');
							$title = get_sub_field('title');
							$text = get_sub_field('text');
							
							echo '<div class="text-img right-img">';
								echo '<img src="'.$image['url'].'" class="img-responsive">';
								echo '<h2>'.$title.'</h2>';
								echo $text;
							echo '</div>';
													
						endif; 
						
						//alternate_image_text
						if( get_row_layout() == 'alternate_image_text' ):
							if( have_rows('content') ):
								$count=0;
								while ( have_rows('content') ) : the_row();
									$image = get_sub_field('image');
									$title = get_sub_field('title');
									$text = get_sub_field('text');
									$count++;
									echo '<div class="quote-img-text-wrapper">';
										echo '<div class="quote-img-text-content">';
											echo '<div class="row">';
												if($count%2 == 0){
													echo '<div class="col-md-6 col-md-push-6"><img src="'.$image['url'].'" class="img-responsive" /></div>';													
													echo '<div class="col-md-6 col-md-pull-6">';
														echo '<h2>'.$title.'</h2>';
														echo $text;
													echo '</div>';
												}else{
													echo '<div class="col-md-6"><img src="'.$image['url'].'" class="img-responsive" /></div>';
													echo '<div class="col-md-6">';
														echo '<h2>'.$title.'</h2>';
														echo $text;
													echo '</div>';
												}
											echo '</div>';
										echo '</div>';
									echo '</div>';
								endwhile;
							endif;
						endif; 
						
					endwhile;
				endif;
				echo '</div>';
				echo '</div>';
			endif;
			
			if ( get_row_layout() == 'grey_content' ):
				
				if( have_rows('content_item') ):
					
					while ( have_rows('content_item') ) : the_row();
					
						if( get_row_layout() == 'image_at_bottom' ):
						
							$image = get_sub_field('image');
							$title = get_sub_field('title');
							$text = get_sub_field('text');
							
								
							echo '<div class="grey-background-content bottom-image">';
								echo '<div class="container">';
									echo '<div class="normal-content col-lg-10 col-lg-push-1">';
										echo '<h2>'.$title.'</h2>';
										echo $text;
										echo '<div class="img-container">';
											echo '<img src="'.$image['url'].'" class="img-responsive">';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
							
						endif; 
						
						if( get_row_layout() == 'image_at_top'):
							$image = get_sub_field('image');
							$title = get_sub_field('title');
							$text = get_sub_field('text');
							
							echo '<div class="grey-background-content top-image">';
								echo '<div class="container">';
									echo '<div class="normal-content col-lg-10 col-lg-push-1">';
										echo '<div class="img-container">';
											echo '<img src="'.$image['url'].'" class="img-responsive">';
										echo '</div>';
										echo '<h2>'.$title.'</h2>';
										echo $text;										
									echo '</div>';
								echo '</div>';
							echo '</div>';
						endif;
						
						if( get_row_layout() == '2_image_at_top'):
							
							$title = get_sub_field('title');
							$text = get_sub_field('text');

							$images = get_sub_field('images');
							

							echo '<div class="grey-background-content top-image">';
								echo '<div class="container">';
									echo '<div class="normal-content col-lg-10 col-lg-push-1">';
										
										if( $images ):
											echo '<div class="img-container row">';
												foreach( $images as $image ):
												echo '<div class="col-md-6">';
													echo '<img src="'.$image['url'].'" class="img-responsive">';
												echo '</div>';
												endforeach;
											echo '</div>';
										endif; 	
										
										echo '<h2>'.$title.'</h2>';
										echo $text;

									echo '</div>';
								echo '</div>';
							echo '</div>';
						
						endif;		
						
						//flexible_vertical_table
						if( get_row_layout() == 'flexible_vertical_table'):
							//$title = get_sub_field('title');
						
							if( have_rows('content') ):
								
							
								echo '<div class="grey-background-content table">';
									echo '<div class="container">';
										echo '<div class="normal-content col-lg-10 col-lg-push-1">';
											//echo '<h2>'.$title.'</h2>';										
											echo '<div class="table-wrapper">';
												echo '<div class="table-container">';
													$row_count = 0;
													while ( have_rows('content') ) : the_row();
														
														$title = get_sub_field('title');
														$text = get_sub_field('text');
														if($row_count == 0){
															echo '<div class="table-cell hidden-xs hidden-sm visible-md visible-lg">';
														}else{
															echo '<div class="table-cell">';
														}
																echo '<h3>'.$title.'</h3>';
																echo $text;
															echo '</div>';
														
														
														$row_count++;
													endwhile;
												echo '</div>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							endif;
						endif;
					
					endwhile;
					
				endif;
			endif;
			
		
		endwhile;
	
	endif;
?>