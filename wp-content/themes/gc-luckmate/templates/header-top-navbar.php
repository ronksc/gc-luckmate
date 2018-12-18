<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top-bar"></span>
		<span class="icon-bar middle-bar"></span>
		<span class="icon-bar bottom-bar"></span>
      </button>
      <a href="javascript:;" class="menu-label hidden-xs hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target=".navbar-collapse">menu</a>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/logo.png" class="img-responsive"></a>
    </div>
	<div class="nav-container hidden-xs hidden-sm visible-md visible-lg">
		<nav class="collapse navbar-collapse main-menu" role="navigation">
			<div class="language-container">
				<ul>
					<li>
						<?php
							switch(ICL_LANGUAGE_CODE){
								case 'en':
									echo 'EN';
									break;
								case 'zh-hans':
									echo '簡';
									break;
								case 'zh-hant':
									echo '繁';
									break;	
							}
						?>
						<ul>
							<?php if ( function_exists('icl_object_id') ) {
								
								
								$lang_arr = icl_get_languages('skip_missing=1&orderby=id&order=desc');
								
								if(sizeof($lang_arr) > 1){
									foreach( $lang_arr as $lang ){
										if(ICL_LANGUAGE_CODE == $lang['code']){
											$lang_class = 'active';
										}else{
											$lang_class = '';
										}
									
										echo '<li><a class="'.$lang_class.'" href="'.$lang['url'].'" data-original-href="'.strtok($lang['url'], '?').'">'.$lang['native_name'].'</a></li>';
									}
								}
								
							}?>
						</ul>
					</li>
				</ul>
			</div>
			
			<?php
				//Main menu
				if (has_nav_menu('primary_navigation')) :
				  wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'depth' => 0));
				endif;
			?>
		</nav>
	</div>
  </div>
	<div class="nav-container visible-xs visible-sm hidden-md hidden-lg">
		<nav class="collapse navbar-collapse main-menu-mobile" role="navigation">
			<div class="mobile-menu-wrapper">
				<?php
					//Main menu
					if (has_nav_menu('primary_navigation')) :
					  wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav mobile-menu', 'depth' => 0));
					endif;
				?>
				<div class="language-container-mobile">
					<ul>
						<li>
							<?php
								switch(ICL_LANGUAGE_CODE){
									case 'en':
										echo '<span class="mobile_lang_toggle">EN</span>';
										break;
									case 'zh-hans':
										echo '<span class="mobile_lang_toggle">簡</span>';
										break;
									case 'zh-hant':
										echo '<span class="mobile_lang_toggle">繁</span>';
										break;	
								}
							?>
							<ul class="mobile_lang">
								<!--<li>繁</li>
								<li>簡</li>-->
								
								<?php if ( function_exists('icl_object_id') ) {
									
									$lang_class = '';
									$lang_arr = icl_get_languages('skip_missing=1&orderby=id&order=desc');
									
									if(sizeof($lang_arr) > 1){
										foreach( $lang_arr as $lang ){
											if(ICL_LANGUAGE_CODE == $lang['code']){
												$lang_class = 'active';
											}else{
												$lang_class = '';
											}
											echo '<li><a class="'.$lang_class.'" href="'.$lang['url'].'" data-original-href="'.strtok($lang['url'], '?').'">'.$lang['native_name'].'</a></li>';
										}
									}
									
								}?>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
  </div>
  
</header>
