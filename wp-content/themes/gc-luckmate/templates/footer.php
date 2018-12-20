<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php //dynamic_sidebar('sidebar-footer'); ?>
	<div class="col-md-10 col-lg-7 col-center">
		<div class="row">
			<div class="col-md-5">
				<?php
					$frontpage_id = get_option( 'page_on_front' );
					
					$footer_contact = get_field('footer_contact', $frontpage_id);
					
					echo $footer_contact;
				?>
			</div>
			<div class="col-md-4">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
			</div>
			<div class="col-md-3">
				<a href="http://www.iffo.net/" class="logo_iffo"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/logo_iffo.png" class="img-responsive" /></a>
				<a href="https://www.gafta.com/" class="logo_grafta"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/logo_gafta.png" class="img-responsive" /></a>
			</div>
		</div>
		<div class="row copyright-container">
			<span>&copy; 2018 GC Luckmate Trading Ltd. <br />All rights reserved.</span>
		</div>
	</div>
  </div>
</footer>

<?php wp_footer(); ?>