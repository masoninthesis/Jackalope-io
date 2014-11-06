<?php
/*
Template Name: Course Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

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

<section>
  <div id="body" class="wrap container">
    <div id="sidebar" class="col-sm-3">
      <h5>hi there</h5>
    </div>
    <div class="col-sm-9">
      <?php get_template_part('templates/content', 'page'); ?>
    </div>
  </div>
</section>

<?php endwhile; ?>
