<div class="container-fluid">
	<div class="row">
		<div class="page-hero">
			
			
			<?php
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
				
			?>
			
			<img src="<?=esc_url($featured_img_url)?>" class="img-responsive">
		</div>
	</div>
</div>
<?php

	// check if the flexible content field has rows of data
	if( have_rows('page_content') ):
	
		// loop through the rows of data
		while ( have_rows('page_content') ) : the_row();
	
			echo '<div class="container">';
			
				echo '<div class="normal-content col-lg-10 col-lg-push-1">';
	
					if( have_rows('content_item') ):
			
						// loop through the rows of data
						while ( have_rows('content_item') ) : the_row();
								// Intro text
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
													echo '<img src="'.$image.'" class="img-responsive">';
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
									
									$size = 'full'; // (thumbnail, medium, large, full or custom size)									
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
								
								//alternate_image_text
								if( get_row_layout() == 'alternate_image_text' ):
									
									//$content = get_sub_field('content');
									
									
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
															echo '<div class="col-md-6">';
																echo '<h2>'.$title.'</h2>';
																echo $text;
															echo '</div>';
															echo '<div class="col-md-6"><img src="'.$image['url'].'" class="img-responsive" /></div>';
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
	
		endwhile;
	
	else :
	
		// no layouts found
	
	endif;


?>
<!--<div class="container">
	<div class="normal-content col-lg-10 col-lg-push-1">
		<h3 class="intro-text">GC Luckmate Trading Ltd entered the fishmeal market in 1983; with over 35 years of trade experience, we have built a strong reliable service base for the unique market in Asia. We are the market leader of fishmeal exports to China and aim to maintain our position for generations to come.</h3>
		<ul>
			<li>Leading buyer of Peruvian fishmeal</li>
			<li>Largest market share of Peruvian fishmeal exports to China</li>
			<li>Committed to socially responsible sourcing and disciplined sales execution </li>
			<li>Focused cost management </li>
			<li>Committed to high standards and follow through on deliveries</li>
			<li>Economies of scale offer clients the best market price</li>
		</ul>
	</div>
</div>-->
<div class="grey-background-content bottom-image">
	<div class="container">
		<div class="normal-content col-lg-10 col-lg-push-1">
			<h2>COMPANY PROFILE</h2>
			<p>GC Luckmate Trading Ltd is a subsidiary of Fulcrest Ltd.</p>
			<p>Renowned Asia-wide, we are committed to socially responsible sourcing and disciplined timely sales execution. Our extensive expertise brings a focused approach to cost management and strict adherence to quality control to deliver value to all our stakeholders. </p>
			<p>Our head office is located in Hong Kong and we have branch offices in Shanghai and Guangzhou. In each office, we have experienced team members to respond to all client questions and requests. Our logistics team and finance team work diligently and efficiently to ensure that all orders and payments are timely. Our goal is to deliver a seamless experience for all our clients. </p>
			<div class="img-container">
				<img src="<?=get_stylesheet_directory_uri()?>/assets/img/about/img-about-1.jpg" class="img-responsive">
			</div>
		</div>
	</div>
</div>
<!--<div class="container">
	<div class="normal-content col-lg-10 col-lg-push-1">
		<h2>HISTORY</h2>
		<p>GC Luckmate Trading Ltd started with the Luckmate Group in 1983 and at that time entered the Peruvian fishmeal market.  Fast forward to the present day, we have built a long term amicable relationship with South America’s largest fishmeal suppliers and because of this close communication and relationship we are able to ensure regular deliveries despite occasional sanctions.</p>
		<div class="quote-text-wrapper">
			<div class="quote-text-content">
				<div class="row">
					<div class="col-xs-push-1 col-xs-10">Through open communication and experienced marketing teams in major ports in China, we have held the largest market share of Peruvian fishmeal exported into China for the last decade.</div>
				</div>
			</div>
		</div>
		<p>Through open communication and experienced marketing teams in major ports in China, we have held the largest market share of Peruvian fishmeal exported into China for the last decade.  </p>
	</div>
</div>-->
<!--<div class="container">
	<div class="normal-content col-lg-10 col-lg-push-1">
		<h2>MEMBERSHIP</h2>
		<div class="row logo-item">
			<div class="col-md-2 logo-container"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/about/img-about-logo-gafta.png" class="img-responsive"></div>
			<div class="col-md-10 logo-content"><p>We are a member of GAFTA (The Grain and Feed Trade Association) as a trading principal in agricultural commodities and general produce.  GAFTA is an international trade association promoting international trade in agricultural commodities, spices and general produce.  GAFTA aims to protect members’ interest through standard contracts and handling arbitration for international dispute resolution.</p></div>
		</div>
		<div class="row logo-item">
			<div class="col-md-2 logo-container"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/about/img-about-logo-iffo.png" class="img-responsive"></div>
			<div class="col-md-10 logo-content"><p>We are a member of IFFO The Marine Ingredients Organisation as a premium non-producer; IFFO is an international trade organization for the fishmeal and fish oil industry.  GC Luckmate Trading Ltd regularly attends the annual IFFO meetings to connect with clients and suppliers.  As a member of IFFO, we are in full compliance with its anti-trust and competition regulations.</p></div>
		</div>
	</div>
</div>-->
<div class="container">
	<div class="normal-content col-lg-10 col-lg-push-1">
		<div class="row two-column-img">
			<div class="col-md-6">
				<img src="<?=get_stylesheet_directory_uri()?>/assets/img/about/img-about-2.jpg" class="img-responsive">
			</div>
			<div class="col-md-6">
				<img src="<?=get_stylesheet_directory_uri()?>/assets/img/about/img-about-3.jpg" class="img-responsive">
			</div>
		</div>
	</div>
</div>