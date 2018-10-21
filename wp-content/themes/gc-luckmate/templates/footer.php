<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php //dynamic_sidebar('sidebar-footer'); ?>
	<div class="col-md-8 col-md-push-2">
		<div class="row">
			<div class="col-md-4">
				<h5>CONTACT</h5>
				<p>Unit D, 26/F, United Centre,</p>
				<p>95 Queensway, Hong Kong</p>
				<p>Tel:(852) 2866 8806</p>
				<p>Email: <a href="mailto:trading@gcltd.com.hk">trading@gcltd.com.hk</a></p>
			</div>
			<div class="col-md-4">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
			</div>
			<div class="col-md-4">
				<a href="#" class="logo_iffo"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/logo_iffo.png" class="img-responsive" /></a>
				<a href="#" class="logo_grafta"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/logo_gafta.png" class="img-responsive" /></a>
			</div>
		</div>
		<div class="row copyright-container">
			<span>&copy; 2018 GC Luckmate Trading Ltd. All rights reserved.</span>
			<span><a href="#">Privacy Policy</a></span>
			<span><a href="#">Terms of Use</a></span>
		</div>
	</div>
  </div>
</footer>

<?php wp_footer(); ?>