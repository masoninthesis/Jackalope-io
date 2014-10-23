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
      <a href="//fast.wistia.net/embed/iframe/va8o82dilx?popover=true" class="wistia-popover[height=360,playerColor=ffffff,width=640]"><img src="https://embed-ssl.wistia.com/deliveries/b1d475a810d5c1b174c980e1e3ee033985c16c7a.jpg?image_play_button=true&image_play_button_color=ffffffe0&image_crop_resized=150x84" alt="" /></a>
      <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
  	    <h1>We build sexy Wordpress sites that are damn fast.</h1>
  	  <button href="#" type="button" type="button" class="btn btn-default hero-btn" data-toggle="modal" data-target="#myModal">Subscribe</button>
  	</div> <!-- /Video -->
  </section>
  
  
  <section>
  	<div class="wrap container">
	  	<div class="row">
		  	<div class="col-sm-4 col-xs-12">
			  	<h1>yo</h1>
		  	</div>
		  	<div class="col-sm-4 col-xs-12">
			  	<h1>yo</h1>
		  	</div>
		  	<div class="col-sm-4 col-xs-12">
			  	<h1>yo</h1>
		  	</div>
	  	</div>
  	</div>
  </section>

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
