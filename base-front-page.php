<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

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
	  	    <h1>We build sexy Wordpress sites that are <span class="highlight">damn fast</span>.</h1>
	  	    <h3>Either we'll do it for you, or we'll teach you how.</h2>
	  	  <button href="#" type="button" type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">Custom themes<i class="glyphicon glyphicon-chevron-down"></i></button>
  		</div>
  	</div> <!-- /Video -->
  </section>
  
  <hr class="half-rule">
  	<h4 class="pick-site">Pick one:</h4>
  
  <section class="products">
	  <div class="row">
		  <div class="col-sm-4 col-xs-12 text-center">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/G-Strap.png" class="img-responsive" alt="G-Strap" width="313" height="178" />
			  <h3>G-String</h3>
			  <p>G-String is our bad bitch. Beginners will love all of her widgets because they make her so easy to manipulate. You won't need to use much PHP, and most of the customization will take place in her visual editor. Her only downfall is that she's <a href="http://jackalope.io/g-string/" alt="g-string theme">harder to backup.</a></p>
			  <a href="<?php echo esc_url(home_url('/')); ?>g-string/" class="btn btn-lg btn-primary">Demo<i class="glyphicon glyphicon-chevron-right"></i></a>
			  <p class="post-btn">Starting @ $199</p>
		  </div>
		  <div class="col-sm-4 col-xs-12 text-center">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Nudist.png" class="img-responsive" alt="Nudist" width="313" height="178" />
			  <h3>Nudist</h3>
			  <p>Nudist doesn't fuck around. When he's first installed, he looks completely naked. But don't underestimate him. Once he's all greased up he transforms into the most powerful Wordpress theme on earth. Nudist is beginner friendly, but not for the faint of heart.</p>
			  <a href="<?php echo esc_url(home_url('/')); ?>nudist/" class="btn btn-lg btn-primary">Demo<i class="glyphicon glyphicon-chevron-right"></i></a>
			  <p class="post-btn">Starting @ $249</p>
		  </div>
		  <div class="col-sm-4 col-xs-12 text-center">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Custom.png" class="img-responsive" alt="Custom" width="313" height="178" />
			  <h3>Custom</h3>
			  <p>Don't have the time to learn Wordpress development and web design? Our agency will take care of you over at <a href="http://jackalopeMedia.com/" alt="Jackalope Media">JackalopeMedia.com</a>. We build long term relationships with badass business people so we can align our expectations and thrive.</p>
			  <button type="submit" class="btn btn-lg btn-primary">Demo<i class="glyphicon glyphicon-chevron-right"></i></button>
			  <br><a class="view-examples" href="#">View examples</a>
		  </div>
	  </div>
  </section>

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
