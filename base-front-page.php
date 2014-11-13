<?php get_template_part('templates/head'); ?>
<body data-spy="scroll" <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

   <section class="hero">
  	<div class="wrap container">
  		<div class="col-xs-12 text-center">
	      <a href="//fast.wistia.net/embed/iframe/va8o82dilx?popover=true" class="wistia-popover[height=360,playerColor=ffffff,width=640]"><img src="https://embed-ssl.wistia.com/deliveries/b1d475a810d5c1b174c980e1e3ee033985c16c7a.jpg?image_play_button=true&image_play_button_color=ffffffe0&image_crop_resized=150x84" alt="" /></a>
	      <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
	  	    <h1>Learn how to build Wordpress sites that are <span class="highlight">damn fast</span>.</h1>
	  	    <h3>Or you can skip the work and just buy one.</h2>
	  	  <a href="#products" rel='m_PageScroll2id' type="button" type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">Custom themes<i class="glyphicon glyphicon-chevron-down"></i></a>
  		</div>
  	</div> <!-- /Video -->
  </section>

  <hr class="half-rule">
  	<h4 id="products" class="pick-site">Pick one:</h4>

  <section class="products">
	  <div class="row">
		  <div class="col-sm-4 col-xs-12 text-center">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/G-Strap.png" class="img-responsive" alt="G-Strap" width="313" height="178" />
			  <h3>G-Strap</h3>
			  <p>iTunes Apple Store Apple Pay ever better HDR camera. Camera performance Mavericks best iBooks. Upshot personality Spotlight $799 design did LTE. Selfie touchscreen 3X faster $599 design iPhone teraflops. Screen touchscreen HealthKit $249 hi-def. iCloud Apple Store teraflops Jony. Upshot thunderbolt dark mode.</p>
			  <a href="<?php echo esc_url(home_url('/')); ?>g-strap/" class="btn btn-lg btn-primary">Live demo<i class="glyphicon glyphicon-chevron-right"></i></a>
			  <p class="post-btn">Starting @ $199</p>
		  </div>
		  <div class="col-sm-4 col-xs-12 text-center">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Nudist.png" class="img-responsive" alt="Nudist" width="313" height="178" />
			  <h3>Nudist</h3>
			  <p>Slo-mo translucent Downloads Jony design 1080p. Hi-def application until now $199 pixels upshot. Finder performance one touch love design LTE camera A8X. Slo-mo power users Apple Pay iCal better upshot Mavericks. Selfie translucent brilliant Siri upshot. Better Apple Store one touch iMac pixels 5mm change HDR.</p>
			  <a href="<?php echo esc_url(home_url('/')); ?>nudist/" class="btn btn-lg btn-primary">Live demo<i class="glyphicon glyphicon-chevron-right"></i></a>
			  <p class="post-btn">Starting @ $249</p>
		  </div>
		  <div class="col-sm-4 col-xs-12 text-center">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Custom.png" class="img-responsive" alt="Custom" width="313" height="178" />
			  <h3>Custom</h3>
			  <p>Change fingerprint 3X faster $699 iBooks. Finder remote lock Mavericks thin retina Air. Slo-mo thunderbolt iPhone 6+ thin Finder upshot until now. Upshot Apple Store Spotlight $499 selfie AMD hi-def 240 fps. iTunes power users. Upshot Smart Cover App Store love Finder HDR LTE. Unlock thunderbolt iPhone Pages 3X.</p>
			  <button type="submit" class="btn btn-lg btn-primary">Services<i class="glyphicon glyphicon-chevron-right"></i></button>
			  <br><a class="view-examples" href="#">View examples</a>
		  </div>
	  </div>
  </section>

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
